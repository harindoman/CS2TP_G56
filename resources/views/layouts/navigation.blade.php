<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="container mx-auto flex items-center justify-between py-4">
        <div class="flex items-center space-x-4">
            <a href="/" class="text-lg font-bold">Home</a>
            <a href="/about" class="text-lg">About</a>
            <a href="/products" class="text-lg">Products</a>
            <a href="/contact" class="text-lg">Contact</a>
            <!-- Add more links as needed -->
        </div>
        <div class="flex items-center space-x-4">
            @auth
                @if(auth()->user()->is_admin)
                    <a href="{{ route('admin.orders') }}" class="flex items-center text-gray-700 hover:text-gray-900">
                        <img src="{{ asset('images/orderconfirmed.png') }}" alt="Customer Orders" class="w-6 h-6 mr-2" style="display:inline-block;vertical-align:middle;" />
                        Customer Orders
                    </a>
                @else
                    <a href="{{ route('orders.my') }}" class="flex items-center text-gray-700 hover:text-gray-900">
                        <img src="{{ asset('images/orderconfirmed.png') }}" alt="My Orders" class="w-6 h-6 mr-2" style="display:inline-block;vertical-align:middle;" />
                        My Orders
                    </a>
                @endif
            @endauth
        </div>
    </div>
</nav>


