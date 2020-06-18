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

/*
|--------------------------------------------------------------------------
| ROUTE MAHASISWA
|--------------------------------------------------------------------------
*/

//get data mahasiswa
// Route::get('/mahasiswas','MahasiswasController@index')->name('mahasiswas.index');
// Route::get('/mahasiswas/create', 'MahasiswasController@create')->name('mahasiswas.create');
// Route::post('/mahasiswas','MahasiswasController@store')->name('mahasiswas.store');
// Route::get('/mahasiswas/{mahasiswa}','MahasiswasController@show')->name('mahasiswas.show');
// Route::get('/mahasiswas/{mahasiswa}/edit','MahasiswasController@edit')->name('mahasiswas.edit');
// Route::patch('/mahasiswas/{mahasiswa}','MahasiswasController@update')->name('mahasiswas.update');
// Route::delete('/mahasiswas/{mahasiswa}','MahasiswasController@destroy')->name('mahasiswas.destroy');

route::resource('mahasiswas','MahasiswasController');

