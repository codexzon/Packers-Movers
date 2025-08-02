<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>StoreMy HouseHOLD</title>
  <link rel="stylesheet" href="css/style.css" />
  
  <script src="https://cdn.tailwindcss.com"></script>

  <script src="js/main.js"></script>
  
  <script src="https://unpkg.com/lucide@latest"></script>

</head>
<body>
  <!-- Top Accent -->
  <div class="header-top"></div>

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

  <!-- Quote Form Section -->
  <section class="relative bg-gray-100 py-12 px-4 sm:px-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg relative z-10">
      <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-[#b30d0d]">Get Your Moving Quote</h2>
        <p class="text-gray-600">Fill in your details and get a free quote within minutes</p>
      </div>

      <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label for="from" class="block mb-1 text-sm font-medium">From City</label>
          <input type="text" id="from" placeholder="Enter pickup city" class="w-full border px-3 py-2 rounded" />
        </div>

        <div>
          <label for="to" class="block mb-1 text-sm font-medium">To City</label>
          <input type="text" id="to" placeholder="Enter destination city" class="w-full border px-3 py-2 rounded" />
        </div>

        <div>
          <label for="date" class="block mb-1 text-sm font-medium">Moving Date</label>
          <input type="date" id="date" class="w-full border px-3 py-2 rounded" />
        </div>

        <div>
          <label for="phone" class="block mb-1 text-sm font-medium">Phone Number</label>
          <input type="tel" id="phone" placeholder="Enter your phone number" class="w-full border px-3 py-2 rounded" />
        </div>

        <div>
          <label for="name" class="block mb-1 text-sm font-medium">Your Name</label>
          <input type="text" id="name" placeholder="Enter your full name" class="w-full border px-3 py-2 rounded" />
        </div>

        <div>
          <label for="email" class="block mb-1 text-sm font-medium">Email Address</label>
          <input type="email" id="email" placeholder="Enter your email" class="w-full border px-3 py-2 rounded" />
        </div>

        <div class="md:col-span-2">
          <button type="submit" class="w-full bg-[#b30d0d] hover:bg-red-700 text-white font-semibold py-2 rounded">
            Get Free Quote - Call Back in 30 Minutes!
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- Hero Quote Section -->
  <section class="py-16 px-4 bg-white text-center">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold text-[#b30d0d] mb-4">India's Most Trusted Moving Company</h2>
      <p class="text-gray-700 mb-8">Professional, reliable, and affordable moving services across India. Let us make your relocation stress-free with our expert team.</p>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div>
          <div class="text-3xl font-bold text-[#b30d0d]">15+</div>
          <div class="text-sm text-gray-600">Years Experience</div>
        </div>
        <div>
          <div class="text-3xl font-bold text-[#b30d0d]">10K+</div>
          <div class="text-sm text-gray-600">Happy Customers</div>
        </div>
        <div>
          <div class="text-3xl font-bold text-[#b30d0d]">100+</div>
          <div class="text-sm text-gray-600">Cities Covered</div>
        </div>
        <div>
          <div class="text-3xl font-bold text-[#b30d0d]">24/7</div>
          <div class="text-sm text-gray-600">Support</div>
        </div>
      </div>
    </div>
  </section>


<!-- about section starts from here  -->
<section class="about-section">
    <div class="about-wrapper">

      <!-- Left: Image -->
      <div class="about-image">
        <img src="images/movers-background.jpeg" alt="About StoreMy HouseHold">
      </div>

      <!-- Right: Content -->
      <div class="about-text">
        <h2>About StoreMy HouseHold</h2>
        <p class="highlight">
          StoreMy HouseHold is your trusted partner for secure, convenient, and affordable storage solutions. 
          Whether you're relocating, renovating, or simply need extra space, we provide safe and flexible storage options designed to suit your needs.
        </p>
        <p>
          With 24/7 surveillance, climate-controlled units, and professional handling, we ensure your belongings are stored with the utmost care. 
          Our services are tailored to individuals, families, and businesses looking for short-term or long-term storage support.
        </p>
        <a href="#" class="learn-button">Learn More</a>
      </div>

    </div>
  </section>

<!-- about section ended from here  -->

<!-- service section starts from here  -->
 <section class="services-section">
    <div class="container">
      <h2 class="section-title">Our Services</h2>
      <div id="servicesGrid" class="services-grid"></div>
    </div>

    <div id="modalOverlay" class="modal-overlay hidden" tabindex="-1" aria-modal="true" role="dialog" aria-labelledby="modalTitle">
      <div class="modal-box">

        <div class="mobile-dropdown-wrapper">
          <select id="mobileSelect" onchange="handleSelect(this.value)" aria-label="Select service"></select>
        </div>

        <div class="sidebar" role="list" aria-label="All services">
          <h3>All Services</h3>
          <ul id="sidebarList"></ul>
        </div>

        <div class="modal-content">
          <button class="close-btn" onclick="closeModal()" aria-label="Close modal">×</button>
          <img src="" alt="Service image" class="modal-image" id="modalImage"/>
          <h3 id="modalTitle" class="modal-title"></h3>
          <p id="modalDesc" class="modal-desc"></p>
          <button class="quote-btn">Request a Quote</button>
        </div>

      </div>
    </div>
  </section>

<script>
  const services = [
    'Relocation Services',
    'Car Transportation',
    'Bike Transportation',
    'Warehousing',
    'Pet Relocation',
    'Truck/Tempo on Rent',
    'Luggage Transport',
    'International Relocation',
    'Pest Control',
    'Moving Companies',
  ];

  const descriptions = [
    'We provide seamless home and office relocation with expert packing and transport.',
    'Safely transport your car with insured, GPS-tracked carriers across India.',
    'Quick and damage-free bike shifting with proper packaging and secure carriers.',
    'Clean, secure, and affordable storage solutions for short or long-term needs.',
    'Stress-free, safe pet travel services with veterinary supervision and comfort.',
    'On-demand tempo and truck rental with helpers for all sizes of moves.',
    'Send your extra bags and boxes across cities at affordable rates.',
    'Expert global moving support with customs clearance and documentation.',
    'Safe and effective pest control services for home, office, and warehouse.',
    'Find trusted moving partners near you with end-to-end shifting support.',
  ];

  // You can replace this URL with your own image URL or keep same for all cards
  const imageURL = 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80';

  const servicesGrid = document.getElementById('servicesGrid');
  const mobileSelect = document.getElementById('mobileSelect');
  const sidebarList = document.getElementById('sidebarList');
  const modalOverlay = document.getElementById('modalOverlay');
  const modalTitle = document.getElementById('modalTitle');
  const modalDesc = document.getElementById('modalDesc');
  const modalImage = document.getElementById('modalImage');

  let currentIndex = null;

  // Render the cards on page load
  function renderCards() {
    services.forEach((title, idx) => {
      const card = document.createElement('div');
      card.className = 'card';
      card.innerHTML = `
        <div class="card-image" style="background-image: url('${imageURL}')"></div>
        <div class="card-body">
          <h3 class="card-title">${title}</h3>
          <p class="card-desc">${descriptions[idx].slice(0, 70)}...</p>
          <button class="card-btn" onclick="openModal(${idx})">Get Quote</button>
        </div>
      `;
      servicesGrid.appendChild(card);
    });
  }

  // Render mobile dropdown and sidebar list in modal
  function renderModalControls() {
    services.forEach((service, idx) => {
      // Dropdown option
      const opt = document.createElement('option');
      opt.value = idx;
      opt.textContent = service;
      mobileSelect.appendChild(opt);

      // Sidebar item
      const li = document.createElement('li');
      li.textContent = service;
      li.onclick = () => selectService(idx);
      sidebarList.appendChild(li);
    });
  }

  // Open modal for a service
  function openModal(idx) {
    currentIndex = idx;
    updateModalContent();
    modalOverlay.classList.remove('hidden');
    // Set dropdown and sidebar selection
    mobileSelect.value = idx;
    updateSidebarActive();
    // Focus the modal for accessibility
    modalOverlay.focus();
    document.body.style.overflow = 'hidden'; // Prevent background scroll
  }

  // Close modal
  function closeModal() {
    modalOverlay.classList.add('hidden');
    currentIndex = null;
    document.body.style.overflow = 'auto'; // Restore scroll
  }

  // Update modal content based on currentIndex
  function updateModalContent() {
    if (currentIndex === null) return;
    modalTitle.textContent = services[currentIndex];
    modalDesc.textContent = descriptions[currentIndex];
    modalImage.src = imageURL;
    modalImage.alt = services[currentIndex] + ' image';
  }

  // Handle mobile dropdown change
  function handleSelect(value) {
    const idx = parseInt(value, 10);
    if (!isNaN(idx)) {
      currentIndex = idx;
      updateModalContent();
      updateSidebarActive();
    }
  }

  // Handle sidebar selection
  function selectService(idx) {
    currentIndex = idx;
    updateModalContent();
    mobileSelect.value = idx;
    updateSidebarActive();
  }

  // Highlight active service in sidebar
  function updateSidebarActive() {
    const lis = sidebarList.querySelectorAll('li');
    lis.forEach((li, i) => {
      if (i === currentIndex) {
        li.classList.add('active');
      } else {
        li.classList.remove('active');
      }
    });
  }

  // Close modal on clicking outside content or pressing Escape key
  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
      closeModal();
    }
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !modalOverlay.classList.contains('hidden')) {
      closeModal();
    }
  });

  // Initialize
  renderCards();
  renderModalControls();

