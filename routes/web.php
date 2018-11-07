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

Route::get('/', 'PagesController@getHome');

Route::get('/home', 'PagesController@getHome');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');

Route::get('/messages', 'MessagesController@getMessages');

Route::get('/products', 'ProductsController@index');

Route::get('/products/create', 'ProductsController@create');

Route::post('/contact/submit', 'MessagesController@submit');

Route::post('/product/submit', 'ProductsController@submit');

Auth::routes();
