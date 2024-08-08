<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Product';
 
        // Mengambil semua produk beserta relasi yang diperlukan
        $products = Product::with(['brand', 'sizes', 'inventory'])->get();

        return view('frontend.products', compact('products'))->with('title', $title);
    }
}
