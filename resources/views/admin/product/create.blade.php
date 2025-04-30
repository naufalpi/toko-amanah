@extends('admin.layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-4 bg-white rounded shadow">
    <h2 class="text-xl font-semibold mb-4">{{ $title }}</h2>
    <form method="POST" action="{{ route('admin.products.store') }}">
        @csrf

        <!-- Brand -->
        <div class="mb-4">
            <label class="block mb-1">Brand</label>
            <select name="brand_id" class="w-full border rounded p-2">
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Type -->
        <div class="mb-4">
            <label class="block mb-1">Jenis</label>
            <select name="type" class="w-full border rounded p-2">
                <option value="sepatu">Sepatu</option>
                <option value="sandal">Sandal</option>
            </select>
        </div>

        <!-- Product Code -->
        <div class="mb-4">
            <label class="block mb-1">Kode Produk</label>
            <input type="text" name="product_code" class="w-full border rounded p-2" required>
        </div>

        <!-- Size -->
        <div class="mb-4">
            <label class="block mb-1">Ukuran</label>
            <input type="text" name="size" class="w-full border rounded p-2" required>
        </div>

        <!-- Color -->
        <div class="mb-4">
            <label class="block mb-1">Warna</label>
            <input type="text" name="color" class="w-full border rounded p-2" required>
        </div>

        <!-- Stock -->
        <div class="mb-4">
            <label class="block mb-1">Stok</label>
            <input type="number" name="stock" class="w-full border rounded p-2" required>
        </div>

        <!-- Price -->
        <div class="mb-4">
            <label class="block mb-1">Harga</label>
            <input type="number" name="price" class="w-full border rounded p-2" step="0.01" required>
        </div>

        <!-- Image Path -->
        <div class="mb-4">
            <label class="block mb-1">Path Gambar</label>
            <input type="text" name="image_path" class="w-full border rounded p-2">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
        <a href="{{ route('admin.products.index') }}" class="ml-2 text-gray-600 hover:underline">Batal</a>
    </form>
</div>
@endsection
