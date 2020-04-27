<?php

namespace App\Providers;

use App\Modules;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
		if (!Schema::hasTable('modules')) {
	        Schema::create('modules', function (Blueprint $table) {
	            $table->id();
	            $table->string('name');
	            $table->string('manage_url');
	            $table->tinyInteger('is_loaded')->default(0);
	            $table->tinyInteger('is_dropped')->default(0);
	            $table->tinyInteger('is_needed_reflesh')->default(1);
	            $table->tinyInteger('is_active')->default(0);
	            $table->timestamps();
	        });
		}

        $menus = [];

        foreach(Modules::where('is_active', 1)->orderBy('name')->get() as $e) {
            $menus[$e['name']] = $e['manage_url'];
        }

        view()->share('menuModules', $menus);
    }
}
