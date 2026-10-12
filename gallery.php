<?php
$current_page = 'gallery';
$page_title = 'Gallery & Moments | eShikshaHub';
$page_desc = 'Explore moments, convocation celebrations, counselling sessions, student interactions, and campus activities at eShikshaHub.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

$gallery_items = [
    [
        'id' => 1,
        'src' => 'assets/img/gallery/1.png',
        'title' => 'Convocation & Degree Award Ceremony',
        'category' => 'convocation',
        'category_name' => 'Convocation',
        'desc' => 'Proud graduates receiving their accredited degrees and celebrating milestones with peers and mentors.'
    ],
    [
        'id' => 2,
        'src' => 'assets/img/gallery/2.png',
        'title' => 'Personalized 1-on-1 Academic Counselling',
        'category' => 'counselling',
        'category_name' => 'Counselling',
        'desc' => 'Dedicated academic mentors guiding working professionals through degree specializations and university selection.'
    ],
    [
        'id' => 3,
        'src' => 'assets/img/gallery/3.png',
        'title' => 'Interactive Live Masterclass & Lecture',
        'category' => 'academic',
        'category_name' => 'Academic Life',
        'desc' => 'Live virtual classrooms led by top university faculty and corporate domain leaders with real-time Q&A.'
    ],
    [
        'id' => 4,
        'src' => 'assets/img/gallery/4.png',
        'title' => 'Partner University Campus Induction',
        'category' => 'academic',
        'category_name' => 'Academic Life',
        'desc' => 'Students visiting partner university campuses for orientation, laboratory tours, and faculty roundtables.'
    ],
    [
        'id' => 5,
        'src' => 'assets/img/gallery/5.png',
        'title' => 'Annual Alumni Meet & Industry Networking',
        'category' => 'workshops',
        'category_name' => 'Workshops',
        'desc' => 'Graduates and working alumni connecting with hiring managers, recruiters, and startup founders.'
    ],
    [
        'id' => 6,
        'src' => 'assets/img/gallery/6.png',
        'title' => 'Resume Building & Interview Preparation Boot Camp',
        'category' => 'workshops',
        'category_name' => 'Workshops',
        'desc' => 'Hands-on career readiness workshop focusing on ATS-friendly resumes, LinkedIn branding, and mock interviews.'
    ],
    [
        'id' => 7,
        'src' => 'assets/img/gallery/7.png',
        'title' => 'Student Orientation & Platform Walkthrough',
        'category' => 'counselling',
        'category_name' => 'Counselling',
        'desc' => 'Fresh cohort onboarding session introducing the LMS, digital library access, and assessment schedules.'
    ],
    [
        'id' => 8,
        'src' => 'assets/img/gallery/8.png',
        'title' => 'Corporate Hiring Drive & Placement Day',
        'category' => 'workshops',
        'category_name' => 'Workshops',
        'desc' => 'Top recruitment partners conducting on-the-spot interviews and placement assessments for graduating batches.'
    ],
    [
        'id' => 9,
        'src' => 'assets/img/gallery/9.png',
        'title' => 'Capstone Project Showcase & Presentations',
        'category' => 'academic',
        'category_name' => 'Academic Life',
        'desc' => 'MBA and MCA scholars pitching their final semester enterprise consulting and software projects to jury members.'
    ],
    [
        'id' => 10,
        'src' => 'assets/img/gallery/10.png',
        'title' => 'National Education Summit & Award Felicitations',
        'category' => 'convocation',
        'category_name' => 'Convocation',
        'desc' => 'Academic excellence honors awarded to top rankers across online Bachelor and Master degree cohorts.'
    ],
    [
        'id' => 11,
        'src' => 'assets/img/stock/library-books.jpg',
        'title' => '24/7 Digital Library & Resource Center',
        'category' => 'academic',
        'category_name' => 'Academic Life',
        'desc' => 'Access over 50,000+ e-books, IEEE journals, and case studies curated for online undergraduate and master learners.'
    ],
    [
        'id' => 12,
        'src' => 'assets/img/stock/student-mentor.jpg',
        'title' => 'Career Mentorship & Path Advisory',
        'category' => 'counselling',
        'category_name' => 'Counselling',
        'desc' => 'Empowering every student with an individualized 24-month roadmap toward leadership roles and promotion.'
    ]
];
?>

