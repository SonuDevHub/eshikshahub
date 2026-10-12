<?php
$current_page = 'refer';
$page_title = 'Refer & Earn Cashback | eShikshaHub';
$page_desc = 'Invite friends to enroll in UGC-approved degree courses with eShikshaHub and earn up to ₹10,000 referral reward per successful admission.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- 1. HERO SECTION -->
<section style="position: relative; min-height: 680px; display: flex; flex-direction: column; justify-content: space-between; overflow: hidden; background: var(--navy);">
  <div class="ph" style="position: absolute; inset: 0; border-radius: 0;">
    <img src="<?= BASE_URL ?>assets/img/stock/friends-laptop.jpg" alt="Two friends sharing a laptop" class="ph-img" style="opacity: 0.45; object-position: center 30%; width: 100%; height: 100%; object-fit: cover;">
  </div>
  <div class="ov" style="background: linear-gradient(180deg, rgba(24, 29, 56, 0.75) 0%, rgba(24, 29, 56, 0.90) 100%);"></div>

  <!-- Hero Head -->
  <div class="container" style="position: relative; z-index: 5; padding-top: 150px; padding-bottom: 32px;">
    <div class="head" style="max-width: 680px; gap: 20px;">
      <nav aria-label="Breadcrumb" class="mono" style="display: flex; gap: 10px; color: var(--muted-dk);">
        <a href="<?= BASE_URL ?>index.php" style="color: var(--muted-dk);">Home</a>
        <span aria-hidden="true">/</span>
        <span style="color: var(--offwhite);">Refer &amp; Earn</span>
      </nav>
      <h1 class="h1">Refer &amp; Earn</h1>
      <p class="lead pdk">Invite friends to study online and earn up to ₹10,000 cashback per admission.</p>
      <div style="margin-top: 8px;">
        <a class="btn btn-p" href="#refer-form" style="border-radius: 8px;">
          <span>Start Referring Now</span>
          <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- 2. FLOATING STATS BAND (Floating White Card) -->
<section aria-label="Referral reward stats" class="floating-stats-band" style="position: relative; z-index: 20; margin-top: -56px; margin-bottom: 24px;">
  <div class="container">
    <div class="stats floating-card" style="grid-template-columns: repeat(4, minmax(0, 1fr)); background: var(--white); border: 1px solid var(--hairline); border-top: 3px solid var(--orange); border-radius: 8px; box-shadow: 0 18px 42px rgba(24, 29, 56, 0.14); overflow: hidden;" id="refer-hero-stats">
      <div class="stat" style="background: var(--white); padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path><path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path></svg></span>
        <p class="stat-l">Max Cashback</p>
        <p class="stat-v">₹<span class="count-up" data-count="10000">10,000</span></p>
        <p class="stat-h">At selected universities</p>
      </div>

      <div class="stat" style="background: var(--white); padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg></span>
        <p class="stat-l">Reward Time</p>
        <p class="stat-v"><span class="count-up" data-count="10">10</span><small>days</small></p>
        <p class="stat-h">After confirmed admission</p>
      </div>

      <div class="stat" style="background: var(--white); padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M12 12c-2-2.67-4-4-6-4a4 4 0 1 0 0 8c2 0 4-1.33 6-4Zm0 0c2 2.67 4 4 6 4a4 4 0 0 0 0-8c-2 0-4 1.33-6 4Z"></path></svg></span>
        <p class="stat-l">Referrals</p>
        <p class="stat-v">No<small>limit</small></p>
        <p class="stat-h">Refer as many as you like</p>
      </div>

      <div class="stat" style="background: var(--white); padding: 24px 20px;">
        <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg></span>
        <p class="stat-l">Fees</p>
        <p class="stat-v"><span class="count-up" data-count="30">30</span><small>%</small></p>
        <p class="stat-h">Of students make fees free</p>
      </div>
    </div>
  </div>
</section>

