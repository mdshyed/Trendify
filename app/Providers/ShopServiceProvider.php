<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ShopServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('vendor.shop.*', function ($view) {
            $view->with('currency', 'INR');
            $view->with('symbol', '₹');
            $view->with('position', 'before');
            $view->with('decimal_separator', '.');
            $view->with('thousands_separator', ',');
            $view->with('decimal_places', 2);
        });
    }
} 