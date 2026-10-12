<?php
$current_page = 'about';
$page_title = 'About Us | India\'s Trusted Online Learning Platform';
$page_desc = 'Learn about eShikshaHub, our mission to turn education into employability with UGC-approved online degree programs and career support.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- 1. HERO SECTION -->
<section style="position: relative; height: 640px; display: flex; align-items: flex-end;">
  <div class="ph" style="position: absolute; inset: 0;">
    <img src="<?= BASE_URL ?>assets/img/stock/group-discussion.jpg" alt="Students in group discussion" class="ph-img" style="opacity: 0.5; object-position: center 30%;">
  </div>
  <div class="ov"></div>

  <div class="container" style="position: relative; z-index: 5; padding-bottom: 96px;">
    <div class="head" style="max-width: 640px; gap: 20px;">
      <nav aria-label="Breadcrumb" class="mono" style="display: flex; gap: 10px; color: var(--muted-dk);">
        <a href="<?= BASE_URL ?>index.php" style="color: var(--muted-dk);">Home</a>
        <span aria-hidden="true">/</span>
        <span style="color: var(--offwhite);">About Us</span>
      </nav>
      <h1 class="h1">Welcome to eShikshaHub</h1>
      <p class="lead pdk">Flexible, affordable, accredited degrees you can earn from home.</p>
      <div style="margin-top: 10px;">
        <a class="btn btn-p" href="<?= BASE_URL ?>contact.php">
          <span>Enroll Now</span>
          <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- 2. OUR STORY SECTION -->
<section class="sec" style="background: var(--white);" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 5fr 7fr; gap: 56px; align-items: center;" id="about-story-grid">
      <!-- Left Photo with 96px Orange Square Anchor -->
      <div class="ph" style="height: 560px; position: relative;">
        <img src="<?= BASE_URL ?>assets/img/stock/graduates-caps.jpg" alt="Graduation ceremony with caps" class="ph-img">
        <div style="position: absolute; right: 0; bottom: 0; width: 96px; height: 96px; background: var(--orange);" aria-hidden="true"></div>
      </div>

    <!-- Right Copy + 3 Stat blocks -->
    <div class="head" style="gap: 18px;">
      <p class="lbl">Our Story</p>
      <h2 class="h2">Education Meets Employability</h2>
      <p class="lead" style="max-width: 540px;">
        eShikshaHub was founded with a singular purpose: to make premium university education accessible, affordable, and aligned with industry demand. We partner with India's top UGC-approved universities to provide 100% online degrees with personalized career guidance.
      </p>

      <div class="stats" style="grid-template-columns: repeat(3, minmax(0, 1fr)); margin-top: 32px; border: 1px solid var(--hairline);" id="about-stats-row">
        <div class="stat">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M3 22h18"></path><path d="M6 18v-7"></path><path d="M10 18v-7"></path><path d="M14 18v-7"></path><path d="M18 18v-7"></path><path d="m12 2 8 5H4z"></path></svg></span>
          <p class="stat-l">Partners</p>
          <p class="stat-v"><span class="count-up" data-count="12">12</span><small>universities</small></p>
          <p class="stat-h">UGC-approved online partners</p>
        </div>
        <div class="stat">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg></span>
          <p class="stat-l">Programs</p>
          <p class="stat-v"><span class="count-up" data-count="10">10</span><small>degrees</small></p>
          <p class="stat-h">Across UG and PG</p>
        </div>
        <div class="stat">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span>
          <p class="stat-l">Rating</p>
          <p class="stat-v"><span class="count-up" data-count="4.9" data-decimals="1">4.9</span><small>/ 5</small></p>
          <p class="stat-h">From 50+ Google reviews</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 3. HIGHLIGHTS SECTION -->
