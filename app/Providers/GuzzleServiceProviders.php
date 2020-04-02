<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Clases\Guzzle;

class GuzzleServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Guzzle::class, function ($app) {
            return new Guzzle();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
