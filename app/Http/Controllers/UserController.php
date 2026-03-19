<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show the edit profile form
    public function edit()
    {
        $user = auth()->user();
        return view('profile_edit', compact('user'));
    }

    // Handle profile update
    public function update(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $user->update($request->only('name', 'email'));
        return redirect('/profile/edit')->with('success', 'Profile updated!');
    }


public function myOrders()
{
    $orders = \App\Models\Order::where('user_id', auth()->id())->get();
    return view('my_orders', compact('orders'));
}

}