<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
        <title>Our Products</title>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <script src="{{ asset('js/index.js') }}" defer></script>
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
        </style>
</head>
=======
        <title>Our Products - Seraphine Atelier</title>
        @vite(['resources/js/app.js'])
body{
    font-family:Georgia, 'Times New Roman', Times, serif;
    margin: 15px;
    margin-left: 30px;
    padding-top: 80px;
    color: #111;
}

/* Make pages use a column layout so footer can stick to the bottom */
html, body { height: 100%; }
body { display: flex; flex-direction: column; min-height: 100vh; }
.page-wrapper { display: flex; flex-direction: column; flex: 1; }
.PageContent { flex: 1; }


.TopNav{
    display: flex;
    flex-direction: row;
    background-color: rgba(200, 195, 137, 0.7);
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    align-items: center;
    padding: 12px 24px;
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);

    
}

.logo-link{
    display: inline-flex;
    align-items: center;
    margin: 0 12px;
}

.header-logo{
    height: 46px;
    width: auto;
    display: block;
    transition: transform 0.18s ease, filter 0.18s ease;
}

/* Bigger brand mark on homepage */
.home-logo{ height: 64px; }

.header-logo:hover{ transform: translateY(-2px); filter: drop-shadow(0 4px 8px rgba(0,0,0,0.18)); }

.TopNav a{
   color: black;
   text-align: center;
   border-radius: 2px;
   padding: 15px;

}

.TopNav a:hover{
    background-color: black;
    color: white;
    margin-top: -3px;
    transition-delay: 0.1s;
    cursor: pointer;
    font-size: 16px;
    
}

.IconNav{
    margin-left: auto;
    display: flex;
    align-items: center;
}

.IconNav img{
    margin-right: 20px;
    max-width: 30px;
    padding-top: 10px;
    height: auto;
    transition: max-width 0.1s ease;
    transition-delay: 0.3s;
    
}

.IconNav img:hover{
    opacity: 0.6;
    max-width: 32px;
    cursor: pointer;
    
}

.TitleSection{
    margin-top: 65px;
    background-color: whitesmoke;
}

