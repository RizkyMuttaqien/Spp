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

Route::get('siswa/lihatSpp/{nis}', 'SiswaController@ShowSpp');
Route::get('histori/{nis}', 'TransaksiController@showHistoriSiswa');

Route::group(['middleware'=>'admin'],function($route){
    Route::group(['prefix'=>'kelas'],function($route){
        $route->get('/', 'KelasController@showKelas');
        $route->get('/create', 'KelasController@create');
        $route->post('/store', 'KelasController@store');
        $route->get('/edit/{id_spp}', 'KelasController@edit');
        $route->put('/update/{id_spp}', 'KelasController@update');
        $route->get('/hapus/{id_spp}', 'KelasController@delete');
    });
    Route::group(['prefix'=>'spp'],function($route){
        $route->get('/', 'SppController@showSpp');
        $route->get('/create', 'SppController@create');
        $route->post('/store', 'SppController@store');
        $route->get('/edit/{id_spp}', 'SppController@edit');
        $route->put('/update/{id_spp}', 'SppController@update');
        $route->get('/hapus/{id_spp}', 'SppController@delete');
    });
    Route::group(['prefix'=>'petugas'],function($route){
        $route->get('/', 'PetugasController@showPetugas');
        $route->get('/hapus/{id}', 'PetugasController@hapus');
    });
});
Route::group(['middleware'=>'petugas'],function($route){
    Route::group(['prefix'=>'siswa'],function($route){
        $route->get('/', 'SiswaController@showSiswa');
        $route->get('/search', 'SiswaController@search');
        $route->get('/create', 'SiswaController@create');
        $route->post('/store', 'SiswaController@store');
        $route->get('/edit/{nis}', 'SiswaController@edit');
        $route->put('/update/{nis}', 'SiswaController@update');
        $route->get('/hapus/{nis}', 'SiswaController@delete');
    });
    //transaksi
    Route::group(['prefix'=>'transaksi'],function($route){
        $route->get('/', 'TransaksiController@showPembayaran');
        $route->get('/search', 'TransaksiController@search');
        $route->get('/bayar/{id_pembayaran}', 'TransaksiController@bayar');
        $route->post('/store', 'TransaksiController@store');
        $route->get('/cetak_pdf', 'TransaksiController@cetak_pdf');
    });
    //show Histori
    Route::group(['prefix'=>'histori'],function($route){
        $route->get('/', 'TransaksiController@showHistori');
        $route->get('/search', 'TransaksiController@searchHistori');
    });
    //CRUD SISWA

});
