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
})->name('home');

Route::get('/about', function () {return view('about');})->name('about');

Route::get('/service', function () {return view('service');})->name('service');

Route::get('/features', function () {return view('features');})->name('features');

Route::get('/pricing', function () {return view('pricing');})->name('pricing');

Route::get('/elements', function () {return view('elements');})->name('elements');

Route::get('/contact', function () {return view('contact');})->name('contact');

Route::get('/pay/create', 'PaymentsController@create')->name('pay');

Route::get('/payment', 'PaymentController@paymentRequest')->name('payment');

Route::get('/payment/{plane}', 'PaymentController@paymentRequest')->name('payment');
Route::post('/payment/status', 'PaymentController@paymentDone')->name('paymentreturn');

Route::get('/pay', 'PaymentController@index')->name('payNow');
Route::get('/pay/{plane}', 'PaymentController@index');

Route::any('/registerandpay', 'PaymentController@registerPay')->name('registerandpay');
Route::any('/loginpay', 'PaymentController@loginpay')->name('loginpay');

Route::get('/gen', 'HomeController@gen')->name('gen');
Route::get('/cc', function(){
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
    });
Auth::routes();

Route::get('/subscribe', 'HomeController@subscribe')->name('subscribe');
Route::get('/home', 'HomeController@index')->name('dashboard');

Route::resource('payments', 'PaymentsController');
Route::resource('services', 'ServicesController');