/* Homepage hero */
.Hero{
    display:block;
    margin-top: 80px;
    background: none; /* removed background image to match request */
}
.HeroInner{
    max-width: 1200px;
    margin: 0 auto;
    padding: 100px 24px;
    display: flex;
    align-items: center;
    gap: 40px;
}
.HeroCopy{ flex:1; }
.HeroTitle{ font-family: 'Georgia', serif; font-size: 48px; margin:0 0 12px; color:#111; line-height:1.05 }
.HeroSubtitle{ font-size:18px; color: #111; margin-bottom:18px; max-width:620px }
.HeroCTA{ display:flex; gap:12px }
.BtnPrimary{ background:#d4af37; color:#111; padding:12px 20px; border-radius:8px; border:none; font-weight:700; cursor:pointer; box-shadow:0 6px 18px rgba(0,0,0,0.18) }
.BtnGhost{ background:transparent; color:#fff; padding:12px 20px; border-radius:8px; border:1px solid rgba(255,255,255,0.18); cursor:pointer }
.HeroVisual{ width:420px; max-width:40%; border-radius:12px; overflow:hidden; box-shadow: 0 12px 40px rgba(0,0,0,0.35) }
.HeroVisual img{ width:100%; height:auto; display:block }

/* Featured / editorial */
.FeaturedSection{ max-width:1200px; margin:40px auto; padding:24px }
.FeaturedGrid{ display:grid; grid-template-columns: 1fr 1fr 1fr; gap:20px }
.FeatureCard{ background:#fff; border-radius:10px; padding:18px; box-shadow:0 10px 30px rgba(0,0,0,0.06); text-align:left }
.FeatureCard h3{ margin:0 0 8px; font-size:18px }
.FeatureCard p{ margin:0; color:#555 }

@media (max-width: 900px){
    .HeroInner{ flex-direction:column; padding:60px 18px }
    .HeroVisual{ max-width:100%; width:100% }
    .FeaturedGrid{ grid-template-columns: 1fr 1fr }
}
@media (max-width: 600px){
    .HeroTitle{ font-size:28px }
    .FeaturedGrid{ grid-template-columns: 1fr }
}

.MainTitle{
    color: black;
    font-size: 40px;
    margin-bottom: 20px;
}

.TitleDescription{
    line-height: 1.5;
    word-spacing: 1.5px;
    color: rgb(56, 56, 56);
    margin: 0 auto;
}

.ShopNowButton{
    background: black;
    color: white;
    border-color: black;
    border-radius: 5px;
    margin-top: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-right: 10px;
}

.ShopNowButton:hover{
    background: white;
    color: black;
    border-color: black;
    cursor: pointer;
}

.LandingPageImage{
    margin-top: 20px;
    max-width: 100%;
    height: auto;
    background-color: whitesmoke;
    
}

.FeaturedCrafts{
    margin-top: 70px;
    background-color: whitesmoke;
}

.FeaturedCraftsTitle{
    color: black;
    font-size: 30px;
    margin-bottom: 20px;
}

.FeaturedItem{
    max-width: 100%;
    height: auto;
    border-radius: 5px;
    transition: transform 0.5s ease;
}

.FeaturedItem:hover{
    transform: scale(1.05);
    cursor: pointer;
}

.FeaturedCraftsImgs{
    display: flex;
    flex-direction: row;
    gap: 20px;

}

.Passion{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 70px;
    background-color: whitesmoke;
}

.PassionBox{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-left: 150px;
    padding-right: 100px;
}

.PassionTitle{
    color: black;
    font-size: 30px;
    margin-bottom: 10px;
}

.PassionBoxText{
    font-size: 18px;
    line-height: 1.5;
    word-spacing: 1.5px;
    color: rgb(56, 56, 56);
}

.PassionJewellryContainer{
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
    flex-wrap: wrap;
    
}

.PassionJewellryContainer img{
    max-width: 100%;
    height: auto;
    object-fit: contain;
    padding-left: 150px;

}

.LearnMoreButton{
    margin: auto;
    background: black;
    color: white;
    border-color: black;
    border-radius: 5px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-right: 10px;
}

.LearnMoreButton:hover{
    background: white;
    color: black;
    cursor: pointer;
}

.ContactUs{
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
}

.ContactTitle{
    color: white;
    text-align: left;;
}

/* Contact page layout */
.contact-page{
    padding: 40px 24px 60px;
    max-width: 1100px;
    margin: 0 auto;
}

.contact-info-strip{
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 16px;
    margin-bottom: 32px;
}

.contact-info-card{
    background: #f2f2f2;
    border-radius: 10px;
    padding: 16px 20px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.contact-info-icon{ font-size: 1.6rem; }

.contact-info-icon img{
    width: 44px;
    height: 44px;
    object-fit: contain;
    display: block;
}

.contact-info-text h3{
    margin: 0 0 4px;
    font-size: 0.95rem;
}

.contact-info-text p{
    margin: 0;
    font-size: 0.9rem;
}

.contact-main-section{
    display: grid;
    grid-template-columns: minmax(0, 1.2fr) minmax(0, 1.3fr);
    gap: 0;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
}

.contact-form-card{
    background: #ffffff;
    padding: 28px 32px 32px;
}

.contact-form-card h1{
    margin: 0 0 20px;
    font-size: 1.9rem;
}

.form-row{
    display: flex;
    gap: 30px;
    margin-bottom: 4px;
}

.form-row.two-cols .field{ flex: 1; min-width: 0; }

.field{ margin-bottom: 14px; }

.field label{
    display: block;
    margin-bottom: 4px;
    font-size: 0.9rem;
}

.field input,
.field textarea{
    width: 100%;
    padding: 10px 12px;
    border-radius: 8px;
    border: 1px solid #d0d0d0;
    outline: none;
    font: inherit;
    background: #fafafa;
}

.field textarea{
    min-height: 120px;
    resize: vertical;
}

.field input:focus,
.field textarea:focus{
    border-color: #000000;
    background: #ffffff;
}

.contact-submit{
    margin-top: 10px;
    width: 100%;
    padding: 12px 20px;
    border-radius: 8px;
    border: none;
    background: #111111;
    color: #ffffff;
    font-weight: 500;
    cursor: pointer;
    transition: background 0.2s ease, transform 0.1s ease, box-shadow 0.1s ease;
}

.contact-submit:hover{
    background: #000000;
    transform: translateY(-1px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.18);
}

.contact-response{ margin-top: 8px; font-size: 0.9rem; }

.contact-image-card{
    background: #e6e6e6;
    position: relative;
    min-height: 260px;
}

.contact-main-image{
    width: 100%;
    max-width: 420px;
    height: auto;
    display: block;
    margin: 0 auto;
    border-radius: 12px;
    object-fit: cover;
}
/* Contact page visuals */
.contact-info-icon img{
    width: 44px;
    height: 44px;
    object-fit: contain;
}

.contact-main-image{
    width: 100%;
    max-width: 420px;
    height: auto;
    display: block;
    margin: 0 auto;
    border-radius: 12px;
    object-fit: cover;
}

.footer{
    background-color: rgba(0, 0, 0, 0.9);
    color: #fff;
    padding: 20px 30px;
    text-align: center;
    margin-top: auto;
}

.FooterIconsContainer{
    display: flex;
    flex-direction: row;
    gap: 12px;
    justify-content: center;
    align-items: center;
}

.FooterIcons{
    margin-top: 20px;
    /* make the icon sit inside a white circular badge for contrast */
    width: 28px;
    height: 28px;
    padding: 8px;
    background: #fff;
    border-radius: 50%;
    box-shadow: 0 3px 8px rgba(0,0,0,0.18);
    display: inline-block;
    object-fit: contain;
    vertical-align: middle;
    transition: transform 0.12s ease, box-shadow 0.12s ease;

}

.FooterIcons:hover{ transform: translateY(-3px); box-shadow: 0 6px 14px rgba(0,0,0,0.22); }

.footer p{ margin: 0; color: #fff; }

/* Loading spinner used on homepage */
.LoadingWrapper{
    text-align: center;
    padding: 36px 0;
}
.LoadingSpinner{
    display:inline-block;
    width:48px;
    height:48px;
    border:4px solid rgba(0,0,0,0.08);
    border-top-color: #d4af37;
    border-radius:50%;
    animation: spin 1s linear infinite;
}
.loading-text{
    margin-top:12px;
    color: #444;
}
@keyframes spin{ to{ transform: rotate(360deg);} }

/* Products grid and card styles for homepage (simple, site CSS based) */
.ProductsGrid{
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    gap: 20px;
    padding: 24px 30px;
    max-width: 1200px;
    margin: 0 auto 60px;
}
.ProductCard{
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.06);
    overflow: hidden;
    display: flex;
    flex-direction: column;
}
.ProductImageWrap{ position: relative; }
.ProductImage{ width: 100%; height: 220px; object-fit: cover; display:block; }
.ProductBadge{ position: absolute; left:10px; top:10px; background:#111; color:#fff; padding:6px 8px; border-radius:999px; font-size:12px; }
.ProductInfo{ padding:16px; flex:1; display:flex; flex-direction:column; }
.ProductTitle{ font-size:18px; margin:0 0 8px 0; color:#111; }
.ProductDescription{ font-size:14px; color:#555; margin:0 0 12px 0; flex:1 }
.ProductMeta{ display:flex; justify-content:space-between; align-items:center; margin-bottom:12px }
.ProductPrice{ color:#b8941f; font-weight:700; font-size:18px }
.StockText{ font-size:13px }
.StockText.low-stock{ color:#cc2b2b }
.StockText.in-stock{ color:#198754 }
.AddToCartButton{ background:#d4af37; border:none; color:#fff; padding:10px 12px; border-radius:6px; cursor:pointer }
.AddToCartButton[disabled]{ opacity:0.5; cursor:not-allowed }

/* Quantity selector for product cards */
.QuantitySelector {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 8px 0;
}
.QuantitySelector label {
    font-size: 13px;
    color: #555;
    font-weight: 500;
}
.QuantitySelector select {
    padding: 6px 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 13px;
    background: white;
    cursor: pointer;
}

/* Auth (login/register) form styles */
.AuthPage{
    display:flex;
    align-items:center;
    justify-content:center;
    min-height: calc(100vh - 80px);
    padding: 24px;
    background: #f6f5f2;
}
.AuthCard{
    width: 100%;
    max-width: 420px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.08);
    padding: 28px;
}
.AuthTitle{ font-size: 26px; margin: 0 0 14px 0; text-align:center; color:#111 }
.AuthForm{ display:flex; flex-direction:column; gap:10px }
.AuthForm label{ font-size:14px; color:#333 }
.AuthForm input{ width:100%; padding:10px 12px; border:1px solid #ddd; border-radius:6px; font-size:14px; color:#111 }
.AuthForm input:focus{ outline:none; border-color:#d4af37; box-shadow:0 0 0 3px rgba(212,175,55,0.12) }
.AuthButton{ background:#d4af37; color:#fff; border:none; padding:12px; border-radius:8px; font-weight:600; cursor:pointer; margin-top:6px }
.AuthButton:hover{ background:#b8941f }
.AuthHelp{ text-align:center; font-size:13px; margin-top:8px }
.AuthHelp a{ color:#b8941f }
.AuthError{ margin-top:12px; color:#b91c1c; text-align:center; min-height:20px }

/* Product card polish + responsive image heights */
.ProductsGrid{ gap:24px }
.ProductImage{ height:240px }

@media (max-width: 900px){
    .ProductImage{ height:200px }
}

@media (max-width: 600px){
    .ProductImage{ height:160px }
    .ProductsGrid{ padding: 16px }
    .AuthCard{ padding: 18px }
    .AuthTitle{ font-size:22px }
}

/* Responsive tweaks for small screens */
@media (max-width: 600px) {
    body{
        padding-top: 64px; /* reduce space so mobile shows more content */
    }

    .TopNav{
        padding: 8px 12px;
    }

    .TopNav a{
        padding: 8px 10px;
        font-size: 14px;
    }

    .IconNav img{
        max-width: 22px;
        margin-right: 12px;
        padding-top: 6px;
    }

    .FooterIcons{
        width: 24px;
        height: 24px;
        padding: 6px;
    }

    .contact-info-icon img{
        width: 36px;
        height: 36px;
    }

    .contact-main-image{
        max-width: 320px;
    }

    .contact-info-strip{ grid-template-columns: 1fr; }
    .contact-main-section{ grid-template-columns: 1fr; }
    .contact-image-card{ min-height: 200px; }
    .form-row.two-cols{ flex-direction: column; }
}




   </style>
>>>>>>> Stashed changes
<body>

<div class="page-wrapper">
    <header class="navbar">
        <div class="logo">Seraphine Atelier</div>
        <nav>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="PageContent">

<<<<<<< Updated upstream
    <!-- Top Navigation -->
        <div class="TopNav">
            <a class="logo-link" href="/" aria-label="Skyrose Atelier home"><img class="header-logo" src="{{ asset('images/logo Skyrose.jpg') }}" alt="Skyrose Atelier logo"></a>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/products">Products</a>
            <a href="/contact">Contact</a>

                <div class="IconNav">
                    <a class="NavSearch" href="/products#searchInput" aria-label="Search"><img src="{{ asset('images/SearchIcon.png') }}" alt="Search"></a>
                    <div id="auth-buttons">
                        <a href="/login" aria-label="Login"><img src="{{ asset('images/ProfileIcon.png') }}" alt="Profile"></a>
                        <a href="/cart" aria-label="Cart"><img src="{{ asset('images/CartIcon.png') }}" alt="Cart"><span id="cart-count" style="display:inline-block;margin-left:6px;color:#111;">0</span></a>
                    </div>
                </div>
</div>

<section class="TitleSection">
=======
    <section class="TitleSection">
>>>>>>> Stashed changes
        <h1 class="MainTitle">Our Jewellery Collection</h1>
        <p class="TitleDescription">Browse our handmade, luxury jewellery pieces.</p>
    </section>

    <!-- Search Bar -->
    <section class="SearchSection" style="padding: 20px; text-align: center; background: #f9f9f9; margin: 20px 0;">
        <input type="text" id="searchInput" placeholder="Search products by name or category..." style="width: 100%; max-width: 500px; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px;">
    </section>

<<<<<<< Updated upstream
<!-- Category links -->
<section class="CategoryLinks" aria-label="Shop by category">
    <h2 class="SectionTitle">Shop By Category</h2>
    <div class="CategoryGrid">
        <a class="CategoryCard" href="/category/rings">Rings</a>
        <a class="CategoryCard" href="/category/earrings">Earrings</a>
        <a class="CategoryCard" href="/category/bracelets">Bracelets</a>
        <a class="CategoryCard" href="/category/necklaces">Necklaces</a>
        <a class="CategoryCard" href="/category/watches">Watches</a>
    </div>
</section>

<!-- Products Grid (uses CSS in css/index.css) -->
<main class="ProductsGrid" id="productsGrid" aria-label="Product list">
 <!-- product card 1 -->
    <a class="ProductCard" href="/products?product=buta-ring" data-name="Buta Ring" data-category="Ring">
=======
    <!-- Category links -->
    <section class="CategoryLinks" aria-label="Shop by category">
        <h2 class="SectionTitle">Shop By Category</h2>
        <div class="CategoryGrid">
            <a class="CategoryCard" href="{{ route('category', 'rings') }}">Rings</a>
            <a class="CategoryCard" href="{{ route('category', 'earrings') }}">Earrings</a>
            <a class="CategoryCard" href="{{ route('category', 'bracelets') }}">Bracelets</a>
            <a class="CategoryCard" href="{{ route('category', 'necklaces') }}">Necklaces</a>
            <a class="CategoryCard" href="{{ route('category', 'watches') }}">Watches</a>
        </div>
    </section>

    <!-- Products Grid -->
    <main class="ProductsGrid" id="productsGrid" aria-label="Product list">
    @forelse($products as $product)
    <a class="ProductCard" href="{{ route('products.show', $product->id) }}" data-name="{{ $product->name }}" data-category="{{ $product->category }}">
>>>>>>> Stashed changes
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/ButaRing.png') }}" alt="Buta Ring">
            <span class="ProductBadge">Ring</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Buta Ring</h3>
            <!-- short description -->
            <p class="ProductDescription">A beautifully detailed ring with traditional motifs. Handcrafted from ethically sourced materials with intricate detailing.</p>
            <!-- stock + price info -->
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£185</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-buta-ring"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
             <!-- quick add-to-cart button -->
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Buta Ring', 'qty-buta-ring')">Add to Cart</button>
        </div>
    </a>
<!-- product card 2 -->
<a class="ProductCard" href="/products?product=saphire-ring" data-name="Saphire Ring" data-category="Ring">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/saphire-ring.jpg') }}" alt="Saphire Ring">
            <span class="ProductBadge">Ring</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Saphire Ring</h3>
            <p class="ProductDescription">A beautifully Sapphire blue ring with traditional motifs. Handcrafted from ethically sourced materials with intricate detailing.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£420</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-saphire-ring"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Saphire Ring', 'qty-saphire-ring')">Add to Cart</button>
        </div>
    </a>

    <a class="ProductCard" href="/products?product=rose-gold-ring" data-name="Rose Gold Ring" data-category="Ring">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/rose-gold.jpg') }}" alt="Rose Gold Ring">
            <span class="ProductBadge">Ring</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Rose Gold Ring</h3>
            <p class="ProductDescription">A beautifully Rose gold goldern detailed ring with traditional motifs. Handcrafted from ethically sourced materials with intricate detailing.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£385</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-rose-gold-ring"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Rose Gold Ring', 'qty-rose-gold-ring')">Add to Cart</button>
        </div>
    </a>

    <a class="ProductCard" href="/products?product=vintage-ring" data-name="Vintage Ring" data-category="Ring">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/vintage-ring.jpg') }}" alt="Vintage Ring">
            <span class="ProductBadge">Ring</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Vintage Ring</h3>
            <p class="ProductDescription">A vintage-inspired ring with timeless elegance. Handcrafted from ethically sourced materials with intricate detailing.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£650</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-vintage-ring"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Vintage Ring', 'qty-vintage-ring')">Add to Cart</button>
        </div>
    </a>

    <a class="ProductCard" href="/products?product=diamond-ring" data-name="diamond Ring" data-category="Ring">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/diamond-ring.jpg') }}" alt="Diamond Ring">
            <span class="ProductBadge">Ring</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Diamond Ring</h3>
            <p class="ProductDescription">A dazzling diamond ring that captures the essence of luxury and elegance. Handcrafted from ethically sourced materials with intricate detailing.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£550</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-diamond-ring"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Diamond Ring', 'qty-diamond-ring')">Add to Cart</button>
        </div>
    </a>



    <a class="ProductCard" href="/products?product=threadbare-earrings" data-name="Threadbare Earrings" data-category="Earrings">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/ThreadbareEarrings.png') }}" alt="Threadbare Earrings">
            <span class="ProductBadge">Earrings</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Threadbare Earrings</h3>
            <p class="ProductDescription">Lightweight, elegant earrings for everyday wear. Perfect complement to any outfit with subtle elegance.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£120</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-threadbare-earrings"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Threadbare Earrings', 'qty-threadbare-earrings')">Add to Cart</button>
        </div>
    </a>

 <a class="ProductCard" href="/products?product=diamond-earring" data-name="Diamond Earring" data-category="Earrings">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/diamond-earring.jpg') }}" alt="Diamond Earring">
            <span class="ProductBadge">Earrings</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Diamond chandelier Earring</h3>
            <p class="ProductDescription">A sparkling diamond earring that adds a touch of glamour to any look. Perfect complement to any outfit with subtle elegance.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£480</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-diamond-earring"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Diamond Earrings', 'qty-diamond-earring')">Add to Cart</button>
        </div>
    </a>

    <a class="ProductCard" href="/products?product=gold-earring" data-name="Gold Hoop Earring" data-category="Earrings">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/gold-hoop.jpg') }}" alt="Gold Earring">
            <span class="ProductBadge">Earrings</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Gold Hoop Earring</h3>
            <p class="ProductDescription">A sparkling gold earring that adds a touch of glamour to any look. Perfect complement to any outfit with subtle elegance.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£195</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-gold-hoop-earring"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Gold Hoop', 'qty-gold-hoop-earring')">Add to Cart</button>
        </div>
    </a>

    <a class="ProductCard" href="/products?product=pearl-drop-earring" data-name="Pearl Drop Earring" data-category="Earrings">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/pearl-drop.jpg') }}" alt="Pearl Drop Earring">
            <span class="ProductBadge">Earrings</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Pearl Drop Earring</h3>
            <p class="ProductDescription">Elegant pearl drop earrings that add a touch of sophistication to any outfit. Perfect complement to any outfit with subtle elegance.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£275</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-pearl-drop-earring"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Pearl Drop', 'qty-pearl-drop-earring')">Add to Cart</button>
        </div>
    </a>

    <a class="ProductCard" href="/products?product=silver-stud-earring" data-name="Silver Stud Earring" data-category="Earrings">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/silver-stud.jpg') }}" alt="Silver Stud Earring">
            <span class="ProductBadge">Earrings</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Silver Stud Earring</h3>
            <p class="ProductDescription">A sparkling silver stud earring that adds a touch of glamour to any look. Perfect complement to any outfit with subtle elegance.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£145</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-silver-stud-earring"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Silver Stud', 'qty-silver-stud-earring')">Add to Cart</button>
        </div>
    </a>

    <a class="ProductCard" href="/products?product=bleeding-heart-bracelet" data-name="Bleeding Heart Bracelet" data-category="Bracelet">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/BleedingHeartBracelet.png') }}" alt="Bleeding Heart Bracelet">
            <span class="ProductBadge">Bracelet</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Bleeding Heart Bracelet</h3>
            <p class="ProductDescription">Handcrafted bracelet with romantic detailing. A statement piece celebrating love and craftsmanship.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£245</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-bleeding-heart-bracelet"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Bleeding Heart Bracelet', 'qty-bleeding-heart-bracelet')">Add to Cart</button>
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
            <div class="ProductMeta">
                <span class="StockText low-stock">Low Stock</span>
                <span class="ProductPrice">£380</span>
            </div>
            <button class="AddToCartButton" onclick="addToCartQuick(event, 'Gold Bangle', 1)">Add to Cart</button>
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
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£520</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-cuban-bracelet"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Cuban Bracelet', 'qty-cuban-bracelet')">Add to Cart</button>
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
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£310</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-charm-bracelet"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Charm Bracelet', 'qty-charm-bracelet')">Add to Cart</button>
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
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£175</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-leather-bracelet"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Leather Bracelet', 'qty-leather-bracelet')">Add to Cart</button>
        </div>
    </a>

    



    <a class="ProductCard" href="/products?product=signature-necklace" data-name="Signature Necklace" data-category="Necklace">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/HandCraftedJewellry.png') }}" alt="Handcrafted Jewelry">
            <span class="ProductBadge">Necklace</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Signature Necklace</h3>
            <p class="ProductDescription">Statement necklace made by skilled artisans. Designed to elevate any occasion with timeless elegance.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£380</span>
            </div>
            <button class="AddToCartButton" onclick="addToCartQuick(event, 'Signature Necklace', 1)">Add to Cart</button>
        </div>
    </a>


<a class="ProductCard" href="/products?product=diamond-choker-necklace" data-name="Diamond Choker Necklace" data-category="Necklace">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/diamond-choker.jpg') }}" alt="Diamond Choker Necklace">
            <span class="ProductBadge">Necklace</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Diamond Choker Necklace</h3>
            <p class="ProductDescription">Statement necklace made by skilled artisans. Designed to elevate any occasion with timeless elegance.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£720</span>
            </div>
            <button class="AddToCartButton" onclick="addToCartQuick(event, 'Diamond Choker', 1)">Add to Cart</button>
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
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£420</span>
            </div>
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
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£540</span>
            </div>
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
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£340</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-layered-necklace"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Layered Necklace', 'qty-layered-necklace')">Add to Cart</button>
        </div>
    </a>

<a class="ProductCard" href="/products?product=gold-watch" data-name="Gold Watch" data-category="Watch">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/gold-watch.jpg') }}" alt="Gold Watch">
            <span class="ProductBadge">Watch</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Gold Watch</h3>
            <p class="ProductDescription">A timeless gold factory watch inspired by classical forms. Precision craftsmanship meets elegant design.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£650</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-gold-watch"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Gold Watch', 'qty-gold-watch')">Add to Cart</button>
        </div>
    </a>

    <a class="ProductCard" href="/products?product=sport-watch" data-name="Sport Watch" data-category="Watch">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/sport-watch.jpg') }}" alt="Sport Watch">
            <span class="ProductBadge">Watch</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Sport Watch</h3>
            <p class="ProductDescription">A timeless watch inspired by classical forms. Precision craftsmanship meets elegant design.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£290</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-sport-watch"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Sport Watch', 'qty-sport-watch')">Add to Cart</button>
        </div>
    </a>

    <a class="ProductCard" href="/products?product=silver-watch" data-name="Silver Watch" data-category="Watch">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/silver-watch.jpg') }}" alt="Silver Watch">
            <span class="ProductBadge">Watch</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Silver Watch</h3>
            <p class="ProductDescription">A timeless factory silver watch inspired by classical forms. Precision craftsmanship meets elegant design.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£410</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-silver-watch"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Silver Watch', 'qty-silver-watch')">Add to Cart</button>
        </div>
    </a>

    <a class="ProductCard" href="/products?product=classic-leather-watch" data-name="Classic Leather Watch" data-category="Watch">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/classic-leather-watch.jpg') }}" alt="Classic Leather Watch">
            <span class="ProductBadge">Watch</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Classic Leather Watch</h3>
            <p class="ProductDescription">A timeless classic leather watch inspired by classical forms. Precision craftsmanship meets elegant design.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£350</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-classic-leather-watch"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Classic Leather Watch', 'qty-classic-leather-watch')">Add to Cart</button>
        </div>
    </a>



    <a class="ProductCard" href="/products?product=signature-watch" data-name="Signature Watch" data-category="Watch">
        <div class="ProductImageWrap">
            <img class="ProductImage" src="{{ asset('images/Rolexwatch.jpg') }}" alt="Signature Watch">
            <span class="ProductBadge">Watch</span>
        </div>
        <div class="ProductInfo">
            <h3 class="ProductTitle">Luxury Watch</h3>
            <p class="ProductDescription">A timeless watch inspired by classical forms. Precision craftsmanship meets elegant design.</p>
            <div class="ProductMeta">
                <span class="StockText in-stock">In Stock</span>
                <span class="ProductPrice">£850</span>
            </div>
            <div class="QuantitySelector"><label>Qty:</label><select id="qty-signature-watch"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></div>
            <button class="AddToCartButton" onclick="addToCartWithQuantity(event, 'Luxury Watch', 'qty-signature-watch')">Add to Cart</button>
        </div>
    </a>

        </main>

<!-- Product Detail View (initially hidden) -->
<section id="productDetailView" style="display: none; padding: 40px 20px; max-width: 1200px; margin: 0 auto;">
    <a href="/products" style="display: inline-block; margin-bottom: 20px; color: #111; text-decoration: none; font-weight: 500;">&larr; Back to Products</a>
    
    <div class="detail-grid">
        <!-- Product Image -->
        <div class="detail-image-container" style="position: sticky; top: 20px;">
            <img id="detailImage" src="" alt="" style="width: 100%; max-width: 600px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
            <span id="detailBadge" class="ProductBadge" style="position: absolute; top: 20px; right: 20px;"></span>
        </div>
        
        <!-- Product Info -->
        <div>
            <h1 id="detailTitle" style="font-size: 2.5em; margin-bottom: 10px; color: #111;"></h1>
            <p id="detailDescription" style="font-size: 1.1em; line-height: 1.8; color: #555; margin-bottom: 30px;"></p>
            
            <div style="display: flex; gap: 20px; align-items: center; margin-bottom: 30px; flex-wrap: wrap;">
                <span id="detailStock" class="StockText in-stock"></span>
                <span id="detailPrice" style="font-size: 2em; font-weight: 600; color: #111;"></span>
            </div>
            
            <div style="margin-bottom: 20px;">
                <label style="font-weight: 500; margin-right: 10px;">Quantity:</label>
                <select id="detailQuantity" style="padding: 10px 20px; font-size: 1em; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            
            <button id="detailAddToCart" class="AddToCartButton" style="padding: 15px 40px; font-size: 1.1em; width: auto; min-width: 200px;">Add to Cart</button>
            
            <div style="margin-top: 40px; padding-top: 40px; border-top: 1px solid #ddd;">
                <h3 style="margin-bottom: 15px;">Product Details</h3>
                <ul style="line-height: 2; color: #555;">
                    <li>Handcrafted with care and precision</li>
                    <li>Ethically sourced materials</li>
                    <li>Comes with certificate of authenticity</li>
                    <li>30-day return policy</li>
                    <li>Free shipping on orders over £200</li>
                </ul>
            </div>
        </div>
    </div>
</section>

    </div>

 <!-- footer section -->
    <div id="site-footer">
    <footer class="footer">
        <div class="FooterIconsContainer">
            <img src="{{ asset('images/FacebookIcon.png') }}" class="FooterIcons" alt="facebook">
            <img src="{{ asset('images/InstagramIcon.png') }}" class="FooterIcons" alt="instagram">
            <img src="{{ asset('images/YoutubeIcon.png') }}" class="FooterIcons" alt="youtube">
        </div>
        <p class="ContactTitle">© 2025 Luxury Jewelry Store</p>
    </footer>
</div>
<script src="{{ asset('js/index.js') }}" defer></script>

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
document.addEventListener('DOMContentLoaded', showProductDetail);

// Search functionality (only run if we're not viewing a specific product)
if (document.getElementById('searchInput')) {
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
}
</script>

<<<<<<< Updated upstream
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
                if (t.closest('select') || t.closest('.AddToCartButton')) {
                    evt.preventDefault();
                }
            });
        });
    });
    </script>
=======
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
>>>>>>> Stashed changes

</body>
</html>



