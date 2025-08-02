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

<!-- form section starts from here -->
 <section class="bg-white py-12 px-4">
  <div class="max-w-4xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-navy mb-6">Contact Us</h2>
    <p class="text-lg text-gray-600 mb-10">We’re here to assist you. Feel free to reach out anytime.</p>

    <div class="space-y-6 text-lg text-gray-700">
      <div class="flex items-center justify-center gap-4">
        <span class="text-2xl">📞</span>
        <a href="tel:+919811591020" class="text-orange-600 hover:underline font-medium">+91 98115 91020</a>
      </div>
      <div class="flex items-center justify-center gap-4">
        <span class="text-2xl">📍</span>
        <span>119, Block E, Sector 2, Greater Noida</span>
      </div>
      <div class="flex items-center justify-center gap-4">
        <span class="text-2xl">📧</span>
        <a href="mailto:info@storemyhousehold.com" class="text-orange-600 hover:underline font-medium">info@storemyhousehold.com</a>
      </div>
    </div>
  </div>
</section>

<!-- form section ended from here -->

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