<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Helpers\PriceFormatter;

class PriceViewServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('formatPrice', function ($price) {
                return PriceFormatter::format($price);
            });
            
            $view->with('formatPriceWithoutSymbol', function ($price) {
                return PriceFormatter::formatWithoutSymbol($price);
            });
        });
    }
} 