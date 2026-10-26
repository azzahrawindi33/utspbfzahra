<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/shop', [LandingController::class, 'shop'])->name('landing.shop');
Route::get('/shop-detail', [LandingController::class, 'shopDetail'])->name('landing.shop-detail');
Route::get('/cart', [LandingController::class, 'cart'])->name('landing.cart');
Route::get('/checkout', [LandingController::class, 'checkout'])->name('landing.checkout');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');

use App\Http\Controllers\MaxtonController;

Route::get('/maxton', [MaxtonController::class, 'index']);