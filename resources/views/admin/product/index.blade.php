@extends('admin.layouts.app')

@section('content')

<div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-semibold text-gray-700">Daftar Produk</h2>
    <a href="{{ route('admin.products.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
        + Tambah Produk
    </a>
</div>

<div class="relative overflow-x-auto">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">NO</th>
              <th scope="col" class="px-6 py-3">Brand</th>
              <th scope="col" class="px-6 py-3">Jenis</th>
              <th scope="col" class="px-6 py-3">Kode</th>
              <th scope="col" class="px-6 py-3">Ukuran</th>
              <th scope="col" class="px-6 py-3">Warna</th>
              <th scope="col" class="px-6 py-3">Stok</th>
              <th scope="col" class="px-6 py-3">Harga</th>
              <th scope="col" class="px-6 py-3">Gambar</th>
              <th scope="col" class="px-6 py-3">Action</th>
              
          </tr>
      </thead>
      <tbody>
          @forelse ($products as $product)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                  <td class="px-6 py-4">{{ $loop->iteration }}</td>
                  <td class="px-6 py-4">{{ $product->brand->name ?? '-' }}</td>
                  <td class="px-6 py-4">{{ ucfirst($product->type) }}</td>
                  <td class="px-6 py-4">{{ $product->product_code }}</td>
                  <td class="px-6 py-4">{{ $product->size }}</td>
                  <td class="px-6 py-4">{{ ucfirst($product->color) }}</td>
                  <td class="px-6 py-4">{{ $product->stock }}</td>
                  <td class="px-6 py-4">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                  <td class="px-6 py-4">
                      <img src="{{ asset($product->image_path) }}" alt="gambar" width="60">
                  </td>
                  <td class="px-6 py-4">
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                 

                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</button>
                    </form>
                  <td>
              </tr>
          @empty
              <tr><td colspan="9">Tidak ada data</td></tr>
          @endforelse
      </tbody>
  </table>
</div>



 

@endsection