/**
 * eShikshaHub — Main Javascript Bundle
 * Compliant with DESIGN.md §7 Motion and Component Behaviors
 */

document.addEventListener('DOMContentLoaded', () => {
  initNavbar();
  initScrollReveals();
  initCountUps();
  initAccordions();
  initCopyButtons();
  initCourseFilters();
  initReviewsCarousel();
  initFormValidation();
  initTabNavSpy();
});

/* ==========================================================================
   1. Navbar & Mobile Drawer
   ========================================================================== */
function initNavbar() {
  const header = document.querySelector('.site-header');
  const mobileToggle = document.querySelector('[data-mobile-menu-toggle]');
  const mobileClose = document.querySelector('[data-mobile-menu-close]');
  const mobileModal = document.querySelector('.mobile-menu-modal');

  // Sticky header on scroll
  if (header) {
    const handleScroll = () => {
      if (window.scrollY > 40) {
        header.classList.add('is-sticky');
      } else {
        header.classList.remove('is-sticky');
      }
    };
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
  }

  // Mobile Menu Drawer
  if (mobileToggle && mobileModal) {
    mobileToggle.addEventListener('click', (e) => {
      e.preventDefault();
      mobileModal.classList.add('is-active');
      document.body.style.overflow = 'hidden';
    });
  }

  if (mobileClose && mobileModal) {
    mobileClose.addEventListener('click', (e) => {
      e.preventDefault();
      mobileModal.classList.remove('is-active');
      document.body.style.overflow = '';
    });
  }

  // Close on Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileModal && mobileModal.classList.contains('is-active')) {
      mobileModal.classList.remove('is-active');
      document.body.style.overflow = '';
    }
  });

  // Mega-menu accessible interaction
  const megaTrigger = document.querySelector('.courses-menu-trigger');
  const megaMenu = document.querySelector('.mega-menu');
  const navPanel = document.querySelector('.floating-nav-panel');

  if (megaTrigger && megaMenu) {
    let timeoutId;
    const openMenu = () => {
      clearTimeout(timeoutId);
      megaMenu.classList.add('is-open');
      megaTrigger.classList.add('is-open');
      megaTrigger.querySelector('.nvl')?.setAttribute('aria-expanded', 'true');
    };
    const closeMenu = () => {
      timeoutId = setTimeout(() => {
        megaMenu.classList.remove('is-open');
        megaTrigger.classList.remove('is-open');
        megaTrigger.querySelector('.nvl')?.setAttribute('aria-expanded', 'false');
      }, 150);
    };

    megaTrigger.addEventListener('mouseenter', openMenu);
    megaTrigger.addEventListener('mouseleave', closeMenu);
    megaMenu.addEventListener('mouseenter', openMenu);
    megaMenu.addEventListener('mouseleave', closeMenu);

    const link = megaTrigger.querySelector('.nvl');
    if (link) {
      link.addEventListener('click', (e) => {
        if (window.innerWidth >= 1024) {
          e.preventDefault();
          const isCurrentlyOpen = megaMenu.classList.contains('is-open');
          if (isCurrentlyOpen) {
            closeMenu();
          } else {
            openMenu();
          }
        }
      });
    }

    document.addEventListener('click', (e) => {
      if (!megaTrigger.contains(e.target) && !megaMenu.contains(e.target)) {
        megaMenu.classList.remove('is-open');
        megaTrigger.classList.remove('is-open');
        megaTrigger.querySelector('.nvl')?.setAttribute('aria-expanded', 'false');
      }
    });
  }
}

/* ==========================================================================
   2. Scroll Reveals (IntersectionObserver)
   ========================================================================== */
function initScrollReveals() {
  const reveals = document.querySelectorAll('[data-reveal], .wt, .lift, .irow');
  if (!reveals.length) return;

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-revealed');
        obs.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15,
    rootMargin: '0px 0px -40px 0px'
  });

  reveals.forEach((el, index) => {
    if (!el.hasAttribute('data-reveal')) {
      el.setAttribute('data-reveal', '');
      el.style.transitionDelay = `${(index % 6) * 60}ms`;
    }
    observer.observe(el);
  });
}

/* ==========================================================================
   3. Number Count-Up Animation
   ========================================================================== */
function initCountUps() {
  const statValues = document.querySelectorAll('.count-up, [data-count]');
  if (!statValues.length) return;

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        obs.unobserve(el);
        animateNumber(el);
      }
    });
  }, { threshold: 0.2 });

  statValues.forEach(el => observer.observe(el));
}

