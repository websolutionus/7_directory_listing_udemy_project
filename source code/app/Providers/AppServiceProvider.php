<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // set dynamic timezone
        $timezone = Setting::where('key', 'site_timezone')->first();
        config()->set('app.timezone', $timezone->value);

        // set default pagination design
        Paginator::useBootstrap();

        // set pusher config
        $keys = ['pusher_app_id', 'pusher_app_key', 'pusher_secret_key', 'pusher_cluster'];
        $pusherConf = Setting::whereIn('key', $keys)->pluck('value', 'key')->toArray();

        config(['broadcasting.connections.pusher.key' => $pusherConf['pusher_app_key']]);
        config(['broadcasting.connections.pusher.secret' => $pusherConf['pusher_secret_key']]);
        config(['broadcasting.connections.pusher.app_id' => $pusherConf['pusher_app_id']]);
        config(['broadcasting.connections.pusher.options.cluster' => $pusherConf['pusher_cluster']]);

    }
}
