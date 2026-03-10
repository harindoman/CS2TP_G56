// Central site JS: footer loader + small shared behaviors
(function(){
  // Footer loading removed — pages include an inline footer to avoid duplicates

  // --- API Path Detection (works with XAMPP and localhost) ---
  window.getApiPath = function(endpoint) {
    const currentPath = window.location.pathname;
    // Detect if we're in XAMPP subdirectory
    if (currentPath.includes('/jewelry-store/')) {
      return '/jewelry-store/api/' + endpoint;
    }
    return '/api/' + endpoint;
  };

  // --- Session initialization ---
  function initSession(){
    fetch(window.getApiPath('init-session.php'), { credentials: 'include' })
      .then(r => r.json())
      .then(data => {
        if (data.success) {
          // Update cart count if element exists
          const cartCountEl = document.getElementById('cart-count');
          if (cartCountEl && data.cartCount !== undefined) {
            cartCountEl.textContent = data.cartCount;
          }
        }
      })
      .catch(err => console.error('Session init error:', err));
  }

  // --- Auth UI injection ---
  function initAuth(){
    fetch(window.getApiPath('check-auth.php'), { credentials: 'include' })
      .then(r => r.json())
      .then(data => {
        const iconNav = document.getElementById('auth-buttons') || document.querySelector('.IconNav');
        if (!iconNav) return;
        if (data.loggedIn) {
          iconNav.innerHTML = `<span style="margin-right:16px;color:#111;">Hello, ${escapeHtml(data.username)}</span>
                               <a href="#" id="logoutBtn" style="margin-right:10px">Logout</a>
                               <a href="cart.html"><img src="assets/images/CartIcon.png" alt="Cart"><span id="cart-count" style="display:inline-block;margin-left:6px;color:#111;">0</span></a>`;
          const lb = document.getElementById('logoutBtn');
          if (lb) lb.addEventListener('click', e => {
            e.preventDefault();
            if (window.logout) window.logout();
            else fetch(window.getApiPath('logout.php'), { credentials: 'include' }).then(()=> location.reload());
          });
        } else {
          iconNav.innerHTML = `<a href="register.html" style="margin-right:8px">Register</a>
                               <a href="login.html"><img src="assets/images/ProfileIcon.png" alt="Login"></a>
                               <a href="cart.html"><img src="assets/images/CartIcon.png" alt="Cart"><span id="cart-count" style="display:inline-block;margin-left:6px;color:#111;">0</span></a>`;
        }
      })
      .catch(()=>{});
    function escapeHtml(s){ return String(s).replace(/[&<>"']/g, c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c])); }
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', function(){ initSession(); initAuth(); });
  else { initSession(); initAuth(); }

  // fallback global logout if page doesn't define one
  if (!window.logout){
    window.logout = function(){
      fetch(window.getApiPath('logout.php'), { credentials: 'include' }).then(()=> location.reload());
    };
  }
})();

// Product price database for quick add
const productPrices = {
  'Buta Ring': 185,
  'Saphire Ring': 420,
  'Rose Gold Ring': 385,
  'Vintage Ring': 650,
  'Diamond Ring': 550,
  'Threadbare Earrings': 120,
  'Diamond Earrings': 480,
  'Gold Hoop': 195,
  'Pearl Drop': 275,
  'Silver Stud': 145,
  'Bleeding Heart Bracelet': 245,
  'Gold Bangle': 380,
  'Cuban Bracelet': 520,
  'Charm Bracelet': 310,
  'Leather Bracelet': 175,
  'Signature Necklace': 380,
  'Diamond Choker': 720,
  'Pearl Necklace': 420,
  'Gold Necklace': 540,
  'Layered Necklace': 340,
  'Gold Watch': 650,
  'Sport Watch': 290,
  'Silver Watch': 410,
  'Classic Leather Watch': 350,
  'Luxury Watch': 850
};

// Quick add to cart function for product grid pages
function addToCartQuick(event, productName, quantity) {
  event.preventDefault();
  event.stopPropagation();

  console.log('=== addToCartQuick called ===');
  console.log('Product name:', productName);
  console.log('Quantity:', quantity);

  const price = productPrices[productName] || 0;
  console.log('Product prices object:', productPrices);
  console.log('Price found:', price);

  if (price === 0) {
    alert('Error: Product price not found for "' + productName + '". Available products: ' + Object.keys(productPrices).join(', '));
    console.error('Price not found for:', productName);
    return;
  }

  const payload = {
    productName: productName,
    quantity: quantity || 1,
    price: price
  };

  console.log('Sending to API:', payload);

  fetch(window.getApiPath('add-to-cart.php'), {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    credentials: 'include',
    body: JSON.stringify(payload)
  })
  .then(r => {
    console.log('Response status:', r.status);
    if (!r.ok) {
      return r.text().then(text => {
        throw new Error('HTTP ' + r.status + ': ' + text);
      });
    }
    return r.json();
  })
  .then(data => {
    console.log('Response data:', data);
    if (data.success) {
      // Show visual feedback
      const btn = event.target;
      const originalText = btn.textContent;
      btn.textContent = '✓ Added!';
      btn.style.background = '#2e7d32';
      btn.style.color = 'white';
      
      setTimeout(() => {
        btn.textContent = originalText;
        btn.style.background = '';
        btn.style.color = '';
      }, 2000);

      // Update cart count
      const cartCount = document.getElementById('cart-count');
      if (cartCount && data.cartCount) {
        cartCount.textContent = data.cartCount;
      }
      
      alert(productName + ' added to basket!');
    } else {
      alert('Error: ' + (data.error || 'Failed to add to basket'));
    }
  })
  .catch(err => {
    console.error('Fetch error:', err);
    alert('Error adding to basket: ' + err.message);
  });
}

// New function to add to cart with dynamic quantity from selector
window.addToCartWithQuantity = function(event, productName, quantitySelectId) {
  event.preventDefault();
  event.stopPropagation();

  const quantitySelect = document.getElementById(quantitySelectId);
  if (!quantitySelect) {
    alert('Quantity selector not found');
    return;
  }

  const quantity = parseInt(quantitySelect.value) || 1;
  addToCartQuick(event, productName, quantity);
};