<!-- 3. HOW IT WORKS SECTION (Big Numerals) -->
<section class="sec" style="background: var(--white); padding-top: 48px;" data-reveal>
  <div class="container">
    <div class="head" style="margin-bottom: 56px;">
      <p class="lbl">Three Steps</p>
      <h2 class="h2">How It Works</h2>
    </div>

    <ol style="list-style: none; margin: 0; padding: 0; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); border-top: 2px solid var(--navy);" id="refer-steps-grid">
      <li style="padding: 36px 40px 0 0; display: flex; flex-direction: column; gap: 22px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
          <span class="num or" style="font-size: 88px;">01</span>
          <span class="tile lg" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M19 8v6M22 11h-6"></path></svg></span>
        </div>
        <h3 class="h3" style="font-size: 24px;">Refer a Friend</h3>
        <p style="color: var(--body);">Share your unique link or submit their basic details through our form below.</p>
      </li>

      <li style="padding: 36px 40px 0; border-left: 1px solid var(--hairline); display: flex; flex-direction: column; gap: 22px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
          <span class="num or" style="font-size: 88px;">02</span>
          <span class="tile lg" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M3 22h18"></path><path d="M6 18v-7"></path><path d="M10 18v-7"></path><path d="M14 18v-7"></path><path d="M18 18v-7"></path><path d="m12 2 8 5H4z"></path></svg></span>
        </div>
        <h3 class="h3" style="font-size: 24px;">They Join a University</h3>
        <p style="color: var(--body);">Our counsellors guide them through eligibility, scholarship fee discounts, and admission.</p>
      </li>

      <li style="padding: 36px 0 0 40px; border-left: 1px solid var(--hairline); display: flex; flex-direction: column; gap: 22px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
          <span class="num or" style="font-size: 88px;">03</span>
          <span class="tile lg" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><rect x="3" y="8" width="18" height="4" rx="1"></rect><path d="M12 8v13"></path><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path><path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"></path></svg></span>
        </div>
        <h3 class="h3" style="font-size: 24px;">You Earn Rewards</h3>
        <p style="color: var(--body);">Receive instant cashback directly into your UPI or bank account within 10 days of admission confirmation.</p>
      </li>
    </ol>
  </div>
</section>

<!-- 3. BENEFITS SECTION -->
<section class="sec" style="background: var(--offwhite);" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 4fr 8fr; gap: 64px; align-items: stretch;" id="refer-benefits-grid">
      <div style="display: flex; flex-direction: column; gap: 32px;">
        <div class="head">
          <p class="lbl">Benefits</p>
          <h2 class="h2">Share Knowledge, Earn Rewards</h2>
        </div>
        <div class="ph" style="flex: 1; min-height: 320px; position: relative; border-radius: 8px;">
          <img src="<?= BASE_URL ?>assets/img/stock/student-phone.jpg" alt="Student sharing referral on phone" class="ph-img" style="border-radius: 8px;">
        </div>
      </div>

      <!-- 5 .wt Tiles -->
      <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px;" id="refer-benefits-tiles">
        <div class="wt" style="border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"></path></svg></span>
          <p class="wn">01</p>
          <h3>Simple Sign-Up</h3>
          <p>No complex documents required to start referring friends and colleagues.</p>
        </div>

        <div class="wt" style="border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><rect x="3" y="8" width="18" height="4" rx="1"></rect><path d="M12 8v13"></path><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path></svg></span>
          <p class="wn">02</p>
          <h3>Rewards per Referral</h3>
          <p>Earn guaranteed cashback of up to ₹10,000 for each admitted referral.</p>
        </div>

        <div class="wt" style="border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M12 12c-2-2.67-4-4-6-4a4 4 0 1 0 0 8c2 0 4-1.33 6-4Zm0 0c2 2.67 4 4 6 4a4 4 0 0 0 0-8c-2 0-4 1.33-6 4Z"></path></svg></span>
          <p class="wn">03</p>
          <h3>No Referral Limit</h3>
          <p>Refer as many friends, batchmates, and coworkers as you wish.</p>
        </div>

        <div class="wt" style="border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg></span>
          <p class="wn">04</p>
          <h3>Instant Referral Tracking</h3>
          <p>Real-time SMS updates whenever your referred friend registers and verifies.</p>
        </div>

        <div class="wt" style="grid-column: span 2; border-radius: 8px;">
          <span class="tile" style="border-radius: 8px;"><svg class="ic" viewBox="0 0 24 24"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path><path d="M4 22h16"></path><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path></svg></span>
          <p class="wn">05</p>
          <h3>Bonus for Top Referrers</h3>
          <p>Quarterly gadget rewards (laptops, tablets) for learners with 5+ successful referrals.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4. REWARDS FOR BOTH (Tint Band) -->