<section class="sec" style="background: var(--offwhite);" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 4fr 8fr; gap: 64px; align-items: stretch;" id="about-highlights-grid">
    <div style="display: flex; flex-direction: column; gap: 32px;">
      <div class="head">
        <p class="lbl">Highlights</p>
        <h2 class="h2">What Sets Us Apart</h2>
        <p class="lead">Built ground up for the Indian learner who wants real career outcomes.</p>
      </div>
      <div class="ph" style="flex: 1; min-height: 300px; position: relative;">
        <img src="<?= BASE_URL ?>assets/img/stock/online-class.jpg" alt="Student on an online class" class="ph-img">
      </div>
    </div>

    <!-- 6 .wt Tiles -->
    <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 16px;" id="about-highlight-tiles">
      <div class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M3 22h18"></path><path d="M6 18v-7"></path><path d="M10 18v-7"></path><path d="M14 18v-7"></path><path d="M18 18v-7"></path><path d="m12 2 8 5H4z"></path></svg></span>
        <p class="wn">01</p>
        <h3>Govt. Recognized Degrees</h3>
        <p>100% valid for government exams, higher studies, and multinational corporate jobs.</p>
      </div>
      <div class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"></path></svg></span>
        <p class="wn">02</p>
        <h3>100% Online Classes</h3>
        <p>Attend live weekend lectures or learn with on-demand recorded material from anywhere.</p>
      </div>
      <div class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M6 3h12"></path><path d="M6 8h12"></path><path d="m6 13 8.5 8"></path><path d="M6 13h3"></path><path d="M9 13c6.667 0 6.667-10 0-10"></path></svg></span>
        <p class="wn">03</p>
        <h3>Affordable Fee Structure</h3>
        <p>High quality education priced transparently with semester payment plans.</p>
      </div>
      <div class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path><path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path></svg></span>
        <p class="wn">04</p>
        <h3>EMI &amp; Scholarship Options</h3>
        <p>Easy zero-cost EMI options with no upfront burden and merit fee concessions.</p>
      </div>
      <div class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect x="2" y="6" width="20" height="14" rx="2"></rect></svg></span>
        <p class="wn">05</p>
        <h3>Placement Assistance</h3>
        <p>Direct placement cell support, resume reviews, and campus drives with 10+ partners.</p>
      </div>
      <div class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z"></path><path d="M15 5.764v15"></path><path d="M9 3.236v15"></path></svg></span>
        <p class="wn">06</p>
        <h3>Pan-India Student Support</h3>
        <p>Dedicated academic counsellors and quick resolution for administrative queries.</p>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- 4. RECOGNITIONS SECTION -->
<section class="sec" style="background: var(--white);" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 7fr 5fr; gap: 48px; align-items: end; margin-bottom: 48px;" id="about-recog-head">
    <div class="head">
      <p class="lbl">Recognitions</p>
      <h2 class="h2">Affiliations &amp; Recognitions</h2>
    </div>
    <p class="lead">Programs approved by India's leading apex education councils.</p>
  </div>

  <div style="display: grid; grid-template-columns: repeat(8, minmax(0, 1fr)); gap: 1px; background: var(--hairline); border: 1px solid var(--hairline);" id="about-recog-grid">
    <div class="lg" style="height: 160px; padding: 20px 10px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 12px; background: var(--white);">
      <img src="<?= BASE_URL ?>assets/img/recognitions/ugc.png" alt="UGC Approved" class="recog-badge-img" style="max-height: 56px; max-width: 80px; width: auto; height: auto; object-fit: contain;">
      <span style="font: 800 17px 'Nunito', sans-serif; color: var(--navy);">UGC</span>
    </div>
    <div class="lg" style="height: 160px; padding: 20px 10px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 12px; background: var(--white);">
      <img src="<?= BASE_URL ?>assets/img/recognitions/aicte.png" alt="AICTE Approved" class="recog-badge-img" style="max-height: 56px; max-width: 80px; width: auto; height: auto; object-fit: contain;">
      <span style="font: 800 17px 'Nunito', sans-serif; color: var(--navy);">AICTE</span>
    </div>
    <div class="lg" style="height: 160px; padding: 20px 10px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 12px; background: var(--white);">
      <img src="<?= BASE_URL ?>assets/img/recognitions/naac.png" alt="NAAC Accredited" class="recog-badge-img" style="max-height: 56px; max-width: 80px; width: auto; height: auto; object-fit: contain;">
      <span style="font: 800 17px 'Nunito', sans-serif; color: var(--navy);">NAAC</span>
    </div>
    <div class="lg" style="height: 160px; padding: 20px 10px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 12px; background: var(--white);">
      <img src="<?= BASE_URL ?>assets/img/recognitions/nirf.png" alt="NIRF Ranked" class="recog-badge-img" style="max-height: 56px; max-width: 85px; width: auto; height: auto; object-fit: contain;">
      <span style="font: 800 17px 'Nunito', sans-serif; color: var(--navy);">NIRF</span>
    </div>
    <!-- 4 Recognized Quality Badges -->
    <div class="lg" style="height: 160px; padding: 20px 10px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 12px; background: var(--white);">
      <img src="<?= BASE_URL ?>assets/img/recognitions/wes.svg" alt="WES Valid" class="recog-badge-img" style="max-height: 56px; max-width: 85px; width: auto; height: auto; object-fit: contain;">
      <span class="mono" style="font-size: 13px; font-weight: 700; color: var(--navy); text-transform: uppercase;">WES Valid</span>
    </div>
    <div class="lg" style="height: 160px; padding: 20px 10px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 12px; background: var(--white);">
      <img src="<?= BASE_URL ?>assets/img/recognitions/deb.png" alt="DEB Approved" class="recog-badge-img" style="max-height: 52px; max-width: 100px; width: auto; height: auto; object-fit: contain;">
      <span class="mono" style="font-size: 13px; font-weight: 700; color: var(--navy); text-transform: uppercase;">DEB Approved</span>
    </div>
    <div class="lg" style="height: 160px; padding: 20px 10px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 12px; background: var(--white);">
      <img src="<?= BASE_URL ?>assets/img/recognitions/aiu.svg" alt="AIU Equivalent" class="recog-badge-img" style="max-height: 56px; max-width: 80px; width: auto; height: auto; object-fit: contain;">
      <span class="mono" style="font-size: 13px; font-weight: 700; color: var(--navy); text-transform: uppercase;">AIU Equivalent</span>
    </div>
    <div class="lg" style="height: 160px; padding: 20px 10px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 12px; background: var(--white);">
      <img src="<?= BASE_URL ?>assets/img/recognitions/qs.svg" alt="QS Ranked" class="recog-badge-img" style="max-height: 56px; max-width: 85px; width: auto; height: auto; object-fit: contain;">
      <span class="mono" style="font-size: 13px; font-weight: 700; color: var(--navy); text-transform: uppercase;">QS Ranked</span>
    </div>
  </div>
