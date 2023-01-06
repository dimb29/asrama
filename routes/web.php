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
Auth::routes();

Route::get('/', 'Controller@index');
Route::get('/home', 'Controller@index');
Route::get('/jajal', function (){ return view('jajal');});
Route::get('/detail', function(){return view('users/detail');});
Route::get('/prof-user', 'Controller@profil');
Route::post('/updatebiodata', 'Controller@updatebiodata');

Route::prefix('/daft-pesan')->group(function() {
	Route::get('/', 'controller@daftpesan');
	Route::get('/cetak_pdf', 'controller@cetak_pdf');
});

Route::get('/detail2', 'Controller@detail');
Route::get('/detail2/getdataruang/{id}', 'Controller@getdataruang');
Route::get('detail/pesan/{id}','Controller@getpesanan');
Route::get('detail/info-ruang/{id}','Controller@getinforuang');
Route::get('/detail/pemesan/{id}', 'Controller@pemesanan');
Route::get('detail/terpesan/{id}','controller@terpesan');

Route::namespace('Admin')->prefix('admin')->as('admin.')->group(function() {
	Auth::routes(['register' => false]);

	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/','HomeController@index');

	Route::prefix('setusers')->group(function() {
		Route::get('/','HomeController@setusers');
		Route::get('/modalusers/{id}','HomeController@modalusers');
		Route::post('/updateusers', 'HomeController@updateusers');
		Route::post('/importexcel','HomeController@importexcel');
	});

	Route::prefix('setpesanan')->group(function() {
		Route::get('/','HomeController@setpesanan');
		Route::get('/deletepesanan/{id}','HomeController@deletepesanan');
		Route::get('/validatepesanan/{id}', 'HomeController@validatepesanan');
		Route::get('/batalvalidasi/{id}', 'HomeController@batalvalidasi');
		Route::get('/exportdata', 'HomeController@exportdata');
	});

	Route::prefix('setruang')->group(function() {
		Route::get('/','HomeController@setruang');
		Route::get('/modalruang/{id}','HomeController@modalruang');
		Route::post('/updateruang', 'HomeController@updateruang');
		Route::post('/importruang','HomeController@importruang');
		Route::post('/importkasur','HomeController@importkasur');
	});
	Route::get('/setroom','HomeController@setroom');
	Route::get('/jmlpendaftar','HomeController@jmlpendaftar');
	Route::get('/jmlkosong','HomeController@jmlkosong');
});