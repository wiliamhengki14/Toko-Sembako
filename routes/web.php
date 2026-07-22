<?php

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
