<?php

namespace App\Http\Controllers\Admin;

use App\Events\Message;
use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChatController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:message index']);
    }

    function index() : View {
        $receiverId = auth()->user()->id;

        $senders = Chat::with(['senderProfile', 'listingProfile'])->select(['sender_id', 'listing_id'])
            ->where('receiver_id', $receiverId)
            ->where('sender_id', '!=', $receiverId)
            ->selectRaw('MAX(created_at) as latest_message_send')
            ->groupBy('sender_id', 'listing_id')
            ->orderByDesc('latest_message_send')
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
        Chat::where([
            'sender_id' => $senderId,
            'receiver_id' => $receiverId,
            'listing_id' => $listingId,
            'seen' => 0])->update(['seen' => 1]);

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

        broadcast(new Message($chat->message, $chat->listing_id, $chat->receiver_id));

        return response(['status' => 'success', 'message' => 'Message sent successfully!']);

    }

}
