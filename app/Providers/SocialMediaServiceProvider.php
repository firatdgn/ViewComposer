<?php

namespace App\Providers;

use App\Modules;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SocialMediaServiceProvider extends ModuleServiceProvider
{

	var $name = 'SosyalMedya';

	var $manageUrl = 'Backend/SocialMedia';

	var $description = 'Sosyal medya hesaplarınızı tek yerde toplamanıza yarar.';

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
		require __DIR__ . '../../helpers/socialmedia.php';
	}

	protected function loadModule()
	{
		Schema::create('social_media', function($table) {
			$table->increments('id');
			$table->string('name', 128);
			$table->string('icon', 128)->nullable();
			$table->string('value', 128);
			$table->timestamps();
		});
	}

	protected function dropModule()
	{
		Schema::drop('social_media');
	}

	protected function loadRoutes()
	{
		Route::group([ 'prefix' => $this->manageUrl, 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('/' , 'SocialMediaController@index')->name('socialmedia');

			Route::get('Create', 'SocialMediaController@create')->name('socialmedia.create');
			Route::post('Create', 'SocialMediaController@store');

			Route::get('{id}/Edit', 'SocialMediaController@edit')->name('socialmedia.edit');
			Route::post('{id}/Edit', 'SocialMediaController@update');

			Route::get('{id}/Delete', 'SocialMediaController@delete')->name('socialmedia.delete');
		});
	}
}
