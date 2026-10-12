<?php
$current_page = 'placement';
$page_title = 'Partnership & Placement Program | Career Support';
$page_desc = 'Explore eShikshaHub\'s dedicated placement cell offering resume reviews, mock interviews, campus drives, and 10+ global hiring partners.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- 1. HERO SECTION -->
<section style="position: relative; height: 540px; display: flex; align-items: flex-end;">
  <div class="ph" style="position: absolute; inset: 0;">
    <img src="<?= BASE_URL ?>assets/img/stock/interview-handshake.jpg" alt="Graduate shaking hands at job interview" class="ph-img" style="opacity: 0.5; object-position: center 30%;">
  </div>
  <div class="ov"></div>

  <div class="container" style="position: relative; z-index: 5; padding-bottom: 88px;">
    <div class="head" style="max-width: 640px; gap: 20px;">
      <nav aria-label="Breadcrumb" class="mono" style="display: flex; gap: 10px; color: var(--muted-dk);">
        <a href="<?= BASE_URL ?>index.php" style="color: var(--muted-dk);">Home</a>
        <span aria-hidden="true">/</span>
        <span style="color: var(--offwhite);">Placement</span>
      </nav>
      <h1 class="h1">Partnership &amp; Placement Program</h1>
      <p class="lead pdk">Your degree is complete only when it leads to a career.</p>
      <div style="margin-top: 8px;">
        <a class="btn btn-p" href="<?= BASE_URL ?>contact.php">
          <span>Talk to Us</span>
          <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- 2. STATS BAND (Floating White Card) -->
<section aria-label="Placement stats" class="floating-stats-band" style="position: relative; z-index: 20; margin-top: -56px; margin-bottom: 24px;">
  <div class="container">
    <div class="stats floating-card" style="grid-template-columns: repeat(4, minmax(0, 1fr)); background: var(--white); border: 1px solid var(--hairline); border-top: 3px solid var(--orange); border-radius: 8px; box-shadow: 0 18px 42px rgba(24, 29, 56, 0.14); overflow: hidden;" id="placement-stats-row">
      <div class="stat" style="background: var(--white); padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4M10 10h4M10 14h4M10 18h4"></path></svg></span>
        <p class="stat-l">Hiring Partners</p>
        <p class="stat-v"><span class="count-up" data-count="10">10</span>+<small>companies</small></p>
        <p class="stat-h">Hiring from our network</p>
      </div>

      <div class="stat" style="background: var(--white); padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg></span>
        <p class="stat-l">Students Placed</p>
        <p class="stat-v"><span class="count-up" data-count="100">100</span>+<small>learners</small></p>
        <p class="stat-h">Now in new roles</p>
      </div>

      <div class="stat" style="background: var(--white); padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg></span>
        <p class="stat-l">Placement Rate</p>
        <p class="stat-v"><span class="count-up" data-count="95">95</span><small>%</small></p>
        <p class="stat-h">Of our placement learners</p>
      </div>

      <div class="stat" style="background: var(--white); padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path><path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path></svg></span>
        <p class="stat-l">Average Package</p>
        <p class="stat-v">₹3–8<small>LPA</small></p>
        <p class="stat-h">Typical salary range</p>
      </div>
    </div>
  </div>
</section>

