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

		Modules::where('name', $this->name)->update([
			'is_loaded' => 1,
			'is_needed_reflesh' => 1,
			'is_dropped' => 0
		]);
	}

	protected function dropModule()
	{
		Schema::drop('social_media');

		Modules::where('name', $this->name)->update([
			'is_loaded' => 0,
			'is_dropped' => 0,
			'is_needed_reflesh' => 1
		]);
	}

	protected function loadRoutes()
	{
		Route::group([ 'prefix' => 'Backend/SocialMedia', 'namespace' => 'App\Http\Controllers\Modules\SocialMedia' ], function() {
			Route::get('/' , 'SocialMediaController@index');

			Route::get('Create', 'SocialMediaController@create');
			Route::post('Create', 'SocialMediaController@store');
		});
	}
}