<!-- 1. HERO SECTION -->
<section style="position: relative; height: 520px; display: flex; align-items: flex-end;">
  <div class="ph" style="position: absolute; inset: 0;">
    <img src="<?= BASE_URL ?>assets/img/stock/graduates-caps.jpg" alt="Graduation celebrations" class="ph-img" style="opacity: 0.45; object-position: center 30%;">
  </div>
  <div class="ov"></div>

  <div class="container" style="position: relative; z-index: 5; padding-bottom: 88px;">
    <div class="head" style="max-width: 760px; gap: 18px;">
      <nav aria-label="Breadcrumb" class="mono" style="display: flex; gap: 10px; color: var(--muted-dk);">
        <a href="<?= BASE_URL ?>index.php" style="color: var(--muted-dk);">Home</a>
        <span aria-hidden="true">/</span>
        <span style="color: var(--offwhite);">Gallery</span>
      </nav>
      <h1 class="h1">Moments at eShikshaHub</h1>
      <p class="lead pdk">A visual glimpse into our vibrant learner community, convocations, live masterclasses, and placement drives.</p>
    </div>
  </div>
</section>

<!-- 2. PROOF STATS BAND (Floating White Card) -->
<section aria-label="Gallery proof stats" class="floating-stats-band" style="position: relative; z-index: 20; margin-top: -56px; margin-bottom: 24px;">
  <div class="container">
    <div class="stats floating-card" style="grid-template-columns: repeat(4, minmax(0, 1fr)); background: var(--white); border: 1px solid var(--hairline); border-top: 3px solid var(--orange); border-radius: 8px; box-shadow: 0 18px 42px rgba(24, 29, 56, 0.14); overflow: hidden;" id="gallery-proof-stats">
      <div class="stat" style="background: var(--white); padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><rect width="18" height="18" x="3" y="3" rx="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg></span>
        <p class="stat-l">Moments</p>
        <p class="stat-v"><span class="count-up" data-count="12">12</span><small>+</small></p>
        <p class="stat-h">Featured photo records</p>
      </div>
      <div class="stat" style="background: var(--white); padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
        <p class="stat-l">Community</p>
        <p class="stat-v"><span class="count-up" data-count="15">15</span><small>K+</small></p>
        <p class="stat-h">Learners nationwide</p>
      </div>
      <div class="stat" style="background: var(--white); padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></span>
        <p class="stat-l">Convocations</p>
        <p class="stat-v"><span class="count-up" data-count="24">24</span><small>+</small></p>
        <p class="stat-h">Degree award days</p>
      </div>
      <div class="stat" style="background: var(--white); padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></span>
        <p class="stat-l">Workshops</p>
        <p class="stat-v"><span class="count-up" data-count="150">150</span><small>+</small></p>
        <p class="stat-h">Career sessions hosted</p>
      </div>
    </div>
  </div>
</section>

