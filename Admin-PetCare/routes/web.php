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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin.index');
Route::get('/customer','CustomerController@index')->name('customer.index');
Route::get('/perawatan', 'PerawatanController@index');
Route::get('/rawat/{id}','PerawatanController@edit');
Route::post('/rawat/{id}/update','PerawatanController@update');


