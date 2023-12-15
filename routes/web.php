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

Route::get('/admin', function () {
    return view('index');
});

Route::get('/siaran', function () {
    return view('siaran');
});

Route::get('/iklan', function () {
    return view('iklan');
});

Route::get('/musik', function () {
    return view('musik');
});

Route::get('/tambahJadwal', function () {
    return view('tambahJadwal');
});

Route::get('/tambahSiaran', function () {
    return view('tambahSiaran');
});

Route::get('/penyiar', function () {
    return view('penyiar');
});

Route::get('/login', function () {
    return view('login');
});