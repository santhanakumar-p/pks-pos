<?php

use App\Models\Buyer;
use App\Models\Product;
use App\Models\Seller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return Product::all();
});

Route::get('/buyers', function () {
    return Buyer::all();
});

Route::get('/sellers', function () {
    return Seller::all();
});
