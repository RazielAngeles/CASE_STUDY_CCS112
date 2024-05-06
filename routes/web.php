<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carController;

Route::get('/', function () {
    return view('welcome');
});

// routes/api.php

Route::get("/api/products", [carController::class, "getCars"])->name("products-api");
Route::get("/api/cart", [carController::class, "getCart"])->name("cart-api");
