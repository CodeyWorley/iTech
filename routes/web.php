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

/* mail */
Route::get('contact',
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);

/* views */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/repairs', function () {
    return view('repairs');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/programming', function () {
    return view('programming');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/iphone', function () {
    return view('iphone');
});