<!-- 3. GALLERY FILTER BAR & GRID -->
<section class="sec" style="background: var(--white); padding-top: 48px; padding-bottom: 96px;">
  <div class="container">
    <!-- Filter bar -->
    <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 20px; margin-bottom: 48px; border-bottom: 1px solid var(--hairline); padding-bottom: 24px;">
      <div style="display: flex; flex-wrap: wrap; gap: 8px;" id="gallery-filters" role="tablist">
        <button class="btn btn-s on gallery-tab" data-cat="all" role="tab" aria-selected="true" style="padding: 10px 18px; font-size: 13px;">All (<?= count($gallery_items) ?>)</button>
        <button class="btn btn-s gallery-tab" data-cat="convocation" role="tab" aria-selected="false" style="padding: 10px 18px; font-size: 13px;">Convocation</button>
        <button class="btn btn-s gallery-tab" data-cat="counselling" role="tab" aria-selected="false" style="padding: 10px 18px; font-size: 13px;">Counselling</button>
        <button class="btn btn-s gallery-tab" data-cat="academic" role="tab" aria-selected="false" style="padding: 10px 18px; font-size: 13px;">Academic Life</button>
        <button class="btn btn-s gallery-tab" data-cat="workshops" role="tab" aria-selected="false" style="padding: 10px 18px; font-size: 13px;">Workshops & Drives</button>
      </div>
      <p class="mono" style="color: var(--muted); font-size: 13px;" id="gallery-count-label">Showing <?= count($gallery_items) ?> moments</p>
    </div>

    <!-- Gallery Grid -->
    <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px;" id="gallery-grid">
      <?php foreach ($gallery_items as $item): ?>
      <article class="gallery-card" data-category="<?= htmlspecialchars($item['category']) ?>" style="background: var(--offwhite); border: 1px solid var(--hairline); border-radius: 8px; overflow: hidden; display: flex; flex-direction: column;">
        <div class="ph zoom gallery-trigger" style="height: 260px; cursor: pointer; position: relative;" data-full="<?= BASE_URL . $item['src'] ?>" data-title="<?= htmlspecialchars($item['title']) ?>" data-desc="<?= htmlspecialchars($item['desc']) ?>" data-tag="<?= htmlspecialchars($item['category_name']) ?>" role="button" tabindex="0" aria-label="View photo: <?= htmlspecialchars($item['title']) ?>">
          <img src="<?= BASE_URL . $item['src'] ?>" alt="<?= htmlspecialchars($item['title']) ?>" class="ph-img" loading="lazy">
          <span style="position: absolute; left: 12px; bottom: 12px; background: var(--offwhite); color: var(--navy); font-size: 11px; padding: 4px 8px; border-radius: 4px; z-index: 2; font-family: monospace;"><?= htmlspecialchars($item['category_name']) ?></span>
          <span class="xp"><svg class="ic" viewBox="0 0 24 24"><path d="m15 15 6 6"></path><path d="m15 9 6-6"></path><path d="M21 16v5h-5"></path><path d="M21 8V3h-5"></path><path d="M3 16v5h5"></path><path d="m3 21 6-6"></path><path d="M3 8V3h5"></path><path d="M9 9 3 3"></path></svg></span>
        </div>
        <div style="padding: 24px; display: flex; flex-direction: column; gap: 8px; flex: 1;">
          <p class="mono" style="color: var(--orange); font-size: 11px; text-transform: uppercase; letter-spacing: 0.1em;"><?= htmlspecialchars($item['category_name']) ?></p>
          <h3 style="font-family: 'Nunito', sans-serif; font-size: 18px; font-weight: 800; color: var(--navy); line-height: 1.35; margin: 0;"><?= htmlspecialchars($item['title']) ?></h3>
          <p style="font-size: 14px; color: var(--body); line-height: 1.5; margin: 0; flex: 1;"><?= htmlspecialchars($item['desc']) ?></p>
          <div style="margin-top: 12px; padding-top: 12px; border-top: 1px solid var(--hairline);">
            <button type="button" class="tl gallery-trigger" style="background: none; border: none; padding: 0; cursor: pointer;" data-full="<?= BASE_URL . $item['src'] ?>" data-title="<?= htmlspecialchars($item['title']) ?>" data-desc="<?= htmlspecialchars($item['desc']) ?>" data-tag="<?= htmlspecialchars($item['category_name']) ?>">
              Enlarge Photo
              <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
            </button>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- LIGHTBOX MODAL -->
