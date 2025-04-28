<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class SetCurrency
{
    public function handle(Request $request, Closure $next)
    {
        try {
            // Check if session is available and started
            if (Session::isStarted()) {
                $currency = Session::get('currency', 'USD');
                Log::debug('Currency from session: ' . $currency);
            } else {
                $currency = 'USD';
                Log::debug('Using default currency: USD');
            }
            
            // Set the currency in config
            Config::set('currency.default', $currency);
            Log::debug('Currency set in config: ' . Config::get('currency.default'));
            
            return $next($request);
        } catch (\Exception $e) {
            // Log the error with more context
            Log::error('Currency setting error: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            
            // Set default currency as fallback
            Config::set('currency.default', 'USD');
            Log::warning('Falling back to default currency: USD');
            
            return $next($request);
        }
    }
} 