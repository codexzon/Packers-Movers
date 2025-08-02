<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>QuickHome Logistic Header</title>
  <link rel="stylesheet" href="css/style.css" />

  
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="js/main.js"></script>
</head>
<body> <div class="gradient-bar"></div>

  <header role="banner">
    <div class="header-container">
      <div class="logo-container">
        <div class="logo-circle" aria-label="QH Logo" role="img">QHL</div>
        <div class="logo-text">
          <h1>QuickHome</h1>
          <p>Logistic</p>
        </div>
      </div>

      <div class="badge" aria-label="AMP Badge">
        <span>THE REAL</span>
        <span>GROUP</span>
        <span class="amp">QHL</span>
        <span>AT (1998)</span>
      </div>

      <div class="contact" aria-label="Contact Information">
        <div class="call-now" aria-label="Call Us Now">
          <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path d="M6.62 10.79a15.091 15.091 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21c1.21.49 2.53.76 3.89.76a1 1 0 011 1v3.5a1 1 0 01-1 1A17 17 0 013 6a1 1 0 011-1h3.5a1 1 0 011 1c0 1.36.27 2.68.76 3.89a1 1 0 01-.21 1.11l-2.43 2.43z"/>
          </svg>
          <span class="phone-number">88003 20309</span>
        </div>
        <div class="email" aria-label="Email Address">info@quickhomelogistic.com</div>
        <div class="location" aria-label="Office Address">
          Plot -210, E Block, Sector - 2, Greater Noida, -201306
        </div>
      </div>
    </div>
  </header>

  <nav class="nav-container" role="navigation" aria-label="Primary Navigation">
    <div class="nav-inner">
      <div class="mobile-toggle">
        <button id="mobile-menu-button" aria-expanded="false" aria-controls="mobile-menu" aria-label="Toggle mobile menu">&#9776;</button>
      </div>

      <nav class="desktop-nav" aria-label="Desktop Navigation">
        <ul>
          <li class="home-link"><a href="/">Home</a></li>
          <li class="services-dropdown" tabindex="0" aria-haspopup="true" aria-expanded="false">
            Services
            <ul>
              <li><a href="/services/truck-tempo-on-rent">Truck/Tempo on Rent</a></li>
              <li><a href="/services/pet-relocation">Pet Relocation</a></li>
              <li><a href="/services/warehousing">Warehousing</a></li>
              <li><a href="/services/bike-transportation">Bike Transportation</a></li>
              <li><a href="/services/car-transportation">Car Transportation</a></li>
              <li><a href="/services/relocation-services">Relocation Services</a></li>
            </ul>
          </li>
          <li><a href="/faq">FAQ</a></li>
          <li><a href="/offices">Offices</a></li>
          <li><a href="/toplistedcities">Top Listed Cities</a></li>
          <li><a href="/contact">Contact Us</a></li>
        </ul>
      </nav>

      <nav id="mobile-menu" class="mobile-nav" aria-hidden="true">
        <ul>
          <li><a href="/">Home</a></li>
          <li class="services" tabindex="0" aria-expanded="false" id="mobile-services-toggle">
            <div>
              Services
              <svg class="chevron" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M7 10l5 5 5-5H7z"/>
              </svg>
            </div>
            <ul id="mobile-services-list" class="">
              <li><a href="/services/truck-tempo-on-rent">Truck/Tempo on Rent</a></li>
              <li><a href="/services/pet-relocation">Pet Relocation</a></li>
              <li><a href="/services/warehousing">Warehousing</a></li>
              <li><a href="/services/bike-transportation">Bike Transportation</a></li>
              <li><a href="/services/car-transportation">Car Transportation</a></li>
              <li><a href="/services/relocation-services">Relocation Services</a></li>
            </ul>
          </li>
          <li><a href="/faq">FAQ</a></li>
          <li><a href="/offices">Offices</a></li>
          <li><a href="/toplistedcities">Top Listed Cities</a></li>
          <li><a href="/contact">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </nav>

  <div class="gradient-bar"></div>

