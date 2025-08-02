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



  <!-- About Section starts from here  -->

  <!-- About Section - Detailed with Images -->
<section class="max-w-7xl mx-auto px-4 py-16 text-gray-800">
  <div class="text-center mb-12">
    <h2 class="text-4xl font-bold text-navy mb-2">About StoreMy HouseHold</h2>
    <p class="text-lg text-orange-500">Reliable Storage and Shifting Solutions</p>
  </div>

  <div class="grid md:grid-cols-2 gap-10 items-start mb-12">
    <div>
      <img src="images/about/about-1.jpg" alt="Team at Work" class="w-full rounded-lg shadow-md mb-6" />
      <p class="text-lg leading-relaxed">
        StoreMy HouseHold isn’t just a logistics brand; it’s a promise to handle your move with care, precision, and professionalism. Our journey started with a single truck and a vision to offer stress-free moving experiences in Noida and the NCR region. Today, we proudly stand as one of the region’s most reliable packers and movers with a reputation built on trust, dedication, and customer satisfaction.
      </p>
    </div>

    <div>
      <img src="images/about/about-2.jpg" alt="Packing Service" class="w-full rounded-lg shadow-md mb-6" />
      <p class="text-lg leading-relaxed">
        We understand that shifting isn’t just about moving boxes. It’s about moving lives — each item has value, memory, or importance attached. That’s why we offer fully customized packing, transportation, storage, and unloading services. From 1BHK apartments to full corporate offices, from household goods to delicate artwork — our experts manage it all with utmost precision.
      </p>
    </div>
  </div>

  <div class="grid md:grid-cols-2 gap-10 items-start mb-12">
    <div>
      <h3 class="text-2xl font-semibold text-navy mb-4">Why Choose Us?</h3>
      <ul class="list-disc list-inside text-lg leading-relaxed space-y-2">
        <li>Over 5,000 happy customers served across North India</li>
        <li>Climate-controlled, secure storage units with CCTV surveillance</li>
        <li>Professional, background-verified staff with years of experience</li>
        <li>Specialized packaging for electronics, glass, and furniture</li>
        <li>Affordable pricing with no hidden charges</li>
        <li>24/7 customer support with real-time tracking</li>
      </ul>
    </div>

    <div>
      <img src="images/about/about-3.jpg" alt="Moving Truck" class="w-full rounded-lg shadow-md" />
    </div>
  </div>

  <div class="mb-12">
    <h3 class="text-2xl font-semibold text-navy mb-4">Our Mission & Values</h3>
    <p class="text-lg leading-relaxed mb-6">
      At StoreMy HouseHold, our mission is simple — to simplify shifting and storage for individuals and businesses. We envision a world where moving to a new home or office isn’t filled with anxiety, but excitement. That’s why we prioritize transparency, care, and speed in everything we do.
    </p>
    <p class="text-lg leading-relaxed">
      Our core values include:
    </p>
    <ul class="list-disc list-inside text-lg space-y-2 mt-2">
      <li><strong>Integrity:</strong> We deliver what we promise, no compromises.</li>
      <li><strong>Care:</strong> We treat your belongings as if they were our own.</li>
      <li><strong>Efficiency:</strong> Time is crucial — we stay on schedule every time.</li>
      <li><strong>Innovation:</strong> Using modern tools, tracking tech, and updated logistics systems.</li>
    </ul>
  </div>

  <div class="grid md:grid-cols-2 gap-10 items-center">
    <div>
      <img src="images/about/about-4.jpg" alt="Happy Client" class="w-full rounded-lg shadow-md" />
    </div>
    <div>
      <h3 class="text-2xl font-semibold text-navy mb-4">Serving With Trust</h3>
      <p class="text-lg leading-relaxed">
        Whether you’re moving your home across Noida or shifting your office to another state, we handle it with the same level of commitment. Our licensed, insured transportation fleet and GPS-enabled trucks ensure every shipment is trackable and accountable. We believe in building long-term relationships through quality work, open communication, and exceptional support.
      </p>
    </div>
  </div>

  <!-- Optional Testimonial Block -->
  <div class="mt-20 bg-orange-50 p-10 rounded-lg shadow-inner text-center">
    <blockquote class="italic text-xl text-navy mb-4">
      “From booking to delivery, StoreMy HouseHold was flawless. Every item arrived without a scratch. They truly are the professionals of this industry.”
    </blockquote>
    <p class="text-orange-500 font-semibold">— Aarti Singh, Noida Extension</p>
  </div>
</section>

<!-- about section ending here  -->


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