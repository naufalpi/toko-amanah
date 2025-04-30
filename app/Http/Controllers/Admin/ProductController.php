<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Brand;

class ProductController extends Controller
{
    public function index()
    {
        {
            $products = Product::with('brand')->get(); // eager load relasi brand
            return view('admin.product.index', compact('products'));
        }

    }

    // Tampilkan form tambah produk
    public function create()
    {
        $brands = Brand::all();
        return view('admin.product.create', [
            'title' => 'Tambah Produk',
            'brands' => $brands
        ]);
    }

    // Simpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'type' => 'required|in:sepatu,sandal',
            'product_code' => 'required|unique:products,product_code',
            'size' => 'required|string',
            'color' => 'required|string',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'image_path' => 'nullable|string',
        ]);

        Product::create($request->all());

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Tampilkan form edit
    public function edit(Product $product)
    {
        $brands = Brand::all();
        return view('admin.product.edit', [
            'product' => $product,
            'brands' => $brands,
            'title' => 'Edit Produk'
        ]);
    }

    // Simpan perubahan
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'type' => 'required|in:sepatu,sandal',
            'product_code' => 'required',
            'size' => 'required|string',
            'color' => 'required',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'image_path' => 'nullable|string',
        ]);
        

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui.');

    }

    // Hapus produk
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus.');
    }

    
}
