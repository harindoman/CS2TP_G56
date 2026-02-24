    <!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Our Products</title>
        <link rel="stylesheet" href="css/index.css">
        <script src="js/index.js" defer></script>
</head>
<body>

<div class="page-wrapper">
    <div class="PageContent">

    <!-- Top Navigation -->
    <div class="TopNav">
        <a href="home.html">Home</a>
        <a href="about.html">About</a>
        <a href="products.html">Products</a>
        <a href="contact.html">Contact</a>

        <div class="IconNav"></div>
</div>

<section class="TitleSection">
        <h1 class="MainTitle">Our Jewellery Collection</h1>
        <p class="TitleDescription">Browse our handmade, luxury jewellery pieces.</p>
</section>

<!-- Search Bar -->
<section class="SearchSection" style="padding: 20px; text-align: center; background: #f9f9f9; margin: 20px 0;">
    <input type="text" id="searchInput" placeholder="Search products by name or category..." style="width: 100%; max-width: 500px; padding: 12px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px;">
</section>

<!-- Category links -->
<section class="CategoryLinks" aria-label="Shop by category">
    <h2 class="SectionTitle">Shop By Category</h2>
    <div class="CategoryGrid">
        <a class="CategoryCard" href="rings.html">Rings</a>
        <a class="CategoryCard" href="earrings.html">Earrings</a>
        <a class="CategoryCard" href="bracelets.html">Bracelets</a>
        <a class="CategoryCard" href="necklaces.html">Necklaces</a>
        <a class="CategoryCard" href="watches.html">Watches</a>
    </div>
</section>

<!-- Products Grid (uses CSS in css/index.css) -->
<main class="ProductsGrid" id="productsGrid" aria-label="Product list">
    @forelse($products as $product)
    <a class="ProductCard" href="{{ route('products.show', $product->id) }}" data-name="{{ $product->name }}" data-category="{{ $product->category }}">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ $product->image_url }}" alt="{{ $product->name }}">
            <span class="ProductBadge">{{ $product->category }}</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">{{ $product->name }}</h3>
            <p class="ProductDescription">{{ $product->description }}</p>
            <div class="ProductMeta">
                <span class="StockText @if($product->stock_quantity > 0) in-stock @else out-of-stock @endif">
                    @if($product->stock_quantity > 0) In Stock @else Out of Stock @endif
                </span>
                <span class="ProductPrice">£{{ number_format($product->price, 2) }}</span>
            </div>
            <button class="AddToCartButton" @if($product->stock_quantity > 0) onclick="addToCartQuick(event, '{{ $product->name }}', {{ $product->id }})" @else disabled @endif>
                @if($product->stock_quantity > 0) Add to Cart @else Unavailable @endif
            </button>
        </div>
    </a>
    @empty
    <div style="grid-column: 1 / -1; text-align: center; padding: 40px;">
        <p>No products available at the moment.</p>
    </div>
    @endforelse
</main>

    </div>
 <!-- footer section -->
    <div id="site-footer">
    <footer class="footer">
        <div class="FooterIconsContainer">
            <img src="assets/images/FacebookIcon.png" class="FooterIcons" alt="facebook">
            <img src="assets/images/InstagramIcon.png" class="FooterIcons" alt="instagram">
            <img src="assets/images/YoutubeIcon.png" class="FooterIcons" alt="youtube">
        </div>
        <p class="ContactTitle">© 2025 Luxury Jewelry Store</p>
    </footer>
</div>
<script src="js/index.js" defer></script>

<script>
// Search functionality
document.getElementById('searchInput').addEventListener('keyup', function(e) {
    const query = e.target.value.toLowerCase();
    const products = document.querySelectorAll('.ProductCard');
    
    // filter products by name or category
    products.forEach(product => {
        const name = product.getAttribute('data-name').toLowerCase();
        const category = product.getAttribute('data-category').toLowerCase();
        
        if (name.includes(query) || category.includes(query) || query === '') {
            product.style.display = 'block'; // show product
        } else {
            product.style.display = 'none'; // hide product
        }
    });
});
// quick add-to-cart function
function addToCartQuick(e, name, qty){
    e.preventDefault();
    fetch('api/add-to-cart.php', {
        method: 'POST',
        headers: {'Content-Type':'application/json'},
        body: JSON.stringify({productName: name, quantity: qty})
    }).then(()=>{
        // update cart count if function exists
        if(window.loadCartCount) loadCartCount();
        else if(typeof window.Site !== 'undefined' && window.Site.updateCartCount) window.Site.updateCartCount();
        alert(name + ' added to cart');
    }).catch(()=> alert('Failed to add to cart'));
}
</script>

</body>
</html>