</section>

<!-- 5. WHY LEARNERS CHOOSE US SECTION -->
<section class="sec" style="background: var(--offwhite);" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 4fr 8fr; gap: 56px; align-items: stretch;" id="about-why-grid">
    <div style="display: flex; flex-direction: column; gap: 32px;">
      <div class="head">
        <p class="lbl">Why Us</p>
        <h2 class="h2">Why Learners Choose Us</h2>
        <p class="lead">From day one through graduation, we provide student success at each phase.</p>
      </div>
      <div class="ph" style="flex: 1; min-height: 520px; position: relative;">
        <img src="<?= BASE_URL ?>assets/img/stock/student-mentor.jpg" alt="Student with a mentor" class="ph-img">
      </div>
    </div>

    <ol style="list-style: none; margin: 0; padding: 0; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px;" id="about-why-tiles">
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg></span>
        <p class="wn">01</p>
        <h3>Expert Faculty</h3>
        <p>Taught by experienced academics and industry experts.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M10 7.75a.75.75 0 0 1 1.142-.638l3.664 2.249a.75.75 0 0 1 0 1.278l-3.664 2.25a.75.75 0 0 1-1.142-.64z"></path><path d="M12 17v4"></path><path d="M8 21h8"></path><rect x="2" y="3" width="20" height="14" rx="2"></rect></svg></span>
        <p class="wn">02</p>
        <h3>Live &amp; Recorded Classes</h3>
        <p>Attend live interactive sessions or catch up on recordings anytime.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg></span>
        <p class="wn">03</p>
        <h3>UGC-Approved Courses</h3>
        <p>Degrees recognised for MNC jobs and higher studies globally.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect x="2" y="6" width="20" height="14" rx="2"></rect></svg></span>
        <p class="wn">04</p>
        <h3>Placement Support</h3>
        <p>Resume help, mock interviews and job leads through our network.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="m16 6 4 14"></path><path d="M12 6v14"></path><path d="M8 8v12"></path><path d="M4 4v16"></path></svg></span>
        <p class="wn">05</p>
        <h3>Digital Library</h3>
        <p>E-books and journals available 24x7 online through LMS.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="m12 2 10 5-10 5L2 7z"></path><path d="m2 17 10 5 10-5"></path><path d="m2 12 10 5 10-5"></path></svg></span>
        <p class="wn">06</p>
        <h3>Project-Based Learning</h3>
        <p>Learn by building real-world projects with practical guidance.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg></span>
        <p class="wn">07</p>
        <h3>Global Curriculum</h3>
        <p>Course content shaped by international industry benchmarks.</p>
      </li>
      <li class="wt">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span>
        <p class="wn">08</p>
        <h3>Student Community</h3>
        <p>Connect with fellow learners across India in peer forums.</p>
      </li>
    </ol>
  </div>
  </div>
</section>

<!-- 6. UNIVERSITIES GRID -->
<?php require_once __DIR__ . '/includes/universities-grid.php'; ?>

<!-- 7. HIRING PARTNERS MARQUEE -->
<?php require_once __DIR__ . '/includes/partners-marquee.php'; ?>

<!-- 8. LOCKED CTA -->
<?php require_once __DIR__ . '/includes/cta.php'; ?>

<!-- 9. LOCKED FOOTER -->
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<style>
@media (max-width: 1199px) {
  #about-story-grid {
    grid-template-columns: 1fr !important;
  }
  #about-highlights-grid {
    grid-template-columns: 1fr !important;
  }
  #about-recog-grid {
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
  }
  #about-why-grid {
    grid-template-columns: 1fr !important;
  }
  #about-highlight-tiles {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
}
@media (max-width: 767px) {
  #about-stats-row {
    grid-template-columns: 1fr !important;
  }
  #about-highlight-tiles {
    grid-template-columns: 1fr !important;
  }
  #about-recog-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #about-why-tiles {
    grid-template-columns: 1fr !important;
  }
}
</style>
