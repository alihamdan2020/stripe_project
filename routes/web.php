<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;

Route::get('/', [StripeController::class,'index'])->name('index');
Route::get('/success', [StripeController::class,'success'])->name('success');
Route::post('/checkout', [StripeController::class,'checkout'])->name('checkout');
