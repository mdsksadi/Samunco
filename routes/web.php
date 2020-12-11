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

Route::get('/', 'FrontendController@index');

Auth::routes();

Route::prefix('admin')->group(function () {
    // dd('here');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm');
	Route::post('/login', 'Auth\AdminLoginController@login');
	Route::get('/', 'AdminController@index');
	Route::resource('categories', 'CategoryController');
	Route::get('/products', 'ProductController@index');
	Route::get('/product/add', 'ProductController@create');
	Route::post('/product/add', 'ProductController@store');
});
Route::get('/{url}', 'FrontendController@pages');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
