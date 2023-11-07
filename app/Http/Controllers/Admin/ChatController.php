<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChatController extends Controller
{
    function index() : View {
        $receiverId = auth()->user()->id;

        $senders = Chat::with(['senderProfile', 'listingProfile'])->select(['sender_id', 'listing_id'])
            ->where('receiver_id', $receiverId)
            ->where('sender_id', '!=', $receiverId)
            ->groupBy('sender_id', 'listing_id')
            ->get();


        return view('admin.message.index', compact('senders'));
    }

    function getMessages(Request $request) {

        $receiverId = auth()->user()->id;
        $senderId = $request->sender_id;
        $listingId = $request->listing_id;

        $messages = Chat::with('senderProfile')->whereIn('receiver_id', [$senderId, $receiverId])
            ->whereIn('sender_id', [$senderId, $receiverId])
            ->where('listing_id', $listingId)
            ->orderBy('created_at', 'asc')
            ->get();

        return response($messages);
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

        return response(['status' => 'success', 'message' => 'Message sent successfully!']);

    }

}
