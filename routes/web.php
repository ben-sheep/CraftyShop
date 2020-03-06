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

//Route::get('/', function () {
//    return view('welcome');
//});




Route::get('/', 'PagesController@index')->name('pages');

Route::get('/products', 'ProductController@show')->name('products');
Route::get('/products/{slug}', 'ProductController@get')->name('products.show');
Route::post('/products/options/get', 'ProductController@getOption')->name('products.get_option');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'UserController@registerUser')->name('userCreate');
Route::get('/login', 'UserController@loginUser')->name('userLogin');
Route::post('/account/update', 'UserController@update')->name('userUpdate');

Route::get('contact', 'ContactFormController@create')->name('contact');
Route::post('contact', 'ContactFormController@store')->name('contactPost');
Route::get('contact/ThankYou', 'ContactFormController@show')->name('contactThankYou');

Route::get('/basket', 'BasketController@show')->name('basket');
Route::post('/basket/add', 'BasketController@addProduct')->name('addProduct');
Route::post('/basket/edit', 'BasketController@editQuantity')->name('editQuantity');
Route::post('/basket/delete', 'BasketController@removeItem')->name('removeItem');

Route::get('/checkout/update_details', 'CheckoutController@userDetails')->name('checkout');
Route::post('/checkout/update_details/store', 'CheckoutController@update')->name('update');
Route::get('/checkout/guest_details', 'CheckoutController@guestDetails')->name('guest_details');
Route::get('/checkout/review', 'CheckoutController@review')->name('review');
Route::get('/checkout/payment', 'CheckoutController@payment')->name('payment');
Route::get('/checkout/thank_you', 'CheckoutController@thankYou')->name('thank_you');
Route::post('/checkout/payment/store', 'CheckoutController@store')->name('payment.store');

Route::get('/test', 'TestController@test')->name('test');


Auth::routes(['verify' => true]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/account', 'PagesController@account')->name('account');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Route::get('/home', 'HomeController@index')->name('home');