<!-- 3. THE PROGRAM SECTION -->
<section class="sec" style="background: var(--white); padding-top: 48px;" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 5fr 7fr; gap: 96px; align-items: start;" id="placement-prog-grid">
    <div class="head" style="gap: 18px;">
      <p class="lbl">The Program</p>
      <h2 class="h2">Bridging Talent with Opportunity</h2>
      <p class="lead">We train you to match what employers actually hire for.</p>
      <div class="ph" style="height: 300px; margin-top: 24px; position: relative;">
        <img src="<?= BASE_URL ?>assets/img/stock/resume-workshop.jpg" alt="Resume workshop" class="ph-img">
      </div>
    </div>

    <!-- Numbered Program Steps -->
    <ol style="list-style: none; margin: 0; padding: 0; border-top: 2px solid var(--navy);">
      <li style="display: grid; grid-template-columns: 64px 1fr auto; gap: 20px; align-items: center; padding: 28px 0; border-bottom: 1px solid var(--hairline);">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M3 22h18"></path><path d="M6 18v-7"></path><path d="M10 18v-7"></path><path d="M14 18v-7"></path><path d="M18 18v-7"></path><path d="m12 2 8 5H4z"></path></svg></span>
        <h3 class="h3" style="font-size: 22px;">Dedicated Placement Cell</h3>
        <span class="mono">01</span>
      </li>
      <li style="display: grid; grid-template-columns: 64px 1fr auto; gap: 20px; align-items: center; padding: 28px 0; border-bottom: 1px solid var(--hairline);">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8M16 13H8M16 17H8"></path></svg></span>
        <h3 class="h3" style="font-size: 22px;">Resume &amp; Interview Training</h3>
        <span class="mono">02</span>
      </li>
      <li style="display: grid; grid-template-columns: 64px 1fr auto; gap: 20px; align-items: center; padding: 28px 0; border-bottom: 1px solid var(--hairline);">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><path d="M12 19v3"></path></svg></span>
        <h3 class="h3" style="font-size: 22px;">Live Mock Interviews</h3>
        <span class="mono">03</span>
      </li>
      <li style="display: grid; grid-template-columns: 64px 1fr auto; gap: 20px; align-items: center; padding: 28px 0; border-bottom: 1px solid var(--hairline);">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4M8 2v4M3 10h18"></path></svg></span>
        <h3 class="h3" style="font-size: 22px;">Campus Drives &amp; Job Fairs</h3>
        <span class="mono">04</span>
      </li>
      <li style="display: grid; grid-template-columns: 64px 1fr auto; gap: 20px; align-items: center; padding: 28px 0; border-bottom: 1px solid var(--hairline);">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><rect x="16" y="16" width="6" height="6" rx="1"></rect><rect x="2" y="16" width="6" height="6" rx="1"></rect><rect x="9" y="2" width="6" height="6" rx="1"></rect><path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"></path><path d="M12 12V8"></path></svg></span>
        <h3 class="h3" style="font-size: 22px;">Lifetime Alumni Network</h3>
        <span class="mono">05</span>
      </li>
    </ol>
  </div>
  </div>
</section>

<!-- 4. PROCESS TIMELINE SECTION -->
<section class="sec" style="background: var(--offwhite);" data-reveal>
  <div class="container">
    <div class="head" style="margin-bottom: 64px;">
    <p class="lbl">Process</p>
    <h2 class="h2">How Placement Works</h2>
  </div>

  <div style="position: relative;" id="placement-timeline-wrap">
    <!-- Connecting Line -->
    <div style="position: absolute; left: 0; right: 0; top: 23px; height: 2px; background: var(--hairline);"></div>
    <div style="position: absolute; left: 0; width: 60%; top: 23px; height: 2px; background: var(--orange);" id="timeline-progress-bar"></div>

    <ol style="position: relative; list-style: none; margin: 0; padding: 0; display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 32px;" id="timeline-nodes">
      <li style="display: flex; flex-direction: column; gap: 22px;">
        <span style="width: 48px; height: 48px; background: var(--orange); color: var(--white); display: flex; align-items: center; justify-content: center;">
          <svg class="ic" viewBox="0 0 24 24"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path></svg>
        </span>
        <span class="num or" style="font-size: 56px;">01</span>
        <h3 class="h3">Enroll &amp; Learn</h3>
      </li>

      <li style="display: flex; flex-direction: column; gap: 22px;">
        <span style="width: 48px; height: 48px; background: var(--orange); color: var(--white); display: flex; align-items: center; justify-content: center;">
          <svg class="ic" viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
        </span>
        <span class="num or" style="font-size: 56px;">02</span>
        <h3 class="h3">Skill Building</h3>
      </li>

      <li style="display: flex; flex-direction: column; gap: 22px;">
        <span style="width: 48px; height: 48px; background: var(--orange); color: var(--white); display: flex; align-items: center; justify-content: center;">
          <svg class="ic" viewBox="0 0 24 24"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path></svg>
        </span>
        <span class="num or" style="font-size: 56px;">03</span>
        <h3 class="h3">Resume &amp; Profile</h3>
      </li>

      <li style="display: flex; flex-direction: column; gap: 22px;">
        <span style="width: 48px; height: 48px; background: var(--white); border: 1.5px solid var(--navy); color: var(--navy); display: flex; align-items: center; justify-content: center;">
          <svg class="ic" viewBox="0 0 24 24"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path></svg>
        </span>
        <span class="num" style="font-size: 56px;">04</span>
        <h3 class="h3">Mock Interviews</h3>
      </li>

      <li style="display: flex; flex-direction: column; gap: 22px;">
        <span style="width: 48px; height: 48px; background: var(--white); border: 1.5px solid var(--navy); color: var(--navy); display: flex; align-items: center; justify-content: center;">
          <svg class="ic" viewBox="0 0 24 24"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect x="2" y="6" width="20" height="14" rx="2"></rect></svg>
        </span>
        <span class="num" style="font-size: 56px;">05</span>
        <h3 class="h3">Get Placed</h3>
      </li>
    </ol>
  </div>
  </div>
