<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Our Products</title>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="icon" type="image/jpeg" href="{{ asset('images/logo%20Skyrose.jpg') }}">
        <style>
            /* Product Detail View Responsive Styles */
            #productDetailView .detail-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 60px;
                align-items: start;
            }
            
            @media (max-width: 900px) {
                #productDetailView .detail-grid {
                    grid-template-columns: 1fr;
                    gap: 30px;
                }
                
                #productDetailView .detail-image-container {
                    position: relative !important;
                    top: auto !important;
                }
            }
        .ProductCardActions { display: flex; gap: 8px; margin-top: 10px; }
        .AddToCartButton { flex: 1; }
        .WishlistBtn {
            background: none;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 8px 10px;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.2s;
            color: #aaa;
            line-height: 1;
        }
        .WishlistBtn:hover, .WishlistBtn.active { color: #e74c3c; border-color: #e74c3c; }
        </style>
</head>
<body>

<div class="page-wrapper">

    <div class="PageContent">

    @include('partials.nav')

<section class="TitleSection">
        <p class="TitleEyebrow">Signature Pieces</p>
        <h1 class="MainTitle">Our Jewellery Collection</h1>
        <p class="TitleDescription">Browse our handmade, luxury jewellery pieces.</p>
    </section>

    <!-- Search Bar -->
    <section class="SearchSection">
        <div class="SearchCard">
            <p class="SearchEyebrow">Search the collection</p>
            <div class="SearchBar">
                <span class="SearchIcon" aria-hidden="true">
                    <img src="{{ asset('images/SearchIcon.png') }}" alt="" aria-hidden="true">
                </span>
                <input type="text" id="searchInput" placeholder="Search products by name or category..." />
            </div>
        </div>
    </section>

<!-- Category links -->
<section class="CategoryLinks" aria-label="Shop by category">
    @include('partials.category-dropdown', ['active' => ''])

</section>


<!-- Products Grid (uses CSS in css/index.css) -->
<main class="ProductsGrid" id="productsGrid" aria-label="Product list">
    <!-- Dynamically generated product cards from database -->
    @foreach($products as $product)
    <a class="ProductCard" href="/products/{{ $product->id }}" data-name="{{ $product->name }}" data-category="{{ $product->category }}">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset($product->image_url) }}" alt="{{ $product->name }}">
            <span class="ProductBadge">{{ $product->category }}</span>
        </div>
        <div class="ProductInfo">
                    <h3 class="ProductTitle">Amethyst Tennis Bracelet</h3>
            <p class="ProductDescription">{{ $product->description }}</p>
            <div class="ProductMeta">
                    <span class="StockText {{ $product->stock_quantity > 0 ? 'in-stock' : 'out-of-stock' }}">
                    {{ $product->stock_quantity > 0 ? 'In Stock' : 'Out of Stock' }}
                </span>
                <span class="ProductPrice">£{{ number_format($product->price, 0) }}</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label>
                <select id="qty-{{ $product->id }}">
                    @for($i = 1; $i <= min(10, max(1, $product->stock_quantity)); $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="ProductCardActions">
                <button class="AddToCartButton" onclick="addToCartWithQuantity(event, '{{ $product->name }}', 'qty-{{ $product->id }}')">Add to Cart</button>
                <button type="button" class="WishlistBtn" onclick="toggleWishlist(event, this)" title="Add to wishlist">&#9825;</button>
            </div>
        </div>
    </a>
    @endforeach
    <!-- Only one closing main tag should remain. -->
</main>

    </div>

    @include('partials.footer')

<script>
// Check if we're viewing a specific product
function showProductDetail() {
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('product');
    
    if (productId) {
        // Find the product card with matching href
        const productCard = document.querySelector(`.ProductCard[href="/products?product=${productId}"]`);
        
        if (productCard) {
            // Hide the grid view elements
            document.querySelector('.TitleSection').style.display = 'none';
            document.querySelector('.SearchSection').style.display = 'none';
            document.querySelector('.CategoryLinks').style.display = 'none';
            document.getElementById('productsGrid').style.display = 'none';
            
            // Show detail view
            document.getElementById('productDetailView').style.display = 'block';
            
            // Extract product info from the card
            const img = productCard.querySelector('.ProductImage');
            const title = productCard.querySelector('.ProductTitle').textContent;
            const description = productCard.querySelector('.ProductDescription').textContent;
            const price = productCard.querySelector('.ProductPrice').textContent;
            const badge = productCard.querySelector('.ProductBadge').textContent;
            const stockElement = productCard.querySelector('.StockText');
            const stock = stockElement ? stockElement.textContent : 'In Stock';
            const stockClass = stockElement ? stockElement.className : 'StockText in-stock';
            
            // Populate detail view
            document.getElementById('detailImage').src = img.src;
            document.getElementById('detailImage').alt = title;
            document.getElementById('detailTitle').textContent = title;
            document.getElementById('detailDescription').textContent = description;
            document.getElementById('detailPrice').textContent = price;
            document.getElementById('detailBadge').textContent = badge;
            document.getElementById('detailStock').textContent = stock;
            document.getElementById('detailStock').className = stockClass;
            
            // Get the product name for cart (from the onclick attribute or data)
            let productName = title;
            const addToCartBtn = productCard.querySelector('.AddToCartButton');
            if (addToCartBtn && addToCartBtn.getAttribute('onclick')) {
                const onclickStr = addToCartBtn.getAttribute('onclick');
                const match = onclickStr.match(/'([^']+)'/);
                if (match) {
                    productName = match[1];
                }
            }
            
            // Setup wishlist button state
            var wBtn = document.getElementById('detailWishlistBtn');
            if (wBtn && window.wishlist) {
                if (window.wishlist.isInWishlist(productName)) {
                    wBtn.innerHTML = '&#9829; In Wishlist';
                    wBtn.style.background = '#fff0f0';
                    wBtn.style.borderColor = '#e74c3c';
                    wBtn.style.color = '#e74c3c';
                } else {
                    wBtn.innerHTML = '&#9825; Add to Wishlist';
                    wBtn.style.background = 'transparent';
                    wBtn.style.borderColor = '#111';
                    wBtn.style.color = '#111';
                }
            }

            // Store current detail name for toggleDetailWishlist
            window._detailProductName = productName;
            window._detailProductPrice = price;
            window._detailProductImage = img ? img.src : '';
            window._detailProductCategory = badge;

            // Setup add to cart button
            document.getElementById('detailAddToCart').onclick = function(event) {
                const qty = parseInt(document.getElementById('detailQuantity').value);
                
                // Use the existing addToCartQuick function
                if (typeof addToCartQuick === 'function') {
                    addToCartQuick(event, productName, qty);
                } else {
                    // Fallback if function not available
                    alert('Added ' + qty + ' × ' + productName + ' to cart!');
                }
            };
            
            // Scroll to top
            window.scrollTo(0, 0);
        } else {
            // Product not found, redirect to product-notfound.html or show grid
            console.error('Product not found:', productId);
        }
    }
}

