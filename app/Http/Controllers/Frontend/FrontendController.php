<?php

namespace App\Http\Controllers\Frontend;

use App\Events\CreateOrder;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hero;
use App\Models\Listing;
use App\Models\Package;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Session;

class FrontendController extends Controller
{
    function index() : View
    {
        $hero = Hero::first();
        $categories = Category::where('status', 1)->get();
        $packages = Package::where('status', 1)->where('show_at_home', 1)->take(3)->get();
        return view('frontend.home.index', compact('hero', 'categories', 'packages'));
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

    function showListing(string $slug) : View {
        $listing = Listing::where(['status' => 1, 'is_verified' => 1])->where('slug', $slug)->first();

        $smellerListings = Listing::where('category_id', $listing->category_id)
            ->where('id', '!=', $listing->id)->orderBy('id', 'DESC')->take(4)->get();
        return view('frontend.pages.listing-view', compact('listing', 'smellerListings'));
    }

    function showPackages() : View {
        $packages = Package::where('status', 1)->get();
        return view('frontend.pages.packages', compact('packages'));
    }

    function checkout(string $id) : View | RedirectResponse {
        $package = Package::findOrFail($id);

        /** store package id in session */
        Session::put('selected_package_id', $package->id);
        /** if package is free then direct place order */
        if($package->type === 'free' || $package->price == 0) {
            $paymentInfo = [
                'transaction_id' => uniqid(),
                'payment_method' => 'free',
                'paid_amount' => 0,
                'paid_currency' => config('settings.site_default_currency'),
                'payment_status' => 'completed'
            ];

            CreateOrder::dispatch($paymentInfo);
            toastr()->success('Package subscribed successfully');
            return redirect()->route('user.dashboard');
        }

        return view('frontend.pages.checkout', compact('package'));
    }
}
