<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use App\Models\Review;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    function index() : View {
        $subscription = Subscription::with('package')->where('user_id', auth()->user()->id)->first();
        $listingCount = Listing::where('user_id', auth()->user()->id)->count();
        $pendingListingCount = Listing::where('user_id', auth()->user()->id)->where('is_approved', 0)->count();
        $activeListingCount = Listing::where('user_id', auth()->user()->id)->where('is_approved', 1)->count();

        $reviewsCount = Review::with('listing')
        ->whereHas('listing', function($query) {
            $query->where('user_id', auth()->user()->id);
        })
        ->where('is_approved', 1)->count();

        return view('frontend.dashboard.index', compact('subscription', 'listingCount', 'pendingListingCount', 'reviewsCount', 'activeListingCount'));
    }
}
