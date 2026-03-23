<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo%20Skyrose.jpg') }}">
    <title>Register — Skyrose Atelier</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="page-wrapper">
        <div class="PageContent">
            @include('partials.nav')
            <div class="AuthPage">
                <div class="AuthCard">
                    <h1 class="AuthTitle">Register</h1>
                    <form action="{{ route('register.post') }}" method="POST" class="AuthForm" id="register-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input id="name" name="name" type="text" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" required>
                            @error('password')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" required>
                        </div>

                        <button type="submit" class="AuthButton">Register</button>
                        <p class="AuthHelp">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                    </form>
                </div>
            </div>
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

      </div>
    </div>

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
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    <script>
         // handle registration form submit
        document.getElementById('register-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(e.target);
            
            // send form data to backend register API
            fetch('{{ route("register.post") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    name: formData.get('name'),
                    email: formData.get('email'),
                    password: formData.get('password'),
                    password_confirmation: formData.get('password_confirmation'),
                    _token: '{{ csrf_token() }}'
                })
            })
            .then(res => res.json())
            .then(data => {
                // if registration is successful, go to products page
                if (data.success) {
                    window.location.href = data.redirect;
                } else {
                    // otherwise show error message from server
                    document.getElementById('error-msg').textContent = data.error;
                    document.getElementById('error-msg').classList.remove('hidden');
                }
            })
            .catch(err => {
                document.getElementById('error-msg').textContent = 'An error occurred. Please try again.';
                document.getElementById('error-msg').classList.remove('hidden');
            });
        });
    </script>

        </div>
<!-- footer with social icons -->
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
    </div>
    <script src="js/index.js" defer></script>
</body>
</html>
                    document.getElementById('error-msg').classList.remove('hidden');
                }
            });
        });
        </script>

        </div>
 <!-- footer section -->
        <div id="site-footer">
            <footer class="footer">
                <!-- social icons -->
                <div class="FooterIconsContainer">
                    <img src="{{ asset('images/FacebookIcon.png') }}" class="FooterIcons" alt="facebook">
                    <img src="{{ asset('images/InstagramIcon.png') }}" class="FooterIcons" alt="instagram">
                    <img src="{{ asset('images/YoutubeIcon.png') }}" class="FooterIcons" alt="youtube">
                </div>
                <!-- copyright -->
                <p class="ContactTitle">© 2025 Luxury Jewelry Store</p>
            </footer>
        </div>

    </div>
    <!-- main JS for site (header/cart etc.) -->
    <script src="js/index.js" defer></script>
</body>
</html>

