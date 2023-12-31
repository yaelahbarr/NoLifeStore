<div>
    <input type="text" wire:model="search" placeholder="Search products..." class="p-2 border rounded mb-2">
    
    <ul>
        @foreach($products as $product)
            <li>{{ $product->product_name }}</li>
        @endforeach
    </ul>
</div>