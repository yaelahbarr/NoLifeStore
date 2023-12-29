@extends('user.layouts.layouts')

@section('container')
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-semibold mb-4">Shopping Cart</h1>
    @php
        $subtotal = 0; 
    @endphp
        @foreach($orderedItems as $p)
        <div class="grid grid-cols-2 gap-4">
                <div class="bg-white p-4 shadow-md rounded-md">
                    <h2 class="text-xl font-semibold">{{ $p->product->product_name }}</h2>
                    <p class="text-gray-600">Rp {{ number_format($p->product->price) }}</p>
                    <p class="text-gray-800 mt-2">Lorem IPsum</p>
                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">Remove</button>
                </div>
                @php
                    $subtotal += $p->total_order * $p->product->price;
                @endphp
        </div>
        @endforeach

        <div class="mt-8">
            <p class="text-xl font-semibold">Total: Rp {{ number_format($subtotal) }}</p>
            <button class="mt-4 bg-green-500 text-white px-6 py-3 rounded-md">Checkout</button>
        </div>
</div>
@endsection