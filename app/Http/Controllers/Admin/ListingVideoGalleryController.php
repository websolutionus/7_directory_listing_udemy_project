<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ListingVideoGallery;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ListingVideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('admin.listing.listing-video-gallery.index');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'video_url' => ['required', 'url'],
            'listing_id' => ['required']
        ]);

        $video = new ListingVideoGallery();
        $video->listing_id = $request->listing_id;
        $video->video_url = $request->video_url;
        $video->save();

        toastr()->success('Created Successfully!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
