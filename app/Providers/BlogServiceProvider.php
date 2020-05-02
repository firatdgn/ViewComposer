<?php

namespace App\Providers;

use App\Modules;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogServiceProvider extends ModuleServiceProvider
{
	var $name = 'Blog';

	var $manageUrl = 'Backend/Blog';

	var $description = 'Sitesinde basit mantalitede blog sayfası oluşturmak paylaşmak isteyenler oluşturulmuştur.';

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
		require __DIR__ . '../../helpers/blog.php';
	}

	protected function loadModule()
	{
		Schema::create('blog_categories', function($table) {
			$table->increments('id');
			$table->string('name', 128);
			$table->string('slug', 128);
			$table->string('seo_description', 1024)->nullable();
			$table->string('seo_keywords', 1024)->nullable();			
			$table->timestamps();
		});

		Schema::create('blog', function($table) {
			$table->increments('id');
			$table->string('title', 1024);
			$table->string('slug', 1024);
			$table->string('category_id', 512);
			$table->text('content');
			$table->string('seo_description', 1024)->nullable();
			$table->string('seo_keywords', 1024)->nullable();
			$table->timestamps();
		});
	}

	protected function dropModule()
	{
		Schema::drop('blog_categories');
		Schema::drop('blog');
	}

	protected function loadRoutes()
	{
		Route::group([ 'prefix' => $this->manageUrl, 'namespace' => 'App\Http\Controllers\Modules' ], function() {
			Route::get('/' , 'BlogController@index')->name('blog');

			Route::get('Create', 'BlogController@create')->name('blog.create');
			Route::post('Create', 'BlogController@store');

			Route::get('{id}/Edit', 'BlogController@edit')->name('blog.edit');
			Route::post('{id}/Edit', 'BlogController@update');

			Route::get('{id}/Delete', 'BlogController@delete')->name('blog.delete');

			Route::get('BlogCategories', 'BlogCategoriesController@index')->name('blog.categories');

			Route::get('BlogCategory/Create', 'BlogCategoriesController@create')->name('blog.category.create');
			Route::post('BlogCategory/Create',  'BlogCategoriesController@store');

			Route::get('BlogCategory/{id}/Edit', 'BlogCategoriesController@edit')->name('blog.category.edit');
			Route::post('BlogCategory/{id}/Edit', 'BlogCategoriesController@update');

			Route::get('BlogCategory/{id}/Delete', 'BlogCategoriesController@delete')->name('blog.category.delete');
		});
	}
}
