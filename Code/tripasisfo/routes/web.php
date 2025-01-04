<?php

use App\Http\Controllers\Transaksi;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return redirect('/barang_masuk');
});

Route::get('/barang_masuk', [ViewController::class,'barangMasuk'])->name('Barang Masuk');

Route::get('/barang_keluar', [ViewController::class,'barangKeluar'])->name('Barang Keluar');

Route::get('/stok_barang', [ViewController::class,'stokBarang'])->name('Stok Barang');

Route::prefix('form')->group(function () {
    Route::get('/barang_masuk', [ViewController::class,'formBarangMasuk'])->name('Form Barang Masuk');
    Route::get('/barang_keluar', [ViewController::class,'formBarangKeluar'])->name('Form Barang Keluar');

    // POST DATA
    Route::post('/barang_masuk', [Transaksi::class,'barangMasuk']);
    Route::post('/barang_keluar', [Transaksi::class,'barangKeluar']);
});