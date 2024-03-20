<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;



class dashboardController extends Controller
{
public function index() {

    $orders = Order::with('orderDetails')->get();
    return view('admin.dashboard', compact('orders'));
}

}
