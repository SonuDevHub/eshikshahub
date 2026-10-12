<?php
require_once __DIR__ . '/config.php';
$is_light_nav = !empty($light_nav);
?>
<!-- FLOATING SPLIT NAVBAR -->
<header class="site-header <?= $is_light_nav ? 'light-nav is-sticky' : '' ?>" role="banner">
  <div class="nav-bar-inner">
    <!-- Brand Logo -->
    <a href="<?= BASE_URL ?>index.php" class="brand-wordmark" aria-label="<?= SITE_NAME ?> Home">
      <img src="<?= BASE_URL ?>assets/img/logo-white.png" alt="<?= SITE_NAME ?>" class="site-logo logo-dark" width="180" height="48">
      <img src="<?= BASE_URL ?>assets/img/logo.png" alt="<?= SITE_NAME ?>" class="site-logo logo-light" width="180" height="48">
    </a>

    <!-- Desktop Floating Nav Panel -->
    <nav class="floating-nav-panel" aria-label="Main Navigation">
      <!-- Courses Dropdown Trigger -->
      <div class="courses-menu-trigger">
        <a class="nvl <?= in_array($current_page, ['courses', 'course-detail']) ? 'on active' : '' ?>" 
           href="<?= BASE_URL ?>courses.php" 
           aria-haspopup="true" 
           aria-expanded="false">
          Courses
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true" style="width: 16px; height: 16px;">
            <path d="m6 9 6 6 6-6"></path>
          </svg>
        </a>
      </div>

      <a class="nvl <?= $current_page === 'about' ? 'on active' : '' ?>" href="<?= BASE_URL ?>about.php">About</a>
      <a class="nvl <?= $current_page === 'placement' ? 'on active' : '' ?>" href="<?= BASE_URL ?>placement.php">Placement</a>
      <a class="nvl <?= $current_page === 'refer' ? 'on active' : '' ?>" href="<?= BASE_URL ?>refer-and-earn.php">Refer &amp; Earn</a>
      <a class="nvl <?= $current_page === 'gallery' ? 'on active' : '' ?>" href="<?= BASE_URL ?>gallery.php">Gallery</a>
      <a class="nvl <?= $current_page === 'contact' ? 'on active' : '' ?>" href="<?= BASE_URL ?>contact.php">Contact</a>
      
      <!-- Free Counselling Navy Cell -->
      <a href="<?= BASE_URL ?>contact.php" class="counselling-cell">Free Counselling</a>

      <!-- Mega Menu (Right-aligned to floating panel) -->
      <div class="mega-menu" role="region" aria-label="Course Programs">
        <div>
          <p class="lbl" style="margin-bottom: 12px">UG Programs</p>
          <?php foreach ($UG_COURSES as $ug_c): ?>
            <a href="<?= BASE_URL . $ug_c['slug'] ?>" class="mega-menu-item">
              <span>
                <svg class="ic" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                  <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                </svg>
                <?= $ug_c['abbr'] ?>
              </span>
              <span class="mono" style="color: var(--body); font-size: 11px;"><?= $ug_c['duration'] ?></span>
            </a>
          <?php endforeach; ?>
          <a class="tl" href="<?= BASE_URL ?>courses.php" style="margin-top: 14px">
            All Courses
            <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
          </a>
        </div>

        <div>
          <p class="lbl" style="margin-bottom: 12px">PG Programs</p>
          <div style="display: grid; grid-template-columns: 1fr 1fr; column-gap: 16px;">
            <?php foreach ($PG_COURSES as $slug => $pg_c): ?>
              <a href="<?= BASE_URL . $pg_c['slug'] ?>" class="mega-menu-item">
                <span>
                  <svg class="ic" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                  </svg>
                  <?= $pg_c['abbr'] ?>
                </span>
                <span class="mono" style="color: var(--body); font-size: 11px;"><?= $pg_c['duration'] ?></span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </nav>

    <!-- Mobile Header Trigger -->
    <div class="mobile-nav-panel" style="border-radius: 8px; overflow: hidden;">
      <button class="nvl" data-mobile-menu-toggle aria-label="Open navigation menu" style="padding: 0 14px; gap: 8px; border: 0; background: transparent; cursor: pointer;">
        Menu
        <svg class="ic" viewBox="0 0 24 24" aria-hidden="true" style="width: 18px; height: 18px;">
          <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
      <a href="tel:<?= PHONE_CLEAN ?>" aria-label="Call <?= PHONE ?>" style="width: 48px; display: flex; align-items: center; justify-content: center; background: var(--orange); color: var(--white);">
        <svg class="ic" viewBox="0 0 24 24" aria-hidden="true" style="width: 20px; height: 20px;">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
        </svg>
      </a>
    </div>
  </div>
</header>

