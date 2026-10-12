<?php
$current_page = 'home';
$page_title = 'Best Online Learning Platform in India | UGC Approved Courses';
$page_desc = 'eShikshaHub provides UGC-approved online degree programs (MBA, MCA, BCA, BBA) from top partner universities with 100% placement support and flexible payments.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- 1. HERO SECTION -->
<section class="hero-section" style="position: relative; min-height: 860px; display: flex; flex-direction: column;">
  <!-- Hero Photo with 65% Navy Overlay -->
  <div class="ph" style="position: absolute; inset: 0;">
    <img src="<?= BASE_URL ?>assets/img/stock/hero-student.jpg" alt="Indian student studying on a laptop" class="ph-img" style="opacity: 0.55; object-position: center 20%;">
  </div>
  <div class="ov65"></div>

  <!-- Hero Content Grid -->
  <div class="container" style="position: relative; flex: 1; padding-top: 150px; padding-bottom: 64px; display: grid; grid-template-columns: 7fr 5fr; gap: 48px; align-items: center;" id="home-hero-grid">
    <!-- Left: Headline & Buttons -->
    <div class="head" style="gap: 22px; max-width: 620px;">
      <p class="lbl dk">UGC-Approved Online Degrees</p>
      <h1 class="h1">Best Online Learning Platform</h1>
      <p class="lead pdk">UGC-approved degrees from top universities. Learn anytime, anywhere.</p>
      <div style="display: flex; gap: 14px; margin-top: 12px; flex-wrap: wrap;">
        <a class="btn btn-p" href="<?= BASE_URL ?>contact.php">
          <span>Get Free Counselling</span>
          <i><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
        </a>
        <a class="btn btn-s dk" href="<?= BASE_URL ?>courses.php">
          <span>Explore Courses</span>
          <i><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
        </a>
      </div>
    </div>

    <!-- Right: Quick Enquiry Form Card -->
    <form class="ajax-form" aria-label="Quick enquiry" style="justify-self: end; width: 100%; max-width: 440px; background: var(--offwhite); padding: 32px; display: flex; flex-direction: column; gap: 14px; border: 1px solid var(--hairline);">
      <input type="hidden" name="source" value="Hero Quick Enquiry">
      <p class="lbl" style="margin-bottom: 4px;">Quick Enquiry</p>
      <div>
        <label class="fl-l" for="h-name">Name</label>
        <div class="fld">
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="5"></circle><path d="M20 21a8 8 0 0 0-16 0"></path></svg>
          <input id="h-name" name="name" type="text" placeholder="Your full name" required>
        </div>
      </div>
      <div>
        <label class="fl-l" for="h-mob">Mobile</label>
        <div class="fld">
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <input id="h-mob" name="mobile" type="tel" placeholder="10-digit mobile" required>
        </div>
      </div>
      <div>
        <label class="fl-l" for="h-course">Course</label>
        <div class="fld">
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg>
          <select id="h-course" name="course">
            <option value="">Select Course</option>
            <option value="MBA">MBA (Master of Business Administration)</option>
            <option value="BCA">BCA (Bachelor of Computer Applications)</option>
            <option value="MCA">MCA (Master of Computer Applications)</option>
            <option value="BBA">BBA (Bachelor of Business Administration)</option>
            <option value="BCom">BCom (Bachelor of Commerce)</option>
            <option value="MCom">MCom (Master of Commerce)</option>
            <option value="MSc">MSc (Master of Science)</option>
            <option value="MA">MA (Master of Arts)</option>
            <option value="BA">BA (Bachelor of Arts)</option>
            <option value="MAJMC">MAJMC (Journalism &amp; Mass Comm)</option>
          </select>
          <svg class="ic chev" viewBox="0 0 24 24" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
        </div>
      </div>
      <div>
        <label class="fl-l" for="h-uni">University</label>
        <div class="fld">
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4M10 10h4M10 14h4M10 18h4"></path></svg>
          <select id="h-uni" name="university">
            <option value="">Select University</option>
            <option value="Amity Online">Amity Online</option>
            <option value="Chandigarh University">Chandigarh University</option>
            <option value="Jamia Millia Islamia">Jamia Millia Islamia</option>
            <option value="LPU Online">LPU Online</option>
            <option value="Manipal University Jaipur">Manipal University Jaipur</option>
            <option value="MIT-WPU">MIT-WPU</option>
            <option value="Parul University">Parul University</option>
            <option value="Sharda University">Sharda University</option>
            <option value="Sikkim Manipal">Sikkim Manipal</option>
            <option value="SRM University">SRM University</option>
            <option value="UPES">UPES</option>
            <option value="Uttaranchal University">Uttaranchal University</option>
          </select>
          <svg class="ic chev" viewBox="0 0 24 24" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
        </div>
      </div>
      <button class="btn btn-p full" type="submit" style="margin-top: 6px;">
        <span>Enquire Now</span>
        <i><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
      </button>
    </form>
  </div>

  <!-- 1b. PROOF STRIP (4 Stat Blocks - Floating) -->
  <div class="container floating-stats-band" style="position: relative; margin-bottom: -56px; z-index: 20;">
    <div class="stats floating-card" style="grid-template-columns: repeat(4, minmax(0, 1fr)); background: var(--white); border: 1px solid var(--hairline); border-top: 3px solid var(--orange); border-radius: 8px; box-shadow: 0 18px 42px rgba(24, 29, 56, 0.14); overflow: hidden;" id="home-proof-stats">
      <div class="stat">
        <span class="tile">
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        </span>
        <p class="stat-l">Google Rating</p>
        <p class="stat-v"><span class="count-up" data-count="4.9" data-decimals="1">4.9</span><small>/ 5</small></p>
        <p class="stat-h">From 50+ Google reviews</p>
      </div>

      <div class="stat">
        <span class="tile">
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        </span>
        <p class="stat-l">Reviews</p>
        <p class="stat-v"><span class="count-up" data-count="50">50</span>+<small>learners</small></p>
        <p class="stat-h">Rated us on Google</p>
      </div>

      <div class="stat">
        <span class="tile">
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 22h18"></path><path d="M6 18v-7"></path><path d="M10 18v-7"></path><path d="M14 18v-7"></path><path d="M18 18v-7"></path><path d="m12 2 8 5H4z"></path></svg>
        </span>
        <p class="stat-l">Universities</p>
        <p class="stat-v"><span class="count-up" data-count="12">12</span><small>partners</small></p>
        <p class="stat-h">UGC-approved online universities</p>
      </div>

      <div class="stat">
        <span class="tile">
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
        </span>
        <p class="stat-l">Programs</p>
        <p class="stat-v"><span class="count-up" data-count="10">10</span><small>degrees</small></p>
        <p class="stat-h">Across UG and PG</p>
      </div>
    </div>
  </div>
