<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SectionTitleUpdateRequest;
use App\Models\SectionTitle;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SectionTitleController extends Controller
{
    function index() : View {
        $title = SectionTitle::first();
        return view('admin.section-title.index', compact('title'));
    }

    function update(SectionTitleUpdateRequest $request) {
        if(SectionTitle::first()){
            $title = SectionTitle::first();
        }else {
            $title = new SectionTitle();
        }

        $title->our_feature_title = $request->our_feature_title;
        $title->our_feature_sub_title = $request->our_feature_sub_title;
        $title->our_categories_title = $request->our_categories_title;
        $title->our_categories_sub_title = $request->our_categories_sub_title;
        $title->our_location_title = $request->our_location_title;
        $title->our_location_sub_title = $request->our_location_sub_title;
        $title->our_featured_listing_title = $request->our_featured_listing_title;
        $title->our_featured_listing_sub_title = $request->our_featured_listing_sub_title;
        $title->our_our_pricing_title = $request->our_our_pricing_title;
        $title->our_our_pricing_sub_title = $request->our_our_pricing_sub_title;
        $title->our_testimonial_title = $request->our_testimonial_title;
        $title->our_testimonial_sub_title = $request->our_testimonial_sub_title;
        $title->our_blog_title = $request->our_blog_title;
        $title->our_blog_sub_title = $request->our_blog_sub_title;
        $title->save();

        toastr()->success('Updated Successfully!');

        return redirect()->back();


    }
}
