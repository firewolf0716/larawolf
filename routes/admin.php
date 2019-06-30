<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix' => 'admin', 'namespace' => 'Auth'], function () {
	Route::get('login', 'Admin\LoginController@login')->name('auth.admin.login');
	Route::post('login', 'Admin\LoginController@loginAdmin')->name('auth.admin.loginAdmin');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Auth', 'middleware' => 'auth:admin'], function () {	
	Route::post('logout', 'Admin\LoginController@logout')->name('auth.admin.logout');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
	Route::get('register', 'AdminController@create')->name('admin.register');
	Route::post('register', 'AdminController@store')->name('admin.register.store');

	// Category Route
	Route::match( ['get', 'post'], 'category/add', 'CategoryController@add');
	Route::match( ['get', 'post'], 'category/edit/{id}', 'CategoryController@edit');
	Route::get( 'category/show/{id}', 'CategoryController@show');
	Route::get( 'category/delete/{id}', 'CategoryController@delete');
	Route::get( 'category/list', 'CategoryController@list' );
});






