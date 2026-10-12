<?php
$current_page = 'courses';
$page_title = 'Explore All Courses | UGC-Approved UG & PG Degrees';
$page_desc = 'Explore 10 UGC-approved online degrees across UG and PG: MBA, MCA, BCA, BBA, BCom, MCom, MA, MSc, MAJMC, BA from top Indian partner universities.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- 1. COMPACT HERO SECTION -->
<section style="position: relative; min-height: 500px; display: flex; align-items: flex-end;">
  <div class="ph" style="position: absolute; inset: 0;">
    <img src="<?= BASE_URL ?>assets/img/stock/online-class.jpg" alt="Online class on a laptop screen" class="ph-img" style="opacity: 0.5; object-position: center 25%;">
  </div>
  <div class="ov"></div>

  <div class="container" style="position: relative; z-index: 5; padding-top: 140px; padding-bottom: 64px;">
    <div style="display: grid; grid-template-columns: 6fr 6fr; gap: 64px; align-items: end;" id="courses-hero-grid">
      <div class="head" style="gap: 18px;">
        <nav aria-label="Breadcrumb" class="mono" style="display: flex; gap: 10px; color: var(--muted-dk);">
          <a href="<?= BASE_URL ?>index.php" style="color: var(--muted-dk);">Home</a>
          <span aria-hidden="true">/</span>
          <span style="color: var(--offwhite);">All Courses</span>
        </nav>
        <h1 class="h1">Explore Our Courses</h1>
        <p class="lead pdk">10 UGC-approved online programs across UG and PG.</p>
      </div>

      <!-- Search Form -->
      <form role="search" aria-label="Search courses" onsubmit="event.preventDefault();" style="display: flex; flex-direction: column; gap: 8px;">
        <label class="mono" for="cs-q" style="color: var(--offwhite);">Search courses</label>
        <div style="display: flex;">
          <div class="fld" style="flex: 1;">
            <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
            <input id="cs-q" type="search" placeholder="Try MBA, BCA or Commerce" style="height: 52px; border-color: var(--white); border-radius: 4px 0 0 4px;">
          </div>
          <button class="btn btn-p" type="button" style="border-radius: 0 4px 4px 0;">
            <span>Search</span>
            <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- 2. STICKY FILTER BAR -->
<div style="position: sticky; top: 0; z-index: 80; background: var(--white); border-bottom: 1px solid var(--hairline); box-shadow: 0 4px 16px rgba(24, 29, 56, .05);">
  <div class="container" style="height: 80px; display: flex; align-items: center; gap: 32px; flex-wrap: wrap;">
    <!-- Level Tabs -->
    <div role="tablist" aria-label="Level filters" style="display: flex;">
      <button class="tab on" role="tab" aria-selected="true" data-filter-tab="all">All</button>
      <button class="tab" role="tab" aria-selected="false" data-filter-tab="ug">UG</button>
      <button class="tab" role="tab" aria-selected="false" data-filter-tab="pg">PG</button>
    </div>

    <span style="width: 1px; height: 32px; background: var(--hairline); display: inline-block;"></span>

    <!-- Duration Chips -->
    <div style="display: flex; align-items: center; gap: 12px;">
      <span class="mono" style="color: var(--body);">Duration</span>
      <button class="tab" aria-pressed="false" data-filter-duration="2 yrs">2 Yrs</button>
      <button class="tab" aria-pressed="false" data-filter-duration="3 yrs">3 Yrs</button>
    </div>

    <!-- Showing indicator -->
    <span class="mono" style="margin-left: auto; color: var(--navy);" data-course-count>Showing 10 programs</span>
  </div>
</div>