</section>

<!-- 5. BENEFITS SECTION -->
<section class="sec" style="background: var(--white);" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 4fr 8fr; gap: 64px; align-items: stretch;" id="placement-benefits-grid">
    <div style="display: flex; flex-direction: column; gap: 32px;">
      <div class="head">
        <p class="lbl">Benefits</p>
        <h2 class="h2">What You Get</h2>
      </div>
      <div class="ph" style="flex: 1; min-height: 420px; position: relative;">
        <img src="<?= BASE_URL ?>assets/img/stock/mock-interview.jpg" alt="Student in a mock interview" class="ph-img">
      </div>
    </div>

    <!-- 6 .wt Tiles -->
    <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 16px;" id="placement-benefits-tiles">
      <div class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="m16.24 7.76-2.12 6.36-6.36 2.12 2.12-6.36z"></path></svg></span>
        <p class="wn">01</p>
        <h3>Career Counselling</h3>
        <p>1-on-1 mapped domain guidance from hiring specialists.</p>
      </div>
      <div class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path></svg></span>
        <p class="wn">02</p>
        <h3>Resume Building</h3>
        <p>ATS-optimized professional portfolio &amp; LinkedIn profile curation.</p>
      </div>
      <div class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path></svg></span>
        <p class="wn">03</p>
        <h3>Mock Interviews</h3>
        <p>Technical &amp; HR mock sessions with corporate panel feedback.</p>
      </div>
      <div class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4M8 2v4M3 10h18"></path></svg></span>
        <p class="wn">04</p>
        <h3>Campus Drives</h3>
        <p>Exclusive hiring drives with fast-track screening rounds.</p>
      </div>
      <div class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M2 3h20"></path><path d="M21 3v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3"></path><path d="m7 21 5-5 5 5"></path></svg></span>
        <p class="wn">05</p>
        <h3>Skill Workshops</h3>
        <p>Soft skills, communication mastery, and aptitude bootcamps.</p>
      </div>
      <div class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg></span>
        <p class="wn">06</p>
        <h3>Alumni Network</h3>
        <p>Lifetime access to peer referrals in prominent tech &amp; business firms.</p>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- 6. HIRING NETWORK SECTION (19 Cells + 1 Join cell) -->