<div id="gallery-lightbox" style="position: fixed; inset: 0; background: rgba(14, 17, 34, 0.96); z-index: 99999; display: none; align-items: center; justify-content: center; padding: 24px; backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);" role="dialog" aria-modal="true" aria-label="Photo View">
  <div style="position: relative; max-width: 980px; width: 100%; background: var(--navy); border: 1px solid rgba(255, 255, 255, 0.18); border-radius: 8px; box-shadow: 0 28px 60px rgba(0,0,0,0.6); overflow: hidden;">
    <!-- Close button -->
    <button type="button" id="lightbox-close" aria-label="Close modal" style="position: absolute; top: 16px; right: 16px; width: 44px; height: 44px; background: rgba(0,0,0,0.65); border: 1px solid rgba(255,255,255,0.25); border-radius: 6px; color: var(--offwhite); display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 20; transition: background 0.2s;">
      <svg class="ic" viewBox="0 0 24 24" style="width: 22px; height: 22px;"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
    </button>

    <!-- Modal image view with Prev/Next buttons -->
    <div style="height: 520px; width: 100%; background: #0a0d18; display: flex; align-items: center; justify-content: center; position: relative;">
      <button type="button" id="lightbox-prev" aria-label="Previous photo" style="position: absolute; left: 16px; width: 44px; height: 44px; background: rgba(0,0,0,0.6); border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; color: var(--offwhite); display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 10;">
        <svg class="ic" viewBox="0 0 24 24" style="width: 22px; height: 22px;"><path d="m15 18-6-6 6-6"></path></svg>
      </button>

      <img id="lightbox-img" src="" alt="Enlarged gallery photo" style="max-height: 100%; max-width: 100%; object-fit: contain; padding: 12px; transition: transform 0.2s ease;">

      <button type="button" id="lightbox-next" aria-label="Next photo" style="position: absolute; right: 16px; width: 44px; height: 44px; background: rgba(0,0,0,0.6); border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; color: var(--offwhite); display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 10;">
        <svg class="ic" viewBox="0 0 24 24" style="width: 22px; height: 22px;"><path d="m9 18 6-6-6-6"></path></svg>
      </button>
    </div>

    <!-- Modal caption footer -->
    <div style="padding: 22px 30px; background: var(--navy); border-top: 1px solid rgba(255, 255, 255, 0.08); display: flex; justify-content: space-between; align-items: center; gap: 24px; flex-wrap: wrap;">
      <div style="flex: 1; min-width: 260px;">
        <p id="lightbox-tag" class="mono" style="color: var(--orange); font-size: 11px; margin: 0 0 6px 0; text-transform: uppercase; letter-spacing: 0.08em;"></p>
        <h4 id="lightbox-title" style="font-family: 'Nunito', sans-serif; font-size: 20px; font-weight: 800; color: var(--offwhite); margin: 0 0 6px 0;"></h4>
        <p id="lightbox-desc" style="font-size: 14px; color: var(--muted-dk); margin: 0; line-height: 1.45;"></p>
      </div>
      <a href="<?= BASE_URL ?>contact.php" class="btn btn-p" style="flex-shrink: 0; border-radius: 6px;">
        <span>Enquire Program</span>
        <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
      </a>
    </div>
  </div>
</div>

<!-- 4. LOCKED CTA -->
<?php require_once __DIR__ . '/includes/cta.php'; ?>

<!-- 5. LOCKED FOOTER -->
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<style>
@media (max-width: 1199px) {
  #gallery-proof-stats {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #gallery-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #lightbox-img {
    max-height: 400px;
  }
}

