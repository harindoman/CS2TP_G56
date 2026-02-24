<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<div class="page-wrapper">
  <div class="PageContent">

    <div class="TopNav">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ route('products.index') }}">Products</a>
        <a href="{{ route('contact.show') }}">Contact</a>
        <div class="IconNav"></div>
    </div>
<!-- main content section -->
    <main style="padding: 24px; max-width: 900px; margin: 0 auto;">
      <h1>Contact Us</h1>

<!-- contact form for user to send message -->
      <form action="{{ route('contact.submit') }}" method="POST" id="contactForm" style="max-width:400px;">
        @csrf
        <!-- name input -->
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required value="{{ old('name') }}">
          @error('name')
            <span style="color: red; font-size: 12px;">{{ $message }}</span>
          @enderror
          <br><br>
        <!-- email input -->
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required value="{{ old('email') }}">
          @error('email')
            <span style="color: red; font-size: 12px;">{{ $message }}</span>
          @enderror
          <br><br>
        <!-- message box -->
          <label for="message">Message:</label>
          <textarea id="message" name="message" required style="min-height: 150px;">{{ old('message') }}</textarea>
          @error('message')
            <span style="color: red; font-size: 12px;">{{ $message }}</span>
          @enderror
          <br><br>
        <!-- submit button -->
          <button type="submit" style="padding: 10px 20px; background: #333; color: white; border: none; border-radius: 3px; cursor: pointer;">Send Message</button>
      </form>
        <!-- feedback message after sending -->
      <p id="response" style="margin-top: 20px; padding: 10px; border-radius: 3px;"></p>
    </main>

    <!-- Featured Products Section -->
    @if($products && $products->count() > 0)
    <div style="margin-top: 50px; padding: 20px;">
        <h2 style="text-align: center; margin-bottom: 30px;">Featured Products</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            @foreach($products as $product)
            <div style="border: 1px solid #ddd; border-radius: 5px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 15px;">
                    <h3 style="margin: 0 0 10px 0;">{{ $product->name }}</h3>
                    <p style="color: #666; margin: 0 0 10px 0; font-size: 14px;">{{ substr($product->description, 0, 80) }}...</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 18px; font-weight: bold;">£{{ number_format($product->price, 2) }}</span>
                        <span style="background: #f0f0f0; padding: 5px 10px; border-radius: 3px; font-size: 12px;">{{ $product->category }}</span>
                    </div>
                    <a href="{{ route('products.show', $product->id) }}" style="display: block; margin-top: 10px; padding: 8px; background: #333; color: white; text-decoration: none; border-radius: 3px; text-align: center;">View Product</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

  </div>
<!-- social media icons -->
  <div id="site-footer">
    <footer class="footer">
      <div class="FooterIconsContainer">
        <img src="assets/images/FacebookIcon.png" class="FooterIcons" alt="facebook">
        <img src="assets/images/InstagramIcon.png" class="FooterIcons" alt="instagram">
        <img src="assets/images/YoutubeIcon.png" class="FooterIcons" alt="youtube">
      </div>
      <!-- copyright -->
      <p class="ContactTitle">© 2025 Luxury Jewelry Store</p>
    </footer>
  </div>
</div>

<script>
  /* handle form submit without refreshing the page */
document.getElementById("contactForm").addEventListener("submit", e => {
    e.preventDefault();

    const formData = new FormData(e.target);

    /* send the form data to the backend API */
    fetch("{{ route('contact.submit') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({
            name: formData.get('name'),
            email: formData.get('email'),
            message: formData.get('message'),
            _token: "{{ csrf_token() }}"
        })
    })
    .then(r => r.json())
    .then(d => {
      // show success or error message from backend
        const responseEl = document.getElementById('response');
        if (d.success) {
            responseEl.textContent = d.message;
            responseEl.style.background = '#d4edda';
            responseEl.style.color = '#155724';
            document.getElementById('contactForm').reset();
        } else {
            responseEl.textContent = d.error || 'An error occurred';
            responseEl.style.background = '#f8d7da';
            responseEl.style.color = '#721c24';
        }
    })
     // fallback message if something fails
    .catch(err => {
        const responseEl = document.getElementById('response');
        responseEl.textContent = 'Failed to send message.';
        responseEl.style.background = '#f8d7da';
        responseEl.style.color = '#721c24';
    });
});
</script>
<!-- general site JavaScript -->
<script src="js/index.js" defer></script>
</body>
</html>
