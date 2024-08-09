<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakananController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/makanan', [MakananController::class, 'index'])->name('index_makanan');
Route::post('/tambah_makanan', [MakananController::class, 'create'])->name('create_makanan');
