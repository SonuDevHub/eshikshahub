<?php
$current_page = 'course-detail';
$is_course_page = true;
$page_title = 'Online MBA Degree Program | UGC Approved';
$page_desc = 'Enroll in a UGC-approved Online MBA degree with flexible schedules, 8 in-demand specializations, no-cost EMI, and dedicated placement assistance.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- 1. HERO SECTION -->
<section style="position: relative; height: 620px; display: flex; align-items: flex-end;">
  <div class="ph" style="position: absolute; inset: 0;">
    <img src="<?= BASE_URL ?>assets/img/stock/working-evening.jpg" alt="Working professional studying in the evening" class="ph-img" style="opacity: 0.5; object-position: center 20%;">
  </div>
  <div class="ov"></div>

  <div class="container" style="position: relative; z-index: 5; padding-bottom: 96px;">
    <div class="head" style="max-width: 720px; gap: 20px;">
      <nav aria-label="Breadcrumb" class="mono" style="display: flex; gap: 10px; color: var(--muted-dk);">
        <a href="<?= BASE_URL ?>index.php" style="color: var(--muted-dk);">Home</a>
        <span aria-hidden="true">/</span>
        <a href="<?= BASE_URL ?>courses.php" style="color: var(--muted-dk);">Courses</a>
        <span aria-hidden="true">/</span>
        <span style="color: var(--offwhite);">MBA</span>
      </nav>
      <h1 class="h1">Online MBA Degree</h1>
      <p class="lead pdk">Build executive leadership and business management skills while you keep working.</p>
      <div style="display: flex; gap: 14px; margin-top: 8px; flex-wrap: wrap;">
        <a class="btn btn-p" href="#enquiry-form">
          <span>Apply Now</span>
          <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
        </a>
        <a class="btn btn-s dk" href="#curriculum">
          <span>View Curriculum</span>
          <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- 2. KEY FACTS BAND (5 Stat Blocks - Floating Over Hero) -->
<section aria-label="Key facts" class="floating-stats-band" style="position: relative; z-index: 20; margin-top: -56px; margin-bottom: 24px;">
  <div class="container">
    <div class="stats floating-card" style="grid-template-columns: repeat(5, minmax(0, 1fr)); background: var(--white); border: 1px solid var(--hairline); border-top: 3px solid var(--orange); border-radius: 8px; box-shadow: 0 18px 42px rgba(24, 29, 56, 0.14); overflow: hidden;" id="mba-keyfacts-row">
      <div class="stat" style="padding: 24px 20px;">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4M8 2v4M3 10h18"></path></svg></span>
        <p class="stat-l">Duration</p>
        <p class="stat-v"><span class="count-up" data-count="24">24</span><small>Months</small></p>
        <p class="stat-h">4 semesters</p>
      </div>

      <div class="stat" style="padding: 24px 20px;">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M6 3h12"></path><path d="M6 8h12"></path><path d="m6 13 8.5 8"></path><path d="M6 13h3"></path><path d="M9 13c6.667 0 6.667-10 0-10"></path></svg></span>
        <p class="stat-l">Fees</p>
        <p class="stat-v">₹<span class="count-up" data-count="12000">12,000</span><small>/sem</small></p>
        <p class="stat-h">Starting fee</p>
      </div>

      <div class="stat" style="padding: 24px 20px;">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"></rect><path d="M2 10h20"></path></svg></span>
        <p class="stat-l">Payment</p>
        <p class="stat-v">No-Cost<small>EMI</small></p>
        <p class="stat-h">Flexible options</p>
      </div>

      <div class="stat" style="padding: 24px 20px;">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"></path></svg></span>
        <p class="stat-l">Mode</p>
        <p class="stat-v"><span class="count-up" data-count="100">100</span>%<small>Online</small></p>
        <p class="stat-h">Live + recorded</p>
      </div>

      <div class="stat" style="padding: 24px 20px;">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg></span>
        <p class="stat-l">Approval</p>
        <p class="stat-v">UGC<small>Approved</small></p>
        <p class="stat-h">Govt. recognised</p>
      </div>
    </div>
  </div>
