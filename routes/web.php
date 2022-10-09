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

Route::get('/', 'LoginController@index')->name('login');


Route::get('login', 'LoginController@index')->name('login');
Route::post('login', 'LoginController@store')->name('post_login');

Route::get('logout', 'LoginController@destroy')->name('logout');

//CLIENT
    Route::get('client_list_pengajuan', 'ClientPengajuanController@index')->name('client_list_pengajuan');
    Route::get('client_tambah_pengajuan', 'ClientPengajuanController@create')->name('tambah_pengajuan');
    Route::post('client_tambah_pengajuan', 'ClientPengajuanController@store')->name('post_tambah_pengajuan');    
    Route::get('dashboard', 'AdminDashboardController@index')->name('admin_dashboard');
    Route::get('list_pengajuan', 'AdminPengajuanController@index')->name('admin_list_pengajuan');
    Route::get('detail_pengajuan/{id}', 'AdminPengajuanController@show')->name('admin_detail_pengajuan');
    Route::get('admin_edit_pengajuan/{id}', 'AdminPengajuanController@edit')->name('admin_edit_pengajuan');
    Route::get('riwayat_pengajuan', 'AdminPengajuanController@history')->name('admin_riwayat_pengajuan');
    Route::get('client', 'ClientManagementController@index')->name('admin_list_client');

Route::get('forgotpass', function () {
    return view('forgotpass');
});
