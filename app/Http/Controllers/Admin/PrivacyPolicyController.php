<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PrivacyPolicyController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:privacy policy index']);
    }

    function index() : View {
        $privacyPolicy = PrivacyPolicy::first();
        return view('admin.privacy-policy.index', compact('privacyPolicy'));
    }

    function update(Request $request) : RedirectResponse {
        $request->validate([
            'description' => ['required']
        ]);

        PrivacyPolicy::updateOrCreate(
            ['id' => 1],
            ['description' => $request->description]
        );

        toastr()->success('Updated Successfully!');

        return redirect()->back();
    }

}
