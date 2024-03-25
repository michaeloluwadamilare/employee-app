<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('orderDetails')->orderBy('created_at')->get();
        return view('admin.orders', compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::with('orderDetails')->findOrFail($id);
        return view('admin.details', compact('order'));
  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $menu = Order::findOrFail($id);

        $request->validate([
            'status' => 'required|in:Active,Inactive,Deactivate',
            'description' => 'nullable|string',
            'amount' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $menu->name = $request->name;
        $menu->status = $request->status;
        $menu->description = $request->description;
        $menu->amount = $request->amount;
        $menu->category_id = $request->category_id;


        $menu->save();
        return redirect()->route('order')->with('success', 'Order updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
    }
}
