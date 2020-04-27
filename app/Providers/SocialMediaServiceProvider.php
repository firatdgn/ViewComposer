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
			$table->string('icon', 128);
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
			Route::get('/' , 'SocialMediaController@index');

			Route::get('Create', 'SocialMediaController@create');
			Route::post('Create', 'SocialMediaController@store');

			Route::get('{id}/Edit', 'SocialMediaController@edit');
			Route::post('{id}/Edit', 'SocialMediaController@update');

			Route::get('{id}/Delete', 'SocialMediaController@delete');
		});
	}
}
