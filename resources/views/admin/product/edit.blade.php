@extends('admin.layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-4 bg-white rounded shadow">
    <h2 class="text-xl font-semibold mb-4">{{ $title }}</h2>
    <form method="POST" action="{{ route('admin.products.update', $product) }}">
        @csrf
        @method('PUT')   

        <!-- Input Type -->
    <div class="mb-4">
        <label class="block mb-1">Jenis</label>
        <select name="type" class="w-full border rounded p-2">
            <option value="sepatu" {{ $product->type == 'sepatu' ? 'selected' : '' }}>Sepatu</option>
            <option value="sandal" {{ $product->type == 'sandal' ? 'selected' : '' }}>Sandal</option>
        </select>
    </div>

    <!-- Input Product Code -->
    <div class="mb-4">
        <label class="block mb-1">Kode Produk</label>
        <input type="text" name="product_code" value="{{ old('product_code', $product->product_code) }}" class="w-full border rounded p-2">
    </div>

    <!-- Input Size -->
    <div class="mb-4">
        <label class="block mb-1">Ukuran</label>
        <input type="text" name="size" value="{{ old('size', $product->size) }}" class="w-full border rounded p-2">
    </div>

    <!-- Input Color -->
    <div class="mb-4">
        <label class="block mb-1">Warna</label>
        <input type="text" name="color" value="{{ old('color', $product->color) }}" class="w-full border rounded p-2">
    </div>

    <!-- Input Stock -->
    <div class="mb-4">
        <label class="block mb-1">Stok</label>
        <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" class="w-full border rounded p-2">
    </div>

    <!-- Input Price -->
    <div class="mb-4">
        <label class="block mb-1">Harga</label>
        <input type="number" name="price" value="{{ old('price', $product->price) }}" step="0.01" class="w-full border rounded p-2">
    </div>

    <!-- Input Image Path -->
    <div class="mb-4">
        <label class="block mb-1">Path Gambar</label>
        <input type="text" name="image_path" value="{{ old('image_path', $product->image_path) }}" class="w-full border rounded p-2">
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
    <a href="{{ route('admin.products.index') }}" class="ml-2 text-gray-600 hover:underline">Batal</a>
</form>
</div>
@endsection
