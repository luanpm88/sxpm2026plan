<?php

namespace App\Providers;

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
        // Laravel 12 mặc định tìm lang/ ở root project.
        // Project này dùng resources/lang/ nên cần override lại.
        app()->useLangPath(resource_path('lang'));
    }
}
