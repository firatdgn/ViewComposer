<?php

namespace App\Providers;

use App\Modules;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menus = [];

        foreach(Modules::where('is_active', 1)->get() as $e) {
            $menus[$e['name']] = $e['manage_url'];
        }

        view()->share('menuModules', $menus);
    }
}
