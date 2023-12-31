<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use File;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request('search')) {
            $stock->where('product_name', 'like', '%', request('search') . '%');
        }
        return view('admin.stock.stock', [
            'stocks' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.stock.create', ['category' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $stock = new Product;
        $stock->id_category=$request->id_category;
        $stock->product_name=$request->product_name;
        $stock->price=$request->price;
        $stock->stock=$request->stock;
        
        $image = $request->image;
        $imageName = time().'.'.
        $image->extension();
        $request->image->move(public_path().'/img', $imageName);
        $stock->image = $imageName;
        $stock->save();

        Alert::success('Product Added', 'Operation successful!');
        return redirect('/stock');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_product)
    {
        return view('admin.stock.edit', [
            'category' => Category::all(),
            'stock' => Product::FindOrFail($id_product)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image =$request->image;
        if($image != NULL){
            $stock=Product::FindOrFail($id);
            File::delete('img/'.$stock->image);
            $imageName = time().'.'.$image->extension();
            $request->image->move(public_path('img/'), $imageName);
            $stock->id_category=$request->id_category;
            $stock->product_name=$request->product_name;
            $stock->price=$request->price;
            $stock->stock=$request->stock;
            $stock->image=$imageName;
            $stock->save();
        }
        else{
            $stock =Product::FindOrFail($id);
            $stock->id_category=$request->id_category;
            $stock->product_name=$request->product_name;
            $stock->price=$request->price;
            $stock->stock=$request->stock;
            $stock->image=$request->image;
            $stock->save();
        }

        Alert::success('Product Updated', 'Operation successful!');
        return redirect('/stock');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_product)
    {
        $affected = DB::table('products')->where('id_product', $id_product)->delete();
        // $stock = Product::FindOrFail($id_product);
        // $stock->delete();
        Alert::success('Product Deleted', 'Operation successful!');
        return redirect('/stock');
    }
}