// Run on page load
document.addEventListener('DOMContentLoaded', function() {
    showProductDetail();
    // Auto-apply ?q= URL param into the search box
    const qParam = new URLSearchParams(window.location.search).get('q');
    const searchEl = document.getElementById('searchInput');
    if (qParam && searchEl) {
        searchEl.value = qParam;
        searchEl.dispatchEvent(new Event('keyup'));
        searchEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
});

// Search functionality (only run if we're not viewing a specific product)
if (document.getElementById('searchInput')) {
    document.getElementById('searchInput').addEventListener('keyup', function(e) {
        const query = e.target.value.toLowerCase();
        const products = document.querySelectorAll('.ProductCard');
        
        // filter products by name or category
        products.forEach(product => {
            const name = product.getAttribute('data-name').toLowerCase();
            const category = product.getAttribute('data-category').toLowerCase();

            // Strip trailing 's' to match both singular and plural (e.g. "rings" â†’ matches "ring")
            // Use word-boundary matching so "rings" doesn't match inside "earrings"
            const escaped = query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
            const stem = escaped.replace(/s$/, '');
            const wordRe = new RegExp('\\b' + stem + 's?\\b');
            const categoryMatch = query === '' || wordRe.test(category);
            const nameMatch = query === '' || wordRe.test(name);

            if (nameMatch || categoryMatch || query === '') {
                product.style.display = 'block'; // show product
            } else {
                product.style.display = 'none'; // hide product
            }
        });
    });
}
</script>

    <script>
    // Prevent card navigation when interacting with quantity selectors or add-to-cart buttons
    document.addEventListener('DOMContentLoaded', function() {
        // Ensure add-to-cart buttons don't trigger navigation
        document.querySelectorAll('.AddToCartButton').forEach(btn => {
            btn.setAttribute('type', 'button');
            btn.addEventListener('click', evt => {
                evt.stopPropagation();
            });
        });

        // Stop select clicks/changes from bubbling to the anchor link
        document.querySelectorAll('.ProductCard select').forEach(sel => {
            sel.addEventListener('click', evt => {
                evt.preventDefault();
                evt.stopPropagation();
            });
            sel.addEventListener('change', evt => {
                evt.stopPropagation();
            });
        });

        // As a fallback, prevent navigation if the click originated from controls
        document.querySelectorAll('.ProductCard').forEach(card => {
            card.addEventListener('click', evt => {
                const t = evt.target;
                if (t.closest('select') || t.closest('.AddToCartButton') || t.closest('.WishlistBtn')) {
                    evt.preventDefault();
                }
            });
        });
    });
    </script>

    <script src="{{ asset('js/wishlist.js') }}"></script>
    <script>
    function toggleDetailWishlist() {
        var wl = window.wishlist;
        if (!wl) return;
        var name     = window._detailProductName  || '';
        var price    = window._detailProductPrice || '';
        var image    = window._detailProductImage || '';
        var category = window._detailProductCategory || '';
        var btn = document.getElementById('detailWishlistBtn');
        if (wl.isInWishlist(name)) {
            wl.removeFromWishlist(name);
            btn.innerHTML = '&#9825; Add to Wishlist';
            btn.style.background = 'transparent';
            btn.style.borderColor = '#111';
            btn.style.color = '#111';
            wl.showToast(name + ' removed from wishlist');
        } else {
            wl.addToWishlist({ name: name, price: price, image: image, link: window.location.href, category: category });
            btn.innerHTML = '&#9829; In Wishlist';
            btn.style.background = '#fff0f0';
            btn.style.borderColor = '#e74c3c';
            btn.style.color = '#e74c3c';
            wl.showToast(name + ' added to wishlist');
        }
    }
    </script>

</body>
</html>
