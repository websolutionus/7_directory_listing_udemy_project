<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HeroUpdateRequest;
use App\Models\Hero;
use App\Traits\FileUploadTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HeroController extends Controller
{
    use FileUploadTrait;

    function index() : View {
        return view('admin.hero.index');
    }

    function update(HeroUpdateRequest $request) : RedirectResponse {

        $imagePath = $this->uploadImage($request, 'background');

        Hero::updateOrCreate(
            ['id' => 1],
            [
                'background' => !empty($imagePath) ? $imagePath : '',
                'title' => $request->title,
                'sub_title' => $request->sub_title
            ]
        );

        toastr()->success('Updated Successfully');

        return redirect()->back();
    }
}
