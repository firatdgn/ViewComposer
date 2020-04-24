<?php

namespace App\Providers;

use App\Modules;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ShoppingServiceProvider extends ModuleServiceProvider
{

	var $name = 'Alışveriş';

	var $manageUrl = 'Backend/Shopping';

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
		require __DIR__ . '../../helpers/shopping.php';
	}

	protected function loadModule()
	{
		Schema::create('shopping_categories', function($table) {
			$table->increments('id');
			$table->tinyInteger('is_active')->default(1);
			$table->string('image', 128);
			$table->text('detail');
			$table->timestamps();
		});

		Schema::create('shopping_categories_info', function($table) {
			$table->increments('id');
			$table->integer('category_id');
			$table->string('language_code', 4);
			$table->string('name', 256);
			$table->string('short_description', 1024)->nullable();
			$table->text('description')->nullable();
			$table->string('seo_description', 256)->nullable();
			$table->string('seo_keywords', 256)->nullable();
			$table->timestamps();
		});

		Schema::create('shopping_products', function($table) {
			$table->increments('id');
			$table->tinyInteger('is_active')->default(1);
			$table->string('image', 1024)->nullable();
			$table->string('price', 2048)->nullable();
			$table->timestamps();
		});

		Schema::create('shopping_products_info', function($table) {
			$table->increments('id');
			$table->integer('product_id');
			$table->string('language_code', 4);
			$table->string('name', 1024);
			$table->string('short_description', 1024)->nullable();
			$table->text('description')->nullable();
			$table->string('seo_description', 256)->nullable();
			$table->string('seo_keywords', 256)->nullable();
			$table->timestamps();
		});

		Schema::create('shopping_products_images', function($table) {
			$table->increments('id');
			$table->integer('product_id');
			$table->string('image', 1024);
			$table->integer('sort')->default(0);
			$table->timestamps();
		});

		Schema::create('products_to_categories', function($table) {
			$table->integer('product_id');
			$table->integer('category_id');
		});

		Schema::create('shopping_products_attributes', function($table) {
			$table->increments('id');
			$table->integer('product_id');
			$table->integer('group_id');
			$table->integer('value_id');
			$table->timestamps();
		});

		Schema::create('attribute_groups', function($table) {
			$table->increments('id');
			$table->string('code', 32);
			$table->timestamps();
		});

		Schema::create('attribute_groups_info', function($table) {
			$table->increments('id');
			$table->integer('group_id');
			$table->string('language_code', 4);
			$table->string('name', 128);
			$table->timestamps();
		});

		Schema::create('attribute_values', function($table) {
			$table->increments('id');
			$table->integer('group_id');
			$table->timestamps();
		});

		Schema::create('attribute_values_info', function($table) {
			$table->increments('id');
			$table->integer('value_id');
			$table->string('language_code', 4);
			$table->string('name', 128);
			$table->timestamps();
		});

		Schema::create('currencies', function($table) {
			$table->increments('id');
			$table->tinyInteger('is_active')->default(1);
			$table->string('code', 16);
			$table->string('name', 64);
			$table->timestamps();
		});
	}

	protected function dropModule()
	{
		Schema::drop('settings');
	}

	protected function loadRoutes()
	{
		Route::group([ 'prefix' => 'Backend/Settings', 'namespace' => 'App\Http\Controllers\Modules\Settings' ], function() {
			Route::get('/' , 'SettingsController@index');

			Route::get('Create', 'SettingsController@create');
			Route::post('Create', 'SettingsController@store');

			Route::get('{id}/Edit', 'SettingsController@edit');
			Route::post('{id}/Edit', 'SettingsController@update');

			Route::get('{id}/Delete', 'SettingsController@delete');
		});
	}
}
