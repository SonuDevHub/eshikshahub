<?php
/**
 * Master Course Detail Template
 * Strictly adheres to DESIGN.md Build Spec and course-mba.php visual system
 */

require_once __DIR__ . '/course-data.php';

if (empty($course_key)) {
    $course_key = $_GET['course'] ?? $_GET['id'] ?? pathinfo($_SERVER['PHP_SELF'] ?? '', PATHINFO_FILENAME);
    $course_key = strtolower(str_replace(['course-', '.php'], '', $course_key));
}

if (empty($course_key) || !isset($COURSE_DETAILS[$course_key])) {
    $course_key = 'bba';
}

$c = $COURSE_DETAILS[$course_key];

$current_page = 'course-detail';
$is_course_page = true;
$page_title = 'Online ' . ($c['abbr'] ?? 'Degree') . ' Program | ' . ($c['name'] ?? 'Higher Education') . ' | UGC Approved';
$page_desc = 'Enroll in UGC-approved Online ' . ($c['abbr'] ?? 'Degree') . ' (' . ($c['name'] ?? 'Program') . ') with flexible classes, starting at ₹' . ($c['starting_fee'] ?? '10,000') . '/sem, no-cost EMI, and dedicated placement assistance.';

require_once __DIR__ . '/header.php';
require_once __DIR__ . '/navbar.php';

// Protect $c from being clobbered by any loops in headers/navbars
$c = $COURSE_DETAILS[$course_key];
?>

<!-- 1. HERO SECTION -->
<section style="position: relative; min-height: 560px; display: flex; align-items: flex-end; background: var(--navy);">
  <div class="ph" style="position: absolute; inset: 0; border-radius: 0;">
    <img src="<?= BASE_URL . ($c['hero_image'] ?? 'assets/img/stock/developer-coding.jpg') ?>" alt="<?= htmlspecialchars($c['name'] ?? 'Course') ?>" class="ph-img" style="opacity: 0.45; object-position: center 25%; width: 100%; height: 100%; object-fit: cover;">
  </div>
  <div class="ov" style="background: linear-gradient(180deg, rgba(24, 29, 56, 0.65) 0%, rgba(24, 29, 56, 0.92) 100%);"></div>

  <div class="container" style="position: relative; z-index: 5; padding-bottom: 88px; padding-top: 140px;">
    <div class="head" style="max-width: 720px; gap: 20px;">
      <nav aria-label="Breadcrumb" class="mono" style="display: flex; gap: 10px; color: var(--muted-dk);">
        <a href="<?= BASE_URL ?>index.php" style="color: var(--muted-dk);">Home</a>
        <span aria-hidden="true">/</span>
        <a href="<?= BASE_URL ?>courses.php" style="color: var(--muted-dk);">Courses</a>
        <span aria-hidden="true">/</span>
        <span style="color: var(--offwhite);"><?= $c['abbr'] ?? 'Course' ?></span>
      </nav>
      <h1 class="h1"><?= htmlspecialchars($c['hero_title'] ?? ('Online ' . ($c['abbr'] ?? 'Degree') . ' Program')) ?></h1>
      <p class="lead pdk"><?= htmlspecialchars($c['hero_tagline'] ?? '') ?></p>
      <div style="display: flex; gap: 14px; margin-top: 8px; flex-wrap: wrap;">
        <a class="btn btn-p" href="#enquiry-form" style="border-radius: 8px;">
          <span>Apply Now</span>
          <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
        </a>
        <a class="btn btn-s dk" href="#curriculum" style="border-radius: 8px;">
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
    <div class="stats floating-card" style="grid-template-columns: repeat(5, minmax(0, 1fr)); background: var(--white); border: 1px solid var(--hairline); border-top: 3px solid var(--orange); border-radius: 8px; box-shadow: 0 18px 42px rgba(24, 29, 56, 0.14); overflow: hidden;" id="course-keyfacts-row">
      <div class="stat" style="padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4M8 2v4M3 10h18"></path></svg></span>
        <p class="stat-l">Duration</p>
        <p class="stat-v"><span class="count-up" data-count="<?= $c['duration_months'] ?>"><?= $c['duration_months'] ?></span><small>Months</small></p>
        <p class="stat-h"><?= $c['semesters'] ?> semesters</p>
      </div>

      <div class="stat" style="padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M6 3h12"></path><path d="M6 8h12"></path><path d="m6 13 8.5 8"></path><path d="M6 13h3"></path><path d="M9 13c6.667 0 6.667-10 0-10"></path></svg></span>
        <p class="stat-l">Fees</p>
        <p class="stat-v">₹<span class="count-up" data-count="<?= str_replace(',', '', $c['starting_fee']) ?>"><?= $c['starting_fee'] ?></span><small>/sem</small></p>
        <p class="stat-h">Starting fee</p>
      </div>

      <div class="stat" style="padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"></rect><path d="M2 10h20"></path></svg></span>
        <p class="stat-l">Payment</p>
        <p class="stat-v">No-Cost<small>EMI</small></p>
        <p class="stat-h">Flexible options</p>
      </div>

      <div class="stat" style="padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"></path></svg></span>
        <p class="stat-l">Mode</p>
        <p class="stat-v"><span class="count-up" data-count="100">100</span>%<small>Online</small></p>
        <p class="stat-h">Live + recorded</p>
      </div>

      <div class="stat" style="padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg></span>
        <p class="stat-l">Approval</p>
        <p class="stat-v">UGC<small>Approved</small></p>
        <p class="stat-h">Govt. recognised</p>
      </div>
    </div>
  </div>
