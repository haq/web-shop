<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Products\CreateProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('checkout', [HomeController::class, 'checkout'])
    ->name('checkout');

Route::get('create-product', CreateProduct::class)
    ->name('products.create');

require __DIR__ . '/auth.php';
