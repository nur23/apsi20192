<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/supervisor', 'Auth\SLoginController@showLoginForm');    	

Route::get('/supervisor/logout', 'Auth\SLoginController@logout');
Route::post('/supervisor/login','Auth\SLoginController@login')->name("supervisor.login");

Route::get('/supervisor/home', 'SupervisorController@home');
Route::get('/supervisor/listmedrep', 'SupervisorController@medrep');
Route::get('/supervisor/{medrep}', 'SupervisorController@showTugas');
Route::get('/supervisor/tugas/{medrep}', 'SupervisorController@inputTugas');
Route::get('/supervisor/target/{medrep}', 'SupervisorController@targetMedrep');
Route::post('/supervisor/updateTarget/{medrep}','SupervisorController@updateTarget')->name("superv.updateTarget");
Route::post('/supervisor/storeTugas/{medrep}','SupervisorController@storeTugas')->name("superv.storeTugas");

//medrep
Route::get('/medrep', 'Auth\MLoginController@showLoginForm');
Route::post('/medrep/login', 'Auth\MLoginController@login')->name("medrep.login");
Route::get('/medrep/logout', 'Auth\MLoginController@logout');

//produk
Route::get('produk', 'ProdukController@produk');
Route::get('produk/input', 'ProdukController@input');
Route::post('produk/input/produk', 'ProdukController@input_produk')->name("produk.produk");
Route::post('produk/edit/produk/{produk}', 'ProdukController@edit_produk')->name("produk.edit");
Route::get('produk/detail/{produk}', 'ProdukController@detail');
Route::get('produk/edit/{produk}', 'ProdukController@edit');

//laporan
Route::get('laporan', 'LaporanController@home');

//medrep
Route::get('medrep/home', 'C_Medrep@homeMedrep');

Route::get('medrep/produk', 'C_Medrep@displayProduk');

Route::get('medrep/datadokter', 'C_Medrep@displayDokter');

Route::get('/medrep/datadokter/inputpotensi/{dokter}', 'C_Medrep@inputPotensi')->name('input.potensi');

Route::get('/medrep/inputpotensiAction/{dokter}', 'C_Medrep@inputpotensiAction')->name('input.potensi.action');

Route::get('/medrep/datadokter/viewjadwal/{dokter}', 'C_Medrep@viewJadwal')->name('view.jadwal');

Route::get('/medrep/datadokter/viewjadwal/tambah/{dokter}', 'C_Medrep@tambahJadwal')->name('tambah.jadwal');

Route::get('/medrep/datadokter/viewjadwal/edit/{jadwal}', 'C_Medrep@editJadwal')->name('edit.jadwal');

Route::get('/medrep/datadokter/viewjadwal/editAction/{jadwal}', 'C_Medrep@editJadwalAction')->name('edit.jadwal.action');

Route::get('/medrep/datadokter/viewjadwal/tambahaction/{dokter}', 'C_Medrep@tambahJadwalAction')->name('tambah.jadwal.action');

Route::get('/medrep/datadokter/viewjadwal/delete/{jadwal}', 'C_Medrep@deleteJadwal')->name('delete.jadwal');

//Yono
Route::get('medrep/tugas/{id}', 'C_Medrep@displayTugas');
Route::get('medrep/inputjadwal/{id}','C_Medrep@inputJadwal');
Route::post('medrep/update/{id}', 'C_Medrep@update');
Route::get('medrep/transaksi/{tugas}','C_Medrep@displayTransaksi');
Route::get('medrep/inputtransaksi/{tugas}','C_Medrep@inputTransaksi');

Route::post('medrep/insert/{id}', 'C_Medrep@insert')->name("medrep.transaksi");

//RinRin
Route::get('/medrep/InputDokter', 'C_Medrep@InputDokter');

Route::post('/act_InputDokter', 'C_Medrep@Store_InputDokter');
