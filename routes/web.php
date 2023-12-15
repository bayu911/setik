<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PenyiarController;
use App\Http\Controllers\MusikController;
use App\Http\Controllers\SiaranController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IklanController;

Route::get('/', function () {
    return view('login');
})->name('login');
Route::post('/', [AdminController::class, 'login'])->name('loginpost');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () { 
    Route::resource('penyiar', PenyiarController::class);
    Route::resource('musik', MusikController::class);
    Route::resource('siaran', SiaranController::class);
    Route::resource('jadwal', JadwalController::class);
    Route::resource('iklan', IklanController::class);
});