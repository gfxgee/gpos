<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MenuDropdown;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menus = MenuDropdown::all();
        view()->share([ 'menus' => $menus ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
