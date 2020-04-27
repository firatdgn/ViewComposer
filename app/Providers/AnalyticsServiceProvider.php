<?php

namespace App\Providers;

use App\Analytics;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnalyticsServiceProvider extends ModuleServiceProvider
{

	var $name = 'Analiz';

	var $manageUrl = 'Backend/Analytics';

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
		require __DIR__ . '../../helpers/analytics.php';
	}

	protected function loadModule()
	{
		Schema::create('analytics', function($table) {
			$table->increments('id');
			$table->string('key', 1024);
			$table->text('value')->nullable();
			$table->timestamps();
		});

		Analytics::create([
			'key' => 'googleOnay'
		]);

		Analytics::create([
			'key' => 'googleAnalytic'
		]);

		Analytics::create([
			'key' => 'yandexOnay'
		]);

		Analytics::create([
			'key' => 'yandexAnalytic'
		]);
	}

	protected function dropModule()
	{
		Schema::drop('analytics');
	}

	protected function loadRoutes()
	{
		Route::group([ 'prefix' => $this->manageUrl, 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('/' , 'AnalyticsController@index');

			Route::get('{id}/Edit', 'AnalyticsController@edit');
			Route::post('{id}/Edit', 'AnalyticsController@update');
		});
	}
}