<!-- Quote form section starts from here  -->
<section class="quote-section">
  <div class="bg-image"></div>
  <div class="overlay"></div>

  <div class="form-container">
    <div class="form-card">
      <h2>Get Your Moving Quote</h2>
      <form>
        <input type="text" placeholder="Your Name" required/>
        <input type="tel" placeholder="Phone Number" required/>
        <input type="email" placeholder="Email Address" required/>
        <input type="text" placeholder="Move From" required/>
        <input type="text" placeholder="Move To" required/>
        <input type="date" required/>
        <textarea placeholder="Message" rows="2"></textarea>
        <button type="submit">Submit Quote</button>
      </form>
    </div>
  </div>
</section>
<!-- Quote form section ended from here  -->

<!-- hero section starts from here  -->
<section class="hero-section">
  <div class="hero-container">
    <h2>India's Most Trusted Moving Company</h2>
    <p>
      Professional, reliable, and affordable moving services across India.
      Let us make your relocation stress-free with our expert team.
    </p>

    <div class="stats-grid">
      <div class="stat">
        <div class="stat-number">15+</div>
        <div class="stat-label">Years Experience</div>
      </div>
      <div class="stat">
        <div class="stat-number">10K+</div>
        <div class="stat-label">Happy Customers</div>
      </div>
      <div class="stat">
        <div class="stat-number">100+</div>
        <div class="stat-label">Cities Covered</div>
      </div>
      <div class="stat">
        <div class="stat-number">24/7</div>
        <div class="stat-label">Support</div>
      </div>
    </div>
  </div>
</section>
<!-- hero section ended from here / -->

<!-- about secton starts from here  -->
<section class="about-section">
  <div class="about-container">
    
    <!-- Left Side: Image -->
    <div class="about-image">
      <img
        src="images/movers-background.jpeg"
        alt="About QuickHome Logistic"
      />
    </div>

    <!-- Right Side: Text -->
    <div class="about-content">
      <h2>About QuickHome Logistic</h2>
      <p>
        At QuickHome Logistic, we specialize in providing reliable, efficient, and affordable
        relocation services across India. With a customer-first approach and years of experience,
        we’ve built a strong reputation for safe and timely delivery.
      </p>
      <p>
        Whether you need household shifting, vehicle transportation, warehousing, or international
        relocation, our skilled professionals ensure a stress-free experience. We handle every move
        with care, transparency, and precision, backed by modern logistics and insurance support.
      </p>
      <a href="#" class="learn-more-btn">Learn More</a>
    </div>
  </div>
</section>
<!-- about section ended from here  -->

<!-- services section starts from here  -->
 <section class="services-section">
    <h2>Our Services</h2>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-image"></div>
        <div class="service-content">
          <h3>Relocation Services</h3>
          <p>We provide seamless home and office relocation with expert packing and transport.</p>
          <button>GET QUOTE</button>
        </div>
      </div>
      <div class="service-card">
        <div class="service-image"></div>
        <div class="service-content">
          <h3>Car Transportation</h3>
          <p>Safely transport your car with insured, GPS-tracked carriers across India.</p>
          <button>GET QUOTE</button>
        </div>
      </div>
      <div class="service-card">
        <div class="service-image"></div>
        <div class="service-content">
          <h3>Bike Transportation</h3>
          <p>Quick and damage-free bike shifting with proper packaging and secure carriers.</p>
          <button>GET QUOTE</button>
        </div>
      </div>
      <div class="service-card">
        <div class="service-image"></div>
        <div class="service-content">
          <h3>Warehousing</h3>
          <p>Clean, secure, and affordable storage solutions for short or long-term needs.</p>
          <button>GET QUOTE</button>
        </div>
      </div>
      <div class="service-card">
        <div class="service-image"></div>
        <div class="service-content">
          <h3>Pet Relocation</h3>
          <p>Stress-free, safe pet travel services with veterinary supervision and comfort.</p>
          <button>GET QUOTE</button>
        </div>
      </div>
      <div class="service-card">
        <div class="service-image"></div>
        <div class="service-content">
          <h3>Truck/Tempo on Rent</h3>
          <p>On-demand tempo and truck rental with helpers for all sizes of moves.</p>
          <button>GET QUOTE</button>
        </div>
      </div>
      <div class="service-card">
        <div class="service-image"></div>
        <div class="service-content">
          <h3>Luggage Transport</h3>
          <p>Send your extra bags and boxes across cities at affordable rates.</p>
          <button>GET QUOTE</button>
        </div>
      </div>
      <div class="service-card">
        <div class="service-image"></div>
        <div class="service-content">
          <h3>International Relocation</h3>
          <p>Expert global moving support with customs clearance and documentation.</p>
          <button>GET QUOTE</button>
        </div>
      </div>
      <div class="service-card">
        <div class="service-image"></div>
        <div class="service-content">
          <h3>Pest Control</h3>
          <p>Safe and effective pest control services for home, office, and warehouse.</p>
          <button>GET QUOTE</button>
        </div>
      </div>
      <div class="service-card">
        <div class="service-image"></div>
        <div class="service-content">
          <h3>Moving Companies</h3>
          <p>Find trusted moving partners near you with end-to-end shifting support.</p>
          <button>GET QUOTE</button>
        </div>
      </div>
    </div>
  </section>
