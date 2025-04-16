<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/quienes-somos', [AboutController::class, 'index'])->name('about');
Route::get('/carrito', [CartController::class, 'index'])->name('cart');
Route::get('/productos/{product}', [ProductController::class, 'show'])->name('products.show');

// Autenticación
Route::middleware('guest')->group(function () {
    Route::get('/registro', [AuthController::class, 'register'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
});
