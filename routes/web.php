<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MataKuliahController; // Tambahkan baris ini

Route::get('/', function () {
    return view('welcome');
});

Route::get('/absensi', [App\Http\Controllers\AbsensiController::class, 'index'])->name('absensi.index');
Route::post('/absensi/simpan', [App\Http\Controllers\AbsensiController::class, 'store'])->name('absensi.store');

Route::resource('matakuliah', MataKuliahController::class);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);