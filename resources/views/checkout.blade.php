<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<<<<<<< Updated upstream
    <title>Checkout &ndash; Skyrose Atelier</title>
    @include('partials.head')
=======
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Seraphine Atelier</title>
    @vite(['resources/js/app.js'])
>>>>>>> Stashed changes
</head>
<body>
    <div class="page-wrapper">
        <header class="navbar">
            <div class="logo">Seraphine Atelier</div>
            <nav>
                <ul class="nav-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/products">Shop</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </header>

        <div class="PageContent">
<<<<<<< Updated upstream
            @include('partials.nav')

            <h1>Checkout</h1>
            <div id="checkout-items"></div>
            <button id="placeOrderBtn">Place Order</button>
        </div>

        @include('partials.footer')
    </div>

    <script>
        const CSRF = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('/cart/data', { credentials: 'include' })
            .then(r => r.json())
            .then(cart => {
                const c = document.getElementById('checkout-items');
                if (!cart.items || !cart.items.length) {
                    c.innerHTML = '<p>Your cart is empty.</p>';
                    return;
                }
                cart.items.forEach(i => {
                    c.innerHTML += `<p>${i.name} &times; ${i.quantity} - &pound;${i.price}</p>`;
                });
            });

        document.getElementById('placeOrderBtn').onclick = () => {
            fetch('/cart/place-order', {
                method: 'POST',
                credentials: 'include',
                headers: { 'X-CSRF-TOKEN': CSRF, 'Content-Type': 'application/json' }
            })
            .then(() => { alert('Order placed!'); window.location = '/'; });
        };
    </script>
=======
            <section class="cart-section">
                <h1>Checkout</h1>

                <!-- Order Summary -->
                <div style="margin-bottom: 30px;">
                    <h2>Order Summary</h2>
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0; @endphp
                            @foreach($cartItems as $item)
                                @php 
                                    $subtotal = $item->product->price * $item->quantity;
                                    $total += $subtotal;
                                @endphp
                                <tr>
                                    <td>{{ $item->product->name }}</td>
                                    <td>£{{ number_format($item->product->price, 2) }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>£{{ number_format($subtotal, 2) }}</td>
                                </tr>
                            @endforeach
                                    <td>£{{ number_format($subtotal, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="cart-totals">
                        <div class="cart-total-row final">
                            <span>Total:</span>
                            <span>£{{ number_format($total, 2) }}</span>
                        </div>
                    </div>
                </div>

                <!-- Checkout Form -->
                <div style="max-width: 600px; margin: 30px auto; padding: 20px; border: 1px solid #ddd; border-radius: 6px; background: white;">
                    <h2 style="margin-top: 0;">Shipping & Payment Information</h2>
                    <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf

                        <!-- Shipping Address -->
                        <div class="form-group">
                            <label for="shipping_address">Shipping Address *</label>
                            <textarea name="shipping_address" id="shipping_address" rows="4" required>{{ old('shipping_address', auth()->user()->address ?? '') }}</textarea>
                            @error('shipping_address')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Payment Method -->
                        <div class="form-group">
                            <label for="payment_method">Payment Method *</label>
                            <select name="payment_method" id="payment_method" required>
                                <option value="">-- Select Payment Method --</option>
                                <option value="credit_card" {{ old('payment_method') === 'credit_card' ? 'selected' : '' }}>Credit Card</option>
                                <option value="debit_card" {{ old('payment_method') === 'debit_card' ? 'selected' : '' }}>Debit Card</option>
                                <option value="paypal" {{ old('payment_method') === 'paypal' ? 'selected' : '' }}>PayPal</option>
                            </select>
                            @error('payment_method')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Notes -->
                        <div class="form-group">
                            <label for="notes">Order Notes (Optional)</label>
                            <textarea name="notes" id="notes" rows="3">{{ old('notes') }}</textarea>
                            @error('notes')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div style="display: flex; gap: 10px; justify-content: space-between;">
                            <a href="{{ route('cart.index') }}" class="btn-outline" style="padding: 12px 30px; display: inline-block;">Back to Cart</a>
                            <button type="submit" class="btn-primary" style="padding: 12px 30px; border: none; cursor: pointer;">Place Order</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>

        <footer id="site-footer" class="footer">
            <div class="FooterIconsContainer">
                <img src="{{ asset('images/FacebookIcon.png') }}" class="FooterIcons" alt="facebook">
                <img src="{{ asset('images/InstagramIcon.png') }}" class="FooterIcons" alt="instagram">
                <img src="{{ asset('images/YoutubeIcon.png') }}" class="FooterIcons" alt="youtube">
            </div>
            <p class="ContactTitle">© 2025 Luxury Jewelry Store</p>
        </footer>
        <!-- duplicate JS include (can stay, but not necessary) -->
        <script src="js/index.js" defer></script>
    </div>
>>>>>>> Stashed changes
</body>
</html>


