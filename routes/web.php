<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MainPageController;

Route::get("/login", [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);

Route::get("/register", [registerController::class, 'index']);
Route::Post("/register", [registerController::class, 'auth']);


Route::get("/home", [MainPageController::class, 'index']);
