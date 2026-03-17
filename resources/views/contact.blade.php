<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<<<<<<< Updated upstream
    <title>Contact Us &ndash; Skyrose Atelier</title>
    @include('partials.head')
=======
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Seraphine Atelier</title>
    @vite(['resources/js/app.js'])
>>>>>>> Stashed changes
</head>
<body>
<div class="page-wrapper">
<<<<<<< Updated upstream
    <div class="PageContent">
        @include('partials.nav')

        <main class="contact-page">
            <section class="contact-info-strip">
                <div class="contact-info-card">
                    <div class="contact-info-icon"><img src="{{ asset('images/MailIcon.png') }}"></div>
                    <div class="contact-info-text">
                        <h3>Email</h3>
                        <p>hello@SykroseAtelier.com</p>
                    </div>
                </div>
                <div class="contact-info-card">
                    <div class="contact-info-icon"><img src="{{ asset('images/PhoneIcon.png') }}"></div>
                    <div class="contact-info-text">
                        <h3>Phone</h3>
                        <p>+44 0000 000 000</p>
                    </div>
                </div>
                <div class="contact-info-card">
                    <div class="contact-info-icon"><img src="{{ asset('images/LocationIcon.png') }}"></div>
                    <div class="contact-info-text">
                        <h3>Location</h3>
                        <p>Birmingham, United Kingdom</p>
                    </div>
                </div>
            </section>

            <section class="contact-main-section">
                <div class="contact-form-card">
                    <h1>Contact Us</h1>
                    <form id="contactForm">
                        <div class="form-row two-cols">
                            <div class="field">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" placeholder="Enter your name" required>
                            </div>
                            <div class="field">
                                <label for="email">Email</label>
                                <input type="email" id="email" placeholder="Enter your email" required>
                            </div>
                        </div>
                        <div class="field">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" placeholder="Enter your number">
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea id="message" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="contact-submit">Send Message</button>
                    </form>
                    <p id="response" class="contact-response"></p>
                </div>
                <div class="contact-image-card">
                    <img src="{{ asset('images/MapIcon.png') }}" alt="Map showing our location" class="contact-main-image">
                </div>
            </section>
        </main>
    </div>

    @include('partials.footer')
=======
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
<!-- main content section -->
    <main class="contact-section">
      <h1>Contact Us</h1>

<!-- contact form for user to send message -->
      <form action="{{ route('contact.submit') }}" method="POST" id="contactForm" class="contact-form">
        @csrf
        <!-- name input -->
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required value="{{ old('name') }}">
          @error('name')
            <span class="error-message">{{ $message }}</span>
          @enderror
        </div>
        <!-- email input -->
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required value="{{ old('email') }}">
          @error('email')
            <span class="error-message">{{ $message }}</span>
          @enderror
        </div>
        <!-- message box -->
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" required>{{ old('message') }}</textarea>
          @error('message')
            <span class="error-message">{{ $message }}</span>
          @enderror
        </div>
        <!-- submit button -->
        <button type="submit" class="form-submit">Send Message</button>
      </form>
        <!-- feedback message after sending -->
      <p id="response"></p>
    </main>

    <!-- Featured Products Section -->
    @if($products && $products->count() > 0)
    <section class="featured-products">
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

  </div>
<!-- social media icons -->
  <footer id="site-footer" class="footer">
    <div class="FooterIconsContainer">
      <img src="{{ asset('images/FacebookIcon.png') }}" class="FooterIcons" alt="facebook">
      <img src="{{ asset('images/InstagramIcon.png') }}" class="FooterIcons" alt="instagram">
      <img src="{{ asset('images/YoutubeIcon.png') }}" class="FooterIcons" alt="youtube">
    </div>
    <!-- copyright -->
    <p class="ContactTitle">© 2025 Luxury Jewelry Store</p>
  </footer>
>>>>>>> Stashed changes
</div>

<script>
const contactForm  = document.getElementById('contactForm');
const nameInput    = document.getElementById('name');
const emailInput   = document.getElementById('email');
const messageInput = document.getElementById('message');
const responseEl   = document.getElementById('response');
const csrfToken    = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

contactForm.addEventListener('submit', e => {
    e.preventDefault();
    fetch('/contact', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrfToken },
        body: JSON.stringify({ name: nameInput.value, email: emailInput.value, message: messageInput.value })
    })
    .then(r => r.json())
    .then(d => { responseEl.textContent = d.message || 'Message sent!'; })
    .catch(() => { responseEl.textContent = 'Failed to send message.'; });
});
</script>
</body>
</html>


