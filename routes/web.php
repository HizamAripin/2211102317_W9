<?php

use App\Http\Controllers\BarangController;

Route::get('/', [BarangController::class, 'tampilan_awal']);
Route::post('simpan', [BarangController::class, 'buat_baru']);
