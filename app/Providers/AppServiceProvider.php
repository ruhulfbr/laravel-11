<?php

namespace App\Providers;

use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Http\Middleware\TrimStrings;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        TrimStrings::except([
            'secret'
        ]);

        RedirectIfAuthenticated::redirectUsing(fn($request) => route('home'));

        RateLimiter::for('api', function () {

            return [
                Limit::perSecond(20),
                Limit::perMinute(1000)
            ];
        });
    }
}
