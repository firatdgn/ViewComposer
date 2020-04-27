<?php

namespace App\Providers;

use App\Statics;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StaticsServiceProvider extends ModuleServiceProvider
{

	var $name = 'Sabitler';

	var $manageUrl = 'Backend/Statics';

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
		require __DIR__ . '../../helpers/statics.php';
	}

	protected function loadModule()
	{
		Schema::create('statics', function($table) {
			$table->increments('id');
			$table->string('key', 1024);
			$table->text('value')->nullable();
			$table->tinyInteger('is_html')->default(0);
			$table->timestamps();
		});
	}

	protected function dropModule()
	{
		Schema::drop('statics');
	}

	protected function loadRoutes()
	{
		Route::group([ 'prefix' => $this->manageUrl, 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('/' , 'StaticsController@index');

			Route::get('Create', 'StaticsController@create');
			Route::post('Create', 'StaticsController@store');

			Route::get('{id}/Edit', 'StaticsController@edit');
			Route::post('{id}/Edit', 'StaticsController@update');

			Route::get('{id}/Delete', 'StaticsController@delete');
		});
	}
}