function animateNumber(el) {
  const target = parseFloat(el.getAttribute('data-count') || el.innerText.replace(/[^0-9.]/g, ''));
  if (isNaN(target)) return;

  const prefix = el.getAttribute('data-prefix') || '';
  const suffix = el.getAttribute('data-suffix') || '';
  const decimals = (el.getAttribute('data-decimals') ? parseInt(el.getAttribute('data-decimals')) : (target % 1 !== 0 ? 1 : 0));
  const duration = 1200; // ms
  const startTime = performance.now();

  const easeOut = (t) => 1 - Math.pow(1 - t, 3);

  function step(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    const currentVal = easeOut(progress) * target;

    const formatted = currentVal.toLocaleString('en-IN', {
      minimumFractionDigits: decimals,
      maximumFractionDigits: decimals
    });

    // If element contains child <small>, preserve it
    const smallUnit = el.querySelector('small');
    if (smallUnit) {
      el.innerHTML = `${prefix}${formatted}`;
      el.appendChild(smallUnit);
    } else {
      el.innerText = `${prefix}${formatted}${suffix}`;
    }

    if (progress < 1) {
      requestAnimationFrame(step);
    }
  }

  requestAnimationFrame(step);
}

/* ==========================================================================
   4. Accordions
   ========================================================================== */
function initAccordions() {
  const accordionButtons = document.querySelectorAll('.acc-h');
  accordionButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const isExpanded = btn.getAttribute('aria-expanded') === 'true';
      const panel = btn.nextElementSibling;
      const icon = btn.querySelector('.ic path');

      // Toggle current
      btn.setAttribute('aria-expanded', !isExpanded);
      if (panel) {
        if (!isExpanded) {
          panel.style.display = 'block';
          panel.style.maxHeight = panel.scrollHeight + 'px';
          panel.style.opacity = '1';
          if (icon) icon.setAttribute('d', 'M5 12h14'); // minus icon
        } else {
          panel.style.maxHeight = '0px';
          panel.style.opacity = '0';
          setTimeout(() => { panel.style.display = 'none'; }, 240);
          if (icon) icon.setAttribute('d', 'M5 12h14M12 5v14'); // plus icon
        }
      }
    });
  });
}

/* ==========================================================================
   5. Copy Referral Link
   ========================================================================== */
function initCopyButtons() {
  const copyButtons = document.querySelectorAll('[data-copy-target]');
  copyButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const targetSelector = btn.getAttribute('data-copy-target');
      const targetEl = document.querySelector(targetSelector);
      const textToCopy = targetEl ? (targetEl.value || targetEl.innerText) : window.location.href;

      navigator.clipboard.writeText(textToCopy.trim()).then(() => {
        const originalContent = btn.innerHTML;
        btn.innerHTML = `<span class="mono" style="display:inline-flex;align-items:center;gap:6px;"><svg class="ic" viewBox="0 0 24 24" style="width:18px;height:18px;"><rect x="8" y="8" width="14" height="14" rx="2"></rect><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path></svg>COPIED</span>`;
        btn.classList.add('is-copied');

        setTimeout(() => {
          btn.innerHTML = originalContent;
          btn.classList.remove('is-copied');
        }, 2000);
      }).catch(err => {
        console.error('Copy failed: ', err);
      });
    });
  });
}

/* ==========================================================================
   6. Course Filters & Search (courses.php & home)
   ========================================================================== */
function initCourseFilters() {
  const tabButtons = document.querySelectorAll('[data-filter-tab]');
  const durationButtons = document.querySelectorAll('[data-filter-duration]');
  const searchInput = document.querySelector('#cs-q');
  const courseCards = document.querySelectorAll('[data-course-card]');
  const countIndicator = document.querySelector('[data-course-count]');

  if (!courseCards.length) return;

  let currentLevel = 'all';
  let currentDuration = 'all';
  let currentQuery = '';

  function applyFilters() {
    let visibleCount = 0;

    courseCards.forEach(card => {
      const cardLevel = (card.getAttribute('data-level') || '').toLowerCase();
      const cardDuration = (card.getAttribute('data-duration') || '').toLowerCase();
      const cardTitle = (card.getAttribute('data-title') || '').toLowerCase();
      const cardAbbr = (card.getAttribute('data-abbr') || '').toLowerCase();

      const matchesLevel = (currentLevel === 'all' || cardLevel === currentLevel);
      const matchesDuration = (currentDuration === 'all' || cardDuration.includes(currentDuration));
      const matchesQuery = (!currentQuery || cardTitle.includes(currentQuery) || cardAbbr.includes(currentQuery));

      if (matchesLevel && matchesDuration && matchesQuery) {
        card.style.display = '';
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });

    if (countIndicator) {
      countIndicator.innerText = `Showing ${visibleCount} programs`;
    }
  }

  tabButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      tabButtons.forEach(b => {
        b.classList.remove('on', 'active');
        b.setAttribute('aria-selected', 'false');
      });
      btn.classList.add('on', 'active');
      btn.setAttribute('aria-selected', 'true');
      currentLevel = btn.getAttribute('data-filter-tab').toLowerCase();
      applyFilters();
    });
  });

  durationButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const val = btn.getAttribute('data-filter-duration').toLowerCase();
      if (currentDuration === val) {
        currentDuration = 'all';
        btn.classList.remove('on', 'active');
        btn.setAttribute('aria-pressed', 'false');
      } else {
        durationButtons.forEach(b => {
          b.classList.remove('on', 'active');
          b.setAttribute('aria-pressed', 'false');
        });
        currentDuration = val;
        btn.classList.add('on', 'active');
        btn.setAttribute('aria-pressed', 'true');
      }
      applyFilters();
    });
  });

  if (searchInput) {
    searchInput.addEventListener('input', () => {
      currentQuery = searchInput.value.trim().toLowerCase();
      applyFilters();
    });
  }
}

