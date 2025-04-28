<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\CurrencyHelper;

class CurrencyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('currency', function ($app) {
            return new CurrencyHelper();
        });
    }

    public function boot()
    {
        //
    }
} 