</section>

<!-- 2. UNIVERSITIES GRID -->
<div style="padding-top: 48px;">
  <?php require_once __DIR__ . '/includes/universities-grid.php'; ?>
</div>

<!-- 3. ABOUT SECTION -->
<section class="sec" style="background: var(--offwhite);" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 560px 1fr; gap: 96px; align-items: center;" id="home-about-grid">
    <!-- Left: Overlapping Photo Collage + Orange Anchor Block -->
    <div style="position: relative; height: 560px;" class="collage-container">
      <div class="ph" style="position: absolute; left: 0; top: 0; width: 380px; height: 480px;">
        <img src="<?= BASE_URL ?>assets/img/stock/graduates-caps.jpg" alt="Graduates in caps on campus" class="ph-img">
      </div>
      <div class="ph" style="position: absolute; right: 0; bottom: 0; width: 260px; height: 320px; border: 10px solid var(--offwhite);">
        <img src="<?= BASE_URL ?>assets/img/stock/online-class.jpg" alt="Live online class" class="ph-img">
      </div>
      <div style="position: absolute; left: 0; bottom: 0; width: 120px; height: 64px; background: var(--orange);" aria-hidden="true"></div>
    </div>

    <!-- Right: Copy & 6 .irow items -->
    <div class="head" style="gap: 18px;">
      <p class="lbl">About Us</p>
      <h2 class="h2">Welcome to eShikshaHub</h2>
      <p class="lead">Flexible, affordable degrees that turn education into employability.</p>
      
      <ul style="list-style: none; margin: 28px 0 0; padding: 0; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px;" id="home-about-irows">
        <li class="irow">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg></span>
          <span>UGC-Approved Programs</span>
        </li>
        <li class="irow">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"></path></svg></span>
          <span>Flexible Online Classes</span>
        </li>
        <li class="irow">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg></span>
          <span>Expert Faculty Support</span>
        </li>
        <li class="irow">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect x="2" y="6" width="20" height="14" rx="2"></rect></svg></span>
          <span>Placement Assistance</span>
        </li>
        <li class="irow">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg></span>
          <span>Career-Focused Curriculum</span>
        </li>
        <li class="irow">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z"></path><path d="M15 5.764v15"></path><path d="M9 3.236v15"></path></svg></span>
          <span>Pan-India Recognition</span>
        </li>
      </ul>

      <a class="tl" href="<?= BASE_URL ?>about.php" style="margin-top: 14px;">
        More About Us
        <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
      </a>
    </div>
  </div>
  </div>
