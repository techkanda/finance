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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () { 

	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

	Route::get('/', 'AdminController@index')->name('admin.dashboard');

	Route::resource('users', 'UserController');

	Route::resource('sales', 'SaleController');

	Route::resource('customers', 'CustomerController');

	Route::resource('partners', 'PartnerController');
	Route::resource('areas', 'AreaController');
	Route::resource('types', 'TypeController');

});

Route::group(['middleware' => 'auth'], function () {

	Route::resource('clients', 'ClientController');
	
});


