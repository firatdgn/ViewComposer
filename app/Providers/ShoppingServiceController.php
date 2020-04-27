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
			$table->string('name', 256);
			$table->string('short_description', 1024)->nullable();
			$table->text('description')->nullable();
			$table->string('seo_description', 256)->nullable();
			$table->string('seo_keywords', 256)->nullable();
			$table->tinyInteger('is_active')->default(1);
			$table->string('image', 128)->nullable();
			$table->timestamps();
		});

		Schema::create('shopping_products', function($table) {
			$table->increments('id');
			$table->string('name', 1024);
			$table->string('short_description', 1024)->nullable();
			$table->text('description')->nullable();
			$table->string('seo_description', 256)->nullable();
			$table->string('seo_keywords', 256)->nullable();
			$table->tinyInteger('is_active')->default(1);
			$table->string('image', 1024)->nullable();
			$table->string('price', 2048)->nullable();
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
			$table->string('name', 128);
			$table->timestamps();
		});

		Schema::create('attribute_values', function($table) {
			$table->increments('id');
			$table->integer('group_id');
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
		Schema::drop('shopping_categories');
		Schema::drop('shopping_products');
		Schema::drop('shopping_products_images');
		Schema::drop('products_to_categories');
		Schema::drop('shopping_products_attributes');
		Schema::drop('attribute_groups');
		Schema::drop('attribute_values');
		Schema::drop('currencies');
	}

	protected function loadRoutes()
	{
		Route::group([ 'prefix' => $this->manageUrl, 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('AttributeGroups', 'ShoppingController@attributeGroups');

			Route::get('AttributeGroup/Create', 'ShoppingController@newAttributeGroups');
			Route::post('AttributeGroup/Create', 'ShoppingController@storeAttributeGroups');

			Route::get('AttributeGroup/{id}/Edit', 'ShoppingController@editAttributeGroups');
			Route::post('AttributeGroup/{id}/Edit', 'ShoppingController@updateAttributeGroups');

			Route::get('AttributeGroup/{id}/Delete', 'ShoppingController@deleteAttributeGroup');

			Route::get('AttributeGroup/Values', 'ShoppingController@values');

			Route::get('AttributeGroup/{id}/ValueAdd', 'ShoppingController@newValueForAttributeGroup');
			Route::post('AttributeGroup/{id}/ValueAdd', 'ShoppingController@storeValueForAttributeGroup');

			Route::get('AttributeGroup/Value/{id}/Edit', 'ShoppingController@editAttributeGroupValue');
			Route::post('AttributeGroup/Value/{id}/Edit', 'ShoppingController@updateAttributeGroupValue');

			Route::get('AttributeGroup/Value/{id}/Delete', 'ShoppingController@deleteAttributeGroupValue');

			Route::get('Categories', 'ShoppingController@categories');

			Route::get('Category/Create', 'ShoppingController@newCategory');
			Route::post('Category/Create', 'ShoppingController@storeCategory');

			Route::get('Category/{id}/Edit', 'ShoppingController@editCategory');
			Route::post('Category/{id}/Edit', 'ShoppingController@updateCategory');

			Route::get('Category/{id}/Delete', 'ShoppingController@deleteCategory');

			Route::get('Products', 'ShoppingController@products');

			Route::get('Product/Create', 'ShoppingController@newProduct');
			Route::post('Product/Create', 'ShoppingController@storeProduct');

			Route::get('Product/{id}/Edit', 'ShoppingController@editProduct');
			Route::post('Product/{id}/Edit', 'ShoppingController@updateProduct');

			Route::get('Product/{id}/Delete', 'ShoppingController@deleteProduct');

			Route::get('Product/{id}/DefineAnAttribute', 'ShoppingController@defineAnAttribute');
			Route::post('Product/{id}/DefineAnAttribute', 'ShoppingController@storeDefineAnAttribute');
		});
	}
}