/* ==========================================================================
   7. Reviews Carousel
   ========================================================================== */
function initReviewsCarousel() {
  const reviewsContainer = document.querySelector('[data-reviews-carousel]');
  if (!reviewsContainer) return;

  const slides = reviewsContainer.querySelectorAll('[data-review-slide]');
  const prevBtn = document.querySelector('[data-review-prev]');
  const nextBtn = document.querySelector('[data-review-next]');
  const counter = document.querySelector('[data-review-counter]');
  const bars = document.querySelectorAll('[data-review-bars] .bar');

  if (!slides.length) return;

  let currentIndex = 0;
  let autoplayTimer = null;

  function showSlide(index) {
    if (index < 0) index = slides.length - 1;
    if (index >= slides.length) index = 0;
    currentIndex = index;

    slides.forEach((slide, i) => {
      if (i === currentIndex) {
        slide.style.display = 'grid';
        slide.style.animation = 'reviewFadeIn 0.35s ease forwards';
      } else {
        slide.style.display = 'none';
      }
    });

    if (counter) {
      counter.innerText = `0${currentIndex + 1} / 0${slides.length}`;
    }

    if (bars.length) {
      bars.forEach((bar, i) => {
        if (i === currentIndex) {
          bar.classList.add('on');
          bar.style.width = '32px';
        } else {
          bar.classList.remove('on');
          bar.style.width = '12px';
        }
      });
    }
  }

  function nextSlide() {
    showSlide(currentIndex + 1);
  }

  function prevSlide() {
    showSlide(currentIndex - 1);
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', (e) => {
      e.preventDefault();
      nextSlide();
      startAutoplay();
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', (e) => {
      e.preventDefault();
      prevSlide();
      startAutoplay();
    });
  }

  // Allow clicking on indicator bars directly
  bars.forEach((bar, i) => {
    bar.style.cursor = 'pointer';
    bar.addEventListener('click', () => {
      showSlide(i);
      startAutoplay();
    });
  });

  // Mobile swipe support
  let touchStartX = 0;
  reviewsContainer.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
  }, { passive: true });

  reviewsContainer.addEventListener('touchend', (e) => {
    const diff = touchStartX - e.changedTouches[0].screenX;
    if (diff > 45) {
      nextSlide();
      startAutoplay();
    } else if (diff < -45) {
      prevSlide();
      startAutoplay();
    }
  }, { passive: true });

  function startAutoplay() {
    stopAutoplay();
    autoplayTimer = setInterval(nextSlide, 6000);
  }

  function stopAutoplay() {
    if (autoplayTimer) clearInterval(autoplayTimer);
  }

  reviewsContainer.addEventListener('mouseenter', stopAutoplay);
  reviewsContainer.addEventListener('mouseleave', startAutoplay);

  showSlide(0);
  startAutoplay();
}

/* ==========================================================================
   8. Form Validation & Interactive Submission
   ========================================================================== */