</script>
<!-- service section ended from here  -->

<!-- location section starts from here  -->
<section class="locations-section">
    <h2 class="locations-title">AMP - Agarwal Movers Private Limited</h2>
    <div class="grid" id="locationGrid"></div>
  </section>

  <script>
    const cities = [
      "Agarwal Movers In Ahmedabad", "Agarwal Movers In Ankleshwar", "Agarwal Movers In Allahabad",
      "Agarwal Movers In Ambala", "Agarwal Movers In Bangalore", "Agarwal Movers In Baramati",
      "Agarwal Movers In Bhubaneswar", "Agarwal Movers In Bikaner", "Agarwal Movers In India",
      "Agarwal Movers In Chandigarh", "Agarwal Movers In Coimbatore", "Agarwal Movers In Cochin",
      "Agarwal Movers In Delhi", "Agarwal Movers In Dehradun", "Agarwal Movers In Dwarka",
      "Agarwal Movers In Gandhidham", "Agarwal Movers In Gandhinagar", "Agarwal Movers In Gurugram",
      "Agarwal Movers In Ghaziabad", "Agarwal Movers In Guwahati", "Agarwal Movers In Greater Noida",
      "Agarwal Movers In Goa", "Agarwal Movers In Hisar", "Agarwal Movers In Hyderbad",
      "Agarwal Movers In Haridwar", "Agarwal Movers In Indore", "Agarwal Movers In Jamshedpur",
      "Agarwal Movers In Jaipur", "Agarwal Movers In Jodhpur", "Agarwal Movers In Jabalpur",
      "Agarwal Movers In Kolkata", "Agarwal Movers In Lonavala", "Agarwal Movers In Lucknow",
      "Agarwal Movers In Mumbai", "Agarwal Movers In Mangalore", "Agarwal Movers In Navi Mumbai",
      "Agarwal Movers In Nashik", "Agarwal Movers In Noida", "Agarwal Movers In Nagpur",
      "Agarwal Movers In Patna", "Agarwal Movers In Pune", "Agarwal Movers In Ranchi",
      "Agarwal Movers In Rajula", "Agarwal Movers In India", "Agarwal Movers In Vadodara",
    ];

    const grid = document.getElementById('locationGrid');

    cities.forEach(city => {
      const div = document.createElement('div');
      div.className = 'location-box';
      div.textContent = city;
      grid.appendChild(div);
    });
  </script>
