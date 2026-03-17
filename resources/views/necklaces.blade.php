<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< Updated upstream
  <title>Necklaces — Skyrose Atelier</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
  <div class="page-wrapper">
    <div class="PageContent">
      <!-- main site navigation -->
      <header class="TopNav">
        <a class="logo-link" href="/" aria-label="Skyrose Atelier home"><img class="header-logo" src="{{ asset('images/logo Skyrose.jpg') }}" alt="Skyrose Atelier logo"></a>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/products">Products</a>
        <a href="/contact">Contact</a>
        <!-- login/profile/cart icons added by JS -->
        <div class="IconNav">
          <a class="NavSearch" href="/products#searchInput" aria-label="Search"><img src="{{ asset('images/SearchIcon.png') }}" alt="Search"></a>
          <div id="auth-buttons">
            <a href="/login" aria-label="Login"><img src="{{ asset('images/ProfileIcon.png') }}" alt="Profile"></a>
            <a href="/cart" aria-label="Cart"><img src="{{ asset('images/CartIcon.png') }}" alt="Cart"><span id="cart-count" style="display:inline-block;margin-left:6px;color:#111;">0</span></a>
          </div>
        </div>
      </header>

      <!-- product category navigation -->
      <!-- Category sub-navigation -->
      <nav class="CategoryNav" aria-label="Product categories">
        <a href="/products">All</a>
        <a href="/category/rings">Rings</a>
        <a href="/category/earrings">Earrings</a>
        <a href="/category/bracelets">Bracelets</a>
        <a href="/category/necklaces">Necklaces</a>
        <a href="/category/watches">Watches</a>
      </nav>

=======
  <title>Necklaces — Seraphine Atelier</title>
  @vite(['resources/js/app.js'])
</head>
<body>
  <div class="page-wrapper">
    <header class="TopNav">
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/about') }}">About</a>
      <a href="{{ route('products.index') }}">Products</a>
      <a href="{{ url('/contact') }}">Contact</a>
      <div class="IconNav" id="auth-buttons"></div>
    </header>

    <!-- product category navigation -->
    <nav class="CategoryNav" aria-label="Product categories">
      <a href="{{ route('products.index') }}">All</a>
      <a href="{{ route('category', 'rings') }}">Rings</a>
      <a href="{{ route('category', 'earrings') }}">Earrings</a>
      <a href="{{ route('category', 'bracelets') }}">Bracelets</a>
      <a href="{{ route('category', 'necklaces') }}">Necklaces</a>
      <a href="{{ route('category', 'watches') }}">Watches</a>
    </nav>

    <div class="PageContent">
>>>>>>> Stashed changes
 <!-- page title + small intro -->
      <section class="TitleSection">
        <h1 class="MainTitle">Necklaces</h1>
        <p class="TitleDescription">Statement and everyday necklaces.</p>
      </section>

 <!-- necklace products grid -->
      <main class="ProductsGrid" aria-label="Necklaces">
<<<<<<< Updated upstream
        <a class="ProductCard" href="/products?product=signature-necklace" data-name="Signature Necklace" data-category="Necklace">
          <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/HandCraftedJewellry.png') }}" alt="Signature Necklace">
            <span class="ProductBadge">Necklace</span>
          </div>
          <div class="ProductInfo">
            <h3 class="ProductTitle">Signature Necklace</h3>
            <p class="ProductDescription">Statement necklace made by skilled artisans. Designed to elevate any occasion with timeless elegance.</p>
            <div class="ProductMeta"><span class="ProductPrice">£380</span></div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-signature-necklace"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Signature Necklace', 'qty-signature-necklace')">Add to Cart</button>
          </div>
        </a>

        <!-- product card  2 + description + price -->
        <a class="ProductCard" href="/products?product=diamond-choker" data-name="Diamond Choker Necklace" data-category="Necklace">
          <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/diamond-choker.jpg') }}" alt="Diamond Choker Necklace">
            <span class="ProductBadge">Necklace</span>
          </div>
          <div class="ProductInfo">
            <h3 class="ProductTitle">Diamond Choker Necklace</h3>
            <p class="ProductDescription">Statement necklace made by skilled artisans. Designed to elevate any occasion with timeless elegance.</p>
            <div class="ProductMeta"><span class="ProductPrice">£720</span></div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-diamond-choker"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Diamond Choker', 'qty-diamond-choker')">Add to Cart</button>
          </div>
        </a>

        <a class="ProductCard" href="/products?product=pearl-necklace" data-name="Pearl Necklace" data-category="Necklace">
          <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/pearl-necklace.jpg') }}" alt="Pearl Necklace">
            <span class="ProductBadge">Necklace</span>
          </div>
          <div class="ProductInfo">
            <h3 class="ProductTitle">Pearl Necklace</h3>
            <p class="ProductDescription">Statement necklace made by skilled artisans. Designed to elevate any occasion with timeless elegance.</p>
            <div class="ProductMeta"><span class="ProductPrice">£420</span></div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-pearl-necklace"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Pearl Necklace', 'qty-pearl-necklace')">Add to Cart</button>
          </div>
        </a>

        <a class="ProductCard" href="/products?product=gold-necklace" data-name="Gold Necklace" data-category="Necklace">
          <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/gold-necklace.jpg') }}" alt="Gold Necklace">
            <span class="ProductBadge">Necklace</span>
          </div>
          <div class="ProductInfo">
            <h3 class="ProductTitle">Gold Necklace</h3>
            <p class="ProductDescription">Statement necklace made by skilled artisans. Designed to elevate any occasion with timeless elegance.</p>
            <div class="ProductMeta"><span class="ProductPrice">£540</span></div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-gold-necklace"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Gold Necklace', 'qty-gold-necklace')">Add to Cart</button>
          </div>
        </a>

        <a class="ProductCard" href="/products?product=layered-necklace" data-name="Layered Necklace" data-category="Necklace">
          <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/layered-necklace.jpg') }}" alt="Layered Necklace">
            <span class="ProductBadge">Necklace</span>
          </div>
          <div class="ProductInfo">
            <h3 class="ProductTitle">Layered Necklace</h3>
            <p class="ProductDescription">Statement necklace made by skilled artisans. Designed to elevate any occasion with timeless elegance.</p>
            <div class="ProductMeta"><span class="ProductPrice">£340</span></div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-layered-necklace"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Layered Necklace', 'qty-layered-necklace')">Add to Cart</button>
          </div>
