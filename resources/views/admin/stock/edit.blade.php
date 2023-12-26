@extends('admin.layouts.main')

@section('container')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-semibold mb-4">Edit Product</h1>

        <form action="{{ route('stock.update', $stock->id_product) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <!-- Kategori -->
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="id_category" id="category" " class="mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="{{ $stock->id_category }}">{{ $stock->category->category_name }}</option>
                    @foreach ($category as $c)
                    <option value="{{ $c->id_category }}">{{ $c->category_name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Nama Produk -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                <input type="text" value="{{ $stock->product_name }}"  name="product_name" id="name" class="mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <!-- Harga -->
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" name="price" value="{{ $stock->price }}"  id="price" class="mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <!-- Stok -->
            <div class="mb-4">
                <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                <input type="number" name="stock" value="{{ $stock->stock }}"  id="stock" class="mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <!-- Gambar -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" value="{{ $stock->image }}"  id="image" class="mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <!-- Tombol Submit -->
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Save</button>
            </div>
        </form>
</div>
@endsection