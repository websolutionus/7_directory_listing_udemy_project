<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    function index() : View {
        $subscription = Subscription::with('package')->where('user_id', auth()->user()->id)->first();

        return view('frontend.dashboard.index', compact('subscription'));
    }
}
