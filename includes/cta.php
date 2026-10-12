<?php
require_once __DIR__ . '/config.php';
$cta_heading = $cta_heading ?? 'Talk to a Counsellor';
$cta_sub = $cta_sub ?? 'Not sure which degree fits? Get free guidance today.';
$cta_noform = !empty($cta_noform);
?>
<!-- LOCKED CTA BAND -->
<section class="cta-locked-section" style="position: relative; width: 100%; overflow: hidden; background: var(--navy);" data-reveal>
  <!-- Background Photo & Overlay -->
  <div class="ph" style="position: absolute; inset: 0;">
    <img src="<?= BASE_URL ?>assets/img/stock/counsellor-student.jpg" alt="Counsellor guiding a student" class="ph-img" style="opacity: 0.45; filter: saturate(0.85);">
  </div>
  <div class="ov" style="background: rgba(24, 29, 56, .78);"></div>

  <div class="container" style="position: relative; padding-top: 104px; padding-bottom: 104px; display: grid; grid-template-columns: 7fr 5fr; gap: 48px; align-items: center;" id="cta-layout-grid">
    <!-- Left Column: Head + Stats -->
    <div class="head" style="gap: 18px;">
      <p class="lbl dk">Free Counselling</p>
      <h2 class="h2 w" style="font-size: 38px;"><?= htmlspecialchars($cta_heading) ?></h2>
      <p class="lead pdk"><?= htmlspecialchars($cta_sub) ?></p>

      <div class="stats ov" style="position: relative; inset: auto; grid-template-columns: repeat(3, minmax(0, 1fr)); margin-top: 28px;" id="cta-stats-row">
        <div class="stat" style="padding: 24px 20px;">
          <span class="tile or">
            <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg>
          </span>
          <p class="stat-l">Approval</p>
          <p class="stat-v">UGC<small style="color: var(--muted-dk);">approved</small></p>
          <p class="stat-h">Govt. recognised degrees</p>
        </div>
        <div class="stat" style="padding: 24px 20px;">
          <span class="tile or">
            <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 22h18"></path><path d="M6 18v-7"></path><path d="M10 18v-7"></path><path d="M14 18v-7"></path><path d="M18 18v-7"></path><path d="m12 2 8 5H4z"></path></svg>
          </span>
          <p class="stat-l">Partners</p>
          <p class="stat-v">12<small style="color: var(--muted-dk);">universities</small></p>
          <p class="stat-h">UGC-approved online partners</p>
        </div>
        <div class="stat" style="padding: 24px 20px;">
          <span class="tile or">
            <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="5" width="20" height="14" rx="2"></rect><path d="M2 10h20"></path></svg>
          </span>
          <p class="stat-l">Payment</p>
          <p class="stat-v">No-Cost<small style="color: var(--muted-dk);">EMI</small></p>
          <p class="stat-h">Flexible payment options</p>
        </div>
      </div>
    </div>

    <!-- Right Column: Form or Action Buttons -->
    <?php if (!$cta_noform): ?>
      <form class="ajax-form" aria-label="Book free counselling" style="background: var(--offwhite); padding: 36px; display: flex; flex-direction: column; gap: 16px;">
        <input type="hidden" name="source" value="CTA Section: <?= htmlspecialchars($cta_heading) ?>">
        <p class="lbl" style="margin-bottom: 4px;">Book Free Counselling</p>
        <div>
          <label class="fl-l" for="cd-name">Name</label>
          <div class="fld">
            <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="5"></circle><path d="M20 21a8 8 0 0 0-16 0"></path></svg>
            <input id="cd-name" name="name" type="text" placeholder="Your full name" required>
          </div>
        </div>
        <div>
          <label class="fl-l" for="cd-mob">Mobile</label>
          <div class="fld">
            <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            <input id="cd-mob" name="mobile" type="tel" placeholder="10-digit mobile" required>
          </div>
        </div>
        <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px;">
          <div>
            <label class="fl-l" for="cd-course">Course</label>
            <div class="fld">
              <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg>
              <select id="cd-course" name="course">
                <option value="MBA" selected>MBA</option>
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>
                <option value="BBA">BBA</option>
                <option value="BCom">BCom</option>
                <option value="MCom">MCom</option>
                <option value="MSc">MSc</option>
                <option value="MA">MA</option>
                <option value="BA">BA</option>
                <option value="MAJMC">MAJMC</option>
              </select>
              <svg class="ic chev" viewBox="0 0 24 24" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
            </div>
          </div>
          <div>
            <label class="fl-l" for="cd-uni">University</label>
            <div class="fld">
              <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4M10 10h4M10 14h4M10 18h4"></path></svg>
              <select id="cd-uni" name="university">
                <option value="Any UGC University" selected>Select University</option>
                <option value="Amity Online">Amity Online</option>
                <option value="Chandigarh University">Chandigarh University</option>
                <option value="Jamia Millia Islamia">Jamia Millia Islamia</option>
                <option value="LPU Online">LPU Online</option>
                <option value="Manipal University">Manipal University Jaipur</option>
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
        </div>
        <button class="btn btn-p full" type="submit" style="margin-top: 6px;">
          <span>Book Free Counselling</span>
          <i><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
        </button>
        <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; padding-top: 16px; border-top: 1px solid var(--hairline);">
          <a class="btn btn-s full" href="tel:<?= PHONE_CLEAN ?>" style="font-size: 15px;">
            <span style="padding: 0 12px;">
              <svg class="ic" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
              <?= PHONE ?>
            </span>
          </a>
          <a class="btn btn-w full" href="<?= WHATSAPP_LINK ?>" target="_blank" rel="noopener">
            <span>
              <svg class="ic" viewBox="0 0 24 24"><path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"></path><path d="M9 9.5c0 3 2.5 5.5 5.5 5.5l1.5-1.5-2-1-1 1c-1 0-2.5-1.5-2.5-2.5l1-1-1-2z"></path></svg>
              WhatsApp
            </span>
          </a>
        </div>
      </form>
    <?php else: ?>
      <div style="display: flex; flex-direction: column; gap: 14px; max-width: 420px; justify-self: end; width: 100%;">
        <a class="btn btn-p full" href="<?= BASE_URL ?>contact.php">
          <span>Book Free Counselling</span>
          <i><svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
        </a>
        <a class="btn btn-s dk full" href="tel:<?= PHONE_CLEAN ?>">
          <span>
            <svg class="ic" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            Call <?= PHONE ?>
          </span>
          <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
        </a>
        <a class="btn btn-w full" href="<?= WHATSAPP_LINK ?>" target="_blank" rel="noopener">
          <span>
            <svg class="ic" viewBox="0 0 24 24"><path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"></path><path d="M9 9.5c0 3 2.5 5.5 5.5 5.5l1.5-1.5-2-1-1 1c-1 0-2.5-1.5-2.5-2.5l1-1-1-2z"></path></svg>
            Chat on WhatsApp
          </span>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>

<style>
@media (max-width: 1024px) {
  #cta-layout-grid {
    grid-template-columns: 1fr !important;
    gap: 48px !important;
  }
  #cta-stats-row {
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
  }
}
@media (max-width: 767px) {
  #cta-stats-row {
    grid-template-columns: 1fr !important;
  }
}
</style>
