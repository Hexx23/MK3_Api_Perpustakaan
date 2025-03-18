<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamaController;
use Illuminate\Support\Facades\Route;
Route::get('test', function () {
    return response()->json(['message' => 'API is working']);
});
    Route::apiResource('laporans', LaporanController::class);
    Route::apiResource('bukus', BukuController::class);
    Route::apiResource('peminjamans', PeminjamaController::class);