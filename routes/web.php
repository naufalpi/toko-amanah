<?php

use App\Models\Product;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', function () {
    return view('frontend.home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('frontend.about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('frontend.contact', ['title' => 'Contact']);
});

// Route::get('/products', [ProductController::class, 'index']);

Route::prefix('dashboard')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('product', ProductController::class)->names('products');
});




Route::get('/dashboard/penjualan', function () {
    return view('dashboard.penjualan.index', ['title' => 'Penjualan']);
});
// Route::get('/products', function () {
//     return view('products', ['title' => 'Product', 'products' => Product::all()]);
// });

// Route::get('/products/{slug}', function ($slug) {
//     $product = Product::find($slug);
//     return view('product', ['title' => 'Single Product', 'product' => $product]);
// });