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

	var $description = 'Sistemin çoklu dil yapısına uygun olmasını sağlar.';

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
		Route::get('Backend/Translations' , 'App\Http\Controllers\Modules\TranslationsController@index')->name('translations');

		Route::group([ 'prefix' => 'Backend/Translation', 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('Create', 'TranslationsController@create')->name('translation.create');
			Route::post('Create', 'TranslationsController@store');

			Route::get('{id}/Edit', 'TranslationsController@edit')->name('trasnlation.edit');
			Route::post('{id}/Edit', 'TranslationsController@update');

			Route::get('{id}/Delete', 'TranslationsController@delete')->name('trasnlation.delete');
		});

		Route::get('Backend/Languages' , 'App\Http\Controllers\Modules\LanguagesController@index')->name('languages');

		Route::group([ 'prefix' => 'Backend/Language', 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('Create', 'LanguagesController@create')->name('language.create');
			Route::post('Create', 'LanguagesController@store');

			Route::get('{id}/Edit', 'LanguagesController@edit')->name('language.edit');
			Route::post('{id}/Edit', 'LanguagesController@update');

			Route::get('{id}/Delete', 'LanguagesController@delete')->name('language.delete');
		});
	}
}
