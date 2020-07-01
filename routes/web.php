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

Route::post('/auth/login',"Auth\LoginController@login");
Route::get('/auth/index',"Auth\IndexController@index");
Route::post('/auth/register',"Auth\RegisterController@register");
Route::get('/auth/login',"Auth\LoginController@index")->name('auth.login');
Route::get('/auth/register',"Auth\RegisterController@index")->name('auth.register');
Route::get('/admin/dashboard',"Admin\DashboardController@index")->name('admin.dashboard');
Route::get('/home',"User\HomeController@index")->name('home');
Route::get('/auth/logout',"User\HomeController@logout");
//Route::post('/home', "HomeConTroller@store" );
Route::get('/admin/create',"Admin\DashboardController@form");
Route::post('/admin/create',"Admin\DashboardController@store");
Route::delete('/admin/dashboard/{id}',"Admin\DashboardConTroller@destroy" );
Route::get('/auth/logout',"User\HomeController@logout");
Route::get('/admin/{id}/edit',"Admin\DashboardConTroller@edit");
Route::patch('/admin/{id}',"Admin\DashboardConTroller@update");
Route::get('/user/detail/{id}',"User\HomeController@getsanpham");

Route::get('/user/cart',"Auth\CartController@indexCart");
Route::get('/user/cart/{id}',"Auth\CartController@addCart");
Route::delete('/user/cart/{id}',"Auth\CartController@destroyCart" );
Route::get('/user/cart/{id}/increase',"Auth\CartController@increase");
Route::get('/user/cart/{id}/crease',"Auth\CartController@crease");
Route::get('/user/search',"User\HomeController@search");
Route::get('/user/pay',"User\HomeController@pay");
Route::get('/user/order',"User\HomeController@order");

 



