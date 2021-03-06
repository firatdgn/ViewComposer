<?php

namespace App\Providers;

use App\Modules;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SettingsServiceProvider extends ModuleServiceProvider
{

	var $name = 'Ayarlar';

	var $manageUrl = 'Backend/Settings';

	var $description = 'Sisteminde ayarları saklar ve derler.';

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
		require __DIR__ . '../../helpers/settings.php';
	}

	protected function loadModule()
	{
		Schema::create('settings', function($table) {
			$table->increments('id');
			$table->tinyInteger('type')->default(0);
			$table->string('key', 128);
			$table->string('title', 256);
			$table->string('description', 1024)->nullable();
			$table->text('value');
			$table->timestamps();
		});
	}

	protected function dropModule()
	{
		Schema::drop('settings');
	}

	protected function loadRoutes()
	{
		Route::get('Backend/Settings' , 'SettingsController@index')->name('settings');

		Route::group([ 'prefix' => 'Backend/Setting', 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('{id}/Edit', 'SettingsController@edit')->name('setting.edit');
			Route::post('{id}/Edit', 'SettingsController@update');
		});
	}
}
