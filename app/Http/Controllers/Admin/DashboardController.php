<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Claim;
use App\Models\Listing;
use App\Models\Location;
use App\Models\Order;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Locale;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    function index() : View {
        $totalListingCount = Listing::count();
        $pendingListingCount = Listing::where('is_approved', 0)->count();
        $orderCount = Order::count();
        $claimCount = Claim::count();
        $listingCategoryCount = Category::count();
        $locationCount = Location::count();
        $blogCount = Blog::count();
        $blogCategoryCount = BlogCategory::count();
        $adminCount = User::where('user_type', 'admin')->count();
        $permissionCount = Permission::count();
        $roleCount = Role::count();
        $totalTestimonials = Testimonial::count();


        return view('admin.dashboard.index', compact(
            'totalListingCount',
            'pendingListingCount',
            'orderCount',
            'claimCount',
            'listingCategoryCount',
            'locationCount',
            'blogCount',
            'blogCategoryCount',
            'adminCount',
            'permissionCount',
            'roleCount',
            'totalTestimonials'
        ));
    }
}
