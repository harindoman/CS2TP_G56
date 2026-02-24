<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display the cart page with all items.
     */
    public function index()
    {
        // For now, get all products (in a real app, you'd filter by authenticated user)
        // If user is authenticated, get their specific cart items
        $cartItems = [];
        
        if (auth()->check()) {
            $cartItems = Cart::where('user_id', auth()->id())
                ->with('product')
                ->get();
        }

        return view('cart', ['cartItems' => $cartItems]);
    }

    /**
     * Add product to cart.
     */
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        if (!auth()->check()) {
            return response()->json(['error' => 'Please log in first'], 401);
        }

        $cartItem = Cart::where('user_id', auth()->id())
            ->where('product_id', $request->product_id)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity', $request->quantity);
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }

        return response()->json(['success' => true]);
    }

    /**
     * Update cart item quantity.
     */
    public function update(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:0',
        ]);

        if (!auth()->check()) {
            return response()->json(['error' => 'Please log in first'], 401);
        }

        $cartItem = Cart::where('user_id', auth()->id())
            ->where('product_id', $request->product_id)
            ->first();

        if ($cartItem) {
            if ($request->quantity > 0) {
                $cartItem->update(['quantity' => $request->quantity]);
            } else {
                $cartItem->delete();
            }
        }

        return response()->json(['success' => true]);
    }

    /**
     * Remove item from cart.
     */
    public function remove(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        if (!auth()->check()) {
            return response()->json(['error' => 'Please log in first'], 401);
        }

        Cart::where('user_id', auth()->id())
            ->where('product_id', $request->product_id)
            ->delete();

        return response()->json(['success' => true]);
    }

    /**
     * Clear all items from cart.
     */
    public function clear()
    {
        if (!auth()->check()) {
            return response()->json(['error' => 'Please log in first'], 401);
        }

        Cart::where('user_id', auth()->id())->delete();

        return response()->json(['success' => true]);
    }
}
