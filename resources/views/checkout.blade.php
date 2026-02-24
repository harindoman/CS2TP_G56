<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>

    <!-- main stylesheet for the site -->
    <link rel="stylesheet" href="css/index.css">
     <!-- main JavaScript file -->
    <script src="js/index.js" defer></script>
</head>
<body>
    <div class="page-wrapper">
        <div class="PageContent">
<!-- top navbar -->
        <div class="TopNav">
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/about') }}">About</a>
    <a href="{{ route('products.index') }}">Products</a>
    <a href="{{ url('/contact') }}">Contact</a>
    <!-- icons added by JS if logged in -->
    <div class="IconNav"></div>
</div>
<!-- page title -->
<h1>Checkout</h1>

<!-- Order Summary -->
<div style="margin-bottom: 30px;">
    <h2>Order Summary</h2>
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="border-bottom: 2px solid #ccc;">
                <th style="padding: 10px; text-align: left;">Product</th>
                <th style="padding: 10px; text-align: center;">Price</th>
                <th style="padding: 10px; text-align: center;">Quantity</th>
                <th style="padding: 10px; text-align: center;">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0; @endphp
            @foreach($cartItems as $item)
                @php 
                    $subtotal = $item->product->price * $item->quantity;
                    $total += $subtotal;
                @endphp
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 10px;">{{ $item->product->name }}</td>
                    <td style="padding: 10px; text-align: center;">£{{ number_format($item->product->price, 2) }}</td>
                    <td style="padding: 10px; text-align: center;">{{ $item->quantity }}</td>
                    <td style="padding: 10px; text-align: center;">£{{ number_format($subtotal, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div style="margin-top: 20px; text-align: right; padding: 20px; background: #f9f9f9; border-radius: 5px;">
        <h3>Total: £{{ number_format($total, 2) }}</h3>
    </div>
</div>

<!-- Checkout Form -->
<div style="max-width: 600px; margin: 30px auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px;">
    <h2>Shipping & Payment Information</h2>
    <form action="{{ route('checkout.store') }}" method="POST">
        @csrf

        <!-- Shipping Address -->
        <div style="margin-bottom: 20px;">
            <label for="shipping_address" style="display: block; font-weight: bold; margin-bottom: 5px;">Shipping Address *</label>
            <textarea name="shipping_address" id="shipping_address" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px; box-sizing: border-box;" required>{{ old('shipping_address', auth()->user()->address ?? '') }}</textarea>
            @error('shipping_address')
                <span style="color: red; font-size: 12px;">{{ $message }}</span>
            @enderror
        </div>

        <!-- Payment Method -->
        <div style="margin-bottom: 20px;">
            <label for="payment_method" style="display: block; font-weight: bold; margin-bottom: 5px;">Payment Method *</label>
            <select name="payment_method" id="payment_method" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px; box-sizing: border-box;" required>
                <option value="">-- Select Payment Method --</option>
                <option value="credit_card" {{ old('payment_method') === 'credit_card' ? 'selected' : '' }}>Credit Card</option>
                <option value="debit_card" {{ old('payment_method') === 'debit_card' ? 'selected' : '' }}>Debit Card</option>
                <option value="paypal" {{ old('payment_method') === 'paypal' ? 'selected' : '' }}>PayPal</option>
            </select>
            @error('payment_method')
                <span style="color: red; font-size: 12px;">{{ $message }}</span>
            @enderror
        </div>

        <!-- Notes -->
        <div style="margin-bottom: 20px;">
            <label for="notes" style="display: block; font-weight: bold; margin-bottom: 5px;">Order Notes (Optional)</label>
            <textarea name="notes" id="notes" rows="3" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px; box-sizing: border-box;">{{ old('notes') }}</textarea>
            @error('notes')
                <span style="color: red; font-size: 12px;">{{ $message }}</span>
            @enderror
        </div>

        <!-- Buttons -->
        <div style="display: flex; gap: 10px; justify-content: space-between;">
            <a href="{{ route('cart.index') }}" style="padding: 10px 20px; background: #666; color: white; text-decoration: none; border-radius: 3px; border: none; cursor: pointer;">Back to Cart</a>
            <button type="submit" style="padding: 10px 30px; background: #333; color: white; border: none; border-radius: 3px; cursor: pointer; font-size: 16px; font-weight: bold;">Place Order</button>
        </div>
    </form>
</div>

        </div>
<!-- footer area -->
        <div id="site-footer">
            <footer class="footer">
                <!-- social media icons -->
                <div class="FooterIconsContainer">
                    <img src="assets/images/FacebookIcon.png" class="FooterIcons" alt="facebook">
                    <img src="assets/images/InstagramIcon.png" class="FooterIcons" alt="instagram">
                    <img src="assets/images/YoutubeIcon.png" class="FooterIcons" alt="youtube">
                </div>
                <!-- copyright -->
                <p class="ContactTitle">© 2025 Luxury Jewelry Store</p>
            </footer>
        </div>
        <!-- duplicate JS include (can stay, but not necessary) -->
        <script src="js/index.js" defer></script>
    </div>
</body>
</html>
