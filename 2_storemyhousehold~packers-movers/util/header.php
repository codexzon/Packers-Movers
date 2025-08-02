<!-- Header Info -->
  <header class="header-info">
    <div class="container info-flex">
      <!-- Logo & Name -->
      <div class="logo-wrap" aria-label="StoreMyHouseHold Logo and Title">
        <div class="logo-circle" aria-hidden="true">SMH</div>
        <div>
          <h1>StoreMy HouseHold</h1>
          <p>Secure • Reliable • Convenient</p>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="contact-info" role="contentinfo">
        <div>
          <svg data-lucide="phone"></svg>
          <a href="tel:+919811591020" aria-label="Call +91 98115 91020">+91 98115 91020</a>
        </div>
        <div>
          <svg data-lucide="map-pin"></svg>
          <span>119, Block E, Sector 2, Greater Noida West, Noida, UP</span>
        </div>
        <div>
          <svg data-lucide="mail"></svg>
          <a href="mailto:info@storemyhousehold.com" aria-label="Email info@storemyhousehold.com">info@storemyhousehold.com</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Navigation Bar -->
  <nav class="navbar" role="navigation" aria-label="Primary Navigation">
    <div class="nav-container container">
      <button class="nav-toggle" aria-expanded="false" aria-controls="mobileMenu" aria-label="Toggle navigation menu" id="navToggle">
        <svg data-lucide="menu" id="menuIcon"></svg>
      </button>
      <div class="nav-links" role="menubar">
        <a href="#" role="menuitem" tabindex="0">Home</a>
        <a href="#" role="menuitem" tabindex="0">About Us</a>
        <a href="#" role="menuitem" tabindex="0">Our Services</a>
        <a href="#" role="menuitem" tabindex="0">Storage Solutions</a>
        <a href="#" role="menuitem" tabindex="0">Relocation</a>
        <a href="#" role="menuitem" tabindex="0">Get Quote</a>
        <a href="#" role="menuitem" tabindex="0">Contact Us</a>
      </div>
    </div>
    <div class="mobile-menu" id="mobileMenu" hidden role="menu" aria-label="Mobile Navigation">
      <a href="#" role="menuitem" tabindex="-1">Home</a>
      <a href="#" role="menuitem" tabindex="-1">About Us</a>
      <a href="#" role="menuitem" tabindex="-1">Our Services</a>
      <a href="#" role="menuitem" tabindex="-1">Storage Solutions</a>
      <a href="#" role="menuitem" tabindex="-1">Relocation</a>
      <a href="#" role="menuitem" tabindex="-1">Get Quote</a>
      <a href="#" role="menuitem" tabindex="-1">Contact Us</a>
    </div>
  </nav>

  <!-- Bottom Accent -->
  <div class="header-bottom"></div>

  <script src="https://cdn.jsdelivr.net/npm/lucide@latest/dist/lucide.min.js"></script>
  <script>
    lucide.createIcons();

    const navToggle = document.getElementById('navToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');

    navToggle.addEventListener('click', () => {
      const expanded = navToggle.getAttribute('aria-expanded') === 'true';
      navToggle.setAttribute('aria-expanded', !expanded);
      if (mobileMenu.hasAttribute('hidden')) {
        mobileMenu.removeAttribute('hidden');
        menuIcon.setAttribute('data-lucide', 'x');
      } else {
        mobileMenu.setAttribute('hidden', '');
        menuIcon.setAttribute('data-lucide', 'menu');
      }
      lucide.createIcons();
    });
  </script>