<section class="sec" style="background: var(--tint);" data-reveal>
  <div class="container">
    <div class="head" style="margin-bottom: 48px;">
      <p class="lbl">Rewards</p>
      <h2 class="h2">Rewards for Both</h2>
    </div>

    <div style="display: grid; grid-template-columns: 7fr 5fr; gap: 0; border-radius: 8px; overflow: hidden; box-shadow: 0 8px 24px rgba(24, 29, 56, 0.08);" id="refer-rewards-split">
      <!-- Navy Card For You -->
      <div style="background: var(--navy); padding: 48px; display: flex; flex-direction: column; gap: 24px; box-shadow: inset 0 2px 0 var(--orange);">
        <span class="tile or" style="width: 56px; height: 56px; border-radius: 8px;">
          <svg class="ic" viewBox="0 0 24 24" style="width: 28px; height: 28px;"><path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path><path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path></svg>
        </span>
        <p class="lbl dk">For You</p>
        <p style="font: 800 32px/1.2 'Nunito', sans-serif; color: var(--offwhite);">Reward per successful admission</p>
        <p class="pdk" style="display: flex; gap: 12px; align-items: center; padding-top: 20px; border-top: 1px solid rgba(244,243,239,.16);">
          <svg class="ic" viewBox="0 0 24 24" style="width: 24px; height: 24px; color: var(--orange);"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
          Paid within 10 days of confirmed admission
        </p>
      </div>

      <!-- White Card For Your Friend -->
      <div style="background: var(--white); padding: 48px; display: flex; flex-direction: column; gap: 24px; box-shadow: inset 0 2px 0 var(--orange);">
        <span class="tile" style="width: 56px; height: 56px; border-radius: 8px;">
          <svg class="ic" viewBox="0 0 24 24" style="width: 28px; height: 28px;"><rect x="3" y="8" width="18" height="4" rx="1"></rect><path d="M12 8v13"></path><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path><path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"></path></svg>
        </span>
        <p class="lbl">For Your Friend</p>
        <p style="font: 800 32px/1.2 'Nunito', sans-serif; color: var(--navy);">Special enrollment cashback &amp; fee waiver</p>
        <p style="color: var(--body); display: flex; gap: 12px; align-items: center; padding-top: 20px; border-top: 1px solid var(--hairline);">
          <svg class="ic" viewBox="0 0 24 24" style="width: 24px; height: 24px; color: var(--orange);"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg>
          Exclusive early scholarship discount
        </p>
      </div>
    </div>

    <!-- Big Numeral Highlight -->
    <div style="margin-top: 56px; display: flex; align-items: baseline; gap: 28px; border-top: 1px solid rgba(24,29,56,.14); padding-top: 40px;" id="refer-numeral-row">
      <span class="num or" style="font-size: 110px; letter-spacing: -4px;">30%</span>
      <p style="font: 700 28px/1.3 'Nunito', sans-serif; color: var(--navy); max-width: 520px;">
        of our students make their degree tuition fee completely free through referrals.
      </p>
    </div>
  </div>
</section>