</section>

<!-- 3. STICKY TAB NAV (Scrollspy) -->
<nav aria-label="On this page" style="position: sticky; top: 0; z-index: 70; background: var(--white); border-bottom: 1px solid var(--hairline); height: 64px; box-shadow: 0 4px 12px rgba(0,0,0,0.04);">
  <div class="container" style="display: flex; align-items: stretch; height: 100%; overflow-x: auto; white-space: nowrap;">
    <a class="nvl on" href="#overview" style="padding: 0 20px 0 0; border-bottom: 2px solid var(--orange);">Overview</a>
    <a class="nvl" href="#specializations" style="padding: 0 20px;">Specializations</a>
    <a class="nvl" href="#curriculum" style="padding: 0 20px;">Curriculum</a>
    <a class="nvl" href="#formats" style="padding: 0 20px;">Formats</a>
    <a class="nvl" href="#why-mba" style="padding: 0 20px;">Why Us</a>
    <a class="nvl" href="#universities" style="padding: 0 20px;">Universities</a>
    <a class="nvl" href="#careers" style="padding: 0 20px;">Careers</a>
    <a class="nvl" href="#faqs" style="padding: 0 20px;">FAQs</a>
  </div>
</nav>

<!-- MAIN BODY: Content + Sticky Enquiry Aside (Desktop 400px) -->
<div class="container" style="padding-top: 40px; padding-bottom: 96px; display: grid; grid-template-columns: minmax(0, 1fr) 400px; gap: 64px; align-items: start;" id="mba-layout-grid">
  <!-- Left Main Column -->
  <main style="min-width: 0;">

    <!-- 4. OVERVIEW -->
    <section id="overview" style="padding-bottom: 72px;" data-reveal>
      <div class="head" style="gap: 16px; margin-bottom: 36px;">
        <p class="lbl">Overview</p>
        <h2 class="h2">About the Program</h2>
        <p class="lead">A comprehensive 100% online MBA designed with live, recorded and case-study pedagogy.</p>
      </div>

      <ul style="list-style: none; margin: 0; padding: 0; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 16px;" id="mba-overview-tiles">
        <li class="wt" style="padding: 24px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M10 7.75a.75.75 0 0 1 1.142-.638l3.664 2.249a.75.75 0 0 1 0 1.278l-3.664 2.25a.75.75 0 0 1-1.142-.64z"></path><path d="M12 17v4"></path><path d="M8 21h8"></path><rect x="2" y="3" width="20" height="14" rx="2"></rect></svg></span>
          <p class="wn">01</p>
          <h3 style="font-size: 18px;">Live + Recorded Lectures</h3>
        </li>
        <li class="wt" style="padding: 24px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect x="2" y="6" width="20" height="14" rx="2"></rect></svg></span>
          <p class="wn">02</p>
          <h3 style="font-size: 18px;">Industry Projects</h3>
        </li>
        <li class="wt" style="padding: 24px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg></span>
          <p class="wn">03</p>
          <h3 style="font-size: 18px;">Global Case Studies</h3>
        </li>
        <li class="wt" style="padding: 24px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M2 3h20"></path><path d="M21 3v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3"></path><path d="m7 21 5-5 5 5"></path></svg></span>
          <p class="wn">04</p>
          <h3 style="font-size: 18px;">Soft Skills Training</h3>
        </li>
        <li class="wt" style="padding: 24px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><rect x="8" y="2" width="8" height="4" rx="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M12 11h4"></path><path d="M12 16h4"></path><path d="M8 11h.01"></path><path d="M8 16h.01"></path></svg></span>
          <p class="wn">05</p>
          <h3 style="font-size: 18px;">Capstone Project</h3>
        </li>
        <li class="wt" style="padding: 24px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg></span>
          <p class="wn">06</p>
          <h3 style="font-size: 18px;">Placement Assistance</h3>
        </li>
      </ul>
    </section>

    <!-- 5. SPECIALIZATIONS -->
    <section id="specializations" style="padding: 64px 32px; background: var(--offwhite); margin-bottom: 72px; border: 1px solid var(--hairline); border-radius: 8px;" data-reveal>
      <div class="head" style="gap: 16px; margin-bottom: 32px;">
        <p class="lbl">Specializations</p>
        <h2 class="h2">Choose Your Specialization</h2>
        <p class="lead">Pick a focus area that aligns with your promotion and career targets.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 1px; background: var(--hairline); border: 1px solid var(--hairline);" id="mba-specs-grid">
        <div style="background: var(--white); padding: 24px 20px; display: flex; flex-direction: column; gap: 20px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="m3 11 18-5v12L3 14v-3z"></path><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path></svg></span>
          <span class="h3" style="font-size: 17px;">Marketing</span>
        </div>
        <div style="background: var(--white); padding: 24px 20px; display: flex; flex-direction: column; gap: 20px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg></span>
          <span class="h3" style="font-size: 17px;">Finance</span>
        </div>
        <div style="background: var(--white); padding: 24px 20px; display: flex; flex-direction: column; gap: 20px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span>
          <span class="h3" style="font-size: 17px;">Human Resources</span>
        </div>
        <div style="background: var(--white); padding: 24px 20px; display: flex; flex-direction: column; gap: 20px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M3 3v18h18"></path><path d="M18 17V9"></path><path d="M13 17V5"></path><path d="M8 17v-3"></path></svg></span>
          <span class="h3" style="font-size: 17px;">Business Analytics</span>
        </div>
        <div style="background: var(--white); padding: 24px 20px; display: flex; flex-direction: column; gap: 20px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5v14a9 3 0 0 0 18 0V5"></path><path d="M3 12a9 3 0 0 0 18 0"></path></svg></span>
          <span class="h3" style="font-size: 17px;">Data Science</span>
        </div>
        <div style="background: var(--white); padding: 24px 20px; display: flex; flex-direction: column; gap: 20px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"></circle><path d="M12 2v3M12 19v3M4.93 4.93l2.12 2.12M16.95 16.95l2.12 2.12M2 12h3M19 12h3M4.93 19.07l2.12-2.12M16.95 7.05l2.12-2.12"></path></svg></span>
          <span class="h3" style="font-size: 17px;">Operations</span>
        </div>
        <div style="background: var(--white); padding: 24px 20px; display: flex; flex-direction: column; gap: 20px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2"></rect><rect x="9" y="9" width="6" height="6"></rect><path d="M15 2v2M15 20v2M2 15h2M2 9h2M20 15h2M20 9h2M9 2v2M9 20v2"></path></svg></span>
          <span class="h3" style="font-size: 17px;">IT &amp; FinTech</span>
        </div>
        <div style="background: var(--white); padding: 24px 20px; display: flex; flex-direction: column; gap: 20px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="m16.24 7.76-2.12 6.36-6.36 2.12 2.12-6.36z"></path></svg></span>
          <span class="h3" style="font-size: 17px;">General Mgmt</span>
        </div>
      </div>
    </section>

    <!-- 6. CURRICULUM ACCORDION -->
    <section id="curriculum" style="padding-bottom: 72px;" data-reveal>
      <div class="head" style="gap: 16px; margin-bottom: 32px;">
        <p class="lbl">Curriculum</p>
        <h2 class="h2">What You'll Learn</h2>
        <p class="lead">4 rigorous semesters balancing business theory with analytical practice.</p>
      </div>

      <div style="border-top: 2px solid var(--navy);">
        <!-- Semester 1 (Open by default) -->
        <div style="border-bottom: 1px solid var(--hairline); padding-bottom: 24px;">
          <button class="acc-h" aria-expanded="true">
            <span style="display: flex; align-items: center; gap: 20px;">
              <span class="num or" style="font-size: 32px;">01</span>
              Semester 1 · Core Foundations
            </span>
            <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path></svg>
          </button>
          <ol style="list-style: none; margin: 8px 0 0 52px; padding: 0; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 0 32px;" id="sem1-subjects">
            <li style="display: flex; gap: 14px; align-items: center; padding: 12px 0; border-top: 1px solid var(--hairline); color: var(--navy);"><span class="mono" style="color: var(--orange-dark);">1.1</span>Strategic Management</li>
            <li style="display: flex; gap: 14px; align-items: center; padding: 12px 0; border-top: 1px solid var(--hairline); color: var(--navy);"><span class="mono" style="color: var(--orange-dark);">1.2</span>Financial Accounting &amp; Planning</li>
            <li style="display: flex; gap: 14px; align-items: center; padding: 12px 0; border-top: 1px solid var(--hairline); color: var(--navy);"><span class="mono" style="color: var(--orange-dark);">1.3</span>Marketing Management</li>
            <li style="display: flex; gap: 14px; align-items: center; padding: 12px 0; border-top: 1px solid var(--hairline); color: var(--navy);"><span class="mono" style="color: var(--orange-dark);">1.4</span>Operations &amp; Supply Chain</li>
            <li style="display: flex; gap: 14px; align-items: center; padding: 12px 0; border-top: 1px solid var(--hairline); color: var(--navy);"><span class="mono" style="color: var(--orange-dark);">1.5</span>Organisational Behaviour</li>
            <li style="display: flex; gap: 14px; align-items: center; padding: 12px 0; border-top: 1px solid var(--hairline); color: var(--navy);"><span class="mono" style="color: var(--orange-dark);">1.6</span>Managerial Economics</li>
          </ol>
        </div>

        <!-- Semester 2 -->
        <div style="border-bottom: 1px solid var(--hairline);">
          <button class="acc-h" aria-expanded="false">
            <span style="display: flex; align-items: center; gap: 20px;">
              <span class="num or" style="font-size: 32px;">02</span>
              Semester 2 · Analytical &amp; Functional Strategy
            </span>
            <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14M12 5v14"></path></svg>
          </button>
          <div style="display: none; padding: 8px 0 20px 52px;">
            <p style="color: var(--body);">Corporate Finance · Human Resource Strategy · Business Research Methods · Management Information Systems · Legal Aspects of Business.</p>
          </div>
        </div>

        <!-- Semester 3 -->
        <div style="border-bottom: 1px solid var(--hairline);">
          <button class="acc-h" aria-expanded="false">
            <span style="display: flex; align-items: center; gap: 20px;">
              <span class="num or" style="font-size: 32px;">03</span>
              Semester 3 · Specialization Electives
            </span>
            <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14M12 5v14"></path></svg>
          </button>
          <div style="display: none; padding: 8px 0 20px 52px;">
            <p style="color: var(--body);">Specialization Elective I · Specialization Elective II · Advanced Data Analytics · Corporate Governance · Summer Internship Evaluation.</p>
          </div>
        </div>

        <!-- Semester 4 -->
        <div style="border-bottom: 1px solid var(--hairline);">
          <button class="acc-h" aria-expanded="false">
            <span style="display: flex; align-items: center; gap: 20px;">
              <span class="num or" style="font-size: 32px;">04</span>
              Semester 4 · Global Leadership &amp; Capstone Project
            </span>
            <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14M12 5v14"></path></svg>
          </button>
          <div style="display: none; padding: 8px 0 20px 52px;">
            <p style="color: var(--body);">International Business Management · Entrepreneurship &amp; Innovation · Comprehensive Capstone Dissertation Project · Final Viva Voce.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- 7. LEARNING FORMATS MOSAIC -->
    <section id="formats" style="padding: 64px 32px; background: var(--offwhite); margin-bottom: 72px; border: 1px solid var(--hairline);" data-reveal>
      <div class="head" style="gap: 16px; margin-bottom: 32px;">
        <p class="lbl">Learning Formats</p>
        <h2 class="h2">Learn Your Way</h2>
      </div>

      <div style="display: grid; grid-template-columns: 1.3fr 1fr; grid-template-rows: 240px 240px; gap: 12px;" id="mba-formats-mosaic">
        <!-- Faculty Large Card -->
        <div class="ph zoom" style="grid-row: span 2; position: relative;">
          <img src="<?= BASE_URL ?>assets/img/stock/faculty-teaching.jpg" alt="Top MBA Faculty" class="ph-img">
          <div class="ov" style="top: auto; height: 110px;"></div>
          <span style="position: absolute; left: 24px; bottom: 24px; display: flex; align-items: center; gap: 12px; color: var(--offwhite); font: 700 20px 'Nunito', sans-serif;">
            <span class="tile or"><svg class="ic" viewBox="0 0 24 24"><path d="M2 3h20"></path><path d="M21 3v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3"></path><path d="m7 21 5-5 5 5"></path></svg></span>
            Top MBA Faculty
          </span>
        </div>

        <!-- Flexible Learning Card -->
        <div class="ph zoom" style="position: relative;">
          <img src="<?= BASE_URL ?>assets/img/stock/online-class.jpg" alt="Flexible Learning" class="ph-img">
          <div class="ov" style="top: auto; height: 96px;"></div>
          <span style="position: absolute; left: 20px; bottom: 20px; display: flex; align-items: center; gap: 12px; color: var(--offwhite); font: 700 18px 'Nunito', sans-serif;">
            <span class="tile or"><svg class="ic" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4M8 2v4M3 10h18"></path></svg></span>
            Flexible Learning
          </span>
        </div>

        <!-- 2 Half Cards -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
          <div class="ph zoom" style="position: relative;">
            <img src="<?= BASE_URL ?>assets/img/stock/resume-workshop.jpg" alt="Case Studies" class="ph-img">
            <div class="ov" style="top: auto; height: 120px;"></div>
            <span style="position: absolute; left: 16px; right: 12px; bottom: 16px; display: flex; flex-direction: column; gap: 8px; color: var(--offwhite); font: 700 15px/1.2 'Nunito', sans-serif;">
              <span class="tile sm or"><svg class="ic" viewBox="0 0 24 24"><rect x="8" y="2" width="8" height="4" rx="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path></svg></span>
              Case Studies &amp; Projects
            </span>
          </div>

          <div class="ph zoom" style="position: relative;">
            <img src="<?= BASE_URL ?>assets/img/stock/library-books.jpg" alt="E-Library" class="ph-img">
            <div class="ov" style="top: auto; height: 120px;"></div>
            <span style="position: absolute; left: 16px; right: 12px; bottom: 16px; display: flex; flex-direction: column; gap: 8px; color: var(--offwhite); font: 700 15px/1.2 'Nunito', sans-serif;">
              <span class="tile sm or"><svg class="ic" viewBox="0 0 24 24"><path d="m16 6 4 14"></path><path d="M12 6v14"></path><path d="M8 8v12"></path></svg></span>
              E-Library Access
            </span>
          </div>
        </div>
      </div>
    </section>

    <!-- 8. WHY OUR MBA -->
    <section id="why-mba" style="padding-bottom: 72px;" data-reveal>
      <div class="head" style="gap: 16px; margin-bottom: 32px;">
        <p class="lbl">Why Us</p>
        <h2 class="h2">Why Choose Our MBA</h2>
      </div>

      <ol style="list-style: none; margin: 0; padding: 0; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px;" id="mba-why-tiles">
        <li class="wt" style="padding: 28px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4M8 2v4M3 10h18"></path></svg></span>
          <p class="wn">01</p>
          <h3>Flexible Schedule</h3>
          <p>Study on weekends without taking a break from your career.</p>
        </li>
        <li class="wt" style="padding: 28px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect x="2" y="6" width="20" height="14" rx="2"></rect></svg></span>
          <p class="wn">02</p>
          <h3>Industry-Focused Curriculum</h3>
          <p>Designed with corporate leaders for high workplace impact.</p>
        </li>
        <li class="wt" style="padding: 28px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path><path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path></svg></span>
          <p class="wn">03</p>
          <h3>Semester-Wise Fees &amp; EMI</h3>
          <p>Affordable fees with 0% interest monthly installment plans.</p>
        </li>
        <li class="wt" style="padding: 28px;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M22 7 13.5 15.5 8.5 10.5 2 17"></path><path d="M16 7h6v6"></path></svg></span>
          <p class="wn">04</p>
          <h3>Placements &amp; Internships</h3>
          <p>Dedicated cell connecting you with India's hiring network.</p>
        </li>
        <li class="wt" style="padding: 28px; grid-column: span 2;">
          <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2z"></path><path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"></path></svg></span>
          <p class="wn">05</p>
          <h3>Mentorship &amp; Leadership Training</h3>
          <p>One-on-one sessions with seasoned mentors and alumni network access.</p>
        </li>
      </ol>
    </section>

    <!-- 9. UNIVERSITIES OFFERING MBA -->
    <section id="universities" style="padding: 64px 32px; background: var(--offwhite); margin-bottom: 72px; border: 1px solid var(--hairline); border-radius: 8px;" data-reveal>
      <div class="head" style="gap: 16px; margin-bottom: 32px;">
        <p class="lbl">Universities</p>
        <h2 class="h2">Universities Offering Online MBA</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 1px; background: var(--hairline); border: 1px solid var(--hairline);" id="mba-unis-grid">
        <?php foreach (array_slice($UNIVERSITIES, 0, 6) as $u): ?>
          <div class="lg" style="height: 150px; padding: 20px;">
            <?php if (!empty($u['logo']) && file_exists(__DIR__ . '/' . $u['logo'])): ?>
              <img src="<?= BASE_URL . $u['logo'] ?>" alt="<?= htmlspecialchars($u['name']) ?>" class="lg-img" style="max-height: 40px;">
            <?php else: ?>
              <svg class="ic mk" viewBox="0 0 32 32"><rect x="4" y="4" width="24" height="24"></rect><path d="M16 9l7 7-7 7-7-7z"></path></svg>
            <?php endif; ?>
            <span style="font-weight: 600; color: var(--navy);"><?= $u['name'] ?></span>
            <a class="tl" href="#enquiry-form" style="min-height: 32px; font-size: 11px;">Compare &amp; Apply</a>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- 10. CAREERS SECTION -->
    <section id="careers" style="padding-bottom: 72px;" data-reveal>
      <div class="head" style="gap: 16px; margin-bottom: 32px;">
        <p class="lbl">Careers</p>
        <h2 class="h2">Where MBAs Work</h2>
      </div>

      <p class="mono" style="color: var(--navy); margin-bottom: 14px;">High-Growth Roles</p>
      <ul style="list-style: none; margin: 0 0 40px; padding: 0; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px;" id="mba-career-roles">
        <li class="irow"><span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect x="2" y="6" width="20" height="14" rx="2"></rect></svg></span>Marketing Manager</li>
        <li class="irow"><span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg></span>Financial Analyst</li>
        <li class="irow"><span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg></span>HR Business Partner</li>
        <li class="irow"><span class="tile"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 2v20M2 12h20"></path></svg></span>Operations Head</li>
        <li class="irow"><span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M3 3v18h18"></path><path d="M18 17V9"></path><path d="M13 17V5"></path></svg></span>Business Consultant</li>
        <li class="irow"><span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="m16.24 7.76-2.12 6.36-6.36 2.12 2.12-6.36z"></path></svg></span>Product Manager</li>
      </ul>

      <!-- Sectors on Navy Strip -->
      <div style="background: var(--navy); padding: 32px 36px; box-shadow: inset 0 2px 0 var(--orange);">
        <p class="lbl dk" style="margin-bottom: 16px;">Top Hiring Sectors</p>
        <div style="display: flex; gap: 28px; flex-wrap: wrap; color: var(--offwhite); font-weight: 500;">
          <span>IT &amp; Software</span>
          <span style="color: rgba(255,255,255,0.3);">/</span>
          <span>BFSI &amp; Fintech</span>
          <span style="color: rgba(255,255,255,0.3);">/</span>
          <span>Consulting &amp; Advisory</span>
          <span style="color: rgba(255,255,255,0.3);">/</span>
          <span>FMCG &amp; Retail</span>
          <span style="color: rgba(255,255,255,0.3);">/</span>
          <span>Healthcare &amp; Pharma</span>
        </div>
      </div>
    </section>

    <!-- 11. FAQS ACCORDION -->
    <section id="faqs" style="padding-bottom: 32px;" data-reveal>
      <div class="head" style="gap: 16px; margin-bottom: 32px;">
        <p class="lbl">FAQs</p>
        <h2 class="h2">Frequently Asked Questions</h2>
      </div>

      <div style="border-top: 2px solid var(--navy);">
        <div style="border-bottom: 1px solid var(--hairline); padding-bottom: 12px;">
          <button class="acc-h" aria-expanded="true">
            <span>Is an online MBA degree valid for MNCs and government jobs?</span>
            <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path></svg>
          </button>
          <div style="padding-top: 8px;">
            <p style="color: var(--body);">Yes. As per UGC-DEB notifications, online degrees awarded by recognized universities hold identical legal status and equivalence to on-campus full-time degrees for employment and higher education.</p>
          </div>
        </div>

        <div style="border-bottom: 1px solid var(--hairline);">
          <button class="acc-h" aria-expanded="false">
            <span>What is the eligibility requirement to enroll?</span>
            <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14M12 5v14"></path></svg>
          </button>
          <div style="display: none; padding: 12px 0 20px;">
            <p style="color: var(--body);">Candidates must possess a Bachelor's degree (any discipline) from a recognized university with a minimum aggregate of 50% (45% for reserved categories). No entrance exam mandatory for most partner universities.</p>
          </div>
        </div>

        <div style="border-bottom: 1px solid var(--hairline);">
          <button class="acc-h" aria-expanded="false">
            <span>How are examinations conducted?</span>
            <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14M12 5v14"></path></svg>
          </button>
          <div style="display: none; padding: 12px 0 20px;">
            <p style="color: var(--body);">Exams are 100% online through an AI-proctored portal with flexible slot booking on weekends, allowing you to take exams comfortably from home.</p>
          </div>
        </div>

        <div style="border-bottom: 1px solid var(--hairline);">
          <button class="acc-h" aria-expanded="false">
            <span>Can I pay my semester fees in monthly installments?</span>
            <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14M12 5v14"></path></svg>
          </button>
          <div style="display: none; padding: 12px 0 20px;">
            <p style="color: var(--body);">Yes, eShikshaHub offers 0% interest No-Cost EMI options through leading banking partners, starting at approximately ₹2,000 to ₹3,000 per month.</p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Right Sticky Enquiry Card (Desktop 400px, top: 88px) -->
  <aside style="position: sticky; top: 88px; background: var(--offwhite); border: 1px solid var(--hairline); border-top: 4px solid var(--orange); padding: 32px;" id="enquiry-form">
    <div class="head" style="gap: 8px; margin-bottom: 20px;">
      <p class="lbl" style="font-size: 11px;">Admission Open</p>
      <h3 class="h3" style="font-size: 24px;">Enquire for Online MBA</h3>
      <p style="font-size: 14px; color: var(--body);">Get free fee structure breakdown &amp; syllabus brochure.</p>
    </div>

    <form class="ajax-form" aria-label="MBA admission enquiry" style="display: flex; flex-direction: column; gap: 14px;">
      <input type="hidden" name="source" value="Course MBA Page Sticky Aside">
      <input type="hidden" name="course" value="MBA">
      <div>
        <label class="fl-l" for="mba-name">Name</label>
        <div class="fld">
          <svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="8" r="5"></circle><path d="M20 21a8 8 0 0 0-16 0"></path></svg>
          <input id="mba-name" name="name" type="text" placeholder="Your full name" required>
        </div>
      </div>

      <div>
        <label class="fl-l" for="mba-mob">Mobile</label>
        <div class="fld">
          <svg class="ic" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <input id="mba-mob" name="mobile" type="tel" placeholder="10-digit mobile" required>
        </div>
      </div>

      <div>
        <label class="fl-l" for="mba-spec">Preferred Specialization</label>
        <div class="fld">
          <svg class="ic" viewBox="0 0 24 24"><path d="m16.24 7.76-2.12 6.36-6.36 2.12 2.12-6.36z"></path><circle cx="12" cy="12" r="10"></circle></svg>
          <select id="mba-spec" name="specialization">
            <option value="Marketing" selected>Marketing</option>
            <option value="Finance">Finance</option>
            <option value="HR">Human Resources</option>
            <option value="Business Analytics">Business Analytics</option>
            <option value="Data Science">Data Science</option>
            <option value="Operations">Operations</option>
            <option value="IT & FinTech">IT &amp; FinTech</option>
            <option value="General Management">General Management</option>
          </select>
          <svg class="ic chev" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"></path></svg>
        </div>
      </div>

      <div>
        <label class="fl-l" for="mba-uni">Preferred University</label>
        <div class="fld">
          <svg class="ic" viewBox="0 0 24 24"><path d="M3 22h18"></path><path d="M6 18v-7"></path><path d="M10 18v-7"></path><path d="M14 18v-7"></path><path d="M18 18v-7"></path><path d="m12 2 8 5H4z"></path></svg>
          <select id="mba-uni" name="university">
            <option value="Any UGC University" selected>Any Top UGC University</option>
            <option value="Manipal University Jaipur">Manipal University Jaipur</option>
            <option value="Amity Online">Amity Online</option>
            <option value="Chandigarh University">Chandigarh University</option>
            <option value="LPU Online">LPU Online</option>
            <option value="Sikkim Manipal">Sikkim Manipal</option>
            <option value="UPES">UPES</option>
          </select>
          <svg class="ic chev" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"></path></svg>
        </div>
      </div>

      <button class="btn btn-p full" type="submit" style="margin-top: 6px;">
        <span>Book Free MBA Counselling</span>
        <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
      </button>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-top: 4px;">
        <a class="btn btn-s full" href="tel:<?= PHONE_CLEAN ?>" style="font-size: 14px;">
          <span>Call Us</span>
        </a>
        <a class="btn btn-w full" href="<?= WHATSAPP_LINK ?>" target="_blank" rel="noopener" style="font-size: 14px;">
          <span>WhatsApp</span>
        </a>
      </div>
    </form>
  </aside>