</section>

<!-- 4. HIRING PARTNERS MARQUEE -->
<?php require_once __DIR__ . '/includes/partners-marquee.php'; ?>

<!-- 5. COURSES SECTION -->
<section class="sec" style="background: var(--white);" data-reveal>
  <div class="container">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; gap: 48px; margin-bottom: 48px; flex-wrap: wrap;">
    <div class="head">
      <p class="lbl">Our Courses</p>
      <h2 class="h2">Explore Our Courses</h2>
      <p class="lead">10 UGC-approved programs across UG and PG.</p>
    </div>
    <!-- Tabs: All / UG / PG -->
    <div role="tablist" aria-label="Filter courses" style="display: flex;">
      <button class="tab on" role="tab" aria-selected="true" data-filter-tab="all">All</button>
      <button class="tab" role="tab" aria-selected="false" data-filter-tab="ug">UG</button>
      <button class="tab" role="tab" aria-selected="false" data-filter-tab="pg">PG</button>
    </div>
  </div>

  <div style="display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 20px;" id="home-courses-grid">
    <?php foreach ($ALL_COURSES as $slug => $c): ?>
      <article class="lift" 
               style="background: var(--white); border: 1px solid var(--hairline); display: flex; flex-direction: column;" 
               data-course-card 
               data-level="<?= strtolower($c['level']) ?>" 
               data-title="<?= htmlspecialchars($c['name']) ?>" 
               data-abbr="<?= htmlspecialchars($c['abbr']) ?>"
               data-duration="<?= htmlspecialchars($c['duration']) ?>">
        <!-- Card Image -->
        <div class="ph" style="height: 140px; position: relative;">
          <?php if (!empty($c['image']) && file_exists(__DIR__ . '/' . $c['image'])): ?>
            <img src="<?= BASE_URL . $c['image'] ?>" alt="<?= $c['abbr'] ?>" class="ph-img">
          <?php else: ?>
            <div class="ph-in b"></div>
          <?php endif; ?>
          <span class="mono" style="position: absolute; left: 0; top: 0; background: <?= $c['level'] === 'UG' ? 'var(--navy)' : 'var(--tint)' ?>; color: <?= $c['level'] === 'UG' ? 'var(--offwhite)' : 'var(--orange-dark)' ?>; padding: 6px 10px; font-size: 11px;">
            <?= $c['level'] ?>
          </span>
        </div>

        <!-- Card Body -->
        <div style="padding: 20px; display: flex; flex-direction: column; gap: 8px; flex: 1;">
          <div class="num" style="font-size: 40px;"><?= $c['abbr'] ?></div>
          <p style="font-weight: 500; color: var(--navy); min-height: 48px;"><?= $c['name'] ?></p>
          <p class="mono" style="display: flex; align-items: center; gap: 6px;">
            <svg class="ic" viewBox="0 0 24 24" aria-hidden="true" style="width: 16px; height: 16px; color: var(--orange);"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
            <?= $c['duration'] ?>
          </p>
        </div>

        <!-- Card Actions -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; border-top: 1px solid var(--hairline);">
          <a class="tl" href="<?= BASE_URL ?>contact.php?course=<?= urlencode($c['abbr']) ?>" style="justify-content: center; border-right: 1px solid var(--hairline); min-height: 48px;">
            Apply Now
          </a>
          <a class="tl nv" href="<?= BASE_URL . $c['slug'] ?>" style="justify-content: center; min-height: 48px;">
            More Info
            <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
          </a>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
    <div class="courses-mobile-hint" style="display: none; align-items: center; justify-content: center; gap: 8px; margin-top: 14px; color: var(--muted); font-size: 13px;" aria-hidden="true">
      <svg class="ic" viewBox="0 0 24 24" style="width: 16px; height: 16px; color: var(--orange);"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
      <span>Swipe horizontally to browse programs</span>
    </div>
  </div>
