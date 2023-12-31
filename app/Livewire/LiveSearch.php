<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class LiveSearch extends Component
{
    public $search = '';

    public function render()
    {
        $products = Product::where('product_name', 'like', '%' . $this->search . '%')->get();

        return view('livewire.live-search', ['products' => $products]);
    }
    
}
