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
			Route::get('/' , 'BlogController@index');

			Route::get('Create', 'BlogController@create');
			Route::post('Create', 'BlogController@store');

			Route::get('{id}/Edit', 'BlogController@edit');
			Route::post('{id}/Edit', 'BlogController@update');

			Route::get('{id}/Delete', 'BlogController@delete');
		});
	}
}
