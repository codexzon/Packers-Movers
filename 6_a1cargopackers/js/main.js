function toggleMenu(){
  const nav = document.getElementById('mainNav');
  if(!nav) return;
  nav.classList.toggle('show');
}

// Simple carousel controls (slides are 100% width)
function nextSlide(id){
  const el = document.getElementById(id);
  if(!el) return;
  el.scrollBy({left: el.clientWidth, behavior:'smooth'});
}
function prevSlide(id){
  const el = document.getElementById(id);
  if(!el) return;
  el.scrollBy({left: -el.clientWidth, behavior:'smooth'});
}

// Demo submit handler
function fakeSubmit(form){
  alert('Thanks! Our team will contact you shortly.');
  form.reset();
  return false; // prevent actual submit for demo
}

// Auto-advance testimonial every 4s
document.addEventListener('DOMContentLoaded',()=>{
  const id = 'testiCarousel';
  const el = document.getElementById(id);
  if(!el) return;
  setInterval(()=>nextSlide(id), 4000);
});


