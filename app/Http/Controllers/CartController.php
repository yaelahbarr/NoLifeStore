<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function index() {
        $order = OrderDetail::where('id_user', Auth::id())->where('status', 'pending')->first();
        if ($order) {
            $orderedItems = OrderDetail::where('id_order', $order->id_order)->get();
        } else {
            $orderedItems = collect();
        }
        return view('user.cart.cart', compact('orderedItems'));
    }

    public function orderItem(Request $request, $id_product)
    {
        $stock = Product::find($id_product);

        $order = Order::firstOrNew([
            'id_user' => Auth::id(),
            'product_status' => 'pending',
            'name' => Auth::user()->name,
            'phone_number' => "0891234567890",
            'address' => "jalanan",
            'id_cities' => "23",
            'id_provinces' => "29",
            'postal_code' => "40111",
            'bank' => "mandiri",
            'sub_total' => "0",
            'resi_number' => "100000"
        ]);
        $order->save();

        OrderDetail::create([
            'id_product' => $stock->id_product,
            'id_user' => Auth::id(),
            'id_order' => $order->id_order, 
            'total_order' => 1,
            'status' => 'pending'
        ]);

        return redirect('/cart');
    }

    public function destroy( $id_order_detail)
    {
        $stock = OrderDetail::FindOrFail($id_order_detail);
        $stock->delete();

        Alert::success('Product Removed', 'Operation successful!');
        return redirect('/cart');
    }

}
