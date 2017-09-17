<?php

namespace App\Providers;

use Cocoyo\Geography\Geography;
use Illuminate\Support\ServiceProvider;

class GeographyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('geography', function () {
            return new Geography(config('services.baidu'));
        });
    }
}
