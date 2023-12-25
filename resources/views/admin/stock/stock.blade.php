@extends('admin.layouts.main')

@section('container')
<button>Add Stock</button>
<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Product Name</th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Price</th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Category</th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Stock</th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Image</th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</th>
            <!-- Tambahkan kolom sesuai kebutuhan Anda -->
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach($stocks as $s)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $s->product_name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">Rp. {{ number_format($s->price) }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $s->category->category_name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $s->stock }}</td>
                <td class="px-6 py-4 whitespace-no-wrap"><img src="{{ $s->image }}" width="100px" alt=""></td>
                <td class="px-6 py-4 whitespace-no-wrap">
                    <button>edit</button>
                    <button>delete</button>
                </td>
                <!-- Tambahkan kolom sesuai kebutuhan Anda -->
            </tr>
        @endforeach
    </tbody>
</table>
@endsection