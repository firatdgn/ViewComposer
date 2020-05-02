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

	var $description = 'Google ve Yandexte analiz hesap için gerekli olan alanları oluşturur ve taşır.';

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
		require __DIR__ . '../../helpers/statics.php';
	}

	protected function loadModule()
	{
		Schema::create('statics', function($table) {
			$table->increments('id');
			$table->string('name', 1024)->nullable();
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
		Route::get('Backend/Statics' , 'App\Http\Controllers\Modules\StaticsController@index')->name('statics');

		Route::group([ 'prefix' => 'Backend/Static', 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('Create', 'StaticsController@create')->name('static.create');
			Route::post('Create', 'StaticsController@store');

			Route::get('{id}/Edit', 'StaticsController@edit')->name('static.edit');
			Route::post('{id}/Edit', 'StaticsController@update');

			Route::get('{id}/Delete', 'StaticsController@delete')->name('static.delete');
		});
	}
}
