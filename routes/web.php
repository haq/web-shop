<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('checkout', [HomeController::class, 'checkout'])
    ->name('checkout');

require __DIR__ . '/auth.php';
