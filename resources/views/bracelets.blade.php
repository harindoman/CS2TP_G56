<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bracelets &ndash; Skyrose Atelier</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="icon" type="image/jpeg" href="{{ asset('images/logo%20Skyrose.jpg') }}">
</head>
<body>
  <div class="page-wrapper">
    <div class="PageContent">
      <!--main top navbar-->
      @include('partials.nav')

      @include('partials.category-dropdown', ['active' => 'bracelets'])

      <!--page title + short intro-->
      <section class="TitleSection">
        <h1 class="MainTitle">Bracelets</h1>
        <p class="TitleDescription">Bracelets handcrafted with care.</p>
      </section>

      <main class="ProductsGrid" aria-label="Bracelets">
        <a class="ProductCard" href="/products/1" data-name="Bleeding Heart Bracelet" data-category="Bracelet">
          <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/BleedingHeartBracelet.png') }}" alt="Bleeding Heart Bracelet">
            <span class="ProductBadge">Bracelet</span>
          </div>
          <div class="ProductInfo">
            <h3 class="ProductTitle">Bleeding Heart Bracelet</h3>
            <p class="ProductDescription">Handcrafted bracelet with romantic detailing. A statement piece celebrating love and craftsmanship.</p>
            <div class="ProductMeta"><span class="ProductPrice">£245</span></div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-bleeding-heart-bracelet"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <div class="ProductCardActions">
              <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Bleeding Heart Bracelet', 'qty-bleeding-heart-bracelet')">Add to Cart</button>
              <button type="button" class="WishlistBtn" onclick="toggleWishlist(event, this)" title="Add to wishlist">&#9825;</button>
            </div>
          </div>
        </a>

        <a class="ProductCard" href="/products?product=gold-bangle-bracelet" data-name="Gold Bangle Bracelet" data-category="Bracelet">
          <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/gold-bangle.jpg') }}" alt="Gold Bangle Bracelet">
            <span class="ProductBadge">Bracelet</span>
          </div>
          <div class="ProductInfo">
            <h3 class="ProductTitle">Gold Bangle Bracelet</h3>
            <p class="ProductDescription">Golden baddazzling heavy bangle bracelet perfect for weddings and special occasions. A statement piece celebrating love and craftsmanship.</p>
            <div class="ProductMeta"><span class="ProductPrice">£380</span></div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-gold-bangle"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <div class="ProductCardActions">
              <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Gold Bangle', 'qty-gold-bangle')">Add to Cart</button>
              <button type="button" class="WishlistBtn" onclick="toggleWishlist(event, this)" title="Add to wishlist">&#9825;</button>
            </div>
          </div>
        </a>

        <a class="ProductCard" href="/products?product=cuban-bracelet" data-name="Cuban Bracelet" data-category="Bracelet">
          <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/cuban-bracelet.jpg') }}" alt="Cuban Bracelet">
            <span class="ProductBadge">Bracelet</span>
          </div>
          <div class="ProductInfo">
            <h3 class="ProductTitle">Cuban Bracelet</h3>
            <p class="ProductDescription">An embezzeling factory made Cuban Bracelet full of luxury. A statement piece celebrating love and craftsmanship.</p>
            <div class="ProductMeta"><span class="ProductPrice">£520</span></div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-cuban-bracelet"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <div class="ProductCardActions">
              <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Cuban Bracelet', 'qty-cuban-bracelet')">Add to Cart</button>
              <button type="button" class="WishlistBtn" onclick="toggleWishlist(event, this)" title="Add to wishlist">&#9825;</button>
            </div>
          </div>
        </a>

        <a class="ProductCard" href="/products?product=charm-bracelet" data-name="Charm Bracelet" data-category="Bracelet">
          <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/charm-bracelet.jpg') }}" alt="Charm Bracelet">
            <span class="ProductBadge">Bracelet</span>
          </div>
          <div class="ProductInfo">
            <h3 class="ProductTitle">Charm Bracelet</h3>
            <p class="ProductDescription">Handcrafted bracelet with romantic detailing. A statement piece celebrating love and craftsmanship.</p>
            <div class="ProductMeta"><span class="ProductPrice">£310</span></div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-charm-bracelet"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <div class="ProductCardActions">
              <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Charm Bracelet', 'qty-charm-bracelet')">Add to Cart</button>
              <button type="button" class="WishlistBtn" onclick="toggleWishlist(event, this)" title="Add to wishlist">&#9825;</button>
            </div>
          </div>
        </a>

        <a class="ProductCard" href="/products?product=leather-bracelet" data-name="Leather Bracelet" data-category="Bracelet">
          <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/leather-bracelet.jpg') }}" alt="Leather Bracelet">
            <span class="ProductBadge">Bracelet</span>
          </div>
          <div class="ProductInfo">
            <h3 class="ProductTitle">Leather Bracelet</h3>
            <p class="ProductDescription">Handcrafted leather bracelet with a rugged yet refined look. A statement piece celebrating love and craftsmanship.</p>
            <div class="ProductMeta"><span class="ProductPrice">£175</span></div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-leather-bracelet"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <div class="ProductCardActions">
              <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Leather Bracelet', 'qty-leather-bracelet')">Add to Cart</button>
              <button type="button" class="WishlistBtn" onclick="toggleWishlist(event, this)" title="Add to wishlist">&#9825;</button>
            </div>
          </div>
        </a>
      </main>

    </div>
    @include('partials.footer')
  </div>
  <script src="{{ asset('js/wishlist.js') }}" defer></script>
</body>
</html>

