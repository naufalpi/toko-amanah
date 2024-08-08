<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('frontend.about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('frontend.contact', ['title' => 'Contact']);
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/dashboard', function () {
    return view('admin.dashboard.index', ['title' => 'Dashboard']);
});

// Route::get('/products', function () {
//     return view('products', ['title' => 'Product', 'products' => Product::all()]);
// });

// Route::get('/products/{slug}', function ($slug) {
//     $product = Product::find($slug);
//     return view('product', ['title' => 'Single Product', 'product' => $product]);
// });