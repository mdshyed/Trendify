<?php

namespace App\Helpers;

class PriceFormatter
{
    public static function format($price)
    {
        $currency = config('currency.default');
        $settings = config("currency.currencies.{$currency}");
        
        if (!$settings) {
            return $price;
        }

        // Convert price to Indian Rupees
        $priceInRupees = $price * $settings['conversion_rate'];

        // Format the price with Indian Rupee symbol
        $formatted = number_format(
            $priceInRupees,
            $settings['decimal_places'],
            $settings['decimal_separator'],
            $settings['thousands_separator']
        );

        return $settings['position'] === 'before'
            ? $settings['symbol'] . $formatted
            : $formatted . $settings['symbol'];
    }

    public static function formatWithoutSymbol($price)
    {
        $currency = config('currency.default');
        $settings = config("currency.currencies.{$currency}");
        
        if (!$settings) {
            return $price;
        }

        // Convert price to Indian Rupees
        $priceInRupees = $price * $settings['conversion_rate'];

        // Format the price without symbol
        return number_format(
            $priceInRupees,
            $settings['decimal_places'],
            $settings['decimal_separator'],
            $settings['thousands_separator']
        );
    }
} 