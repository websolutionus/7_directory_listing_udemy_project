<?php

namespace App\Listeners;

use App\Events\CreateOrder;
use App\Models\Order;
use App\Models\Package;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Session;

class CreateOrderListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CreateOrder $event): void
    {
        $package = Package::find(Session::get('selected_package_id'));
        $order = new Order();
        $order->order_id = uniqid();
        $order->transaction_id = $event->paymentInfo['transaction_id'];
        $order->user_id = auth()->user()->id;
        $order->package_id = $package->id;
        $order->payment_method = $event->paymentInfo['payment_method'];
        $order->payment_status = $event->paymentInfo['payment_status'];
        $order->base_amount = $package->price;
        $order->base_currency = config('settings.site_default_currency');
        $order->paid_amount = $event->paymentInfo['paid_amount'];
        $order->paid_currency = $event->paymentInfo['paid_currency'];
        $order->purchase_date = now();
        $order->save();

        Subscription::updateOrCreate(
            ['user_id' => auth()->user()->id],
            [
                'package_id' => $order->package_id,
                'order_id' => $order->id,
                'purchase_date' => $order->purchase_date,
                'expire_date' => $package->number_of_days == -1 ? null : Carbon::parse($order->purchase_date)->addDay($package->number_of_days),
                'status' => 1
            ]
        );

        Session::forget('selected_package_id');

    }
}
