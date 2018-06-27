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

Route::get('/template', function () {
    return view('template');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/developement', function () {
    return view('developement');
});

/* mail */
Route::get('contact',
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);

/* Categories */
Route::get('/', function () {
    return view('home');
});

Route::get('/repairs', function () {
    return view('repairs');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/design', function () {
    return view('design');
});

/* repair views */
Route::get('/iphone-repair', function () {
    return view('iphone-repair');
});

Route::get('/ipad-repair', function () {
    return view('ipad-repair');
});

Route::get('/ipod-repair', function () {
    return view('ipod-repair');
});

Route::get('/smart-watch-repair', function () {
    return view('smart-watch-repair');
});

Route::get('/console-repair', function () {
    return view('console-repair');
});

Route::get('/hand-held-repair', function () {
    return view('hand-held-repair');
});

Route::get('/electronics-repair', function () {
    return view('electronics-repair');
});

Route::get('/mac-repair', function () {
    return view('mac-repair');
});

Route::get('/pc-repair', function () {
    return view('pc-repair');
});

Route::get('/samsung-repair', function () {
    return view('samsung-repair');
});

/* Services Vews */

Route::get('it-services', function () {
return view('it-services');
});

Route::get('computer-clean-up', function () {
return view('computer-clean-up');
});

Route::get('hard-drive-clone', function () {
return view('hard-drive-clone');
});

Route::get('network-services', function () {
return view('network-services');
});

Route::get('printer-services', function () {
return view('printer-services');
});
