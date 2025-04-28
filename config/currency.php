<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Currency
    |--------------------------------------------------------------------------
    |
    | This is the default currency that will be used throughout the application.
    |
    */
    'default' => 'INR',

    /*
    |--------------------------------------------------------------------------
    | Currency Settings
    |--------------------------------------------------------------------------
    |
    | Here you can define the currency settings for your application.
    |
    */
    'currencies' => [
        'INR' => [
            'name' => 'Indian Rupee',
            'symbol' => '₹',
            'position' => 'before', // 'before' or 'after'
            'decimal_separator' => '.',
            'thousands_separator' => ',',
            'decimal_places' => 2,
            'conversion_rate' => 75, // 1 USD = 75 INR
        ],
    ],
]; 