<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

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

        // NOTE activate this for testing
        // Passport::tokensExpireIn(Carbon::now()->addSeconds(10));
        // Passport::refreshTokensExpireIn(Carbon::now()->addSeconds(30));

        Passport::tokensExpireIn(Carbon::now()->addDays(1));
        Passport::refreshTokensExpireIn(Carbon::now()->addYears(1));    
            Passport::enablePasswordGrant();

    }
}
