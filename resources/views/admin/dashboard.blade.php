@extends('admin.layouts.main')

@section('container')

          <!-- Dashboard Content -->
        <div class="bg-white p-6 rounded-lg border border-gray-200 mb-4 shadow-md">
            <h2 class="text-xl font-semibold mb-4">Dashboard Overview</h2>

            <!-- Placeholder Content -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-gray-100 p-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2">Total Sales</h3>
                    <p class="text-gray-700">$10,000</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-gray-100 p-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2">New Orders</h3>
                    <p class="text-gray-700">25 orders</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-gray-100 p-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2">Pending Payments</h3>
                    <p class="text-gray-700">5 payments</p>
                </div>
            </div>
        </div>
@endsection