<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitKerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/kabar', function () {
    return view('kondisi');
});


Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/periksa', [PeriksaController::class, 'index']);

Route::get('/dokter', [DokterController::class, 'index']);

Route::get('/unitkerja', [UnitKerjaController::class, 'index']);
