@extends('admin.layouts.main')

@section('container')
<a href="/report">Report PDF</a>
<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Customer Name</th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Price</th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Address</th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Resi Number</th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach($order as $o)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $o->name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">Rp {{ number_format($o->sub_total) }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $o->address }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $o->resi_number }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $o->product_status }}</td>
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