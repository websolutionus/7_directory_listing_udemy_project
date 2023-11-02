<?php

namespace App\Http\Controllers\Frontend;

use App\Events\CreateOrder;
use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\Category;
use App\Models\Claim;
use App\Models\Hero;
use App\Models\Listing;
use App\Models\ListingSchedule;
use App\Models\Location;
use App\Models\Package;
use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Session;

class FrontendController extends Controller
{
    function index() : View
    {
        $hero = Hero::first();
        $categories = Category::where('status', 1)->get();
        $locations = Location::where('status', 1)->get();
        $packages = Package::where('status', 1)->where('show_at_home', 1)->take(3)->get();
        $featuredCategories = Category::withCount(['listings'=> function($query){
            $query->where('is_approved', 1);
        }])->where(['show_at_home' => 1, 'status' => 1])->take(6)->get();

        // Featured location
        $featuredLocations = Location::with(['listings' => function($query) {
            $query->withAvg(['reviews' => function($query) {
                $query->where('is_approved', 1);
            }], 'rating')->withCount(['reviews' => function($query) {
                $query->where('is_approved', 1);
            }])->where(['status' => 1, 'is_approved' => 1])->orderBy('id', 'desc')->limit(8);
        }])->where(['show_at_home' => 1, 'status' => 1])->get();

        // featured listings
        $featuredListings = Listing::withAvg(['reviews' => function($query) {
                $query->where('is_approved', 1);
            }], 'rating')->withCount(['reviews' => function($query) {
                $query->where('is_approved', 1);
            }])
            ->where(['status' => 1, 'is_approved' => 1, 'is_featured' => 1])
            ->orderBy('id', 'desc')->limit(10)->get();

        return view('frontend.home.index',
            compact(
                'hero',
                'categories',
                'packages',
                'featuredCategories',
                'featuredLocations',
                'featuredListings',
                'locations'
            ));
    }

    function listings(Request $request) : View {

        $listings = Listing::withAvg(['reviews' => function($query) {
            $query->where('is_approved', 1);
        }], 'rating')
        ->withCount(['reviews' => function($query) {
            $query->where('is_approved', 1);
        }])->with(['category', 'location'])->where(['status' => 1, 'is_approved' => 1]);

        $listings->when($request->has('category') && $request->filled('category'), function($query) use ($request){
            $query->whereHas('category', function($query) use ($request) {
                $query->where('slug', $request->category);
            });
        });

        $listings->when($request->has('search') && $request->filled('search') , function($query) use ($request) {
            $query->where(function($subQuery) use ($request) {
                $subQuery->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        });

        $listings->when($request->has('location') && $request->filled('location') , function($query) use ($request) {
            $query->whereHas('location', function($subQuery) use ($request) {
                $subQuery->where('slug', $request->location);
            });
        });

        $listings->when($request->has('amenity') && is_array($request->amenity) , function($query) use ($request) {

            $amenityIds = Amenity::whereIn('slug', $request->amenity)->pluck('id');

            $query->whereHas('amenities', function($subQuery) use ($amenityIds) {
                $subQuery->whereIn('amenity_id', $amenityIds);
            });
        });

        $listings = $listings->paginate(12);

        $categories = Category::where('status', 1)->get();
        $locations = Location::where('status', 1)->get();
        $amenities = Amenity::where('status', 1)->get();

        return view('frontend.pages.listings', compact('listings', 'categories', 'locations', 'amenities'));
    }

    function listingModal(string $id) {
        $listing = Listing::findOrFail($id);

        return view('frontend.layouts.ajax-listing-modal', compact('listing'))->render();
    }

    function showListing(string $slug) : View {

        $listing = Listing::withAvg(['reviews' => function($query){
                $query->where('is_approved', 1);
            }], 'rating')
            ->where(['status' => 1, 'is_verified' => 1])->where('slug', $slug)->first();

        $listing->increment('views');
        $openStatus = $this->listingScheduleStatus($listing);
        $reviews = Review::with('user')->where(['listing_id' => $listing->id, 'is_approved' => 1])->paginate(10);

        $smellerListings = Listing::where('category_id', $listing->category_id)
            ->where('id', '!=', $listing->id)->orderBy('id', 'DESC')->take(4)->get();

        return view('frontend.pages.listing-view', compact('listing', 'smellerListings', 'openStatus', 'reviews'));
    }

    function listingScheduleStatus(Listing $listing) : ?string {
        $openStatus = '';
        $day = ListingSchedule::where('listing_id', $listing->id)->where('day', \Str::lower(date('l')))->first();
        if($day) {
            $startTime = strtotime($day->start_time);
            $endTime = strtotime($day->end_time);
            if(time() >= $startTime && time() <= $endTime) {
                $openStatus = 'open';
            }else {
                $openStatus = 'close';
            }
        }
        return $openStatus;
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

    function submitReview(Request $request) : RedirectResponse {
        $request->validate([
            'rating' => ['required', 'in:1,2,3,4,5'],
            'review' => ['required', 'max:500'],
            'listing_id' => ['required', 'integer']
        ]);

        $prevReview = Review::where(['listing_id' => $request->listing_id, 'user_id' => auth()->user()->id])->exists();
        if($prevReview) {
            throw ValidationException::withMessages(['You already added a review for this listing!']);
        }

        $review = new Review();
        $review->listing_id = $request->listing_id;
        $review->user_id = auth()->user()->id;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->save();

        toastr()->success('Review Added Successfully!');

        return redirect()->back();
    }

    /** Submit Claim */
    function submitClaim(Request $request) : RedirectResponse {
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'claim' => ['required', 'max:300'],
            'listing_id' => ['required', 'integer']
        ]);

        $claim = new Claim();
        $claim->listing_id = $request->listing_id;
        $claim->name = $request->name;
        $claim->email = $request->email;
        $claim->claim = $request->claim;
        $claim->save();

        toastr()->success('Submitted Successfully!');

        return redirect()->back();

    }
}
