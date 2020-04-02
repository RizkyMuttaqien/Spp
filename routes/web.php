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
    return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//transaksi
Route::get('/transaksi', 'TransaksiController@showPembayaran');
Route::get('/transaksi/search', 'TransaksiController@search');
Route::get('/transaksi/bayar/{id_pembayaran}', 'TransaksiController@bayar');
Route::post('/transaksi/store', 'TransaksiController@store');
Route::get('/transaksi/cetak_pdf', 'TransaksiController@cetak_pdf');

//show Histori
Route::get('/histori', 'TransaksiController@showHistori');
Route::get('/histori/search', 'TransaksiController@searchHistori');
Route::get('/histori/{nis}', 'TransaksiController@showHistoriSiswa');


//CRUD SISWA
Route::get('/siswa', 'SiswaController@showSiswa');
Route::get('/siswa/search', 'SiswaController@search');
Route::get('/siswa/create', 'SiswaController@create');
Route::post('/siswa/store', 'SiswaController@store');
Route::get('/siswa/lihatSpp/{nis}', 'SiswaController@ShowSpp');

//Read Petugas
Route::get('/petugas', 'PetugasController@showPetugas');
Route::get('/petugas/hapus/{id}', 'PetugasController@hapus');

//Read Spp
Route::get('/spp', 'SppController@showSpp');
Route::get('/spp/create', 'SppController@create');
Route::post('/spp/store', 'SppController@store');

//Read Kelas
Route::get('/kelas', 'KelasController@showKelas');
Route::get('/kelas/create', 'KelasController@create');
Route::post('/kelas/store', 'KelasController@store');

