<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\SettingsService;
use Artisan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Redirect;

class SettingController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:settings index']);
    }

    function index() : View {
        return view('admin.setting.index');
    }

    function updateGeneralSetting(Request $request) : RedirectResponse {
        $validatedData = $request->validate([
            'site_name' => ['required', 'max:255'],
            'site_email' => ['required', 'max:255', 'email'],
            'site_phone' => ['required', 'max:255'],
            'site_timezone' => ['required', 'max:255'],
            'site_default_currency' => ['required', 'max:3'],
            'site_currency_icon' => ['required'],
            'site_currency_position' => ['required', 'in:right,left']

        ]);

        foreach($validatedData as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingsService = app(SettingsService::class);
        $settingsService->clearCachedSettings();

        toastr()->success('Updated Successfully');
        Artisan::call('config:cache');
        return redirect()->back();
    }

    function updatePusherSetting(Request $request) : RedirectResponse {
        $validatedData = $request->validate([
            'pusher_app_id' => ['required'],
            'pusher_app_key' => ['required'],
            'pusher_secret_key' => ['required'],
            'pusher_cluster' => ['required'],
        ]);

        foreach($validatedData as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingsService = app(SettingsService::class);
        $settingsService->clearCachedSettings();

        toastr()->success('Updated Successfully');
        Artisan::call('config:cache');
        return redirect()->back();
    }
}
