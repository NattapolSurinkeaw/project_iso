<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $modules = Module::all();

        view()->composer('layouts.header', function ($view) use ($modules) {
            $view->with('modules', $modules);
        });
    }
}
