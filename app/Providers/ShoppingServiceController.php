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
			$table->string('seo_description', 256)->nullable();
			$table->string('seo_keywords', 256)->nullable();
			$table->tinyInteger('is_active')->default(1);
			$table->string('image', 128)->nullable();
			$table->timestamps();
		});

		Schema::create('shopping_category_product', function($table) {
			$table->increments('id');
			$table->integer('category_id');
			$table->integer('product_id');
			$table->timestamps();
		});

		Schema::create('orders', function($table) {
			$table->increments('id');
			$table->tinyInteger('shipping_option');
			$table->tinyInteger('payment_option');
			$table->integer('order_status_id');
			$table->integer('user_id');
			$table->integer('shipping_address_id');
			$table->integer('billing_address_id');
			$table->timestamps();
		});

		Schema::create('order_products', function($table) {
			$table->increments('id');
			$table->integer('product_id');
			$table->integer('order_id');
			$table->double('qty', 20, 6);
			$table->double('price', 20, 6);
			$table->timestamps();
		});

		Schema::create('order_status', function($table) {
			$table->increments('id');
			$table->string('name', 1024);
			$table->tinyInteger('default')->default(0);
			$table->timestamps();
		});

		Schema::create('order_product_attributes', function($table) {
			$table->increments('id');
			$table->integer('order_product_id');
			$table->integer('attribute_id');
			$table->integer('attribute_value_id');
			$table->timestamps();
		});

		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('name', 128);
			$table->string('email', 128);
			$table->string('password', 512);
			$table->timestamps();
		});

		Schema::create('address', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->tinyInteger('type');
			$table->string('first_name', 32);
			$table->string('last_name', 32);
			$table->string('company_name', 32);
			$table->string('address1', 128);
			$table->string('address2', 128);
			$table->string('postcode', 32);
			$table->string('city', 32);
			$table->string('state', 32);
			$table->string('country', 32);
			$table->string('phone', 32);
			$table->timestamps();
		});

		Schema::create('attributes', function($table) {
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

		Schema::create('products', function($table) {
			$table->increments('id');
			$table->tinyInteger('type');
			$table->string('name', 1024);
			$table->string('slug', 1024);
			$table->text('description')->nullable();
			$table->string('seo_description', 256)->nullable();
			$table->string('seo_keywords', 256)->nullable();
			$table->tinyInteger('is_active')->default(1);
			$table->double('price', 20, 6)->nullable();
			$table->integer('main_product_id')->nullable();
			$table->timestamps();
		});

		Schema::create('attribute_product', function($table) {
			$table->increments('id');
			$table->integer('attribute_id');
			$table->integer('product_id');
			$table->timestamps();
		});

		Schema::create('attribute_product_values', function($table) {
			$table->increments('id');
			$table->integer('attribute_id');
			$table->integer('product_id');
			$table->integer('variation_id');
			$table->integer('attribute_value_id');
			$table->timestamps();
		});

		Schema::create('products_images', function($table) {
			$table->increments('id');
			$table->integer('product_id');
			$table->string('image', 1024);
			$table->integer('sort')->default(0);
			$table->timestamps();
		});


		Schema::create('wishlist', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('product_id');
			$table->timestamps();
		});
	}

	protected function dropModule()
	{
		Schema::drop('shopping_categories');
		Schema::drop('shopping_category_product');
		Schema::drop('orders');
		Schema::drop('order_products');
		Schema::drop('order_status');
		Schema::drop('order_product_attributes');
		Schema::drop('users');
		Schema::drop('address');
		Schema::drop('attributes');
		Schema::drop('attribute_values');
		Schema::drop('products');
		Schema::drop('attribute_product');
		Schema::drop('attribute_product_values');
		Schema::drop('products_images');
		Schema::drop('wishlist');
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
