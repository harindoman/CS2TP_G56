<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the contact page with featured products.
     */
    public function show()
    {
        $products = Product::limit(6)->get();
        return view('contact', ['products' => $products]);
    }

    /**
     * Handle contact form submission.
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10|max:1000',
        ]);

        // Here you can add code to send email, save to database, etc.
        // For now, just returning a success response
        
        // Example: You could save to database or send email
        // Mail::send('emails.contact', $validated, function($message) {
        //     $message->to('admin@jewelrystore.com')
        //             ->subject('New Contact Form Submission');
        // });

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your message! We will get back to you soon.',
        ]);
    }
}
