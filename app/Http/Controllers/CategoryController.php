<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function pcComponents() {    
        $category = Category::where('type', 'pc-components')->get();
        return view('user.category.categories', [
            'categories' => $category
        ]);
    }

    public function show(category $category){
        $category = Category::where('category_name', $category)->first();
        
        if ($category) {
            $products = Product::where('id_category', $category->id_category)->get();
        } else {
            $products = collect(); 
        }
    
        return view('user.category.categories', [
            'products' => $products,
            'categoryName' => optional($category)->name,
        ]);
    }
}
