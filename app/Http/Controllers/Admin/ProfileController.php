<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    function index() : View {
        return view('admin.profile.index');
    }

    function update(ProfileUpdateRequest $request) : RedirectResponse {
        // update data
        dd($request->all());
        return redirect()->back();
    }
}
