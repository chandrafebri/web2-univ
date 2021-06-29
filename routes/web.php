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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('makul', 'MakulController@index')->name('makul');
Route::get('makul-create', 'MakulController@create');
Route::get('halo', 'MakulController@halo');
Route::get('tambah-makul', 'MakulController@tambah');
Route::post('simpan-makul', 'MakulController@store')->name('simpan.makul');

Route::get('edit-makul/{id}', 'MakulController@edit')->name('makul.edit');
Route::post('update-makul/{id}', 'MakulController@update')->name('update.makul');
Route::get('hapus-makul/{id}', 'MakulController@hapus')->name('hapus.makul');