<!-- Mobile Fullscreen Menu Drawer -->
<div class="mobile-menu-modal" role="dialog" aria-modal="true" aria-label="Mobile Navigation">
  <div style="position: relative; height: 80px; flex: none; display: flex; align-items: center; justify-content: space-between; padding: 0 20px; border-bottom: 1px solid var(--hairline); background: var(--white);">
    <a href="<?= BASE_URL ?>index.php" aria-label="<?= SITE_NAME ?> Home" style="display: flex; align-items: center; text-decoration: none;">
      <img src="<?= BASE_URL ?>assets/img/logo.png" alt="<?= SITE_NAME ?>" style="height: 40px; width: auto; object-fit: contain;">
    </a>
    <div style="display: flex; align-items: stretch; background: var(--offwhite); border-radius: 8px; overflow: hidden; height: 44px;">
      <button data-mobile-menu-close class="nvl" aria-label="Close menu" style="padding: 0 14px; gap: 8px; border: 0; background: transparent; cursor: pointer;">
        Close
        <svg class="ic" viewBox="0 0 24 24" aria-hidden="true" style="width: 18px; height: 18px;">
          <path d="M18 6 6 18"></path>
          <path d="m6 6 12 12"></path>
        </svg>
      </button>
      <a href="tel:<?= PHONE_CLEAN ?>" aria-label="Call <?= PHONE ?>" style="width: 44px; display: flex; align-items: center; justify-content: center; background: var(--orange); color: var(--white);">
        <svg class="ic" viewBox="0 0 24 24" aria-hidden="true" style="width: 18px; height: 18px;">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
        </svg>
      </a>
    </div>
  </div>

  <nav style="flex: 1; padding: 12px 20px; display: flex; flex-direction: column; overflow-y: auto;">
    <a href="<?= BASE_URL ?>index.php" style="display: flex; align-items: center; justify-content: space-between; min-height: 52px; border-bottom: 1px solid var(--hairline); font: 800 24px 'Nunito', sans-serif; color: <?= $current_page === 'home' ? 'var(--orange-dark)' : 'var(--navy)' ?>;">
      Home
      <span class="mono">01</span>
    </a>

    <div style="border-bottom: 1px solid var(--hairline); padding: 12px 0 16px;">
      <a href="<?= BASE_URL ?>courses.php" style="display: flex; align-items: center; justify-content: space-between; font: 800 24px 'Nunito', sans-serif; color: var(--navy);">
        Courses
        <span class="mono">02</span>
      </a>
      <p class="mono" style="color: var(--orange-dark); font-size: 11px; margin: 10px 0 4px;">UG Programs · 3 Yrs</p>
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 4px;">
        <a class="flink" href="<?= BASE_URL ?>course-bca.php">BCA</a>
        <a class="flink" href="<?= BASE_URL ?>course-bba.php">BBA</a>
        <a class="flink" href="<?= BASE_URL ?>course-bcom.php">BCom</a>
        <a class="flink" href="<?= BASE_URL ?>course-ba.php">BA</a>
      </div>
      <p class="mono" style="color: var(--orange-dark); font-size: 11px; margin: 12px 0 4px;">PG Programs · 2 Yrs</p>
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 4px;">
        <a class="flink" href="<?= BASE_URL ?>course-mca.php">MCA</a>
        <a class="flink" href="<?= BASE_URL ?>course-mba.php" style="font-weight: 700; color: var(--orange);">MBA</a>
        <a class="flink" href="<?= BASE_URL ?>course-mcom.php">MCom</a>
        <a class="flink" href="<?= BASE_URL ?>course-msc.php">MSc</a>
        <a class="flink" href="<?= BASE_URL ?>course-ma.php">MA</a>
        <a class="flink" href="<?= BASE_URL ?>course-majmc.php">MAJMC</a>
      </div>
    </div>

    <a href="<?= BASE_URL ?>about.php" style="display: flex; align-items: center; justify-content: space-between; min-height: 52px; border-bottom: 1px solid var(--hairline); font: 800 24px 'Nunito', sans-serif; color: <?= $current_page === 'about' ? 'var(--orange-dark)' : 'var(--navy)' ?>;">
      About
      <span class="mono">03</span>
    </a>

    <a href="<?= BASE_URL ?>placement.php" style="display: flex; align-items: center; justify-content: space-between; min-height: 52px; border-bottom: 1px solid var(--hairline); font: 800 24px 'Nunito', sans-serif; color: <?= $current_page === 'placement' ? 'var(--orange-dark)' : 'var(--navy)' ?>;">
      Placement
      <span class="mono">04</span>
    </a>

    <a href="<?= BASE_URL ?>refer-and-earn.php" style="display: flex; align-items: center; justify-content: space-between; min-height: 52px; border-bottom: 1px solid var(--hairline); font: 800 24px 'Nunito', sans-serif; color: <?= $current_page === 'refer' ? 'var(--orange-dark)' : 'var(--navy)' ?>;">
      Refer &amp; Earn
      <span class="mono">05</span>
    </a>

    <a href="<?= BASE_URL ?>gallery.php" style="display: flex; align-items: center; justify-content: space-between; min-height: 52px; border-bottom: 1px solid var(--hairline); font: 800 24px 'Nunito', sans-serif; color: <?= $current_page === 'gallery' ? 'var(--orange-dark)' : 'var(--navy)' ?>;">
      Gallery
      <span class="mono">06</span>
    </a>

    <a href="<?= BASE_URL ?>contact.php" style="display: flex; align-items: center; justify-content: space-between; min-height: 52px; font: 800 24px 'Nunito', sans-serif; color: <?= $current_page === 'contact' ? 'var(--orange-dark)' : 'var(--navy)' ?>;">
      Contact
      <span class="mono">07</span>
    </a>
  </nav>

  <div style="padding: 16px 20px 24px; display: flex; flex-direction: column; gap: 10px; border-top: 1px solid var(--hairline); background: var(--white);">
    <a class="btn btn-p full" href="<?= BASE_URL ?>contact.php">
      <span>Get Free Counselling</span>
      <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
    </a>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
      <a class="btn btn-s full" href="tel:<?= PHONE_CLEAN ?>">
        <span>
          <svg class="ic" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          Call
        </span>
      </a>
      <a class="btn btn-w full" href="<?= WHATSAPP_LINK ?>" target="_blank" rel="noopener">
        <span>
          <svg class="ic" viewBox="0 0 24 24"><path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"></path><path d="M9 9.5c0 3 2.5 5.5 5.5 5.5l1.5-1.5-2-1-1 1c-1 0-2.5-1.5-2.5-2.5l1-1-1-2z"></path></svg>
          WhatsApp
        </span>
      </a>
    </div>
  </div>
</div>
