<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders - Seraphine Atelier</title>
    @vite(['resources/js/app.js'])
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
            <!-- Orders Section -->
            <section class="orders-section">
                <h1>My Orders</h1>

                @if($orders->isEmpty())
                    <div style="text-align: center; padding: 40px; background: #f9f9f9; border-radius: 5px;">
                        <p style="font-size: 18px; color: #666;">You haven't placed any orders yet.</p>
                        <a href="{{ route('products.index') }}" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background: #b89b5e; color: white; text-decoration: none; border-radius: 5px;">Continue Shopping</a>
                    </div>
                @else
                    <table class="cart-table" style="width: 100%; margin-bottom: 30px;">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Items</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td><strong>#{{ $order->id }}</strong></td>
                                    <td>{{ $order->created_at->format('M d, Y') }}</td>
                                    <td style="text-align: center;">{{ $order->orderItems->count() }}</td>
                                    <td style="text-align: right; font-weight: bold;">£{{ number_format($order->total_amount, 2) }}</td>
                                    <td style="text-align: center;">
                                        <span class="order-status @if($order->status === 'pending') pending @elseif($order->status === 'completed') completed @endif">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </td>
                                    <td style="text-align: center;">
                                        <a href="{{ route('orders.show', $order->id) }}" style="padding: 5px 10px; background: #b89b5e; color: white; text-decoration: none; border-radius: 3px; margin-right: 5px;">View</a>
                                        @if($order->status === 'pending')
                                            <button onclick="cancelOrder({{ $order->id }})" style="padding: 5px 10px; background: #dc3545; color: white; border: none; border-radius: 3px; cursor: pointer;">Cancel</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                <!-- Featured Products Section -->
                @if($products && $products->count() > 0)
                <section class="featured-products" style="margin-top: 50px;">
                    <h2 class="section-title">Featured Products</h2>
                    <div class="product-grid">
                        @foreach($products as $product)
                        <a href="{{ route('products.show', $product->id) }}" class="product-card">
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                            <h3 class="product-card h3">{{ $product->name }}</h3>
                            <p class="product-price">£{{ number_format($product->price, 2) }}</p>
                        </a>
                        @endforeach
                    </div>
                </section>
                @endif
            </section>

            <script>
                function cancelOrder(orderId) {
                    if (confirm('Are you sure you want to cancel this order?')) {
                        fetch(`/orders/${orderId}/cancel`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                alert('Order cancelled successfully');
                                location.reload();
                            } else {
                                alert('Error: ' + data.error);
                            }
                        })
                        .catch(err => alert('An error occurred'));
                    }
                }
            </script>
        </div>

        <footer id="site-footer" class="footer">
            <div class="FooterIconsContainer">
                <img src="{{ asset('images/FacebookIcon.png') }}" class="FooterIcons" alt="facebook">
                <img src="{{ asset('images/InstagramIcon.png') }}" class="FooterIcons" alt="instagram">
                <img src="{{ asset('images/YoutubeIcon.png') }}" class="FooterIcons" alt="youtube">
            </div>
            <p class="ContactTitle">© 2025 Luxury Jewelry Store</p>
        </footer>
    </div>
</body>
</html>


