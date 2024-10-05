<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookingController::class, 'index']);
Route::post('/simpan-data', [BookingController::class, 'create']);
Route::post('/edit-data/{id}', [BookingController::class, 'edit']);
Route::delete('/hapus-data/{id}', [BookingController::class, 'destroy']);
