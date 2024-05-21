<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Product';
        $products = Product::all();
        return view('products', compact('products'))->with('title', $title);
    }
}
