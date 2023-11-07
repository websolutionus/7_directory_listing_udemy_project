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
}