</section>

<!-- 3. STICKY TAB NAV (Scrollspy) -->
<nav aria-label="On this page" style="position: sticky; top: 0; z-index: 70; background: var(--white); border-bottom: 1px solid var(--hairline); height: 60px; box-shadow: 0 4px 12px rgba(0,0,0,0.04);">
  <div class="container" style="display: flex; align-items: stretch; height: 100%; overflow-x: auto; white-space: nowrap;">
    <a class="nvl on" href="#overview" style="padding: 0 18px 0 0; border-bottom: 2px solid var(--orange);">Overview</a>
    <a class="nvl" href="#specializations" style="padding: 0 18px;">Specializations</a>
    <a class="nvl" href="#curriculum" style="padding: 0 18px;">Curriculum</a>
    <a class="nvl" href="#formats" style="padding: 0 18px;">Formats</a>
    <a class="nvl" href="#why-us" style="padding: 0 18px;">Why Us</a>
    <a class="nvl" href="#universities" style="padding: 0 18px;">Universities</a>
    <a class="nvl" href="#careers" style="padding: 0 18px;">Careers</a>
    <a class="nvl" href="#faqs" style="padding: 0 18px;">FAQs</a>
  </div>
</nav>

<!-- MAIN BODY: Content + Sticky Enquiry Aside (Desktop 400px) -->
<div class="container" style="padding-top: 48px; padding-bottom: 96px; display: grid; grid-template-columns: minmax(0, 1fr) 400px; gap: 64px; align-items: start;" id="course-layout-grid">
  <!-- Left Main Column -->
  <main style="min-width: 0;">

    <!-- 4. OVERVIEW -->
    <section id="overview" style="padding-bottom: 64px;" data-reveal>
      <div class="head" style="gap: 16px; margin-bottom: 32px;">
        <p class="lbl">Overview</p>
        <h2 class="h2">About the Program</h2>
        <p class="lead"><?= htmlspecialchars($c['overview_p'] ?? $c['hero_tagline'] ?? 'A comprehensive, UGC-approved online degree program designed to accelerate your career.') ?></p>
      </div>

      <ul style="list-style: none; margin: 0; padding: 0; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 16px;" id="course-overview-tiles">
        <li class="wt" style="padding: 24px; border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M10 7.75a.75.75 0 0 1 1.142-.638l3.664 2.249a.75.75 0 0 1 0 1.278l-3.664 2.25a.75.75 0 0 1-1.142-.64z"></path><path d="M12 17v4"></path><path d="M8 21h8"></path><rect x="2" y="3" width="20" height="14" rx="2"></rect></svg></span>
          <p class="wn">01</p>
          <h3 style="font-size: 18px;">Live &amp; Recorded Lectures</h3>
          <p style="font-size: 14px; color: var(--body);">Interactive weekend classes with lifetime access to archived recordings.</p>
        </li>
        <li class="wt" style="padding: 24px; border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect x="2" y="6" width="20" height="14" rx="2"></rect></svg></span>
          <p class="wn">02</p>
          <h3 style="font-size: 18px;">Hands-on Industry Projects</h3>
          <p style="font-size: 14px; color: var(--body);">Build demonstrable portfolio work through real-world case studies.</p>
        </li>
        <li class="wt" style="padding: 24px; border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg></span>
          <p class="wn">03</p>
          <h3 style="font-size: 18px;">Global Benchmark Curriculum</h3>
          <p style="font-size: 14px; color: var(--body);">Syllabus vetted by academic councils and top hiring corporations.</p>
        </li>
        <li class="wt" style="padding: 24px; border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M2 3h20"></path><path d="M21 3v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3"></path><path d="m7 21 5-5 5 5"></path></svg></span>
          <p class="wn">04</p>
          <h3 style="font-size: 18px;">1-on-1 Mentor Guidance</h3>
          <p style="font-size: 14px; color: var(--body);">Dedicated educational advisors support your study milestones.</p>
        </li>
        <li class="wt" style="padding: 24px; border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><rect x="8" y="2" width="8" height="4" rx="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M12 11h4"></path><path d="M12 16h4"></path><path d="M8 11h.01"></path><path d="M8 16h.01"></path></svg></span>
          <p class="wn">05</p>
          <h3 style="font-size: 18px;">Capstone Dissertation</h3>
          <p style="font-size: 14px; color: var(--body);">Synthesize domain expertise in an in-depth final semester project.</p>
        </li>
        <li class="wt" style="padding: 24px; border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg></span>
          <p class="wn">06</p>
          <h3 style="font-size: 18px;">Placement Assistance</h3>
          <p style="font-size: 14px; color: var(--body);">Mock interviews, ATS resumes, and hiring network introductions.</p>
        </li>
      </ul>
    </section>

    <!-- 5. SPECIALIZATIONS -->
    <section id="specializations" style="padding-bottom: 64px;" data-reveal>
      <div class="head" style="margin-bottom: 32px;">
        <p class="lbl">Specializations</p>
        <h2 class="h2">In-Demand Specializations</h2>
        <p class="lead">Pick a major focused on your career goals and current market hiring demand.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px;" id="course-specs-grid">
        <?php foreach ($c['specializations'] as $idx => $spec): ?>
          <div class="lift" style="background: var(--white); border: 1px solid var(--hairline); padding: 24px; display: flex; flex-direction: column; gap: 12px; border-radius: 8px;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span class="mono" style="background: var(--tint); color: var(--orange-dark); padding: 4px 10px; font-size: 11px; border-radius: 4px;">
                Specialization 0<?= $idx + 1 ?>
              </span>
              <span class="num or" style="font-size: 28px;">0<?= $idx + 1 ?></span>
            </div>
            <h3 class="h3" style="font-size: 19px;"><?= htmlspecialchars($spec['title']) ?></h3>
            <p style="font-size: 14px; color: var(--body);"><?= htmlspecialchars($spec['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- 6. CURRICULUM -->
    <section id="curriculum" style="padding-bottom: 64px;" data-reveal>
      <div class="head" style="margin-bottom: 32px;">
        <p class="lbl">Curriculum</p>
        <h2 class="h2">Detailed Semester Syllabus</h2>
        <p class="lead">Vetted by academic experts to cover theory, implementation, and modern tools.</p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 8px;">
        <?php $sem_idx = 0; foreach ($c['curriculum'] as $sem_title => $subjects): $sem_idx++; ?>
          <div style="border: 1px solid var(--hairline); background: var(--white); border-radius: 8px; overflow: hidden;">
            <button class="acc-h" aria-expanded="<?= $sem_idx === 1 ? 'true' : 'false' ?>" style="padding: 20px 24px; width: 100%; display: flex; justify-content: space-between; align-items: center; background: none; border: none; cursor: pointer; text-align: left;">
              <span style="display: flex; align-items: center; gap: 14px;">
                <span class="mono" style="background: var(--navy); color: var(--offwhite); padding: 4px 10px; font-size: 11px; border-radius: 4px;"><?= $sem_title ?></span>
                <span style="font-family: 'Nunito', sans-serif; font-size: 18px; font-weight: 700; color: var(--navy);"><?= $sem_title ?> Core Modules</span>
              </span>
              <svg class="ic" viewBox="0 0 24 24" style="color: var(--orange); transition: transform 0.2s;"><path d="<?= $sem_idx === 1 ? 'M5 12h14' : 'M5 12h14M12 5v14' ?>"></path></svg>
            </button>
            <div style="display: <?= $sem_idx === 1 ? 'block' : 'none' ?>; padding: 0 24px 20px; border-top: 1px solid var(--hairline);">
              <ul style="list-style: none; margin: 16px 0 0; padding: 0; display: grid; grid-template-columns: 1fr; gap: 10px;">
                <?php foreach ($subjects as $s_item): ?>
                  <li style="display: flex; align-items: center; gap: 12px; font-size: 15px; color: var(--body);">
                    <svg class="ic" viewBox="0 0 24 24" style="width: 16px; height: 16px; color: var(--orange); flex: none;"><circle cx="12" cy="12" r="4"></circle></svg>
                    <span><?= htmlspecialchars($s_item) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- 7. FORMATS -->
    <section id="formats" style="padding-bottom: 64px;" data-reveal>
      <div class="head" style="margin-bottom: 32px;">
        <p class="lbl">Formats</p>
        <h2 class="h2">How You Will Learn</h2>
        <p class="lead">Built to fit around your working schedule and personal life.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px;">
        <div class="wt" style="border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M2 3h20v14H2z"></path><path d="M8 21h8"></path><path d="M12 17v4"></path></svg></span>
          <p class="wn">01</p>
          <h3>Interactive LMS Portal</h3>
          <p>Access notes, videos, quizzes, and e-books 24/7 on laptop, tablet or mobile phone.</p>
        </div>
        <div class="wt" style="border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span>
          <p class="wn">02</p>
          <h3>Weekend Live Masterclasses</h3>
          <p>Attend live doubt-clearing lectures every weekend without taking time off your weekday job.</p>
        </div>
        <div class="wt" style="border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg></span>
          <p class="wn">03</p>
          <h3>Continuous Assessment</h3>
          <p>Short periodic assignments and project submissions keep you consistently on track.</p>
        </div>
        <div class="wt" style="border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span>
          <p class="wn">04</p>
          <h3>Peer &amp; Alumni Forum</h3>
          <p>Collaborate with classmates across India in active discussion groups and network for referrals.</p>
        </div>
      </div>
    </section>

    <!-- 8. WHY US -->
    <section id="why-us" style="padding-bottom: 64px;" data-reveal>
      <div class="head" style="margin-bottom: 32px;">
        <p class="lbl">Why eShikshaHub</p>
        <h2 class="h2">Why Enroll Through Us?</h2>
        <p class="lead">Zero admission fees, unbiased guidance, and end-to-end learner support.</p>
      </div>

      <div style="background: var(--navy); padding: 40px; border-radius: 8px; color: var(--offwhite); display: flex; flex-direction: column; gap: 24px;">
        <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px;" id="course-why-metrics">
          <div style="border-left: 2px solid var(--orange); padding-left: 16px;">
            <p class="num or" style="font-size: 40px; color: var(--orange);">100%</p>
            <p style="font-weight: 700; font-size: 16px; margin: 4px 0;">Free Counselling</p>
            <p style="font-size: 13px; color: var(--muted-dk);">No hidden charges or application surcharges.</p>
          </div>
          <div style="border-left: 2px solid var(--orange); padding-left: 16px;">
            <p class="num or" style="font-size: 40px; color: var(--orange);">₹0</p>
            <p style="font-weight: 700; font-size: 16px; margin: 4px 0;">No-Cost EMI</p>
            <p style="font-size: 13px; color: var(--muted-dk);">Split your semester fees into affordable installments.</p>
          </div>
          <div style="border-left: 2px solid var(--orange); padding-left: 16px;">
            <p class="num or" style="font-size: 40px; color: var(--orange);">12+</p>
            <p style="font-weight: 700; font-size: 16px; margin: 4px 0;">Partner Universities</p>
            <p style="font-size: 13px; color: var(--muted-dk);">Direct tie-ups with top NAAC A+ accredited partners.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- 9. UNIVERSITIES COMPARISON -->
    <section id="universities" style="padding-bottom: 64px;" data-reveal>
      <div class="head" style="margin-bottom: 32px;">
        <p class="lbl">Universities</p>
        <h2 class="h2">Top Universities Offering <?= $c['abbr'] ?></h2>
        <p class="lead">Compare fees and eligibility criteria across our partner institutions.</p>
      </div>

      <div style="border: 1px solid var(--hairline); background: var(--white); border-radius: 8px; overflow: hidden;">
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
            <thead>
              <tr style="background: var(--offwhite); border-bottom: 1px solid var(--hairline);">
                <th style="padding: 16px 20px; font-family: 'JetBrains Mono', monospace; font-size: 12px; text-transform: uppercase;">University</th>
                <th style="padding: 16px 20px; font-family: 'JetBrains Mono', monospace; font-size: 12px; text-transform: uppercase;">Starting Fee</th>
                <th style="padding: 16px 20px; font-family: 'JetBrains Mono', monospace; font-size: 12px; text-transform: uppercase;">Eligibility</th>
                <th style="padding: 16px 20px; font-family: 'JetBrains Mono', monospace; font-size: 12px; text-transform: uppercase; text-align: right;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($c['partner_unis'] as $u_item): ?>
                <tr style="border-bottom: 1px solid var(--hairline);">
                  <td style="padding: 16px 20px; font-weight: 700; color: var(--navy);"><?= htmlspecialchars($u_item['name']) ?></td>
                  <td style="padding: 16px 20px; color: var(--orange-dark); font-weight: 600;"><?= htmlspecialchars($u_item['fee']) ?></td>
                  <td style="padding: 16px 20px; color: var(--body);"><?= htmlspecialchars($u_item['eligibility']) ?></td>
                  <td style="padding: 16px 20px; text-align: right;">
                    <a href="#enquiry-form" class="tl" style="min-height: auto; padding: 0;">Apply</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- 10. CAREERS -->
    <section id="careers" style="padding-bottom: 64px;" data-reveal>
      <div class="head" style="margin-bottom: 32px;">
        <p class="lbl">Careers</p>
        <h2 class="h2">Career Opportunities &amp; Packages</h2>
        <p class="lead">Typical job profiles and compensation packages after completing Online <?= $c['abbr'] ?>.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px;" id="course-careers-grid">
        <?php foreach ($c['careers'] as $car): ?>
          <div class="lift" style="background: var(--white); border: 1px solid var(--hairline); padding: 24px; display: flex; flex-direction: column; gap: 8px; border-radius: 8px;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <h3 class="h3" style="font-size: 18px;"><?= htmlspecialchars($car['role']) ?></h3>
              <span class="mono" style="color: var(--orange-dark); font-weight: 700; font-size: 13px;"><?= htmlspecialchars($car['pkg']) ?></span>
            </div>
            <p style="font-size: 14px; color: var(--body);"><?= htmlspecialchars($car['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- 11. FAQS -->
    <section id="faqs" style="padding-bottom: 64px;" data-reveal>
      <div class="head" style="margin-bottom: 32px;">
        <p class="lbl">FAQs</p>
        <h2 class="h2">Frequently Asked Questions</h2>
        <p class="lead">Got questions regarding admissions, degrees or fees? Find answers below.</p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 8px;">
        <?php foreach ($c['faqs'] as $f_idx => $faq): ?>
          <div style="border: 1px solid var(--hairline); background: var(--white); border-radius: 8px; overflow: hidden;">
            <button class="acc-h" aria-expanded="<?= $f_idx === 0 ? 'true' : 'false' ?>" style="padding: 20px 24px; width: 100%; display: flex; justify-content: space-between; align-items: center; background: none; border: none; cursor: pointer; text-align: left;">
              <span style="font-family: 'Nunito', sans-serif; font-size: 17px; font-weight: 700; color: var(--navy);"><?= htmlspecialchars($faq['q']) ?></span>
              <svg class="ic" viewBox="0 0 24 24" style="color: var(--orange); flex: none; margin-left: 16px;"><path d="<?= $f_idx === 0 ? 'M5 12h14' : 'M5 12h14M12 5v14' ?>"></path></svg>
            </button>
            <div style="display: <?= $f_idx === 0 ? 'block' : 'none' ?>; padding: 0 24px 20px; border-top: 1px solid var(--hairline);">
              <p style="font-size: 15px; color: var(--body); line-height: 1.6; margin: 12px 0 0;"><?= htmlspecialchars($faq['a']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  </main>

  <!-- Right Aside: Sticky 400px Admission Form -->
  <aside style="position: sticky; top: 80px; z-index: 60;" id="course-aside-wrap">
    <div style="background: var(--white); border: 1px solid var(--hairline); border-radius: 8px; padding: 32px; box-shadow: 0 12px 32px rgba(24, 29, 56, .08);" id="enquiry-form">
      <div class="head" style="margin-bottom: 24px; gap: 8px;">
        <p class="lbl">Admission <?= date('Y') ?></p>
        <h3 class="h3" style="font-size: 22px;">Check Eligibility &amp; Fees</h3>
        <p style="font-size: 13px; color: var(--body);">Connect with a senior academic advisor for <?= $c['abbr'] ?>.</p>
      </div>

      <form class="ajax-form" aria-label="Course Enquiry Form" style="display: flex; flex-direction: column; gap: 14px;">
        <input type="hidden" name="source" value="<?= $c['abbr'] ?> Course Detail Page">
        <input type="hidden" name="course" value="<?= $c['abbr'] ?>">

        <div>
          <label class="fl-l" for="ef-name">Full Name</label>
          <div class="fld">
            <svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="8" r="5"></circle><path d="M20 21a8 8 0 0 0-16 0"></path></svg>
            <input id="ef-name" name="name" type="text" placeholder="Your name" required style="border-radius: 8px;">
          </div>
        </div>

        <div>
          <label class="fl-l" for="ef-mobile">Mobile Number</label>
          <div class="fld">
            <svg class="ic" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            <input id="ef-mobile" name="mobile" type="tel" placeholder="10-digit mobile" required style="border-radius: 8px;">
          </div>
        </div>

        <div>
          <label class="fl-l" for="ef-email">Email Address</label>
          <div class="fld">
            <svg class="ic" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
            <input id="ef-email" name="email" type="email" placeholder="you@example.com" style="border-radius: 8px;">
          </div>
        </div>

        <div>
          <label class="fl-l" for="ef-uni">Preferred University</label>
          <div class="fld">
            <svg class="ic" viewBox="0 0 24 24"><path d="M3 22h18"></path><path d="M6 18v-7"></path><path d="M10 18v-7"></path><path d="M14 18v-7"></path><path d="M18 18v-7"></path><path d="m12 2 8 5H4z"></path></svg>
            <select id="ef-uni" name="university" style="border-radius: 8px;">
              <option value="">Any UGC-Approved Partner</option>
              <?php foreach ($c['partner_unis'] as $u_item): ?>
                <option value="<?= htmlspecialchars($u_item['name']) ?>"><?= htmlspecialchars($u_item['name']) ?></option>
              <?php endforeach; ?>
            </select>
            <svg class="ic chev" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"></path></svg>
          </div>
        </div>

        <button class="btn btn-p full" type="submit" style="margin-top: 8px; border-radius: 8px;">
          <span>Request Free Callback</span>
          <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
        </button>

        <p style="font-size: 11px; color: var(--muted); text-align: center; margin-top: 6px;">
          🔒 100% Privacy Guaranteed. No Spam Ever.
        </p>
      </form>

      <!-- Quick Trust Points -->
      <div style="margin-top: 24px; padding-top: 20px; border-top: 1px solid var(--hairline); display: flex; flex-direction: column; gap: 8px;">
        <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: var(--navy); font-weight: 500;">
          <svg class="ic" viewBox="0 0 24 24" style="width: 16px; height: 16px; color: var(--orange);"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span>UGC &amp; AICTE Approved Degree</span>
        </div>
        <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: var(--navy); font-weight: 500;">
          <svg class="ic" viewBox="0 0 24 24" style="width: 16px; height: 16px; color: var(--orange);"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span>No-Cost EMI Starting ₹<?= $c['starting_fee'] ?>/sem</span>
        </div>
        <div style="display: flex; align-items: center; gap: 8px; font-size: 12px; color: var(--navy); font-weight: 500;">
          <svg class="ic" viewBox="0 0 24 24" style="width: 16px; height: 16px; color: var(--orange);"><polyline points="20 6 9 17 4 12"></polyline></svg>
          <span>100% Placement &amp; Resume Assistance</span>
        </div>
      </div>
    </div>
  </aside>
</div>

<!-- 12. LOCKED CTA -->
<?php 
$cta_heading = 'Ready to Start Your ' . $c['abbr'] . '?';
$cta_sub = 'Join thousands of working learners advancing their career with recognized online degrees.';
require __DIR__ . '/cta.php'; 
?>

<!-- 13. LOCKED FOOTER -->
<?php require_once __DIR__ . '/footer.php'; ?>

<style>
@media (max-width: 1199px) {
  #course-keyfacts-row {
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
  }
  #course-layout-grid {
    grid-template-columns: 1fr !important;
  }
  #course-aside-wrap {
    position: static !important;
    max-width: 540px;
    margin: 48px auto 0;
  }
  #course-overview-tiles {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #course-why-metrics {
    grid-template-columns: 1fr !important;
    gap: 16px !important;
  }
}

@media (max-width: 767px) {
  #course-keyfacts-row {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #course-overview-tiles {
    grid-template-columns: 1fr !important;
  }
  #course-specs-grid {
    grid-template-columns: 1fr !important;
  }
  #course-careers-grid {
    grid-template-columns: 1fr !important;
  }
}
</style>
