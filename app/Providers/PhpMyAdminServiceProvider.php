<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class PhpMyAdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/phpmyadmin.php', 'phpmyadmin'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (!$this->app->routesAreCached()) {
            Route::group([
                'prefix' => config('phpmyadmin.route_prefix', 'phpmyadmin'),
                'middleware' => ['web', 'auth']
            ], function () {
                Route::get('/', function () {
                    return redirect('/phpmyadmin/index.php');
                });
                
                Route::any('{path}', function ($path) {
                    $phpMyAdminPath = base_path('vendor/phpmyadmin/phpmyadmin/');
                    $requestPath = $phpMyAdminPath . $path;
                    
                    if (file_exists($requestPath)) {
                        return response()->file($requestPath);
                    }
                    
                    abort(404);
                })->where('path', '.*');
            });
        }
    }
}