<section class="sec" style="background: var(--offwhite);" data-reveal>
  <div class="container">
    <div class="head" style="margin-bottom: 48px;">
      <p class="lbl">Hiring Partners</p>
      <h2 class="h2">Our Hiring Network</h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); grid-auto-rows: 112px; gap: 1px; background: var(--hairline); border: 1px solid var(--hairline); border-radius: 8px; overflow: hidden;" id="placement-network-grid">
      <?php 
      $all_partners = array_merge($HIRING_ROW1, $HIRING_ROW2);
      // Take 19 partners
      $grid_partners = array_slice($all_partners, 0, 19);
      foreach ($grid_partners as $p): 
      ?>
        <div class="lg">
          <?php if (!empty($p['logo']) && file_exists(__DIR__ . '/' . $p['logo'])): ?>
            <img src="<?= BASE_URL . $p['logo'] ?>" alt="<?= htmlspecialchars($p['name']) ?>" class="lg-img" style="max-height: 36px;">
          <?php else: ?>
            <svg class="ic mk" viewBox="0 0 32 32"><rect x="4" y="4" width="24" height="24"></rect><path d="M16 9l7 7-7 7-7-7z"></path></svg>
          <?php endif; ?>
          <span><?= htmlspecialchars($p['name']) ?></span>
        </div>
      <?php endforeach; ?>

      <!-- 20th Cell: For Employers / Join This List -->
      <a href="#employers" style="background: var(--navy); color: var(--offwhite); display: flex; flex-direction: column; justify-content: center; gap: 8px; padding: 0 24px; box-shadow: inset 0 2px 0 var(--orange); text-decoration: none;">
        <span class="mono" style="color: var(--muted-dk);">For Employers</span>
        <span style="display: flex; align-items: center; gap: 8px; font: 700 17px 'Nunito', sans-serif;">
          Join This List
          <svg class="ic" viewBox="0 0 24 24" style="width: 18px; height: 18px;"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
        </span>
      </a>
    </div>
  </div>
</section>

<!-- 7. FOR EMPLOYERS SECTION -->
<section id="employers" class="sec" style="background: var(--tint);" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 7fr 5fr; gap: 48px; align-items: center;" id="placement-employers-split">
      <div class="head" style="padding: 24px 0; gap: 18px; justify-content: center;">
        <p class="lbl">For Employers</p>
        <h2 class="h2">Hire Our Graduates</h2>
        <p class="lead">Partner with eShikshaHub to hire verified, degree-qualified, job-ready talent across management and technology.</p>
        <div style="margin-top: 12px;">
          <a class="btn btn-p" href="<?= BASE_URL ?>contact.php?topic=partner" style="border-radius: 8px;">
            <span>Become a Hiring Partner</span>
            <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
          </a>
        </div>
      </div>
      <div class="ph" style="min-height: 420px; position: relative; border-radius: 8px;">
        <img src="<?= BASE_URL ?>assets/img/stock/recruiters-drive.jpg" alt="Recruiters at campus drive" class="ph-img" style="border-radius: 8px;">
      </div>
    </div>
  </div>
</section>

<!-- 8. LOCKED CTA -->
<?php 
$cta_heading = 'Start Your Career Journey';
$cta_sub = 'Get matched with recognized degrees and dedicated job interview training.';
require __DIR__ . '/includes/cta.php'; 
?>

<!-- 9. LOCKED FOOTER -->
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<style>
@media (max-width: 1199px) {
  #placement-stats-row {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #placement-prog-grid {
    grid-template-columns: 1fr !important;
  }
  #placement-benefits-grid {
    grid-template-columns: 1fr !important;
  }
  #placement-benefits-tiles {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #placement-network-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
  }
  #placement-employers-split {
    grid-template-columns: 1fr !important;
  }
}
@media (max-width: 767px) {
  #placement-stats-row {
    grid-template-columns: 1fr !important;
  }
  #timeline-nodes {
    grid-template-columns: 1fr !important;
  }
  #placement-timeline-wrap > div:first-child,
  #timeline-progress-bar {
    display: none !important;
  }
  #placement-benefits-tiles {
    grid-template-columns: 1fr !important;
  }
  #placement-network-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
}
</style>
