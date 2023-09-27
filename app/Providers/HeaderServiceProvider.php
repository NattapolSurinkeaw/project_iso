<?php

namespace App\Providers;

use App\Models\Category;
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
        $categories = Category::all();

        view()->composer('layouts.header', function ($view) use ($modules, $categories) {
            $view->with('modules', $modules)->with('categories', $categories);
        });
    }
}
