<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;


Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');