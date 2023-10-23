<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentSettingController extends Controller
{
    function index() : View {
        return view('admin.payment-setting.index');
    }

    function paypalSetting(Request $request) : RedirectResponse {
        $validatedData = $request->validate([
            'paypal_status' => ['required', 'in:active,inactive'],
            'paypal_mode' => ['required', 'in:sandbox,live'],
            'paypal_country' => ['required'],
            'paypal_currency' => ['required'],
            'paypal_currency_rate' => ['required', 'numeric'],
            'paypal_client_id' => ['required'],
            'paypal_secret_key' => ['required'],
            'paypal_app_key' => ['required'],
        ]);

        foreach($validatedData as $key => $value) {
            PaymentSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        toastr()->success('Updated Successfully!');
        return redirect()->back();
    }
}
