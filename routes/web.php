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

Route::get('/tasks', function () {
    return view('tasks');
});

Route::get('/home', 'PagesController@getHome');

Route::get('/contact', 'PagesController@getContact');

Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');

Route::resource('products', 'ProductsController');

Route::get('image-gallery', 'ImageGalleryController@index');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');

//Route::resource('album', 'AlbumController');

Auth::routes();
