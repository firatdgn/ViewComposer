<?php

namespace App\Providers;

use App\Statics;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SystemServiceProvider extends ModuleServiceProvider
{

	var $name = 'Sistem';

	var $manageUrl = 'Backend/System';

	var $description = 'Sistemin Duzen.net ile bağlantısını kurar ve sistemin çalışmasını kontrol eder.';

	var $version = '1.0.0';

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
		parent::boot();
	}

	protected function includeFiles()
	{
		//require __DIR__ . '../../helpers/statics.php';
	}

	protected function loadModule()
	{
	}

	protected function dropModule()
	{
	}

	protected function loadRoutes()
	{
		Route::get('Backend/System' , 'App\Http\Controllers\Modules\SystemController@index')->name('system');
		Route::get('Backend/System/Modules' , 'App\Http\Controllers\Modules\SystemController@modules')->name('modules');

		Route::group([ 'prefix' => 'Backend/System/Module', 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('{id}/Active', 'SystemController@activeModule')->name('system.module.active');
			Route::get('{id}/Deactive', 'SystemController@deactiveModule')->name('system.module.deactive');
			//Route::post('Create', 'StaticsController@store');

			//Route::get('{id}/Edit', 'StaticsController@edit')->name('static.edit');
			//Route::post('{id}/Edit', 'StaticsController@update');

			//Route::get('{id}/Delete', 'StaticsController@delete')->name('static.delete');
		});
	}
}
