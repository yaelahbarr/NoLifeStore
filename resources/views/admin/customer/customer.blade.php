customer blade
@extends('admin.layouts.main')

@section('container')
<!-- resources/views/table.blade.php -->
<br>
<br>
<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</th>
            <!-- Tambahkan kolom sesuai kebutuhan Anda -->
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach($users as $u)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $u->name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $u->email }}</td>
                <!-- Tambahkan kolom sesuai kebutuhan Anda -->
            </tr>
        @endforeach
    </tbody>
</table>

@endsection