<!-- location section ended from here  -->

<!-- free quote section starts here  -->
 <section class="quote-section">
    <div class="quote-container">
      <h2 class="quote-title">Get your Free Moving Quote!</h2>
      <p class="quote-description">
        Get your free moving quote today and discover how affordable and seamless your relocation can be!
      </p>
      <a href="tel:9610016002" class="quote-button">
        CONTACT US NOW
      </a>
    </div>
  </section>
<!-- free quote section ended from here  -->

<!-- review section starts from here  -->
  <section class="py-12 px-4 sm:px-8">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-10 text-[#b30d0d] uppercase">
        Customer Reviews
      </h2>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Review List -->
        <div id="review-list" class="space-y-4 max-h-[500px] overflow-y-auto pr-2">
          <!-- Reviews will be inserted here -->
        </div>

        <!-- Write Review Form -->
        <form id="review-form" class="bg-white p-6 rounded-xl shadow-xl space-y-4">
          <h3 class="text-xl font-semibold text-[#b30d0d] mb-2 text-center">
            Write a Review
          </h3>

          <input
            type="text"
            name="title"
            placeholder="Review Title"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-red-400"
            required
          />

          <!-- Star Rating -->
          <div class="flex items-center gap-1 text-2xl" id="star-container">
            <!-- Stars will be generated by JS -->
          </div>

          <input
            type="text"
            name="name"
            placeholder="Your Name"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-red-400"
            required
          />

          <textarea
            name="review"
            placeholder="Your Review"
            rows="4"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-red-400"
            required
          ></textarea>

          <button
            type="submit"
            class="w-full bg-[#d60000] hover:bg-red-700 text-white py-2 rounded font-semibold"
          >
            Submit Review
          </button>
        </form>
      </div>
    </div>
  </section>

  <script>
    const reviews = [
      {
        title: "Excellent Service",
        rating: 5,
        name: "Anjali Sharma",
        review: "Very professional and reliable service. Highly recommended!",
        date: "18/07/2025"
      },
      {
        title: "Good Experience",
        rating: 4,
        name: "Rahul Verma",
        review: "The team was quick and efficient. Great job overall.",
        date: "15/07/2025"
      },
      {
        title: "Satisfied Customer",
        rating: 5,
        name: "Preeti Desai",
        review: "Everything was smooth from start to finish. Loved it!",
        date: "12/07/2025"
      }
    ];

    const reviewList = document.getElementById("review-list");
    const reviewForm = document.getElementById("review-form");
    const starContainer = document.getElementById("star-container");
    let selectedRating = 0;

    function renderStars(selected = 0) {
      starContainer.innerHTML = "";
      for (let i = 1; i <= 5; i++) {
        const star = document.createElement("span");
        star.textContent = "★";
        star.className = `cursor-pointer ${i <= selected ? "text-yellow-400" : "text-gray-300"}`;
        star.addEventListener("click", () => {
          selectedRating = i;
          renderStars(selectedRating);
        });
        starContainer.appendChild(star);
      }
    }

    function renderReviews() {
      reviewList.innerHTML = "";
      if (reviews.length === 0) {
        reviewList.innerHTML = `<p class="text-gray-500 text-center">No reviews yet. Be the first to write one!</p>`;
        return;
      }

      reviews.forEach(({ title, rating, name, review, date }) => {
        const card = document.createElement("div");
        card.className = "bg-white p-5 rounded-xl shadow hover:shadow-md transition duration-300";
        card.innerHTML = `
          <h4 class="text-lg font-semibold text-[#333]">${title}</h4>
          <div class="text-yellow-400 text-sm mb-1">${"★".repeat(rating)}${"☆".repeat(5 - rating)}</div>
          <p class="text-gray-700 text-sm mb-2">${review}</p>
          <p class="text-xs text-gray-500">- ${name}, ${date}</p>
        `;
        reviewList.appendChild(card);
      });
    }

    reviewForm.addEventListener("submit", function (e) {
      e.preventDefault();

      const formData = new FormData(reviewForm);
      const title = formData.get("title").trim();
      const name = formData.get("name").trim();
      const reviewText = formData.get("review").trim();

      if (!title || !name || !reviewText || selectedRating === 0) {
        alert("Please fill all fields and select a rating.");
        return;
      }

      const today = new Date();
      const date = today.toLocaleDateString("en-GB"); // dd/mm/yyyy

      reviews.unshift({
        title,
        name,
        review: reviewText,
        rating: selectedRating,
        date
      });

      renderReviews();
      reviewForm.reset();
      selectedRating = 0;
      renderStars();
    });

    // Initial render
    renderReviews();
    renderStars();
  </script>
<!-- review section ended from here  -->

<!-- main content page starts from here -->
<main class="container">
    <div class="section-header">
      <h1>Professional Moving Services Across India</h1>
      <p>
        With years of experience in the moving industry, Agarwal Movers provides reliable, efficient, and affordable
        packing and moving services for residential and commercial clients.
      </p>
    </div>

    <div class="card-grid">
      <div class="service-card">
        <div class="icon-circle">📦</div>
        <h3>Professional Packing</h3>
        <p>Expert packing services to ensure your belongings are safe during transit.</p>
      </div>
      <div class="service-card">
        <div class="icon-circle">🚛</div>
        <h3>Safe Transportation</h3>
        <p>Modern fleet of vehicles for secure and timely delivery of your goods.</p>
      </div>
      <div class="service-card">
        <div class="icon-circle">🏠</div>
        <h3>Complete Relocation</h3>
        <p>End-to-end moving solutions for homes and offices across India.</p>
      </div>
    </div>
  </main>
<!-- main content ended from here  -->





  <!-- This is the footer section starts from here  -->
     <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Company Info -->
        <div class="footer-column company-info">
          <div class="brand">
            <div class="brand-icon">SMH</div>
            <div>
              <h3 class="brand-title">StoreMy</h3>
              <p class="brand-subtitle">HOUSEHOLD</p>
            </div>
          </div>
          <p class="tagline">Reliable Storage and Shifting Solutions</p>
          <p class="description">
            StoreMy HouseHold offers professional, secure, and flexible storage and moving services tailored to fit your needs across Noida and beyond.
          </p>
          <div class="stats">
            <div class="stat-box">
              <i data-lucide="users"></i>
              <p class="stat-value">5K+</p>
              <p class="stat-label">Satisfied Clients</p>
            </div>
            <div class="stat-box">
              <i data-lucide="truck"></i>
              <p class="stat-value">1K+</p>
              <p class="stat-label">Safe Shifts</p>
            </div>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-column">
          <h4>Quick Links</h4>
          <ul class="footer-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Get Quote</a></li>
          </ul>
        </div>

        <!-- Our Services -->
        <div class="footer-column">
          <h4>Our Services</h4>
          <ul class="footer-links">
            <li><a href="#">Storage Solutions</a></li>
            <li><a href="#">Household Shifting</a></li>
            <li><a href="#">Office Relocation</a></li>
            <li><a href="#">Packing & Unpacking</a></li>
            <li><a href="#">Loading & Unloading</a></li>
            <li><a href="#">Vehicle Relocation</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="footer-column">
          <h4>Contact Information</h4>
          <div class="contact-item">
            <div class="contact-icon"><i data-lucide="map-pin"></i></div>
            <div>
              <p class="contact-title">Corporate Office</p>
              <p>119, Block E, Sector 2,<br>Greater Noida West, Noida,<br>Uttar Pradesh, India</p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon"><i data-lucide="phone"></i></div>
            <div>
              <p class="contact-title">Call Us</p>
              <a href="tel:+919811591020">+91-9811591020</a>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon"><i data-lucide="mail"></i></div>
            <div>
              <p class="contact-title">Email Us</p>
              <a href="mailto:info@storemyhousehold.com">info@storemyhousehold.com</a>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        &copy; 2024 StoreMy HouseHold. All rights reserved.
      </div>
    </div>

    <!-- Floating Buttons -->
    <div class="floating-buttons">
      <a href="tel:+919811591020" class="floating-button call"><i data-lucide="phone"></i></a>
      <a href="https://wa.me/919811591020" target="_blank" class="floating-button whatsapp"><i data-lucide="message-circle"></i></a>
    </div>
  </footer>

  <script>
    lucide.createIcons();
  </script>
  <!-- footer section ended from here  -->

</body>
</html>