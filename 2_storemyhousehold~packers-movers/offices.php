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

  <!-- office section starts from here   -->
   <section class="bg-gray-50 py-16 px-4">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-navy mb-4">Our Offices & Popular Cities We Serve</h2>
    <p class="text-gray-600 mb-10 text-lg">We offer reliable relocation and storage services in multiple metro and tier-2 cities across India.</p>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-orange-500 font-semibold text-xl">Noida</h3>
        <p class="text-sm text-gray-600">Sector 62, 63, 18 & Greater Noida</p>
      </div>
      <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-orange-500 font-semibold text-xl">Delhi</h3>
        <p class="text-sm text-gray-600">Dwarka, Rohini, Laxmi Nagar</p>
      </div>
      <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-orange-500 font-semibold text-xl">Gurgaon</h3>
        <p class="text-sm text-gray-600">DLF Cyber City, Sector 14, 56</p>
      </div>
      <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-orange-500 font-semibold text-xl">Ghaziabad</h3>
        <p class="text-sm text-gray-600">Indirapuram, Vaishali, Raj Nagar</p>
      </div>
      <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-orange-500 font-semibold text-xl">Mumbai</h3>
        <p class="text-sm text-gray-600">Andheri, Navi Mumbai, Thane</p>
      </div>
      <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-orange-500 font-semibold text-xl">Bangalore</h3>
        <p class="text-sm text-gray-600">Whitefield, Koramangala, Indiranagar</p>
      </div>
      <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-orange-500 font-semibold text-xl">Hyderabad</h3>
        <p class="text-sm text-gray-600">Hitech City, Gachibowli, Kukatpally</p>
      </div>
      <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-orange-500 font-semibold text-xl">Pune</h3>
        <p class="text-sm text-gray-600">Wakad, Hinjewadi, Kharadi</p>
      </div>
    </div>
  </div>
</section>

<!-- office section ended from here -->


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