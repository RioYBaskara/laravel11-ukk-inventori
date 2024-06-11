<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;

Route::resource('/', KategoriController::class)->middleware('auth');

Route::resource('barang', BarangController::class)->middleware('auth');

Route::get('login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class,'authenticate']);
Route::post('logout', [LoginController::class,'logout']);
Route::get('logout', [LoginController::class,'logout']);

Route::get('register', [RegisterController::class,'create']);
Route::post('register', [RegisterController::class,'store']);

Route::resource('kategori', KategoriController::class)->middleware('auth');
Route::resource('barangmasuk',BarangMasukController::class)->middleware('auth');
Route::resource('barangkeluar',BarangKeluarController::class)->middleware('auth');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('tes', TesController::class)->middleware('auth');