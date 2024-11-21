<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\MainPageController;

Route::get("/login", [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);

Route::get("/register", [registerController::class, 'index']);

Route::get("/main", [MainPageController::class, 'index']);


