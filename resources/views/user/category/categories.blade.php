@extends('user.layouts.layouts')

@section('container')
    <div class="uk-container">
        @if ($categories->isEmpty())
            <div class="uk-alert-danger" uk-alert>
                <a href="#" class="uk-alert-close" uk-close></a>
                <p>Data untuk kategori '{{ $categoryName }}' tidak ditemukan.</p>
            </div>
        @else
            <div class="flex flex-wrap -mx-4">
                @foreach($categories as $kategori)
                    <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 px-4 mb-8 mt-10">
                        <div class="max-w-sm mx-auto overflow-hidden bg-white shadow-lg rounded-md">
                            <img class="w-full h-40 object-cover" src="{{ ('/img/' . $kategori->image) }}" alt="{{ $kategori->category_name }}">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">{{ $kategori->category_name }}</div>
                            </div>
                            <div class="px-6 py-4">
                                <a href="{{ url('/category-products/' . $kategori->id_category) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Show more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
