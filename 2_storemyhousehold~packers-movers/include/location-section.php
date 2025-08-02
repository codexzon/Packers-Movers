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