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