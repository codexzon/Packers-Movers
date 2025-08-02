
<!-- Header -->
<header class="border-b-4 border-orange-500 shadow-md">
  <!-- Top Bar -->
  <div class="h-1 bg-gradient-to-r from-orange-500 via-orange-400 to-red-500"></div>

  <!-- Top Contact Info -->
  <div class="flex flex-col md:flex-row justify-between items-center px-4 py-2 text-sm text-gray-800">
    <div class="flex items-center gap-3">
      <img src="images/logo.png" alt="Logo" class="w-12 h-12">
      <div>
        <h1 class="text-2xl font-bold text-slate-900">StoreMy HouseHold</h1>
        <p class="text-gray-500">Secure • Reliable • Convenient</p>
      </div>
    </div>
    <div class="flex flex-col md:flex-row items-center gap-4 mt-3 md:mt-0">
      <div class="flex items-center gap-2"><span>📞</span> +91 98115 91020</div>
      <div class="flex items-center gap-2"><span>📍</span> 119, Block E, Sector 2, Greater Noida</div>
      <div class="flex items-center gap-2"><span>📧</span> info@storemyhousehold.com</div>
    </div>
  </div>

  <!-- Navigation -->
  <nav class="bg-gradient-to-r from-orange-500 to-red-500 text-white">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
      <!-- Logo & Hamburger -->
      <div class="flex items-center justify-between w-full md:w-auto">
        <span class="md:hidden text-2xl cursor-pointer" id="menuToggle">☰</span>
      </div>

      <!-- Desktop Menu -->
      <ul class="hidden md:flex gap-6 font-semibold items-center">
        <li><a href="index.php" class="hover:text-white text-white">Home</a></li>
        <li><a href="about.php" class="hover:text-white">About Us</a></li>
        <li class="group relative">
          <a href="service.php" class="hover:text-white">Services ▾</a>
          <ul class="absolute hidden group-hover:block bg-white text-black shadow-md mt-2 p-2 rounded w-64 z-50">
            <li><a href="services/household.php" class="block px-4 py-2 hover:bg-orange-100">Household Shifting</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">Office Relocation</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">Car Transportation</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">Bike Transportation</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">Packing and Unpacking</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">Loading and Unloading</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">Storage and Warehousing</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">Transit Insurance</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">International Relocation</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-orange-100">Pet Relocation</a></li>
          </ul>
        </li>
        <li><a href="offices.php" class="hover:text-white">Offices</a></li>
        <li><a href="cities.php" class="hover:text-white">Top Cities</a></li>
        <li><a href="contact.php" class="hover:text-white">Contact</a></li>
      </ul>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden px-4 pb-4">
      <ul class="space-y-3">
        <li><a href="index.php" class="block">Home</a></li>
        <li><a href="about.php" class="block">About Us</a></li>
        <li>
          <details>
            <summary href="service.php" class="cursor-pointer">Services</summary>
            <ul class="pl-4 mt-2 space-y-1 text-sm">
              <li><a href="services/household.php">Household Shifting</a></li>
              <li><a href="#">Office Relocation</a></li>
              <li><a href="#">Car Transportation</a></li>
              <li><a href="#">Bike Transportation</a></li>
              <li><a href="#">Packing and Unpacking</a></li>
              <li><a href="#">Loading and Unloading</a></li>
              <li><a href="#">Storage and Warehousing</a></li>
              <li><a href="#">Transit Insurance</a></li>
              <li><a href="#">International Relocation</a></li>
              <li><a href="#">Pet Relocation</a></li>
            </ul>
          </details>
        </li>
        <li><a href="offices.php">Offices</a></li>
        <li><a href="cities.php">Top Cities</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>
</header>

<!-- JavaScript Toggle for Mobile -->
<script>
  const menuToggle = document.getElementById("menuToggle");
  const mobileMenu = document.getElementById("mobileMenu");
  menuToggle.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });
</script>