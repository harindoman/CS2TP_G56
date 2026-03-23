<div class="TopNav">
    <a class="logo-link" href="/" aria-label="Skyrose Atelier home">
        <img class="header-logo" src="{{ asset('images/logo Skyrose.jpg') }}" alt="Skyrose Atelier logo" style="height:48px;width:auto;">
    </a>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/products">Products</a>
    <a href="/contact">Contact</a>
    <div class="IconNav" style="display: flex; justify-content: flex-end; align-items: center; gap: 16px; width: 600px;">

        @auth
            @if(auth()->user()->is_admin == 1)
                <a href="{{ route('admin.dashboard') }}" aria-label="Admin Dashboard" title="Admin Dashboard">
                    <img src="{{ asset('images/inventory.png') }}" alt="Admin Inventory" style="width:40px;height:32px;border-radius:50%;background:#fff3cd;padding:2px 6px;vertical-align:middle;" />
                </a>
            @else
                <a href="{{ route('orders.my') }}" aria-label="My Orders">
                    <img src="{{ asset('images/orderconfirmed.png') }}" alt="Order Confirmed" class="NavOrderIcon" style="width:32px;height:32px;vertical-align:middle;margin-right:10px;" />
                </a>
            @endif
        @endauth
        <div class="NavSearchWrap">
            <button class="NavSearchBtn" type="button" aria-label="Search">
                <img src="{{ asset('images/SearchIcon.png') }}" alt="Search">
            </button>
            <input type="text" class="NavSearchInput" placeholder="Search products..." aria-label="Search products">
        </div>
        <a href="/wishlist" aria-label="Wishlist" class="NavWishlist">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
        </a>
        <div id="auth-buttons">
            @auth
                {{-- DEBUG: is_admin = {{ var_export(auth()->user()->is_admin, true) }} --}}
                @if(auth()->user()->is_admin == 1)
                    <a href="{{ route('admin.dashboard') }}" aria-label="Admin Dashboard" class="NavAdminInventory" title="Admin Dashboard">
                        <img src="{{ asset('images/inventory.png') }}" alt="Admin Inventory" style="width:32px;height:32px;border-radius:50%;background:#fff3cd;padding:2px;vertical-align:middle;" />
                    </a>
                @else
                    <a href="{{ route('orders.my') }}" aria-label="My Orders" class="NavMyOrders" title="My Orders">
                        <img src="{{ asset('images/orderconfirmed.png') }}" alt="My Orders" class="NavOrderIcon" style="width:20px;height:20px;display:block !important;vertical-align:middle;opacity:1 !important;visibility:visible !important;margin-left:8px;" />
                    </a>
                @endif
            @else
                @php $isAdmin = auth()->check() && auth()->user()->is_admin == 1; @endphp
                @if($isAdmin)
                    <a href="{{ route('admin.dashboard') }}" aria-label="Admin Dashboard"><img src="{{ asset('images/inventory.png') }}" alt="Admin Inventory" style="width:32px;height:32px;border-radius:50%;background:#fff3cd;padding:2px;"></a>
                @else
                    <a href="/login" aria-label="Login"><img src="{{ asset('images/ProfileIcon.png') }}" alt="Login"></a>
                @endif
            @endauth
            <a href="/cart" aria-label="Cart">
                <img src="{{ asset('images/CartIcon.png') }}" alt="Cart">
            </a>
        </div>
    </div>
</div>


