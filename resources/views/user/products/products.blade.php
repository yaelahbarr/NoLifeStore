@extends('user.layouts.layouts')

@section('container')
<div class="uk-container">
    <div class="flex flex-wrap -mx-4">
        @foreach($products as $product)
        <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 px-4 mb-8 mt-10">
            <div class="max-w-sm mx-auto overflow-hidden bg-white shadow-lg rounded-md">
                <img class="w-full h-40 object-cover" src="{{ ('/img/' . $product->image) }}" alt="">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $product->product_name }}</div>
                </div>
                <div class="px-6 py-4">
                    <p>Rp {{ number_format($product->price) }}</p>
                </div>
                <div class="px-6 py-4">
                    <form action="{{ route('cart.order', ['id_product' => $product->id_product]) }}" method="post">
                        @csrf
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Buy</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection