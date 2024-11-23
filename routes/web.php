<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\BlogController;

Route::get("/login", [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);

Route::get("/register", [registerController::class, 'index']);
Route::Post("/register", [registerController::class, 'auth']);


Route::get("/home", [MainPageController::class, 'index']);

Route::get("/trip", [TripController::class, 'index']);

Route::get("/blog", [BlogController::class, 'index']);
