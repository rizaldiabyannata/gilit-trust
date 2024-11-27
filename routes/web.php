<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RentsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PemesananTripController;
use App\Http\Controllers\ChatUserController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\HistoryUserController;

use App\Http\Controllers\HomePengusahaController;
use App\Http\Controllers\TripsPengusahaController;
use App\Http\Controllers\RentsPengusahaController;
use App\Http\Controllers\OrderPengusahaController;
use App\Http\Controllers\ProfilePengusahaController;
use App\Http\Controllers\DetailOrderPengusaha;
use App\Http\Controllers\ChatJasaController;

Route::get("/login", [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);

Route::get("/register", [registerController::class, 'index']);
Route::Post("/register", [registerController::class, 'auth']);

Route::get("/home", [MainPageController::class, 'index']);
Route::get("/trip", [TripController::class, 'index']);
Route::get("/trippemesanan", [PemesananTripController::class, 'index']);
Route::get("/blog", [BlogController::class, 'index']);
Route::get("/rents", [RentsController::class, 'index']);
Route::get("/gallery", [GalleryController::class, 'index']);
Route::get("/chat", [ChatUserController::class, 'index']);
Route::get("/profile", [ProfileUserController::class, 'index']);
Route::get("/history", [HistoryUserController::class, 'index']);

Route::get("/pengusaha/home", [HomePengusahaController::class, 'index']);
Route::get("/pengusaha/trips", [TripsPengusahaController::class, 'index']);
Route::get("/pengusaha/rents", [RentsPengusahaController::class, 'index']);
Route::get("/pengusaha/order", [OrderPengusahaController::class, 'index']);
Route::get("/pengusaha/profile", [ProfilePengusahaController::class, 'index']);
Route::get("/pengusaha/order/detail", [DetailOrderPengusaha::class, 'index']);
Route::get("/pengusaha/chat", [ChatJasaController::class, 'index']);
