  // Mobile menu toggle
  const mobileMenuBtn = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  mobileMenuBtn.addEventListener('click', () => {
    const expanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
    mobileMenuBtn.setAttribute('aria-expanded', String(!expanded));
    mobileMenu.setAttribute('aria-hidden', String(expanded));
    if (!expanded) {
      mobileMenu.style.display = 'block';
    } else {
      mobileMenu.style.display = 'none';
    }
  });

  // Mobile services dropdown toggle
  const servicesToggle = document.getElementById('mobile-services-toggle');
  const servicesList = document.getElementById('mobile-services-list');
  servicesToggle.addEventListener('click', () => {
    const expanded = servicesToggle.getAttribute('aria-expanded') === 'true';
    servicesToggle.setAttribute('aria-expanded', String(!expanded));
    if (!expanded) {
      servicesList.classList.add('open');
      servicesToggle.querySelector('.chevron').classList.add('rotate');
    } else {
      servicesList.classList.remove('open');
      servicesToggle.querySelector('.chevron').classList.remove('rotate');
    }
  });
  // Also allow keyboard toggle with Enter/Space
  servicesToggle.addEventListener('keydown', (e) => {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      servicesToggle.click();
    }
  });

  // Desktop dropdown keyboard accessibility
  const desktopServices = document.querySelector('nav.desktop-nav li.services-dropdown');
  desktopServices.addEventListener('keydown', (e) => {
    if (e.key === 'Enter' || e.key === ' ' || e.key === 'ArrowDown') {
      e.preventDefault();
      desktopServices.querySelector('ul').style.opacity = '1';
      desktopServices.querySelector('ul').style.visibility = 'visible';
      desktopServices.setAttribute('aria-expanded', 'true');
      desktopServices.querySelector('ul').focus();
    }
    if (e.key === 'Escape') {
      desktopServices.querySelector('ul').style.opacity = '0';
      desktopServices.querySelector('ul').style.visibility = 'hidden';
      desktopServices.setAttribute('aria-expanded', 'false');
      desktopServices.focus();
    }
  });





  const openReviewBtn = document.getElementById("openReviewBtn");
const reviewModal = document.getElementById("reviewModal");
const closeModal = document.getElementById("closeModal");
const submitReview = document.getElementById("submitReview");
const reviewsContainer = document.getElementById("reviewsContainer");
const starRating = document.getElementById("starRating");
const stars = starRating.querySelectorAll("span");
const noReviews = document.querySelector(".no-reviews");

let currentRating = 0;

// Show modal
openReviewBtn.addEventListener("click", () => {
  reviewModal.classList.remove("hidden");
});

// Close modal
closeModal.addEventListener("click", () => {
  reviewModal.classList.add("hidden");
  clearForm();
});

// Handle star click
stars.forEach((star) => {
  star.addEventListener("click", () => {
    currentRating = parseInt(star.getAttribute("data-value"));
    updateStarDisplay();
  });
});

function updateStarDisplay() {
  stars.forEach((star) => {
    const val = parseInt(star.getAttribute("data-value"));
    star.classList.toggle("selected", val <= currentRating);
  });
}

// Submit review
submitReview.addEventListener("click", () => {
  const title = document.getElementById("reviewTitle").value.trim();
  const name = document.getElementById("reviewName").value.trim();
  const text = document.getElementById("reviewText").value.trim();

  if (!title || !name || !text || currentRating === 0) {
    alert("Please fill in all fields and select a rating.");
    return;
  }

  const reviewCard = document.createElement("div");
  reviewCard.className = "review-card";
  reviewCard.innerHTML = `
    <h4>${title}</h4>
    <div class="stars">${"★".repeat(currentRating)}${"☆".repeat(5 - currentRating)}</div>
    <div class="text">${text}</div>
    <div class="name">- ${name}, ${new Date().toLocaleDateString()}</div>
  `;

  if (noReviews) noReviews.remove();
  reviewsContainer.appendChild(reviewCard);

  reviewModal.classList.add("hidden");
  clearForm();
});

// Clear form
function clearForm() {
  document.getElementById("reviewTitle").value = "";
  document.getElementById("reviewName").value = "";
  document.getElementById("reviewText").value = "";
  currentRating = 0;
  updateStarDisplay();
}