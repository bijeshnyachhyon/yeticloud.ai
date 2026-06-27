document.addEventListener('DOMContentLoaded', function () {
  // ─── Nav Scroll Effect ───
  var nav = document.querySelector('nav');
  if (nav) {
    window.addEventListener('scroll', function () {
      nav.classList.toggle('scrolled', window.scrollY > 20);
    });
  }

  // ─── Hero Slider ───
  var slider = document.querySelector('.hero-slider');
  if (slider) {
    var wrap = slider.querySelector('.slides-wrap');
    var slides = slider.querySelectorAll('.slide');
    var dots = slider.querySelectorAll('.slider-dot');
    var prevBtn = slider.querySelector('.slider-arrow.prev');
    var nextBtn = slider.querySelector('.slider-arrow.next');
    var indexEl = slider.querySelector('.slide-index');
    var current = 0;
    var total = slides.length;
    var interval;

    function pad (n) { return (n + 1).toString().padStart(2, '0'); }

    function goTo (index) {
      if (index < 0) index = total - 1;
      if (index >= total) index = 0;
      current = index;
      wrap.style.transform = 'translateX(-' + (current * 100) + '%)';
      dots.forEach(function (d, i) {
        d.classList.toggle('active', i === current);
      });
      if (indexEl) indexEl.textContent = pad(current) + ' / ' + pad(total - 1);
    }

    function nextSlide () { goTo(current + 1); }
    function prevSlide () { goTo(current - 1); }

    function startAuto () {
      stopAuto();
      interval = setInterval(nextSlide, 6000);
    }
    function stopAuto () { clearInterval(interval); }

    dots.forEach(function (dot) {
      dot.addEventListener('click', function () {
        goTo(parseInt(dot.getAttribute('data-index')));
        startAuto();
      });
    });
    if (prevBtn) prevBtn.addEventListener('click', function () { prevSlide(); startAuto(); });
    if (nextBtn) nextBtn.addEventListener('click', function () { nextSlide(); startAuto(); });

    slider.addEventListener('mouseenter', stopAuto);
    slider.addEventListener('mouseleave', startAuto);
    slider.addEventListener('touchstart', stopAuto);
    slider.addEventListener('touchend', startAuto);

    goTo(0);
    startAuto();
  }

  // ─── Scroll Reveal ───
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(function (el) {
    if (!el.classList.contains('visible')) observer.observe(el);
  });

  // ─── FAQ Accordion ───
  document.querySelectorAll('.faq-q').forEach(function (q) {
    q.addEventListener('click', function () {
      var item = q.parentElement;
      var isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(function (i) { i.classList.remove('open'); });
      if (!isOpen) item.classList.add('open');
    });
  });

  // ─── Contact Form ───
  var form = document.getElementById('contactForm');
  var msgEl = document.getElementById('formMsg');
  var submitBtn = document.getElementById('submitBtn');
  if (form && msgEl && submitBtn) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      msgEl.style.display = 'none';
      msgEl.className = 'form-msg';
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending...';

      var data = new FormData(form);
      fetch('contact.php', { method: 'POST', body: data })
        .then(function (r) { return r.json(); })
        .then(function (res) {
          msgEl.textContent = res.message;
          msgEl.className = 'form-msg ' + (res.success ? 'success' : 'error');
          msgEl.style.display = 'block';
          if (res.success) form.reset();
        })
        .catch(function () {
          msgEl.textContent = 'Network error. Please try again.';
          msgEl.className = 'form-msg error';
          msgEl.style.display = 'block';
        })
        .finally(function () {
          submitBtn.disabled = false;
          submitBtn.textContent = 'Send Message';
        });
    });
  }

  // ─── Back to Top ───
  var backBtn = document.querySelector('.back-to-top');
  if (backBtn) {
    function toggleBackBtn() {
      if (window.pageYOffset > 300 || document.documentElement.scrollTop > 300) {
        backBtn.style.cssText = 'opacity:0.5;visibility:visible;pointer-events:auto;';
      } else {
        backBtn.style.cssText = 'opacity:0;visibility:hidden;pointer-events:none;';
      }
    }
    window.addEventListener('scroll', toggleBackBtn, { passive: true });
    window.addEventListener('touchmove', toggleBackBtn, { passive: true });
    toggleBackBtn();
  }

  // ─── Stat Counters ───
  var counters = document.querySelectorAll('.stat-number');
  counters.forEach(function (el) {
    var target = parseInt(el.getAttribute('data-target')) || 0;
    var suffix = el.getAttribute('data-suffix') || '';
    var current = 0;
    var step = Math.ceil(target / 40);
    if (target === 0) return;
    var interval = setInterval(function () {
      current += step;
      if (current >= target) { current = target; clearInterval(interval); }
      el.textContent = current + suffix;
    }, 50);
  });
});