<!-- 5. REFERRAL FORM & SHARE LINK -->
<section id="refer-form" class="sec" style="background: var(--white);" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 7fr 5fr; gap: 48px; align-items: start;" id="refer-form-grid">
      <!-- Referral Form -->
      <div>
        <div class="head" style="margin-bottom: 36px;">
          <p class="lbl">Refer Now</p>
          <h2 class="h2">Refer Someone Now</h2>
        </div>

        <form class="ajax-form" aria-label="Referral form" style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px 20px;">
          <input type="hidden" name="source" value="Referral Submission Form">
          <div>
            <label class="fl-l" for="rf-yn">Your Name</label>
            <div class="fld">
              <svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="8" r="5"></circle><path d="M20 21a8 8 0 0 0-16 0"></path></svg>
              <input id="rf-yn" name="your_name" type="text" placeholder="Your full name" required style="border-radius: 8px;">
            </div>
          </div>

          <div>
            <label class="fl-l" for="rf-ym">Your Mobile</label>
            <div class="fld">
              <svg class="ic" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
              <input id="rf-ym" name="your_mobile" type="tel" placeholder="10-digit mobile" required style="border-radius: 8px;">
            </div>
          </div>

          <div>
            <label class="fl-l" for="rf-fn">Friend's Name</label>
            <div class="fld">
              <svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="8" r="5"></circle><path d="M20 21a8 8 0 0 0-16 0"></path></svg>
              <input id="rf-fn" name="friend_name" type="text" placeholder="Friend's full name" required style="border-radius: 8px;">
            </div>
          </div>

          <div>
            <label class="fl-l" for="rf-fm">Friend's Mobile</label>
            <div class="fld">
              <svg class="ic" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
              <input id="rf-fm" name="friend_mobile" type="tel" placeholder="10-digit mobile" required style="border-radius: 8px;">
            </div>
          </div>

          <div style="grid-column: 1 / -1;">
            <label class="fl-l" for="rf-c">Course Interested In</label>
            <div class="fld">
              <svg class="ic" viewBox="0 0 24 24"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path></svg>
              <select id="rf-c" name="course" style="border-radius: 8px;">
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
              <svg class="ic chev" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"></path></svg>
            </div>
          </div>

          <div style="grid-column: 1 / -1; margin-top: 6px;">
            <button class="btn btn-p" type="submit" style="border-radius: 8px;">
              <span>Submit Referral</span>
              <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
            </button>
          </div>
        </form>
      </div>

      <!-- Share Link Box -->
      <div style="display: flex; flex-direction: column; gap: 24px; padding-top: 48px;">
        <div style="background: var(--offwhite); padding: 28px; display: flex; flex-direction: column; gap: 14px; border: 1px solid var(--hairline); border-radius: 8px;">
          <p class="mono" style="color: var(--navy);">Your share link</p>
          <div style="display: flex; align-items: stretch; gap: 8px;">
            <div style="flex: 1; background: var(--white); border: 1px solid var(--field); border-radius: 8px; height: 48px; display: flex; align-items: center; gap: 10px; padding: 0 14px; color: var(--navy); font-family: 'JetBrains Mono', monospace; font-size: 13px; overflow: hidden; white-space: nowrap;">
              <svg class="ic" viewBox="0 0 24 24" style="width: 18px; height: 18px; color: var(--orange);"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
              <span id="share-link-input">eshikshahub.in/ref/ESH-STUDENT</span>
            </div>
            <!-- Interactive Copy Button -->
            <button class="sq" aria-label="Copy link" data-copy-target="#share-link-input" style="background: var(--navy); color: var(--white); border-color: var(--navy); border-radius: 8px;">
              <svg class="ic" viewBox="0 0 24 24"><rect x="8" y="8" width="14" height="14" rx="2"></rect><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path></svg>
            </button>
            <!-- WhatsApp Share -->
            <a class="sq" href="https://api.whatsapp.com/send?text=Hey,%20check%20out%20UGC%20approved%20online%20degrees%20at%20eShikshaHub:%20https://eshikshahub.in" target="_blank" rel="noopener" aria-label="Share on WhatsApp" style="background: var(--whatsapp); color: var(--white); border-color: var(--whatsapp); border-radius: 8px;">
              <svg class="ic" viewBox="0 0 24 24"><path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"></path><path d="M9 9.5c0 3 2.5 5.5 5.5 5.5l1.5-1.5-2-1-1 1c-1 0-2.5-1.5-2.5-2.5l1-1-1-2z"></path></svg>
            </a>
          </div>
          <p style="font-size: 13px; color: var(--body);">Share via WhatsApp, Telegram or email. Your referral reward is credited on successful admission.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 6. COURSES YOU CAN REFER -->
