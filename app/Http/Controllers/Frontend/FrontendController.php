<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hero;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendController extends Controller
{
    function index() : View
    {
        $hero = Hero::first();
        $categories = Category::where('status', 1)->get();
        return view('frontend.home.index', compact('hero', 'categories'));
    }

    function listings(Request $request) : View {
        $listings = Listing::with(['category', 'location'])->where(['status' => 1, 'is_approved' => 1]);

        $listings->when($request->has('category'), function($query) use ($request){
            $query->whereHas('category', function($query) use ($request) {
                $query->where('slug', $request->category);
            });
        });
        $listings = $listings->paginate(12);

        return view('frontend.pages.listings', compact('listings'));
    }

    function listingModal(string $id) {
        $listing = Listing::findOrFail($id);

        return view('frontend.layouts.ajax-listing-modal', compact('listing'))->render();
    }
}
