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
        app('view')->composer('layouts.base', function ($view) {
            $action = app('request')->route()->getAction();

            $controller = class_basename($action['controller']);

            list($controller, $action) = explode('@', $controller);

            $view->with(compact('controller', 'action'));
        });
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
