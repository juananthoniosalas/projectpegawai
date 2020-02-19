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
    return view('/auth/login');
});
Route::get('/welcome', 'PegawaiController@index')->middleware('auth');
Route::post('/store', 'PegawaiController@store')->middleware('auth');
Route::get('/tambah', 'PegawaiController@tambah')->middleware('auth');
Route::get('/edit/{id}', 'PegawaiController@edit')->middleware('auth');
Route::put('/update/{id}', 'PegawaiController@update')->middleware('auth');
Route::get('/hapus/{id}', 'PegawaiController@delete')->middleware('auth');
Route::get('/cari','PegawaiController@cari')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