=======
         <!-- product card 1 + description + price -->
        <a class="ProductCard" href="/products">
          <div class="ProductImageWrap"><img class="ProductImage" src="{{ asset('images/HandCraftedJewellry.png') }}" alt="Signature Necklace"></div>
          <div class="ProductInfo"><h3 class="ProductTitle">Signature Necklace</h3><p class="ProductDescription">Statement necklace made by skilled artisans. Designed to elevate any occasion with timeless elegance and premium craftsmanship.</p><div class="ProductMeta"><span class="ProductPrice">£199</span></div></div>
        </a>
<a class="ProductCard" href="/products">
          <div class="ProductImageWrap"><img class="ProductImage" src="{{ asset('images/gold-necklace.jpg') }}" alt="Gold Necklace"></div>
          <div class="ProductInfo"><h3 class="ProductTitle">Gold Necklace</h3><p class="ProductDescription">Statement necklace made by skilled artisans. Designed to elevate any occasion with timeless elegance and premium craftsmanship.</p><div class="ProductMeta"><span class="ProductPrice">£250</span></div></div>
        </a>

        <a class="ProductCard" href="/products">
          <div class="ProductImageWrap"><img class="ProductImage" src="{{ asset('images/pearl-necklace.jpg') }}" alt="Pearl Necklace"></div>
          <div class="ProductInfo"><h3 class="ProductTitle">Pearl Necklace</h3><p class="ProductDescription">Statement necklace made by skilled artisans. Designed to elevate any occasion with timeless elegance and premium craftsmanship.</p><div class="ProductMeta"><span class="ProductPrice">£240</span></div></div>
        </a>

        <a class="ProductCard" href="/products">
          <div class="ProductImageWrap"><img class="ProductImage" src="{{ asset('images/diamond-choker.jpg') }}" alt="Diamond Choker"></div>
          <div class="ProductInfo"><h3 class="ProductTitle">Diamond Choker</h3><p class="ProductDescription">Statement necklace made by skilled artisans. Designed to elevate any occasion with timeless elegance and premium craftsmanship.</p><div class="ProductMeta"><span class="ProductPrice">£280</span></div></div>
        </a>

        <a class="ProductCard" href="/products">
          <div class="ProductImageWrap"><img class="ProductImage" src="{{ asset('images/layered-necklace.jpg') }}" alt="Layered Necklace"></div>
          <div class="ProductInfo"><h3 class="ProductTitle">Layered Necklace</h3><p class="ProductDescription">Statement necklace made by skilled artisans. Designed to elevate any occasion with timeless elegance and premium craftsmanship.</p><div class="ProductMeta"><span class="ProductPrice">£450</span></div></div>
        </a>





>>>>>>> b4c5a9c09529ecbaff02d7f14bc8223fd0fe3de7
          <div class="ProductImageWrap"><img class="ProductImage" src="{{ asset('images/LandingPageImage.png') }}" alt="Signature Pendant"></div>
          <div class="ProductInfo"><h3 class="ProductTitle">Signature Pendant</h3><p class="ProductDescription">A timeless pendant inspired by classical forms. Precision craftsmanship meets elegant design for the discerning collector.</p><div class="ProductMeta"><span class="ProductPrice">£179</span></div></div>
>>>>>>> Stashed changes
        </a>
      </main>

    </div>

<!-- footer with social icons -->
    <footer class="footer">
      <div class="FooterIconsContainer">
        <img class="FooterIcons" src="{{ asset('images/FacebookIcon.png') }}" alt="Facebook">
        <img class="FooterIcons" src="{{ asset('images/InstagramIcon.png') }}" alt="Instagram">
        <img class="FooterIcons" src="{{ asset('images/YoutubeIcon.png') }}" alt="YouTube">
      </div>
<<<<<<< Updated upstream
      <!-- copyright -->
      <div class="FooterCopyright">&copy; <span id="year">2025</span> Skyrose Atelier</div>
    </footer>
  </div>

 <!-- keep footer year up-to-date -->
  <script>try{document.getElementById('year').textContent=new Date().getFullYear()}catch(e){};</script>
   <!-- main JS file -->
  <script src="{{ asset('js/index.js') }}" defer></script>
=======
      <p class="ContactTitle">&copy; 2025 Seraphine Atelier</p>
    </footer>
  </div>
>>>>>>> Stashed changes
</body>
</html>



