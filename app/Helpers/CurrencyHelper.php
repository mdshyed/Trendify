<?php

namespace App\Helpers;

class CurrencyHelper
{
    public static function format($amount, $currency = null)
    {
        $currency = $currency ?? config('currency.default');
        $settings = config("currency.currencies.{$currency}");

        if (!$settings) {
            return $amount;
        }

        $formatted = number_format(
            $amount,
            $settings['decimal_places'],
            $settings['decimal_separator'],
            $settings['thousands_separator']
        );

        return $settings['position'] === 'before'
            ? $settings['symbol'] . $formatted
            : $formatted . $settings['symbol'];
    }
} 