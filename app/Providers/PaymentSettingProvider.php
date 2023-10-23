<?php

namespace App\Providers;

use App\Models\PaymentSetting;
use App\Services\PaymentSettingsService;
use Illuminate\Support\ServiceProvider;

class PaymentSettingProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(PaymentSettingsService::class, function(){
            return new PaymentSettingsService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $paymentSettingsService = $this->app->make(PaymentSettingsService::class);
        $paymentSettingsService->setGlobalSettings();
    }
}
