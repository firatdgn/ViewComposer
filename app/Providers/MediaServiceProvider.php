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

	var $description = 'Sitenizde dosya paylaşımınınız olsun, resim, video yükleme olsun. Bu işlemleri yapmaya yarar.';

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
		Route::group([ 'prefix' => $this->manageUrl, 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('/' , 'MediaController@index')->name('media');

			Route::get('Create', 'MediaController@create')->name('media.create');
			Route::post('Create', 'MediaController@store');

			Route::get('{id}/Edit', 'MediaController@edit')->name('media.edit');
			Route::post('{id}/Edit', 'MediaController@update');

			Route::get('{id}/Delete', 'MediaController@delete')->name('media.delete');
		});
	}
}
