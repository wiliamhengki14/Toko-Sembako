<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\supplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// supplier
Route::get('/supplier/create', [supplierController::class, 'create_supplier'])->name('create_supplier');
Route::post('/supplier/create/store', [supplierController::class, 'store_supplier'])->name('store_supplier');
Route::get('/supplier', [supplierController::class, 'index_supplier'])->name('index_supplier');
Route::get('/supplier/{supplier}/edit', [supplierController::class, 'edit_supplier'])->name('edit_supplier');
Route::patch('/supplier/{supplier}/update', [supplierController::class, 'update_supplier'])->name('update_supplier');
Route::delete('/supplier/{supplier}/delete', [supplierController::class, 'delete_supplier'])->name('delete_supplier');

// Barang
Route::get('/barang/create', [barangController::class, 'create_barang'])->name('create_barang');
Route::post('/barang/store', [barangController::class, 'store_barang'])->name('store_barang');