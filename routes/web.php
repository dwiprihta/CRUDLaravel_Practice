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

// Route::get('/', function () {
//     return view('welcome');
// });

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

//upload foto
route::get('/file-upload','fileUploadController@fileUpload');
route::post('/file-upload','fileUploadController@prosesFileUpload');

Route::get('/daftar-mahasiswa', 'MahasiswasController@daftarMahasiswa');
Route::get('/tabel-mahasiswa', 'MahasiswasController@tabelMahasiswa');
Route::get('/blog-mahasiswa', 'MahasiswasController@blogMahasiswa');

Route::get('/', 'SessionController@index');
Route::get('/buat-session', 'SessionController@buatSession');
Route::get('/akses-session', 'SessionController@aksesSession');
Route::get('/hapus-session', 'SessionController@hapusSession');
Route::get('/flash-session', 'SessionController@flashSession');


