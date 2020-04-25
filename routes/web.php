<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group([ 'prefix' => 'Backend' ], function() {
	Route::get('Modules', 'ModulesController@index');

	Route::get('Module/{id}/Active', 'ModulesController@active');
	Route::get('Module/{id}/Deactive', 'ModulesController@deactive');

});