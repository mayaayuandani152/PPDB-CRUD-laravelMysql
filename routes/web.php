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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/daftar', 'DaftarController@index')->name('daftar.index');
    Route::post('/daftar/store', 'DaftarController@store')->name('daftar.store');
    Route::post('/daftar/{id}/update', 'DaftarController@update')->name('daftar.update');
    Route::get('/daftar/{id}/delete', 'DaftarController@destroy')->name('daftar.delete');
});
