<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Settings;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $setting = Settings::first();
        if ($setting) {
            view()->share('header_logo', $setting->header_logo);
            view()->share('footer_title', $setting->footer_title);
            view()->share('footer_description', $setting->footer_description);
            view()->share('address', $setting->address);
            view()->share('phone', $setting->phone);
            view()->share('fax', $setting->fax);
        }
    }
}
