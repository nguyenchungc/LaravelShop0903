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
Route::get('home',"HomeController@featuredProduct")->name('getHome');
Route::get('detail',"HomeController@getDetail")->name('getDetail');
Route::get('ContactUs',"HomeController@getContactUs")->name('getContactUs');
Route::get('AboutUs',"HomeController@getAbouttUs")->name('getAbouttUs');
Route::get('blog',"HomeController@getBlog")->name('getBlog');
Route::get('checkout',"HomeController@getCheckout")->name('getCheckout');
Route::get('account',"HomeController@getAccount")->name('getAccount');
Route::get('single_product',"HomeController@getSingleProduct")->name('singleProduct');
