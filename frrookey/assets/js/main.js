/* Main JS for therookeysaint.org */

document.addEventListener('DOMContentLoaded', () => {
  initMobileMenu();
  initScrollAnimations();
  initStickyHeader();
  initHeroSlider();
});

function initMobileMenu() {
  const toggle = document.querySelector('.mobile-toggle');
  const menu = document.querySelector('.nav-menu');

  if (toggle && menu) {
    toggle.addEventListener('click', () => {
      menu.classList.toggle('active');
      const icon = toggle.querySelector('i');
      if (icon) {
        if (menu.classList.contains('active')) {
          icon.classList.remove('fa-bars');
          icon.classList.add('fa-times');
        } else {
          icon.classList.remove('fa-times');
          icon.classList.add('fa-bars');
        }
      }
    });

    // Close menu when clicking a link
    menu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        menu.classList.remove('active');
        const icon = toggle.querySelector('i');
        if (icon) {
          icon.classList.remove('fa-times');
          icon.classList.add('fa-bars');
        }
      });
    });
  }
}

function initScrollAnimations() {
  const elements = document.querySelectorAll('.fade-in');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, {
    threshold: 0.1
  });

  elements.forEach(el => observer.observe(el));
}

function initStickyHeader() {
  const header = document.querySelector('.header');
  if (header) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.style.boxShadow = '0 4px 15px rgba(0,0,0,0.1)';
        header.style.padding = '0.5rem 0';
      } else {
        header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.05)';
        header.style.padding = '1rem 0';
      }
    });
  }
}

function initHeroSlider() {
  const sliderContainer = document.querySelector('.hero-slider-wrapper');
  if (!sliderContainer) return;

  const slides = sliderContainer.querySelectorAll('.slide');
  const dotsContainer = sliderContainer.querySelector('.slider-dots');
  const prevBtn = sliderContainer.querySelector('.slider-prev');
  const nextBtn = sliderContainer.querySelector('.slider-next');

  if (slides.length === 0) return;

  let currentSlide = 0;
  const intervalTime = 5000;
  let slideInterval;

  // Create dots
  if (dotsContainer) {
    dotsContainer.innerHTML = '';
    slides.forEach((_, index) => {
      const dot = document.createElement('div');
      dot.classList.add('dot');
      if (index === 0) dot.classList.add('active');
      dot.addEventListener('click', () => {
        goToSlide(index);
        resetTimer();
      });
      dotsContainer.appendChild(dot);
    });
  }

  const dots = dotsContainer ? dotsContainer.querySelectorAll('.dot') : [];

  function goToSlide(n) {
    slides[currentSlide].classList.remove('active');
    if (dots.length > currentSlide) dots[currentSlide].classList.remove('active');

    currentSlide = (n + slides.length) % slides.length;

    slides[currentSlide].classList.add('active');
    if (dots.length > currentSlide) dots[currentSlide].classList.add('active');
  }

  function nextSlide() {
    goToSlide(currentSlide + 1);
  }

  function prevSlide() {
    goToSlide(currentSlide - 1);
  }

  function resetTimer() {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      prevSlide();
      resetTimer();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      nextSlide();
      resetTimer();
    });
  }

  // Start auto slide
  slideInterval = setInterval(nextSlide, intervalTime);

  // Optional: Pause on hover
  sliderContainer.addEventListener('mouseenter', () => clearInterval(slideInterval));
  sliderContainer.addEventListener('mouseleave', () => resetTimer());
}
