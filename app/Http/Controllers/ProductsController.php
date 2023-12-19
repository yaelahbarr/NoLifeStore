<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index (Request $category) {
        if ($category) {
            $products = Product::where('id_category', $category->id_category)->get();
        } else {
            $products = collect();
        }
        
        // var_dump($products);
        return view('user.products.products', [
            'products' => $products
        ]);
    }
}
