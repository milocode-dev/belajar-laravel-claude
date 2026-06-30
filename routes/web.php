<?php

use App\Http\Controllers\HaloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/halo", [HaloController::class, 'index']);
Route::get("/profile", [HaloController::class, 'profile']);