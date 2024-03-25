<?php

namespace App\Http\Controllers;

use App\Models\MenuList;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller

{


    public function index(Request $request)
    {
        $cart = session()->get('cart', []); // Retrieve the cart items from the session
    
        return view('cart', compact('cart')); // Pass the $cart variable to the view
    }
    
    public function delete(Request $request, $id)
    {
        $m = MenuList::find($id);
    
        // Get the current cart items from the session
        $cart = session()->get('cart', []);
        
    
        // Check if the item exists in the cart
        if (isset($cart[$id])) {
            // Remove the item from the cart
            unset($cart[$id]);
    
            // Update the cart session data
            session()->put('cart', $cart);
    
            // Redirect back to the cart index with success message
            return redirect()->back()->with('success', 'Item removed from cart successfully');
        }
    
        // Handle case where item does not exist in the cart
        return redirect()->back()->with('error', 'Item not found in cart');
    }
    


}
