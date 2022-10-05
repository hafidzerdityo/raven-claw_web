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


Route::get('login', function(){
    return view('login');
});
Route::get('list_pengajuan', function () {
    return view('admin/list_pengajuan');
});

Route::get('riwayat_pengajuan', function () {
    return view('admin/riwayat_pengajuan');
});

Route::get('list_client', function () {
    return view('admin/list_client');
});

Route::get('forgotpass', function () {
    return view('forgotpass');
});