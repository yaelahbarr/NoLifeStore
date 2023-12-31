@extends('admin.layouts.main')

@section('container')
<br>
<br>
<br>

<div class="flex justify-between items-center mb-3"> 
<a href="/stock/create" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">Add Stock</a>
<div>
    <form action="/stock">
        <input type="text" name="text" class="border rounded py-1 px-2 " placeholder="Search...">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded ">Search</button>
    </form>
</div>
</div>
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
    <tbody class="bg-white divide-y divide-gray-200 ">
        @foreach($stocks as $s)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $s->product_name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">Rp. {{ number_format($s->price) }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $s->category->category_name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $s->stock }}</td>
                <td class="px-6 py-4 whitespace-no-wrap"><img src="ProductImage/{{ $s->image }}" width="100px" alt=""></td>
                <td class="px-6 py-4 whitespace-no-wrap">
                    <div class="button mb-2">
                    <a href="{{ route('stock.edit', $s->id_product) }}" class="bg-green-500 hover:bg-green-700 text-white py-1 px-5 rounded">Edit</a>
                    <form id="deleteForm" action="{{ route('stock.destroy', $s->id_product) }}" method="post">
                    </div>
                        @csrf
                        @method('delete')
                        <button type="button" onclick="confirmDelete()" class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded ">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<script>
    function confirmDelete() {
        // Gunakan fungsi confirm JavaScript untuk menampilkan konfirmasi
        var result = confirm("Are you sure you want to delete this data?");
        
        // Jika pengguna menekan tombol "OK" dalam konfirmasi
        if (result) {
            // Submit formulir untuk menghapus data
            document.getElementById('deleteForm').submit();
        }
    }
</script>
@endsection