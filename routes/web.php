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

// Route Modul data mahasiswa

Route::get('/mahasiswas','MahasiswasController@index')->name('mahasiswas.index');
Route::get('/mahasiswas/create', 'MahasiswasController@create')->name('mahasiswas.create');
Route::post('/mahasiswas','MahasiswasController@store')->name('mahasiswas.store');
Route::get('/mahasiswas/{mahasiswa}','MahasiswasController@show')->name('mahasiswas.show');

