<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get("/login", [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);

Route::get("/register", [RegisterController::class, 'index']);
Route::post("/register", [RegisterController::class, 'store']);