@media (max-width: 767px) {
  #gallery-proof-stats {
    grid-template-columns: 1fr !important;
  }
  #gallery-grid {
    grid-template-columns: 1fr !important;
  }
  #gallery-filters {
    width: 100%;
  }
  #gallery-filters button {
    flex: 1 1 calc(50% - 8px);
    text-align: center;
    justify-content: center;
  }
  #lightbox-img {
    max-height: 280px;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Gallery category filtering
  const tabs = document.querySelectorAll('.gallery-tab');
  const cards = document.querySelectorAll('.gallery-card');
  const countLabel = document.getElementById('gallery-count-label');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => {
        t.classList.remove('on');
        t.setAttribute('aria-selected', 'false');
      });
      tab.classList.add('on');
      tab.setAttribute('aria-selected', 'true');

      const cat = tab.getAttribute('data-cat');
      let visible = 0;

      cards.forEach(card => {
        if (cat === 'all' || card.getAttribute('data-category') === cat) {
          card.style.display = 'flex';
          visible++;
        } else {
          card.style.display = 'none';
        }
      });

      if (countLabel) {
        countLabel.textContent = `Showing ${visible} moment${visible === 1 ? '' : 's'}`;
      }
    });
  });

  // Lightbox Modal
  const modal = document.getElementById('gallery-lightbox');
  const modalImg = document.getElementById('lightbox-img');
  const modalTitle = document.getElementById('lightbox-title');
  const modalDesc = document.getElementById('lightbox-desc');
  const modalTag = document.getElementById('lightbox-tag');
  const modalClose = document.getElementById('lightbox-close');
  const btnPrev = document.getElementById('lightbox-prev');
  const btnNext = document.getElementById('lightbox-next');

  let currentActiveIndex = 0;

  function getVisibleTriggers() {
    return Array.from(document.querySelectorAll('.gallery-card'))
      .filter(card => card.style.display !== 'none')
      .map(card => card.querySelector('.gallery-trigger'))
      .filter(Boolean);
  }

  function openLightbox(full, title, desc, tag) {
    if (!modal) return;
    if (modalImg) {
      modalImg.src = full;
      modalImg.alt = title || 'Gallery Image';
    }
    if (modalTitle) modalTitle.textContent = title || '';
    if (modalDesc) modalDesc.textContent = desc || '';
    if (modalTag) modalTag.textContent = tag ? `Photo · ${tag}` : 'Photo';
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    if (!modal) return;
    modal.style.display = 'none';
    document.body.style.overflow = '';
  }

  function showByIndex(idx) {
    const triggers = getVisibleTriggers();
    if (!triggers.length) return;
    if (idx < 0) idx = triggers.length - 1;
    if (idx >= triggers.length) idx = 0;
    currentActiveIndex = idx;
    const el = triggers[currentActiveIndex];
    openLightbox(
      el.getAttribute('data-full'),
      el.getAttribute('data-title'),
      el.getAttribute('data-desc'),
      el.getAttribute('data-tag')
    );
  }

  // Bind to cards and triggers
  cards.forEach((card) => {
    const trigger = card.querySelector('.gallery-trigger');
    if (!trigger) return;

    card.style.cursor = 'pointer';
    card.addEventListener('click', (e) => {
      // Don't intercept if clicking an external action
      if (e.target.closest('a') && !e.target.closest('.gallery-trigger')) return;
      e.preventDefault();
      const triggers = getVisibleTriggers();
      currentActiveIndex = triggers.indexOf(trigger);
      openLightbox(
        trigger.getAttribute('data-full'),
        trigger.getAttribute('data-title'),
        trigger.getAttribute('data-desc'),
        trigger.getAttribute('data-tag')
      );
    });

    trigger.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        trigger.click();
      }
    });
  });

  if (btnPrev) {
    btnPrev.addEventListener('click', (e) => {
      e.stopPropagation();
      showByIndex(currentActiveIndex - 1);
    });
  }

  if (btnNext) {
    btnNext.addEventListener('click', (e) => {
      e.stopPropagation();
      showByIndex(currentActiveIndex + 1);
    });
  }

  if (modalClose) {
    modalClose.addEventListener('click', (e) => {
      e.stopPropagation();
      closeLightbox();
    });
  }

  if (modal) {
    modal.addEventListener('click', (e) => {
      if (e.target === modal) {
        closeLightbox();
      }
    });
  }

  document.addEventListener('keydown', (e) => {
    if (!modal || modal.style.display !== 'flex') return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowLeft') showByIndex(currentActiveIndex - 1);
    if (e.key === 'ArrowRight') showByIndex(currentActiveIndex + 1);
  });
});
</script>
