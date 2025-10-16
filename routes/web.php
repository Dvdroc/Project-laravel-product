<?php

use App\Http\Controllers\ControllerKategori;
use App\Http\Controllers\ControllerPorduk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return redirect()->route('produks.index');
});

Route::resource('produks', ControllerPorduk::class);
Route::resource('kategoris', ControllerKategori::class);