</div>

<!-- PARTNERS MARQUEE -->
<?php require_once __DIR__ . '/includes/partners-marquee.php'; ?>

<!-- LOCKED CTA -->
<?php 
$cta_heading = 'Start Your MBA Today';
$cta_sub = 'Compare approved universities, get special fee grants and enroll in 48 hours.';
require __DIR__ . '/includes/cta.php'; 
?>

<!-- LOCKED FOOTER -->
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<style>
@media (max-width: 1199px) {
  #mba-keyfacts-row {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #mba-layout-grid {
    grid-template-columns: 1fr !important;
  }
  #enquiry-form {
    position: static !important;
    order: -1;
    margin-bottom: 40px;
  }
  #mba-specs-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #mba-formats-mosaic {
    grid-template-columns: 1fr !important;
    grid-template-rows: auto !important;
  }
}
@media (max-width: 767px) {
  #mba-overview-tiles {
    grid-template-columns: 1fr !important;
  }
  #sem1-subjects {
    grid-template-columns: 1fr !important;
    margin-left: 0 !important;
  }
  #mba-why-tiles {
    grid-template-columns: 1fr !important;
  }
  #mba-unis-grid {
    grid-template-columns: 1fr !important;
  }
  #mba-career-roles {
    grid-template-columns: 1fr !important;
  }
}
</style>
