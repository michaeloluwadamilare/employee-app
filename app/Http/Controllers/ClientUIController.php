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
        $menuList = Category::with('menuItems')->get();
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
        
        $m=menu_list::find($id);
        $cart= new cart;

        $cart->product=$m->name;
        $cart->price=$m->price;
        $cart->quantity=$request->quantity;
        $cart->save();

        return redirect()->back()->with('message','Product Added Successfully');
    }

}
