<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display the checkout page with cart items.
     */
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('message', 'Please log in to proceed with checkout');
        }

        $cartItems = Cart::where('user_id', auth()->id())
            ->with('product')
            ->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('message', 'Your cart is empty');
        }

        // Calculate total
        $total = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('checkout', ['cartItems' => $cartItems, 'total' => $total]);
    }

    /**
     * Process the checkout and create an order.
     */
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return response()->json(['error' => 'Please log in first'], 401);
        }

        $request->validate([
            'shipping_address' => 'required|string|min:10',
            'payment_method' => 'required|string|in:credit_card,debit_card,paypal',
            'notes' => 'nullable|string|max:500',
        ]);

        $cartItems = Cart::where('user_id', auth()->id())
            ->with('product')
            ->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['error' => 'Your cart is empty'], 400);
        }

        // Calculate total
        $total = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        // Create order
        $order = Order::create([
            'user_id' => auth()->id(),
            'total_amount' => $total,
            'status' => 'pending',
            'payment_method' => $request->payment_method,
            'shipping_address' => $request->shipping_address,
            'notes' => $request->notes,
        ]);

        // Create order items
        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'unit_price' => $cartItem->product->price,
            ]);
        }

        // Clear cart
        Cart::where('user_id', auth()->id())->delete();

        return response()->json([
            'success' => true,
            'message' => 'Order created successfully',
            'order_id' => $order->id,
        ]);
    }
}
