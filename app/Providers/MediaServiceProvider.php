<?php

namespace App\Providers;

use App\Modules;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MediaServiceProvider extends ModuleServiceProvider
{

	var $name = 'Medya';

	var $manageUrl = 'Backend/Media';

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
		require __DIR__ . '../../helpers/media.php';
	}

	protected function loadModule()
	{
		Schema::create('media', function($table) {
			$table->increments('id');
			$table->string('name', 128);
			$table->string('description', 128)->nullable();
			$table->string('link', 512);
			$table->timestamps();
		});
	}

	protected function dropModule()
	{
		Schema::drop('media');
	}

	protected function loadRoutes()
	{
		Route::group([ 'prefix' => 'Backend/Media', 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('/' , 'MediaController@index');

			Route::get('Create', 'MediaController@create');
			Route::post('Create', 'MediaController@store');

			Route::get('{id}/Edit', 'MediaController@edit');
			Route::post('{id}/Edit', 'MediaController@update');

			Route::get('{id}/Delete', 'MediaController@delete');
		});
	}
}
