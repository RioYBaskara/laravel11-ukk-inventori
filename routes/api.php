<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiKategoriController;
use App\Http\Controllers\ApiKatControllerResource;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('kategori', ApiKategoriController::class);

Route::get('apiKategori', [ApiKategoriController::class, 'getAPIKategori']);

Route::post('kategori/{kategori_id}', [ApiKategoriController::class, 'updateKategori']);

Route::apiResource('kategorires', ApiKatControllerResource::class);