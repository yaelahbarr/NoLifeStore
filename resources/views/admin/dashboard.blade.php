dashboard blade
@extends('admin.layouts.main')

@section('container')

          <!-- Dashboard Content -->
          <br>
          <br>
        <div class="bg-white p-6 rounded-lg border border-gray-200 mb-4 shadow-md">
            <h2 class="text-xl font-semibold mb-4">Dashboard Overview</h2>

            <!-- Placeholder Content -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-gray-100 p-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2">Total Sales</h3>
                    <p class="text-gray-700">Rp. {{ number_format($totalSales) }}</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-gray-100 p-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2">Total Stock</h3>
                    <p class="text-gray-700">{{ $totalProduct }} Product</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-gray-100 p-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2">Total Customer</h3>
                    <p class="text-gray-700">{{ $totalCustomer }} Users</p>
                </div>
            </div>
        </div>
@endsection