<section class="sec" style="background: var(--offwhite);" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 4fr 8fr; gap: 96px; align-items: start;" id="refer-courses-grid">
      <div class="head">
        <p class="lbl">Courses</p>
        <h2 class="h2">Courses You Can Refer</h2>
        <p class="lead">All UG and PG online degrees from our partner universities qualify for full rewards.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 0 48px;" id="refer-courses-cols">
        <div>
          <p class="mono" style="color: var(--orange-dark); margin-bottom: 10px;">UG · 3 Years</p>
          <?php foreach ($UG_COURSES as $c): ?>
            <div style="display: grid; grid-template-columns: 96px 1fr; align-items: center; padding: 14px 0; border-top: 1px solid var(--hairline);">
              <span class="num" style="font-size: 24px; color: var(--navy);"><?= $c['abbr'] ?></span>
              <span style="color: var(--navy); font-weight: 500;"><?= $c['name'] ?></span>
            </div>
          <?php endforeach; ?>
        </div>

        <div>
          <p class="mono" style="color: var(--orange-dark); margin-bottom: 10px;">PG · 2 Years</p>
          <?php foreach ($PG_COURSES as $c): ?>
            <div style="display: grid; grid-template-columns: 96px 1fr; align-items: center; padding: 14px 0; border-top: 1px solid var(--hairline);">
              <span class="num" style="font-size: 24px; color: var(--navy);"><?= $c['abbr'] ?></span>
              <span style="color: var(--navy); font-weight: 500;"><?= $c['name'] ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 7. TERMS & CONDITIONS ACCORDION -->
<section class="sec" style="background: var(--white);" data-reveal>
  <div class="container">
    <div class="head" style="margin-bottom: 32px;">
      <p class="lbl">Terms</p>
      <h2 class="h2">Referral Program Terms</h2>
    </div>

    <div style="border-top: 2px solid var(--navy); border-radius: 8px;">
      <div style="border-bottom: 1px solid var(--hairline); padding-bottom: 12px;">
        <button class="acc-h" aria-expanded="true">
          <span>1. Eligibility for Referral Rewards</span>
          <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path></svg>
        </button>
        <div style="padding-top: 8px;">
          <p style="color: var(--body);">Any individual, existing student, or alumnus can refer friends. The referred candidate must be a new applicant who has not previously registered with eShikshaHub.</p>
        </div>
      </div>

      <div style="border-bottom: 1px solid var(--hairline);">
        <button class="acc-h" aria-expanded="false">
          <span>2. Reward Payment Timeline</span>
          <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14M12 5v14"></path></svg>
        </button>
        <div style="display: none; padding: 12px 0 20px;">
          <p style="color: var(--body);">Cashback is disbursed to your registered UPI ID or Bank Account within 10 working days following fee confirmation and enrollment letter issuance by the university.</p>
        </div>
      </div>

      <div style="border-bottom: 1px solid var(--hairline);">
        <button class="acc-h" aria-expanded="false">
          <span>3. Minimum Enrollment Criteria</span>
          <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14M12 5v14"></path></svg>
        </button>
        <div style="display: none; padding: 12px 0 20px;">
          <p style="color: var(--body);">Rewards apply upon full first-semester fee clearance or verified zero-cost EMI agreement activation.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 8. LOCKED CTA -->
<?php 
$cta_heading = 'Start Referring Today';
$cta_sub = 'Help friends upskill with verified UGC degrees while you earn real rewards.';
require __DIR__ . '/includes/cta.php'; 
?>

<!-- 9. LOCKED FOOTER -->
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<style>
@media (max-width: 1199px) {
  #refer-hero-stats {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #refer-steps-grid {
    grid-template-columns: 1fr !important;
  }
  #refer-steps-grid li {
    border-left: none !important;
    border-bottom: 1px solid var(--hairline);
    padding: 24px 0 !important;
  }
  #refer-benefits-grid {
    grid-template-columns: 1fr !important;
  }
  #refer-rewards-split {
    grid-template-columns: 1fr !important;
  }
  #refer-form-grid {
    grid-template-columns: 1fr !important;
  }
  #refer-courses-grid {
    grid-template-columns: 1fr !important;
  }
}
@media (max-width: 767px) {
  #refer-hero-stats {
    grid-template-columns: 1fr !important;
  }
  #refer-benefits-tiles {
    grid-template-columns: 1fr !important;
  }
  #refer-courses-cols {
    grid-template-columns: 1fr !important;
  }
  #refer-numeral-row {
    flex-direction: column !important;
    gap: 12px !important;
  }
}
</style>
