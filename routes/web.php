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
    return view('home');
})->name('home');

Route::get('/login', 'LoginController@showFormLogin')->name('form-login');
Route::post('/login', 'LoginController@login')->name('login');


Route::prefix('admin')->group(function () {
    Route::prefix('customers')->group(function () {
        Route::get('/', 'CustomerController@getAll')->name('customers.list');
        Route::get('/create', 'CustomerController@create')->name('customers.create');
        Route::post('/store', 'CustomerController@store')->name('customers.store');
        Route::get('{id}/delete', 'CustomerController@delete')->name('customers.delete');
        Route::get('{id}/edit','CustomerController@edit')->name('customers.edit');
        Route::post('{id}/update', 'CustomerController@update')->name('customers.update');
    });

    Route::prefix('users')->group(function () {
        Route::get('/list', 'UserController@getAll')->name('users.list');
        Route::get('/{id}/change-password','UserController@showFormChangePassword')->name('users.showFormChangePassword');
        Route::post('/{id}/change-password','UserController@changePassword')->name('users.changePassword');

    });
});