</section>

<!-- 6. WHY CHOOSE US SECTION -->
<section class="sec" style="background: var(--offwhite);" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 4fr 8fr; gap: 56px; align-items: stretch;" id="home-why-grid">
    <!-- Left: Heading + Tall Mentor Photo -->
    <div style="display: flex; flex-direction: column; gap: 32px;">
      <div class="head" style="gap: 16px;">
        <p class="lbl">Why eShikshaHub</p>
        <h2 class="h2">Why Choose Us</h2>
        <p class="lead">Everything you need to study, finish and get hired.</p>
      </div>
      <div class="ph" style="flex: 1; min-height: 520px; position: relative;">
        <img src="<?= BASE_URL ?>assets/img/stock/student-mentor.jpg" alt="Student with a mentor" class="ph-img">
      </div>
    </div>

    <!-- Right: 8 Feature Tiles (.wt) -->
    <ol style="list-style: none; margin: 0; padding: 0; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px;" id="home-why-tiles">
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg></span>
        <p class="wn">01</p>
        <h3>Expert Faculty</h3>
        <p>Learn from experienced professors and industry practitioners.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path><rect x="2" y="6" width="14" height="12" rx="2"></rect></svg></span>
        <p class="wn">02</p>
        <h3>Live Online Classes</h3>
        <p>Interactive sessions you can join from any device.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg></span>
        <p class="wn">03</p>
        <h3>Recognized Certification</h3>
        <p>UGC-approved degrees valid for jobs and higher studies.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><rect x="8" y="2" width="8" height="4" rx="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M12 11h4"></path><path d="M12 16h4"></path><path d="M8 11h.01"></path><path d="M8 16h.01"></path></svg></span>
        <p class="wn">04</p>
        <h3>Practical Assignments</h3>
        <p>Real projects that build job-ready skills.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="m16 6 4 14"></path><path d="M12 6v14"></path><path d="M8 8v12"></path><path d="M4 4v16"></path></svg></span>
        <p class="wn">05</p>
        <h3>LMS Access</h3>
        <p>Lectures, notes and recordings in one dedicated portal.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2z"></path><path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"></path></svg></span>
        <p class="wn">06</p>
        <h3>Personal Mentorship</h3>
        <p>A dedicated mentor guides you every single semester.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M6 3h12"></path><path d="M6 8h12"></path><path d="m6 13 8.5 8"></path><path d="M6 13h3"></path><path d="M9 13c6.667 0 6.667-10 0-10"></path></svg></span>
        <p class="wn">07</p>
        <h3>Affordable Fees</h3>
        <p>Quality degrees priced to fit your budget with EMI options.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg></span>
        <p class="wn">08</p>
        <h3>24x7 Support</h3>
        <p>Help with admissions, classes and exams, anytime.</p>
      </li>
    </ol>
  </div>
  </div>
</section>

