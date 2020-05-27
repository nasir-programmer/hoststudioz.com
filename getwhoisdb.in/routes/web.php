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

Route::get('/server-plan', function () { return view('serviceplane'); })->name('serviceplane');
Route::get('/payment/{plane}', 'PaymentController@paymentRequest')->name('payment');
Route::get('/order-vps/{plane}', 'OrderController@index');
Route::any('/order-checkout', 'OrderController@store')->name('checkout');
// Route::get('/invoice/{invoice}', 'OrderController@show')->name('invoice');
Route::get('/invoice', 'OrderController@show')->name('invoice');

Route::get('/cc', function(){
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
    });
Auth::routes();

Route::get('/pay', function () {
    return view('payment', ['name' => 'James']);
})->name('pay');
// Route::get('/pay', 'HomeController@pay')->name('pay');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/download-data/{fileName}', 'HomeController@download')->name('download-data');