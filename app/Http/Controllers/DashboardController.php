<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class DashboardController extends Controller
{
    public function index() {
        $totalSales = Order::where('product_status', 'PAID')->sum('sub_total');
        $totalProduct = Product::all()->count();
        $totalCustomer = User::where('role', 'user')->count();
        return view('admin.dashboard',[
            'totalSales' => $totalSales,
            'totalProduct' => $totalProduct,
            'totalCustomer' => $totalCustomer
        ]);
    }
}