<!-- 3. COURSE GRID SECTION -->
<section style="background: var(--offwhite); padding: 56px 0 96px;" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px;" id="all-courses-cards-grid">
      <?php foreach ($ALL_COURSES as $slug => $c): ?>
        <article class="lift" 
                 id="<?= strtolower($c['abbr']) ?>"
                 style="background: var(--white); border: 1px solid var(--hairline); padding: 28px; display: flex; flex-direction: column; gap: 12px; position: relative;" 
                 data-course-card 
                 data-level="<?= strtolower($c['level']) ?>" 
                 data-title="<?= htmlspecialchars($c['name']) ?>" 
                 data-abbr="<?= htmlspecialchars($c['abbr']) ?>"
                 data-duration="<?= htmlspecialchars($c['duration']) ?>">
          
          <!-- Top Row: Badge + Duration -->
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <span class="mono" style="background: <?= $c['level'] === 'UG' ? 'var(--navy)' : 'var(--tint)' ?>; color: <?= $c['level'] === 'UG' ? 'var(--offwhite)' : 'var(--orange-dark)' ?>; padding: 6px 10px;">
              <?= $c['level'] ?>
            </span>
            <span class="mono" style="display: flex; gap: 6px; align-items: center; color: var(--body);">
              <svg class="ic" viewBox="0 0 24 24" aria-hidden="true" style="width: 16px; height: 16px; color: var(--orange);"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
              <?= $c['duration'] ?>
            </span>
          </div>

          <!-- Big Numeral Abbreviation -->
          <div class="num" style="font-size: 56px; margin-top: 16px;"><?= $c['abbr'] ?></div>

          <!-- Full Name -->
          <h3 class="h3" style="min-height: 52px;"><?= $c['name'] ?></h3>
          <p style="font-size: 14px; color: var(--body); margin-bottom: 8px;"><?= $c['desc'] ?></p>

          <!-- Action Buttons -->
          <div style="display: flex; align-items: center; justify-content: space-between; margin-top: auto; padding-top: 20px; border-top: 1px solid var(--hairline);">
            <a class="btn btn-p" href="<?= BASE_URL ?>contact.php?course=<?= urlencode($c['abbr']) ?>" style="height: 44px; font-size: 15px;">
              <span style="padding: 0 16px;">Apply Now</span>
              <i style="width: 44px;"><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
            </a>
            <a class="tl nv" href="<?= BASE_URL . $c['slug'] ?>">
              View Details
              <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
            </a>
          </div>
        </article>
      <?php endforeach; ?>

      <!-- 3b. HELP STRIP (spans 2 cells on desktop) -->
      <div style="grid-column: span 2; background: var(--navy); padding: 40px 44px; display: grid; grid-template-columns: 1fr auto; gap: 32px; align-items: center;" id="courses-help-strip">
        <div class="head" style="gap: 12px;">
          <p class="lbl dk">Need Help?</p>
          <h2 class="h2 w" style="font-size: 32px;">Can't Decide? Ask Us</h2>
          <p class="lead pdk">Free counselling to match your career goals, budget and preferred university.</p>
        </div>
        <div style="display: flex; flex-direction: column; gap: 12px;">
          <a class="btn btn-p" href="<?= BASE_URL ?>contact.php">
            <span>Get Free Counselling</span>
            <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
          </a>
          <a class="btn btn-w" href="<?= WHATSAPP_LINK ?>" target="_blank" rel="noopener">
            <span>
              <svg class="ic" viewBox="0 0 24 24"><path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"></path><path d="M9 9.5c0 3 2.5 5.5 5.5 5.5l1.5-1.5-2-1-1 1c-1 0-2.5-1.5-2.5-2.5l1-1-1-2z"></path></svg>
              Chat on WhatsApp
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4. UNIVERSITIES GRID -->
<?php require_once __DIR__ . '/includes/universities-grid.php'; ?>

<!-- 5. LOCKED CTA -->
<?php require_once __DIR__ . '/includes/cta.php'; ?>

<!-- 6. LOCKED FOOTER -->
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<style>
@media (max-width: 1199px) {
  #courses-hero-grid {
    grid-template-columns: 1fr !important;
    gap: 32px !important;
  }
  #all-courses-cards-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #courses-help-strip {
    grid-column: span 2 !important;
  }
}

@media (max-width: 767px) {
  #all-courses-cards-grid {
    grid-template-columns: 1fr !important;
  }
  #courses-help-strip {
    grid-column: span 1 !important;
    grid-template-columns: 1fr !important;
  }
}
</style>
