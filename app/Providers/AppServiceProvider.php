<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  App\Repositories\AuthReponsitory;
use  App\Repositories\Interface\AuthRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthRepositoryInterface::class, AuthReponsitory::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
