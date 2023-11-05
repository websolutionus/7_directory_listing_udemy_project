<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;


class ChatController extends Controller
{
    function index() : View {
        return view('frontend.dashboard.message.index');
    }

    function sendMessage(Request $request) {
        dd($request->all());
    }
}
