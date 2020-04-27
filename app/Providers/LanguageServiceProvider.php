<?php

namespace App\Providers;

use App\Modules;

use App\Languages;
use App\Translations;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LanguageServiceProvider extends ModuleServiceProvider
{

	var $name = 'Diller';

	var $manageUrl = 'Backend/Language';

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
		require __DIR__ . '../../helpers/language.php';
	}

	protected function loadModule()
	{
		Schema::create('translations', function($table) {
			$table->increments('id');
			$table->string('key', 256);
			$table->text('text');
			$table->tinyInteger('html')->default(0);
			$table->timestamps();
		});

		Schema::create('languages', function($table) {
			$table->increments('id');
			$table->tinyInteger('is_active')->default(1);
			$table->string('code', 8);
			$table->string('name', 256);
			$table->tinyInteger('priority')->default(0);
			$table->timestamps();
		});

		Languages::create([
			'code' => 'tr',
			'name' => 'Türkçe',
			'priority' => 1
		]);
	}

	protected function dropModule()
	{
		Schema::drop('translations');
		Schema::drop('languages');
	}

	protected function loadRoutes()
	{
		Route::group([ 'prefix' => $this->manageUrl, 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('/' , 'TranslationsController@index');

			Route::get('Create', 'TranslationsController@create');
			Route::post('Create', 'TranslationsController@store');

			Route::get('{id}/Edit', 'TranslationsController@edit');
			Route::post('{id}/Edit', 'TranslationsController@update');

			Route::get('{id}/Delete', 'TranslationsController@delete');
		});
	}
}
