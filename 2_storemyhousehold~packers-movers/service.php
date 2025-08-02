<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>StoreMy HouseHOLD</title>
  <link rel="stylesheet" href="css/style.css" />
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lucide@latest"></script>
  <script src="https://unpkg.com/lucide@latest"></script>

</head>
<body>
  <!-- Top Accent -->
  <div class="header-top"></div>

  <!-- Header Section starts -->
   <?php  include 'util/header.php'; ?>
  <!-- Header Section Ended -->

  <!-- Quote Form Section -->
   <?php  include 'include/quote-form-section.php'; ?>
  <!-- Quote form section ending here  -->

 <!-- service section starts from here  --> 

<!-- Services Section -->
<section class="bg-white py-16 px-4 text-gray-800">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-4xl font-bold text-center text-navy mb-4">Our Services</h2>
    <p class="text-center text-lg text-gray-600 mb-12 max-w-3xl mx-auto">
      We offer a comprehensive range of relocation and storage services tailored for individuals, families, and businesses.
    </p>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Service Item -->
      <a href="services/household.php" class="block border rounded-xl shadow hover:shadow-lg transition duration-300">
        <img src="images/service/houseshifting.jpg" alt="Household Shifting" class="w-full h-48 object-cover rounded-t-xl">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Household Shifting</h3>
          <p class="text-sm text-gray-600">Smooth local and interstate moves with secure packing and professional handling.</p>
        </div>
      </a>

      <!-- Office Relocation -->
      <a href="#office-relocation" class="block border rounded-xl shadow hover:shadow-lg transition duration-300">
        <img src="images/service/office.jpg" alt="Office Relocation" class="w-full h-48 object-cover rounded-t-xl">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Office Relocation</h3>
          <p class="text-sm text-gray-600">Quick, organized, and secure shifting of corporate and business spaces.</p>
        </div>
      </a>

      <!-- Car Transportation -->
      <a href="#car-transportation" class="block border rounded-xl shadow hover:shadow-lg transition duration-300">
        <img src="images/service/car.jpg" alt="Car Transportation" class="w-full h-48 object-cover rounded-t-xl">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Car Transportation</h3>
          <p class="text-sm text-gray-600">Safe and insured car shifting with closed and open carrier options.</p>
        </div>
      </a>

      <!-- Bike Transportation -->
      <a href="#bike-transportation" class="block border rounded-xl shadow hover:shadow-lg transition duration-300">
        <img src="images/service/bike.jpg" alt="Bike Transportation" class="w-full h-48 object-cover rounded-t-xl">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Bike Transportation</h3>
          <p class="text-sm text-gray-600">Specialized two-wheeler packing, crating, and secure delivery across locations.</p>
        </div>
      </a>

      <!-- Packing and Unpacking -->
      <a href="#packing-unpacking" class="block border rounded-xl shadow hover:shadow-lg transition duration-300">
        <img src="images/service/packing.jpg" alt="Packing and Unpacking" class="w-full h-48 object-cover rounded-t-xl">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Packing & Unpacking</h3>
          <p class="text-sm text-gray-600">Professional packing materials and techniques for maximum protection of items.</p>
        </div>
      </a>

      <!-- Loading and Unloading -->
      <a href="#loading-unloading" class="block border rounded-xl shadow hover:shadow-lg transition duration-300">
        <img src="images/service/loding.jpg" alt="Loading and Unloading" class="w-full h-48 object-cover rounded-t-xl">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Loading & Unloading</h3>
          <p class="text-sm text-gray-600">Trained manpower and tools to load/unload safely and efficiently.</p>
        </div>
      </a>

      <!-- Storage and Warehousing -->
      <a href="#storage-warehousing" class="block border rounded-xl shadow hover:shadow-lg transition duration-300">
        <img src="images/service/storage.jpg" alt="Storage and Warehousing" class="w-full h-48 object-cover rounded-t-xl">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Storage & Warehousing</h3>
          <p class="text-sm text-gray-600">Clean, climate-controlled storage with flexible plans and full security.</p>
        </div>
      </a>

      <!-- Transit Insurance -->
      <a href="#transit-insurance" class="block border rounded-xl shadow hover:shadow-lg transition duration-300">
        <img src="images/service/transit.jpg" alt="Transit Insurance" class="w-full h-48 object-cover rounded-t-xl">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Transit Insurance</h3>
          <p class="text-sm text-gray-600">Insure your valuable belongings for full protection during transport.</p>
        </div>
      </a>

      <!-- International Relocation -->
      <a href="#international-relocation" class="block border rounded-xl shadow hover:shadow-lg transition duration-300">
        <img src="images/service/international.jpg" alt="International Relocation" class="w-full h-48 object-cover rounded-t-xl">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">International Relocation</h3>
          <p class="text-sm text-gray-600">Global moving support with customs clearance and packing standards.</p>
        </div>
      </a>

      <!-- Pet Relocation -->
      <a href="#pet-relocation" class="block border rounded-xl shadow hover:shadow-lg transition duration-300">
        <img src="images/service/pet.jpg" alt="Pet Relocation" class="w-full h-48 object-cover rounded-t-xl">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Pet Relocation</h3>
          <p class="text-sm text-gray-600">Pet-safe travel with crate training, vet checks, and stress-free care.</p>
        </div>
      </a>

    </div>
  </div>
</section>
  
<!-- service section ended from here -->


<!-- review section starts from here  -->
<?php  include 'include/review-section.php'; ?>
<!-- review section ended from here  -->

<!-- main content page starts from here -->
<?php include 'include/main-content.php'; ?>
<!-- main content ended from here  -->


<!-- This is the footer section starts from here  -->
<?php  include 'util/footer.php'; ?>
<!-- footer section ended from here  -->


</body>
</html>