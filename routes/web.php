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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::view('/', 'index');

// Route::view('/contact', 'contact');


// Route::get('customers', 'CustomersController@index');

// Route::get('customers/create', 'CustomersController@create');

// Route::post('customers', 'CustomersController@store');

// Route::get('customers/{customer}', 'CustomersController@show');

// Route::get('customers/{customer}/edit', 'CustomersController@edit');

// Route::patch('customers/{customer}', 'CustomersController@update');

// Route::delete('customers/{customer}', 'CustomersController@destroy');

// we can use this instead of the above routes
Route::resource('customers', 'CustomersController');


//to add middle where at route level
// Route::resource('customers', 'CustomersController')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
