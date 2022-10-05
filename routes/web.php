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
    return view('admin/dashboard');
});


Route::get('login', 'LoginController@index')->name('login');
Route::post('login', 'LoginController@store')->name('post_login');
Route::get('logout', 'LoginController@destroy')->name('logout');

//ADMIN
Route::get('dashboard', 'AdminDashboardController@index')->name('admin_dashboard');

//CLIENT
Route::get('list_pengajuan', 'ClientPengajuanController@index')->name('client_list_pengajuan');
Route::get('tambah_pengajuan', 'ClientPengajuanController@create')->name('tambah_pengajuan');
Route::post('tambah_pengajuan', 'ClientPengajuanController@store')->name('post_tambah_pengajuan');


Route::get('dashboard', 'ClientDashboardController@index')->name('client_dashboard');



Route::get('forgotpass', function () {
    return view('forgotpass');
});

Route::get('form', function () {
    return view('form');
});