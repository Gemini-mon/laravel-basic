<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Bootstrapに対応するよう修正
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Bootstrapに対応するよう修正
        Paginator::useBootstrap();
    }
}
