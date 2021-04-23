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

Route::get('home', function () {
    return view('main');
});

Route::get('/data-pegawai','PegawaiController@index')->name('data-pegawai');
Route::get('/create-pegawai','PegawaiController@create')->name('create-pegawai');
Route::get('/simpan-pegawai','PegawaiController@store')->name('simpan-pegawai');
Route::get('/edit-pegawai','PegawaiController@edit')->name('edit-pegawai');
Route::get('/delete-pegawai','PegawaiController@destroy')->name('delete-pegawai');