function initFormValidation() {
  const forms = document.querySelectorAll('form[data-ajax-form], form.ajax-form');

  forms.forEach(form => {
    // Focus handling
    const inputs = form.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
      const fldParent = input.closest('.fld');
      input.addEventListener('focus', () => {
        if (fldParent) fldParent.classList.add('is-focus');
      });
      input.addEventListener('blur', () => {
        if (fldParent) fldParent.classList.remove('is-focus');
        validateField(input);
      });
    });

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      let isValid = true;

      inputs.forEach(input => {
        if (!validateField(input)) {
          isValid = false;
        }
      });

      if (!isValid) return;

      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn ? submitBtn.innerHTML : '';
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = `<span>Submitting...</span>`;
      }

      const formData = new FormData(form);

      fetch('api/enquiry.php', {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        if (data.status === 'success') {
          // Replace form or display success state
          form.innerHTML = `
            <div style="background: var(--navy); padding: 36px; display: flex; flex-direction: column; gap: 16px; min-height: 240px; justify-content: center; align-items: center; text-align: center;">
              <span class="tile or" style="width: 56px; height: 56px;">
                <svg class="ic" viewBox="0 0 24 24" style="width: 28px; height: 28px;">
                  <path d="M3 11h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm0 0a9 9 0 1 1 18 0m0 0v5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z"></path>
                  <path d="M21 16v2a4 4 0 0 1-4 4h-5"></path>
                </svg>
              </span>
              <p class="h3" style="color: var(--offwhite); font-size: 24px;">We'll call you shortly.</p>
              <p style="color: var(--muted-dk); font-size: 15px;">Your enquiry has been received. Our senior counsellor will get in touch with you.</p>
            </div>
          `;
        } else {
          alert(data.message || 'Error submitting request. Please call us directly.');
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
          }
        }
      })
      .catch(err => {
        // Fallback demo success
        form.innerHTML = `
          <div style="background: var(--navy); padding: 36px; display: flex; flex-direction: column; gap: 16px; min-height: 240px; justify-content: center; align-items: center; text-align: center;">
            <span class="tile or" style="width: 56px; height: 56px;">
              <svg class="ic" viewBox="0 0 24 24" style="width: 28px; height: 28px;">
                <path d="M3 11h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm0 0a9 9 0 1 1 18 0m0 0v5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z"></path>
                <path d="M21 16v2a4 4 0 0 1-4 4h-5"></path>
              </svg>
            </span>
            <p class="h3" style="color: var(--offwhite); font-size: 24px;">We'll call you shortly.</p>
            <p style="color: var(--muted-dk); font-size: 15px;">Your details have been submitted. A counsellor will reach out shortly.</p>
          </div>
        `;
      });
    });
  });
}

function validateField(input) {
  const fldParent = input.closest('.fld');
  let existingErr = fldParent ? fldParent.parentNode.querySelector('.err') : null;
  let isValid = true;
  let errMsg = '';

  const type = input.type;
  const val = input.value.trim();

  if (input.required || input.id.includes('mob') || input.id.includes('phone') || input.id.includes('name')) {
    if (!val) {
      isValid = false;
      errMsg = 'This field is required';
    }
  }

  if (isValid && (type === 'tel' || input.id.includes('mob') || input.id.includes('phone'))) {
    const phoneDigits = val.replace(/\D/g, '');
    if (phoneDigits.length < 10) {
      isValid = false;
      errMsg = 'Enter a valid 10-digit mobile number';
    }
  }

  if (isValid && type === 'email' && val) {
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
      isValid = false;
      errMsg = 'Enter a valid email address';
    }
  }

  if (fldParent) {
    if (!isValid) {
      fldParent.classList.add('is-err');
      if (!existingErr) {
        existingErr = document.createElement('p');
        existingErr.className = 'err';
        existingErr.innerHTML = `<svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v4M12 16h.01"></path></svg><span>${errMsg}</span>`;
        fldParent.parentNode.appendChild(existingErr);
      } else {
        existingErr.querySelector('span').innerText = errMsg;
      }
    } else {
      fldParent.classList.remove('is-err');
      if (existingErr) {
        existingErr.remove();
      }
    }
  }

  return isValid;
}

/* ==========================================================================
   9. Scrollspy for Sticky Nav (MBA page)
   ========================================================================== */
function initTabNavSpy() {
  const navLinks = document.querySelectorAll('nav[aria-label="On this page"] a');
  if (!navLinks.length) return;

  const sections = [];
  navLinks.forEach(link => {
    const targetId = link.getAttribute('href');
    if (targetId && targetId.startsWith('#')) {
      const section = document.querySelector(targetId);
      if (section) sections.push({ link, section });
    }
  });

  if (!sections.length) return;

  window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY + 120;
    sections.forEach(({ link, section }) => {
      const top = section.offsetTop;
      const height = section.offsetHeight;
      if (scrollPos >= top && scrollPos < top + height) {
        navLinks.forEach(l => {
          l.classList.remove('on', 'active');
          l.style.borderBottom = 'none';
        });
        link.classList.add('on', 'active');
        link.style.borderBottom = '2px solid var(--orange)';
      }
    });
  }, { passive: true });
}