<!-- 7. REVIEWS CAROUSEL SECTION -->
<section class="sec" style="background: var(--white);" data-reveal>
  <div class="container">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; gap: 48px; margin-bottom: 48px; flex-wrap: wrap;">
    <div class="head">
      <p class="lbl">Google Reviews</p>
      <h2 class="h2">What Our Students Say</h2>
      <div style="display: flex; align-items: center; gap: 12px;">
        <div class="stars" role="img" aria-label="Rated 4.9 out of 5">
          <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
          <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
          <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
          <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
          <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        </div>
        <p class="lead">Rated 4.9 by 50+ learners on Google.</p>
      </div>
    </div>

    <!-- Carousel Controls -->
    <div style="display: flex; align-items: center; gap: 20px;">
      <a class="tl" href="https://share.google/3WmhtJfZU9nurM1TG" target="_blank" rel="noopener">
        <svg class="ic" viewBox="0 0 24 24" style="color: var(--navy);"><path d="M20.5 12H12"></path><path d="M20.5 12a8.5 8.5 0 1 1-2.5-6"></path></svg>
        View All Google Reviews
      </a>
      <button class="sq" aria-label="Previous review" data-review-prev>
        <svg class="ic" viewBox="0 0 24 24"><path d="M19 12H5"></path><path d="m12 19-7-7 7-7"></path></svg>
      </button>
      <button class="sq" aria-label="Next review" data-review-next>
        <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
      </button>
    </div>
  </div>

  <!-- Reviews Dynamic Carousel Container (5 Sets of Verified Student Reviews) -->
  <?php
  $REVIEW_SLIDES = [
      [
          'featured' => [
              'quote' => 'My counsellor helped me pick the right MBA in one call. Classes fit perfectly around my job.',
              'name' => 'Rahul Sharma',
              'course' => 'MBA · Manipal University Jaipur',
              'initials' => 'RS'
          ],
          'side1' => [
              'quote' => 'Clear guidance on fees and university choice. Admission was quick and completely hassle-free.',
              'name' => 'Priya Verma',
              'course' => 'BCA · Chandigarh University',
              'initials' => 'PV'
          ],
          'side2' => [
              'quote' => 'The team answered every question patiently. Live classes and LMS access have been smooth.',
              'name' => 'Amit Tiwari',
              'course' => 'MCA · LPU Online',
              'initials' => 'AT'
          ]
      ],
      [
          'featured' => [
              'quote' => 'Flexible weekend schedules allowed me to complete my BBA while managing a full-time job and family commitments.',
              'name' => 'Sneha Patel',
              'course' => 'BBA · Amity Online',
              'initials' => 'SP'
          ],
          'side1' => [
              'quote' => 'Affordable EMI options and zero admission fees made quality degree education genuinely accessible.',
              'name' => 'Rohan Gupta',
              'course' => 'BCom · Uttaranchal University',
              'initials' => 'RG'
          ],
          'side2' => [
              'quote' => 'Faculty members are experienced practitioners. The practical assignments gave me real job confidence.',
              'name' => 'Ananya Rao',
              'course' => 'MSc Data Science · Chandigarh University',
              'initials' => 'AR'
          ]
      ],
      [
          'featured' => [
              'quote' => 'The career support team conducted mock coding rounds and helped me land an SDE-1 role within 3 months of enrolling.',
              'name' => 'Vikram Malhotra',
              'course' => 'MCA · Manipal University Jaipur',
              'initials' => 'VM'
          ],
          'side1' => [
              'quote' => 'The digital library and interactive LMS portal made studying literature deeply engaging and well-structured.',
              'name' => 'Kavita Joshi',
              'course' => 'MA English · LPU Online',
              'initials' => 'KJ'
          ],
          'side2' => [
              'quote' => 'Transparent fee structure with zero hidden costs. Highly recommended for working corporate executives.',
              'name' => 'Deepak Saini',
              'course' => 'MCom · Amity Online',
              'initials' => 'DS'
          ]
      ],
      [
          'featured' => [
              'quote' => 'Hands-on digital media assignments and portfolio reviews helped me transition seamlessly into a top PR agency.',
              'name' => 'Megha Agarwal',
              'course' => 'MAJMC · Chandigarh University',
              'initials' => 'MA'
          ],
          'side1' => [
              'quote' => 'The guidance on choosing between regular vs online degrees was completely honest, unbiased and supportive.',
              'name' => 'Suresh Nair',
              'course' => 'BCA · Uttaranchal University',
              'initials' => 'SN'
          ],
          'side2' => [
              'quote' => 'Curriculum is thoroughly aligned with modern digital marketing and analytics industry requirements.',
              'name' => 'Pooja Chawla',
              'course' => 'MBA Marketing · Manipal University Jaipur',
              'initials' => 'PC'
          ]
      ],
      [
          'featured' => [
              'quote' => 'I could prepare for civil service exams without any pressure while completing my UGC-recognized graduation.',
              'name' => 'Arjun Deshmukh',
              'course' => 'BA · LPU Online',
              'initials' => 'AD'
          ],
          'side1' => [
              'quote' => 'Proctored online examinations were seamless and properly managed with clear timely notifications.',
              'name' => 'Divya Sundaram',
              'course' => 'MSc IT · Amity Online',
              'initials' => 'DS'
          ],
          'side2' => [
              'quote' => '1-on-1 advisor support from initial enrollment through semester exam forms was unmatched throughout.',
              'name' => 'Manish Kumar',
              'course' => 'BBA · Chandigarh University',
              'initials' => 'MK'
          ]
      ]
  ];
  ?>

  <div data-reviews-carousel>
    <?php foreach ($REVIEW_SLIDES as $s_idx => $slide): ?>
      <div class="reviews-grid" data-review-slide style="display: <?= $s_idx === 0 ? 'grid' : 'none' ?>;">
        <!-- Featured Big Card -->
        <figure style="margin: 0; background: var(--offwhite); padding: 56px; display: flex; flex-direction: column; justify-content: space-between; gap: 32px; border-radius: 8px;">
          <svg viewBox="0 0 48 40" aria-hidden="true" style="width: 64px; height: 54px; fill: var(--orange);"><path d="M0 0h20v20l-8 20H4l6-20H0z"></path><path d="M26 0h20v20l-8 20h-8l6-20h-10z"></path></svg>
          <blockquote style="margin: 0; font: 700 28px/1.35 'Nunito', sans-serif; color: var(--navy);">
            "<?= htmlspecialchars($slide['featured']['quote']) ?>"
          </blockquote>
          <figcaption style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid var(--hairline); padding-top: 24px; flex-wrap: wrap; gap: 12px;">
            <div style="display: flex; align-items: center; gap: 14px;">
              <span class="av" style="width: 56px; height: 56px; font-size: 18px;"><?= $slide['featured']['initials'] ?></span>
              <div>
                <p class="h3" style="font-size: 18px;"><?= htmlspecialchars($slide['featured']['name']) ?></p>
                <p class="mono" style="margin-top: 4px;"><?= htmlspecialchars($slide['featured']['course']) ?></p>
              </div>
            </div>
            <div style="display: flex; align-items: center; gap: 12px;">
              <div class="stars">
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              </div>
            </div>
          </figcaption>
        </figure>

        <!-- Side Reviews Stack -->
        <div style="display: flex; flex-direction: column; gap: 20px;">
          <figure style="margin: 0; border: 1px solid var(--hairline); padding: 28px; display: flex; flex-direction: column; gap: 16px; border-radius: 8px; background: var(--white);">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <div class="stars">
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              </div>
              <span class="mono" style="color: var(--navy); font-size: 11px;">Google Verified</span>
            </div>
            <blockquote style="margin: 0; font-size: 16px; line-height: 1.55; color: var(--navy);">
              "<?= htmlspecialchars($slide['side1']['quote']) ?>"
            </blockquote>
            <figcaption style="display: flex; align-items: center; gap: 12px;">
              <span class="av" style="width: 44px; height: 44px; font-size: 15px;"><?= $slide['side1']['initials'] ?></span>
              <div>
                <p class="h3" style="font-size: 17px;"><?= htmlspecialchars($slide['side1']['name']) ?></p>
                <p class="mono" style="margin-top: 2px;"><?= htmlspecialchars($slide['side1']['course']) ?></p>
              </div>
            </figcaption>
          </figure>

          <figure style="margin: 0; border: 1px solid var(--hairline); padding: 28px; display: flex; flex-direction: column; gap: 16px; border-radius: 8px; background: var(--white);">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <div class="stars">
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              </div>
              <span class="mono" style="color: var(--navy); font-size: 11px;">Google Verified</span>
            </div>
            <blockquote style="margin: 0; font-size: 16px; line-height: 1.55; color: var(--navy);">
              "<?= htmlspecialchars($slide['side2']['quote']) ?>"
            </blockquote>
            <figcaption style="display: flex; align-items: center; gap: 12px;">
              <span class="av" style="width: 44px; height: 44px; font-size: 15px;"><?= $slide['side2']['initials'] ?></span>
              <div>
                <p class="h3" style="font-size: 17px;"><?= htmlspecialchars($slide['side2']['name']) ?></p>
                <p class="mono" style="margin-top: 2px;"><?= htmlspecialchars($slide['side2']['course']) ?></p>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Carousel Bottom Controls: Indicator Bars & Counter -->
  <div style="display: flex; align-items: center; justify-content: flex-end; gap: 14px; margin-top: 28px;">
    <div style="display: flex; gap: 6px;" aria-hidden="true" data-review-bars>
      <?php for ($b = 0; $b < count($REVIEW_SLIDES); $b++): ?>
        <span class="bar <?= $b === 0 ? 'on' : '' ?>" style="width: <?= $b === 0 ? '32px' : '12px' ?>; cursor: pointer; transition: width 0.3s;" title="Slide <?= $b + 1 ?>"></span>
      <?php endfor; ?>
    </div>
    <span class="mono" style="color: var(--navy); font-size: 13px;" data-review-counter>01 / 0<?= count($REVIEW_SLIDES) ?></span>
  </div>
  </div>
