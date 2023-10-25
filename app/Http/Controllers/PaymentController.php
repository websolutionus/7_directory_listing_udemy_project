<?php

namespace App\Http\Controllers;

use App\Events\CreateOrder;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;
use Session;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;
use Razorpay\Api\Api as RazorpayApi;

class PaymentController extends Controller
{
    function paymentSuccess() : View {
        return view('frontend.pages.payment-success');
    }

    function paymentCancel() : View {
        return view('frontend.pages.payment-cancel');
    }

    function payableAmount() : int {
        $packageId = Session::get('selected_package_id');
        $package = Package::findOrFail($packageId);
        return $package->price;
    }

    function setPaypalConfig() : array {
        return [
            'mode'    => config('payment.paypal_mode'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
            'sandbox' => [
                'client_id'         => config('payment.paypal_client_id'),
                'client_secret'     => config('payment.paypal_secret_key'),
                'app_id'            => 'APP-80W284485P519543T',
            ],
            'live' => [
                'client_id'         => config('payment.paypal_client_id'),
                'client_secret'     => config('payment.paypal_secret_key'),
                'app_id'            => config('payment.paypal_app_key'),
            ],

            'payment_action' => env('PAYPAL_PAYMENT_ACTION', 'Sale'), // Can only be 'Sale', 'Authorization' or 'Order'
            'currency'       => config('payment.paypal_currency'),
            'notify_url'     => env('PAYPAL_NOTIFY_URL', ''), // Change this accordingly for your application.
            'locale'         => env('PAYPAL_LOCALE', 'en_US'), // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
            'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true), // Validate SSL when creating api client.
        ];
    }

    function payWithPaypal() {
       $config = $this->setPaypalConfig();

       $provider = new PayPalClient($config);
       $provider->getAccessToken();

       $totalPayableAmount = round($this->payableAmount() * config('payment.paypal_currency_rate'));

       $response = $provider->createOrder([
            'intent' => "CAPTURE",
            'application_context' => [
                'return_url' => route('paypal.success'),
                'cancel_url' => route('paypal.cancel')
            ],
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => config('payment.paypal_currency'),
                        'value' => $totalPayableAmount
                    ]
                ]
            ]
        ]);

        if(isset($response['id']) && $response['id'] !== null){
            foreach($response['links'] as $link) {
                if($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }else {
            logger($response);
            return redirect()->route('payment.cancel')->withErrors(['error' => $response['error']['message']]);
        }


    }

    function paypalSuccess(Request $request) {
        $config = $this->setPaypalConfig();
        $provider = new PayPalClient($config);
        $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);

        if(isset($response['status']) && $response['status'] === 'COMPLETED') {
            $capture = $response['purchase_units'][0]['payments']['captures'][0];
            $paymentInfo = [
                'transaction_id' => $capture['id'],
                'payment_method' => 'paypal',
                'paid_amount' => $capture['amount']['value'],
                'paid_currency' => $capture['amount']['currency_code'],
                'payment_status' => 'completed'
            ];

            CreateOrder::dispatch($paymentInfo);

            return redirect()->route('payment.success');
        }

    }

    function paypalCancel() {
        return redirect()->route('payment.cancel');
    }

    /** Pay with Stripe */

    function payWithStripe() {
        // set api key
        Stripe::setApiKey(config('payment.stripe_secret_key'));

        $totalPayableAmount = round(($this->payableAmount() * config('payment.stripe_currency_rate'))) * 100;

        $response = StripeSession::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => config('payment.stripe_currency'),
                        'product_data' => [
                            'name' => 'Package'
                        ],
                        'unit_amount' => $totalPayableAmount
                    ],
                    'quantity' => 1
                ]
            ],
            'mode' => 'payment',
            'success_url' => route('stripe.success').'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('stripe.cancel')
        ]);

        return redirect()->away($response->url);

    }

    function stripeSuccess(Request $request) {
        $sessionId = $request->session_id;

        // set api key
        Stripe::setApiKey(config('payment.stripe_secret_key'));

        $response = StripeSession::retrieve($sessionId);

        if($response->payment_status === 'paid') {
            $paymentInfo = [
                'transaction_id' => $response->payment_intent,
                'payment_method' => 'stripe',
                'paid_amount' => $response->amount_total,
                'paid_currency' => $response->currency,
                'payment_status' => 'completed'
            ];

            CreateOrder::dispatch($paymentInfo);

            return redirect()->route('payment.success');
        }else {
            return redirect()->route('payment.cancel');
        }

    }

    function stripeCancel() {
        return redirect()->route('payment.cancel');
    }

    /** Pay with razorpay */
    function razorpayRedirect() {
        return view('frontend.pages.razorpay-redirect');
    }

    function payWithRazorpay(Request $request) {
        $api = new RazorpayApi(
            config('payment.razorpay_key'),
            config('payment.razorpay_secret_key')
        );

        if($request->has('razorpay_payment_id') && $request->filled('razorpay_payment_id')) {
            $packageId = session()->get('selected_package_id');
            $package = Package::findOrFail($packageId);

            $totalPayableAmount = ($package->price * config('payment.razorpay_currency_rate')) * 100;

            try {
                $response = $api->payment
                    ->fetch($request->razorpay_payment_id)
                    ->capture(['amount' => $totalPayableAmount]);

            }catch(\Exception $e) {
                logger($e);
                return redirect()->route('payment.cancel')->withErrors(['error' => $e->getMessage()]);
            }

            if($response['status'] === 'captured') {
                $paymentInfo = [
                    'transaction_id' => $response->id,
                    'payment_method' => 'razorpay',
                    'paid_amount' => $response->amount,
                    'paid_currency' => $response->currency,
                    'payment_status' => 'completed'
                ];

                CreateOrder::dispatch($paymentInfo);

                return redirect()->route('payment.success');
            }else {
                return redirect()->route('payment.cancel');
            }

        }

    }



}
