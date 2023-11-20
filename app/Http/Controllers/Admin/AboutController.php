<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutUsUpdateRequest;
use App\Models\AboutUs;
use App\Traits\FileUploadTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    use FileUploadTrait;

    function __construct()
    {
        $this->middleware(['permission:about index']);
    }

    function index() : View {
        $about = AboutUs::first();
        return view('admin.about.index', compact('about'));
    }

    function update(AboutUsUpdateRequest $request) : RedirectResponse {
        $imagePath = $this->uploadImage($request, 'image', $request->old_image);

        AboutUs::updateOrCreate(
            ['id' => 1],
            [
                'image' => !empty($imagePath) ? $imagePath : $request->old_image,
                'video_url' => $request->video_url,
                'description' => $request->description,
                'button_url' => $request->button_url
            ]
        );

        toastr()->success('Updated Successfully!');

        return redirect()->back();
    }
}
