<?php

namespace App\Providers;

use App\Statics;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MenusServiceProvider extends ModuleServiceProvider
{

	var $name = 'Menüler';

	var $manageUrl = 'Backend/Menus';

	var $description = 'Birbiriyle bağlantılı menüler oluşturmanızı sağlar.';

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
		require __DIR__ . '../../helpers/menus.php';
	}

	protected function loadModule()
	{
		Schema::create('menus', function($table) {
			$table->increments('id');
			$table->string('name', 1024);
			$table->string('description', 2048)->nullable();
			$table->timestamps();
		});

		Schema::create('menu_content', function($table) {
			$table->increments('id');
			$table->integer('menu_id');
			$table->integer('parent_id')->nullable();
			$table->string('name', 1024);
			$table->string('description', 2048)->nullable();
			$table->integer('sort')->default(0)->nullable();
			$table->text('url')->nullable();
			$table->string('icon', 1024)->nullable();
			$table->tinyInteger('is_html')->default(0);
			$table->timestamps();
		});
	}

	protected function dropModule()
	{
		Schema::drop('menus');
		Schema::drop('menu_content');
	}

	protected function loadRoutes()
	{
		Route::get('Backend/Menus' , 'App\Http\Controllers\Modules\MenusController@index')->name('menus');

		Route::group([ 'prefix' => 'Backend/Menu/', 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('Create', 'MenusController@create')->name('menu.create');
			Route::post('Create', 'MenusController@store');

			Route::get('{id}/Edit', 'MenusController@edit')->name('menu.edit');
			Route::post('{id}/Edit', 'MenusController@update');

			Route::get('{id}/Delete', 'MenusController@delete')->name('menu.delete');

			Route::get('Menu/{id}/AddItem', 'MenusController@addItem')->name('menu.item.create');
			Route::post('Menu/{id}/AddItem', 'MenusController@storeItem');

			Route::get('Menu/Item/{id}/Edit', 'MenusController@editItem')->name('menu.item.edit');
			Route::post('Menu/Item/{id}/Edit', 'MenusController@updateItem');

			Route::get('Menu/Item/{id}/Delete', 'MenusController@DeleteItem')->name('menu.item.delete');

			Route::get('{id}', 'MenusController@show')->name('menu.show');
		});
	}
}
