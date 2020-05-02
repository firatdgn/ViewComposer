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

	var $description = 'Sistemini takip etmeyen kullanıcılar için oluşturulmuştur. Şuan için sadece Google ve Yandex bulunmaktadır.';

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
		require __DIR__ . '../../helpers/analytics.php';
	}

	protected function loadModule()
	{
		Schema::create('analytics', function($table) {
			$table->increments('id');
			$table->string('key', 1024);
			$table->string('name', 1024);
			$table->text('value')->nullable();
			$table->timestamps();
		});

		Analytics::create([
			'key' => 'googleOnay',
			'name' => 'Google Onaylama Kodu META'
		]);

		Analytics::create([
			'key' => 'googleAnalytic',
			'name' => 'Google Analytics Kodu JAVSCRIPT'
		]);

		Analytics::create([
			'key' => 'yandexOnay',
			'name' => 'Yandex Onaylama Kodu META'
		]);

		Analytics::create([
			'key' => 'yandexAnalytic',
			'name' => 'Yandex Takip Kodu JAVASCRIPT'
		]);
	}

	protected function dropModule()
	{
		Schema::drop('analytics');
	}

	protected function loadRoutes()
	{
		Route::group([ 'prefix' => $this->manageUrl, 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('/' , 'AnalyticsController@index')->name('analytics');

			Route::get('{id}/Edit', 'AnalyticsController@edit')->name('analytic.edit');
			Route::post('{id}/Edit', 'AnalyticsController@update');
		});
	}
}