</section>

<!-- 8. LOCKED CTA -->
<?php require_once __DIR__ . '/includes/cta.php'; ?>

<!-- 9. GALLERY SECTION -->
<section class="sec" style="background: var(--white); padding-top: 104px; padding-bottom: 104px;" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 300px 1fr 320px; gap: 12px; height: 320px;" id="home-gallery-grid">
      <div class="head" style="justify-content: space-between; padding-right: 24px;">
        <div class="head">
          <p class="lbl">Gallery</p>
          <h2 class="h2" style="font-size: 32px;">Moments at eShikshaHub</h2>
          <p>Events, sessions and celebrations from our community.</p>
        </div>
        <a class="tl" href="<?= BASE_URL ?>gallery.php">
          View Full Gallery
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
        </a>
      </div>

      <!-- Center Big Photo -->
      <a class="ph zoom" href="<?= BASE_URL ?>gallery.php" style="display: block;">
        <img src="<?= BASE_URL ?>assets/img/gallery/1.png" alt="Convocation day celebration" class="ph-img">
        <span class="xp"><svg class="ic" viewBox="0 0 24 24"><path d="m15 15 6 6"></path><path d="m15 9 6-6"></path><path d="M21 16v5h-5"></path><path d="M21 8V3h-5"></path><path d="M3 16v5h5"></path><path d="m3 21 6-6"></path><path d="M3 8V3h5"></path><path d="M9 9 3 3"></path></svg></span>
        <span class="cap">Convocation day</span>
      </a>

      <!-- Right 2x2 Photos -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 1fr 1fr; gap: 12px;">
        <a class="ph zoom" href="<?= BASE_URL ?>gallery.php" style="display: block;">
          <img src="<?= BASE_URL ?>assets/img/gallery/2.png" alt="Counselling session" class="ph-img">
          <span class="xp"><svg class="ic" viewBox="0 0 24 24"><path d="m15 15 6 6"></path><path d="m15 9 6-6"></path><path d="M21 16v5h-5"></path><path d="M21 8V3h-5"></path><path d="M3 16v5h5"></path><path d="m3 21 6-6"></path><path d="M3 8V3h5"></path><path d="M9 9 3 3"></path></svg></span>
          <span class="cap">Counselling session</span>
        </a>
        <a class="ph zoom" href="<?= BASE_URL ?>gallery.php" style="display: block;">
          <img src="<?= BASE_URL ?>assets/img/gallery/3.png" alt="Live class" class="ph-img">
          <span class="xp"><svg class="ic" viewBox="0 0 24 24"><path d="m15 15 6 6"></path><path d="m15 9 6-6"></path><path d="M21 16v5h-5"></path><path d="M21 8V3h-5"></path><path d="M3 16v5h5"></path><path d="m3 21 6-6"></path><path d="M3 8V3h5"></path><path d="M9 9 3 3"></path></svg></span>
          <span class="cap">Live class</span>
        </a>
        <a class="ph zoom" href="<?= BASE_URL ?>gallery.php" style="display: block;">
          <img src="<?= BASE_URL ?>assets/img/gallery/4.png" alt="Campus visit" class="ph-img">
          <span class="xp"><svg class="ic" viewBox="0 0 24 24"><path d="m15 15 6 6"></path><path d="m15 9 6-6"></path><path d="M21 16v5h-5"></path><path d="M21 8V3h-5"></path><path d="M3 16v5h5"></path><path d="m3 21 6-6"></path><path d="M3 8V3h5"></path><path d="M9 9 3 3"></path></svg></span>
          <span class="cap">Campus visit</span>
        </a>
        <a class="ph zoom" href="<?= BASE_URL ?>gallery.php" style="display: block;">
          <img src="<?= BASE_URL ?>assets/img/gallery/5.png" alt="Alumni meet" class="ph-img">
          <span class="xp"><svg class="ic" viewBox="0 0 24 24"><path d="m15 15 6 6"></path><path d="m15 9 6-6"></path><path d="M21 16v5h-5"></path><path d="M21 8V3h-5"></path><path d="M3 16v5h5"></path><path d="m3 21 6-6"></path><path d="M3 8V3h5"></path><path d="M9 9 3 3"></path></svg></span>
          <span class="cap">Alumni meet</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- 10. LOCKED FOOTER -->
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<style>
/* Responsive layout tweaks for Home */
@media (max-width: 1199px) {
  #home-hero-grid {
    grid-template-columns: 1fr !important;
    gap: 40px !important;
  }
  #home-proof-stats {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #home-about-grid {
    grid-template-columns: 1fr !important;
  }
  .collage-container {
    height: 420px !important;
    max-width: 520px;
    margin: 0 auto;
  }
  #home-courses-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
  }
  #home-why-grid {
    grid-template-columns: 1fr !important;
  }
  #home-gallery-grid {
    grid-template-columns: 1fr !important;
    height: auto !important;
  }
}

@media (max-width: 767px) {
  #home-courses-grid {
    display: flex !important;
    overflow-x: auto !important;
    scroll-snap-type: x mandatory !important;
    -webkit-overflow-scrolling: touch !important;
    gap: 16px !important;
    padding: 8px 18px 20px !important;
    margin-left: -18px !important;
    margin-right: -18px !important;
    scrollbar-width: thin !important;
  }
  #home-courses-grid::-webkit-scrollbar {
    height: 6px;
  }
  #home-courses-grid::-webkit-scrollbar-thumb {
    background: var(--hairline);
    border-radius: 4px;
  }
  #home-courses-grid > article {
    width: 280px !important;
    min-width: 280px !important;
    max-width: 280px !important;
    flex: 0 0 280px !important;
    scroll-snap-align: start !important;
  }
  .courses-mobile-hint {
    display: flex !important;
  }
  #home-about-irows {
    grid-template-columns: 1fr !important;
  }
  #home-why-tiles {
    grid-template-columns: 1fr !important;
  }
}
</style>
