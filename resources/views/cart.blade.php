<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Your Cart</title>

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
<h1>Your Basket</h1>

<!-- container where cart items will be shown -->
<div id="cartItems">
    @if($cartItems->isEmpty())
        <p>Your basket is empty.</p>
    @else
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid #ccc;">
                    <th style="padding: 10px; text-align: left;">Product</th>
                    <th style="padding: 10px; text-align: center;">Price</th>
                    <th style="padding: 10px; text-align: center;">Quantity</th>
                    <th style="padding: 10px; text-align: center;">Subtotal</th>
                    <th style="padding: 10px; text-align: center;">Action</th>
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
                        <td style="padding: 10px;">
                            <strong>{{ $item->product->name }}</strong>
                        </td>
                        <td style="padding: 10px; text-align: center;">
                            £{{ number_format($item->product->price, 2) }}
                        </td>
                        <td style="padding: 10px; text-align: center;">
                            <form action="{{ route('cart.update') }}" method="POST" style="display: inline;">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item->product_id }}">
                                <button type="submit" name="quantity" value="{{ $item->quantity - 1 }}" style="padding: 5px 10px;">-</button>
                                <span style="margin: 0 10px;">{{ $item->quantity }}</span>
                                <button type="submit" name="quantity" value="{{ $item->quantity + 1 }}" style="padding: 5px 10px;">+</button>
                            </form>
                        </td>
                        <td style="padding: 10px; text-align: center;">
                            £{{ number_format($subtotal, 2) }}
                        </td>
                        <td style="padding: 10px; text-align: center;">
                            <form action="{{ route('cart.remove') }}" method="POST" style="display: inline;">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item->product_id }}">
                                <button type="submit" style="padding: 5px 10px; background: #ff4444; color: white; border: none; cursor: pointer;">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin-top: 20px; text-align: right; padding: 20px; background: #f9f9f9; border-radius: 5px;">
            <h2>Total: £{{ number_format($total, 2) }}</h2>
            <a href="{{ url('/checkout') }}" style="display: inline-block; margin-top: 10px; padding: 10px 20px; background: #333; color: white; text-decoration: none; border-radius: 5px;">Go to Checkout</a>
        </div>
    @endif
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
                <!-- copyright sdsa-->
                <p class="ContactTitle">© 2025 Luxury Jewelry Store</p>
            </footer>
        </div>
        <!-- duplicate JS include (can stay, but not necessary) -->
        <script src="js/index.js" defer></script>
    </div>
</body>
</html>
