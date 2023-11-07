<?php

namespace App\Http\Controllers\Frontend;

use App\Events\Message;
use App\Http\Controllers\Controller;
use App\Models\Chat;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;


class ChatController extends Controller
{
    function index() : View {
        $senderId = auth()->user()->id;

        $receivers = Chat::with(['receiverProfile', 'listingProfile'])->select(['receiver_id', 'listing_id'])
            ->where('sender_id', $senderId)
            ->where('receiver_id', '!=', $senderId)
            ->groupBy('receiver_id', 'listing_id')
            ->get();


        return view('frontend.dashboard.message.index', compact('receivers'));
    }

    function sendMessage(Request $request) {
        $request->validate([
            'receiver_id' => ['required', 'integer'],
            'listing_id' => ['required', 'integer'],
            'message' => ['required', 'max:1000', 'string']
        ]);

        $chat = new Chat();
        $chat->listing_id = $request->listing_id;
        $chat->sender_id = auth()->user()->id;
        $chat->receiver_id = $request->receiver_id;
        $chat->message = $request->message;
        $chat->save();

        broadcast(new Message($chat->message, $chat->sender_id, $chat->receiver_id));

        return response(['status' => 'success', 'message' => 'Message sent successfully!']);

    }

    function getMessages(Request $request) {
        $senderId = auth()->user()->id;
        $receiverId = $request->receiver_id;
        $listingId = $request->listing_id;

        $messages = Chat::with('senderProfile')->whereIn('receiver_id', [$senderId, $receiverId])
            ->whereIn('sender_id', [$senderId, $receiverId])
            ->where('listing_id', $listingId)
            ->orderBy('created_at', 'asc')
            ->get();

        return response($messages);
    }
}
