<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * Display all orders for the authenticated user with featured products.
     */
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('message', 'Please log in to view your orders');
        }

        $orders = Order::where('user_id', auth()->id())
            ->with('orderItems.product')
            ->orderBy('created_at', 'desc')
            ->get();

        $products = Product::limit(6)->get();

        return view('orders', ['orders' => $orders, 'products' => $products]);
    }

    /**
     * Display a specific order with its items and featured products.
     */
    public function show($id)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('message', 'Please log in to view this order');
        }

        $order = Order::where('id', $id)
            ->where('user_id', auth()->id())
            ->with('orderItems.product')
            ->firstOrFail();

        $products = Product::limit(6)->get();

        return view('order-detail', ['order' => $order, 'products' => $products]);
    }

    /**
     * Cancel an order.
     */
    public function cancel($id)
    {
        if (!auth()->check()) {
            return response()->json(['error' => 'Please log in first'], 401);
        }

        $order = Order::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        if ($order->status === 'completed' || $order->status === 'cancelled') {
            return response()->json(['error' => 'Cannot cancel this order'], 400);
        }

        $order->update(['status' => 'cancelled']);

        return response()->json(['success' => true, 'message' => 'Order cancelled successfully']);
    }

    /**
     * Request a refund for an order.
     * Only allowed when the order has not yet been shipped or completed.
     */
    public function refund($id)
    {
        if (!auth()->check()) {
            return response()->json(['error' => 'Please log in first'], 401);
        }

        $order = Order::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        if ($order->status === 'shipped' || $order->status === 'completed') {
            return response()->json(['error' => 'Refunds cannot be requested once the order has been shipped or completed'], 400);
        }

        if ($order->status === 'cancelled' || $order->status === 'refunded') {
            return response()->json(['error' => 'This order has already been cancelled or refunded'], 400);
        }

        $order->update(['status' => 'refunded']);

        return response()->json(['success' => true, 'message' => 'Refund request submitted successfully']);
    }
}
