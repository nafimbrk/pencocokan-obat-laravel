<?php

use App\Http\Controllers\ObatController;
use App\Http\Controllers\PengecekanController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\PenyakitControllerCoba;
use App\Models\Penyakit;


Route::resource('obat', ObatController::class);
Route::resource('penyakit', PenyakitController::class);

Route::get('/pengecekan', [PengecekanController::class, 'index'])->name('pengecekan.index');
Route::get('/pengecekan/{id}', [PengecekanController::class, 'show'])->name('pengecekan.show');