<!-- Services section Ended from here  -->

<!-- /* Free Quote Section Starts From Here  */ -->
 <section class="quote-banner">
    <div class="quote-overlay">
      <h2>Get your Free Moving Quote!</h2>
      <p>
        Get your free moving quote today and discover how affordable and seamless your relocation can be!
      </p>
      <a href="tel:9610016002" class="quote-button">CONTACT US NOW</a>
    </div>
  </section>

<!-- /* Free Quote Section Ended From Here  */ -->

<!-- Review Section Starts From here  -->
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
<!-- Review Section Ended From Here  -->



  <!-- Footer -->
  <footer class="fh-footer">

    <!-- Branding Row -->
    <div class="branding-row">
      <div class="brand-left">
        <div class="logo-circle">QHL</div>
        <div>
          <h1 class="brand-title">QuickHome</h1>
          <p class="brand-sub">LOGISTIC</p>
        </div>
      </div>
      <div class="brand-right">
        <span class="brand-tag">QUICKHOME LOGISTIC</span>
        <p class="brand-description">India’s Trusted Packers And Movers</p>
      </div>
    </div>

    <!-- Main Content Grid -->
    <div class="content-grid">
      <!-- Description -->
      <div>
        <div class="sec-divider"></div>
        <p>
          QuickHome Logistic is a leading packing and moving company providing premium packing, moving, storage, and vehicle transportation services to both consumers and businesses, ensuring skillful service and customer satisfaction.
        </p>
      </div>

      <!-- Navigation Links -->
      <div>
        <div class="sec-divider"></div>
        <ul class="nav-list">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Track</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>

      <!-- Services List -->
      <div>
        <div class="sec-divider"></div>
        <ul class="nav-list">
          <li><a href="#">Packing & Unpacking</a></li>
          <li><a href="#">Loading & Unloading</a></li>
          <li><a href="#">Household Shifting</a></li>
          <li><a href="#">Local Shifting</a></li>
          <li><a href="#">Office Shifting</a></li>
          <li><a href="#">Moving & Packing</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div>
        <div class="sec-divider"></div>
        <h4>OUR OFFICE</h4>
        <div class="info-block">
          <div class="icon">📍</div>
          <p>Plot ‑210, E Block, Sector 2,<br>Greater Noida – 201306</p>
        </div>
        <div class="info-block">
          <div class="icon">📞</div>
          <p>88003 20309</p>
        </div>
        <div class="info-block">
          <div class="icon">✉️</div>
          <a href="mailto:info@quickhomelogistic.com">info@quickhomelogistic.com</a>
        </div>
      </div>
    </div>

    <!-- Floating Buttons -->
    <div class="float-buttons">
      <a href="tel:8800320309" class="btn-phone">📞</a>
      <a href="https://wa.me/918800320309" target="_blank" class="btn-wa">💬</a>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      &copy; 2025 QuickHome Logistic. All rights reserved.
    </div>
  </footer>

</head>

</body>