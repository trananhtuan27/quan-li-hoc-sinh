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


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('customers')->group(function () {
    Route::get('/', 'CustomerController@index')->name("customer.index");
    Route::get('add', 'CustomerController@formAdd')->name('customers.add');
    Route::post('add', 'CustomerController@add')->name('customers.add');
    Route::get('delete/{id}', 'CustomerController@delete')->name('customers.delete');
    Route::get('edit/{id}', 'CustomerController@edit')->name('customers.edit');
    Route::post('edit/{id}', 'CustomerController@update')->name('customer.update');
});
