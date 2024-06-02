<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\pegawaiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/pasien', function () {
    return view('Pasien');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/pegawai', [pegawaiController::class, 'index']);
Route::get('/admin/pasien', [PasienController::class, 'index']);
