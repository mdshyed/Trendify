<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Aimeos\Shop\Facades\Shop;

class AimeosServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Override Aimeos price formatting
        config([
            'shop.client.html.catalog.price.default.currency' => 'INR',
            'shop.client.html.catalog.price.default.symbol' => '₹',
            'shop.client.html.catalog.price.default.position' => 'before',
            'shop.client.html.catalog.price.default.decimal_separator' => '.',
            'shop.client.html.catalog.price.default.thousands_separator' => ',',
            'shop.client.html.catalog.price.default.decimal_places' => 2,
            
            'shop.client.html.basket.price.default.currency' => 'INR',
            'shop.client.html.basket.price.default.symbol' => '₹',
            'shop.client.html.basket.price.default.position' => 'before',
            'shop.client.html.basket.price.default.decimal_separator' => '.',
            'shop.client.html.basket.price.default.thousands_separator' => ',',
            'shop.client.html.basket.price.default.decimal_places' => 2,
        ]);
    }
} 