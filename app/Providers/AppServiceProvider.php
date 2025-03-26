<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('App\Services\FuelRefillService');
        $this->app->bind('App\Services\CustomerService');

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
