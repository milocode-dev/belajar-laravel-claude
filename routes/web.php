<?php

use App\Http\Controllers\HaloController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/halo", [HaloController::class, 'index']);
Route::get("/profile", [HaloController::class, 'profile']);

Route::get("/produk", [ProductController::class, 'index']);
Route::get("/produk/tambah", [ProductController::class, 'tambah']);