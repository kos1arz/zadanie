<?php

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
Route::group(['middleware' => ['web']], function () {

	Route::get('/', 'ItemsController@index');
	Route::post('/', 'ItemsController@store');
	Route::get('/create', 'ItemsController@create');
	Route::get('/{id}/edit','ItemsController@edit');
	//Route::get('/{id}','ItemsController@show')->where('id', '[0-9]+');
	Route::patch('/{id}','ItemsController@update');
	Route::delete('/{id}','ItemsController@destroy');
});