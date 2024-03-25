<?php

namespace App\Http\Controllers;

use App\Models\MenuList;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Http\Request;

class ClientUIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuList = Category::with(['menuItems' => function ($query) {
            $query->where('status', 'Active');
        }])->where('status', 'Active')->get();
        return view('EndUser.mint', compact('menuList'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

/**
     * Add to cart.
     */
    public function addcart(Request $request, $id)
{
    $m = MenuList::find($id);

    $cart = [
        "id" => $m->id,
        "product" => $m->name,
        "price" => $m->amount, 
        "quantity" => $request->quantity,
        "description" => $m->description
    ];

    // $request->session()->forget("cart");

    // Retrieve previous cart data
    $previouscart = $request->session()->get("cart", []);

    // Check if the product already exists in the cart
    if (array_key_exists($m->id, $previouscart)) {
        // Update quantity and price if product already exists
        $previouscart[$m->id]['quantity'] += $request->quantity;
        $previouscart[$m->id]['price'] += $m->amount;
    } else {
        // Add new product to the cart
        $previouscart[$m->id] = $cart;
    }

    // Save updated cart data back to session
    $request->session()->put("cart", $previouscart);
    // dd($request->session()->get("cart"));

    return redirect()->back()->with('message', 'Product Added Successfully');
}
}