<?php
$current_page = 'contact';
$page_title = 'Contact Us | Free Academic Counselling';
$page_desc = 'Contact eShikshaHub counsellors for free course advice, admission assistance, and fee queries. Offices in Noida and Agra.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

$prefill_course = htmlspecialchars($_GET['course'] ?? '');
?>

<!-- 1. COMPACT HERO SECTION -->
<section style="position: relative; height: 520px; display: flex; align-items: flex-start;">
  <div class="ph" style="position: absolute; inset: 0;">
    <img src="<?= BASE_URL ?>assets/img/stock/counsellor-headset.jpg" alt="Counsellor on call with headset" class="ph-img" style="opacity: 0.5; object-position: center 20%;">
  </div>
  <div class="ov"></div>

  <div class="container" style="position: relative; z-index: 5; padding-top: 180px;">
    <div class="head" style="max-width: 640px; gap: 18px;">
      <nav aria-label="Breadcrumb" class="mono" style="display: flex; gap: 10px; color: var(--muted-dk);">
        <a href="<?= BASE_URL ?>index.php" style="color: var(--muted-dk);">Home</a>
        <span aria-hidden="true">/</span>
        <span style="color: var(--offwhite);">Contact</span>
      </nav>
      <h1 class="h1">We're Here to Help</h1>
      <p class="lead pdk">Questions about programs or admissions? We're one message away.</p>
    </div>
  </div>
</section>

<!-- 2. CONTACT BLOCKS (Overlapping Hero by 104px) -->
<section style="position: relative; margin-top: -104px; z-index: 20;" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); background: var(--white); border: 1px solid var(--hairline);" id="contact-blocks-grid">
      <!-- Block 1: Call -->
      <a class="lift" href="tel:<?= PHONE_CLEAN ?>" style="padding: 32px 28px; display: flex; flex-direction: column; gap: 18px; min-height: 230px; background: var(--white); text-decoration: none;">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></span>
        <h2 class="h3">Call</h2>
        <p class="mono" style="color: var(--navy);"><?= PHONE ?></p>
        <span style="margin-top: auto; color: var(--orange-dark);"><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></span>
      </a>

      <!-- Block 2: WhatsApp -->
      <a class="lift" href="<?= WHATSAPP_LINK ?>" target="_blank" rel="noopener" style="padding: 32px 28px; display: flex; flex-direction: column; gap: 18px; min-height: 230px; background: var(--white); border-left: 1px solid var(--hairline); text-decoration: none;" id="contact-block-wa">
        <span class="tile" style="color: var(--whatsapp);"><svg class="ic" viewBox="0 0 24 24"><path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"></path><path d="M9 9.5c0 3 2.5 5.5 5.5 5.5l1.5-1.5-2-1-1 1c-1 0-2.5-1.5-2.5-2.5l1-1-1-2z"></path></svg></span>
        <h2 class="h3">WhatsApp Us</h2>
        <p class="mono" style="color: var(--navy);">Chat with a counsellor</p>
        <span style="margin-top: auto; color: var(--orange-dark);"><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></span>
      </a>

      <!-- Block 3: Email -->
      <a class="lift" href="mailto:<?= EMAIL ?>" style="padding: 32px 28px; display: flex; flex-direction: column; gap: 18px; min-height: 230px; background: var(--white); border-left: 1px solid var(--hairline); text-decoration: none;">
        <span class="tile"><svg class="ic" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></span>
        <h2 class="h3">Email</h2>
        <p style="font-family: 'JetBrains Mono', monospace; font-size: 13px; color: var(--navy);"><?= EMAIL ?></p>
        <span style="margin-top: auto; color: var(--orange-dark);"><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></span>
      </a>

      <!-- Block 4: Visit Offices -->
      <a class="lift" href="#offices" style="padding: 32px 28px; display: flex; flex-direction: column; gap: 18px; min-height: 230px; background: var(--navy); color: var(--offwhite); text-decoration: none;">
        <span class="tile or"><svg class="ic" viewBox="0 0 24 24"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg></span>
        <h2 class="h3" style="color: var(--offwhite);">Visit Our Office</h2>
        <p class="mono" style="color: var(--muted-dk);">Noida · Agra</p>
        <span style="margin-top: auto; color: var(--offwhite);"><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></span>
      </a>
    </div>
  </div>
</section>

<!-- 3. FORM + REACH US ASIDE -->
<section class="sec" style="background: var(--offwhite);" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 7fr 5fr; gap: 0; background: var(--white); border: 1px solid var(--hairline);" id="contact-split-grid">
      <!-- Left: Form -->
      <div style="padding: 64px;" id="contact-form-col">
        <div class="head" style="margin-bottom: 36px;">
          <p class="lbl">Enquiry</p>
          <h2 class="h2">Let's Connect</h2>
          <p style="color: var(--body);">Fill out the form below and an assigned educational advisor will call you.</p>
        </div>

        <form class="ajax-form" aria-label="Contact form" style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px 20px;">
          <input type="hidden" name="source" value="Contact Us Page Main Form">
          <div>
            <label class="fl-l" for="ct-n">Name</label>
            <div class="fld">
              <svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="8" r="5"></circle><path d="M20 21a8 8 0 0 0-16 0"></path></svg>
              <input id="ct-n" name="name" type="text" placeholder="Your full name" required>
            </div>
          </div>

          <div>
            <label class="fl-l" for="ct-e">Email</label>
            <div class="fld">
              <svg class="ic" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
              <input id="ct-e" name="email" type="email" placeholder="you@example.com">
            </div>
          </div>

          <div>
            <label class="fl-l" for="ct-m">Mobile</label>
            <div class="fld">
              <svg class="ic" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
              <input id="ct-m" name="mobile" type="tel" placeholder="10-digit mobile" required>
            </div>
          </div>

          <div>
            <label class="fl-l" for="ct-c">Course</label>
            <div class="fld">
              <svg class="ic" viewBox="0 0 24 24"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path></svg>
              <select id="ct-c" name="course">
                <option value="">Select Course</option>
                <option value="MBA" <?= $prefill_course === 'MBA' ? 'selected' : '' ?>>MBA (Master of Business Administration)</option>
                <option value="BCA" <?= $prefill_course === 'BCA' ? 'selected' : '' ?>>BCA (Bachelor of Computer Applications)</option>
                <option value="MCA" <?= $prefill_course === 'MCA' ? 'selected' : '' ?>>MCA (Master of Computer Applications)</option>
                <option value="BBA" <?= $prefill_course === 'BBA' ? 'selected' : '' ?>>BBA (Bachelor of Business Administration)</option>
                <option value="BCom" <?= $prefill_course === 'BCOM' ? 'selected' : '' ?>>BCom (Bachelor of Commerce)</option>
                <option value="MCom" <?= $prefill_course === 'MCOM' ? 'selected' : '' ?>>MCom (Master of Commerce)</option>
                <option value="MSc" <?= $prefill_course === 'MSC' ? 'selected' : '' ?>>MSc (Master of Science)</option>
                <option value="MA" <?= $prefill_course === 'MA' ? 'selected' : '' ?>>MA (Master of Arts)</option>
                <option value="BA" <?= $prefill_course === 'BA' ? 'selected' : '' ?>>BA (Bachelor of Arts)</option>
                <option value="MAJMC" <?= $prefill_course === 'MAJMC' ? 'selected' : '' ?>>MAJMC (Journalism &amp; Mass Comm)</option>
              </select>
              <svg class="ic chev" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"></path></svg>
            </div>
          </div>

          <div style="grid-column: 1 / -1;">
            <label class="fl-l" for="ct-u">Preferred University</label>
            <div class="fld">
              <svg class="ic" viewBox="0 0 24 24"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4M10 10h4M10 14h4M10 18h4"></path></svg>
              <select id="ct-u" name="university">
                <option value="">Select University (or leave blank for advice)</option>
                <?php foreach ($UNIVERSITIES as $u): ?>
                  <option value="<?= htmlspecialchars($u['name']) ?>"><?= htmlspecialchars($u['name']) ?></option>
                <?php endforeach; ?>
                <option value="Other / Need Help">Other / Need Help Deciding</option>
              </select>
              <svg class="ic chev" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"></path></svg>
            </div>
          </div>

          <div style="grid-column: 1 / -1;">
            <label class="fl-l" for="ct-msg">Message</label>
            <div class="fld">
              <textarea id="ct-msg" name="message" placeholder="Tell us about your educational background or any queries"></textarea>
            </div>
          </div>

          <div style="grid-column: 1 / -1; margin-top: 6px;">
            <button class="btn btn-p" type="submit">
              <span>Send Message</span>
              <i><svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></i>
            </button>
          </div>
        </form>
      </div>

      <!-- Right: Reach Us Aside -->
      <aside style="background: var(--navy); padding: 64px 48px; display: flex; flex-direction: column; gap: 32px; color: var(--offwhite);" id="contact-aside-col">
        <div class="head" style="gap: 12px;">
          <p class="lbl dk">Reach Us</p>
          <p style="font: 800 28px/1.2 'Nunito', sans-serif; color: var(--offwhite);">Talk to a Counsellor</p>
        </div>

        <ul style="list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column;">
          <li style="display: flex; gap: 14px; padding: 18px 0; border-top: 1px solid rgba(255,255,255,.16);">
            <svg class="ic" viewBox="0 0 24 24" style="width: 24px; height: 24px; color: var(--orange); flex: none;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            <div>
              <p class="mono" style="color: var(--muted-dk); font-size: 11px;">Phone</p>
              <a href="tel:<?= PHONE_CLEAN ?>" style="color: var(--offwhite); font-weight: 500; font-size: 17px;"><?= PHONE ?></a>
            </div>
          </li>

          <li style="display: flex; gap: 14px; padding: 18px 0; border-top: 1px solid rgba(255,255,255,.16);">
            <svg class="ic" viewBox="0 0 24 24" style="width: 24px; height: 24px; color: var(--orange); flex: none;"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
            <div>
              <p class="mono" style="color: var(--muted-dk); font-size: 11px;">Email</p>
              <a href="mailto:<?= EMAIL ?>" style="color: var(--offwhite); font-weight: 500;"><?= EMAIL ?></a>
            </div>
          </li>

          <li style="display: flex; gap: 14px; padding: 18px 0; border-top: 1px solid rgba(255,255,255,.16);">
            <svg class="ic" viewBox="0 0 24 24" style="width: 24px; height: 24px; color: var(--orange); flex: none;"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
            <div>
              <p class="mono" style="color: var(--muted-dk); font-size: 11px;">Noida Corporate</p>
              <p style="color: var(--offwhite);"><?= NOIDA_OFFICE ?></p>
            </div>
          </li>

          <li style="display: flex; gap: 14px; padding: 18px 0; border-top: 1px solid rgba(255,255,255,.16); border-bottom: 1px solid rgba(255,255,255,.16);">
            <svg class="ic" viewBox="0 0 24 24" style="width: 24px; height: 24px; color: var(--orange); flex: none;"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
            <div>
              <p class="mono" style="color: var(--muted-dk); font-size: 11px;">Agra Regional</p>
              <p style="color: var(--offwhite);"><?= AGRA_OFFICE ?></p>
            </div>
          </li>
        </ul>

        <a class="btn btn-w full" href="<?= WHATSAPP_LINK ?>" target="_blank" rel="noopener" style="margin-top: auto;">
          <span>
            <svg class="ic" viewBox="0 0 24 24"><path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"></path><path d="M9 9.5c0 3 2.5 5.5 5.5 5.5l1.5-1.5-2-1-1 1c-1 0-2.5-1.5-2.5-2.5l1-1-1-2z"></path></svg>
            Chat on WhatsApp
          </span>
        </a>
      </aside>
    </div>
  </div>
</section>

<!-- 4. OFFICES SECTION -->
<section id="offices" class="sec" style="background: var(--white);" data-reveal>
  <div class="container">
    <div class="head" style="margin-bottom: 48px;">
      <p class="lbl">Offices</p>
      <h2 class="h2">Visit Our Offices</h2>
      <p class="lead">Walk in for in-person university counselling and document verification.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 32px;" id="offices-cards-grid">
      <!-- Office 1: Noida -->
      <article style="border: 1px solid var(--hairline); border-radius: 8px; overflow: hidden;">
        <div style="position: relative; height: 300px; background: #E9EAEE; overflow: hidden;" role="img" aria-label="Noida Office Map">
          <iframe src="https://maps.google.com/maps?q=Sector%2063,%20Noida,%20Uttar%20Pradesh&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                  style="position: absolute; inset: 0; width: 100%; height: 100%; border: 0;" 
                  allowfullscreen="" 
                  loading="lazy"></iframe>
          <span style="position: absolute; left: 12px; bottom: 12px; background: var(--offwhite); color: var(--navy); font-size: 11px; padding: 4px 8px; border-radius: 4px; z-index: 2; font-family: monospace;">Noida · Sector 63</span>
        </div>
        <div style="padding: 32px; display: flex; justify-content: space-between; align-items: flex-end; gap: 24px; flex-wrap: wrap;">
          <div>
            <p class="mono" style="color: var(--orange-dark);">Noida Head Office</p>
            <h3 class="h3" style="font-size: 22px; margin-top: 8px;">Sharkspace, A-83</h3>
            <p style="margin-top: 4px; color: var(--body);">Sector 63, UP 201301</p>
          </div>
          <a class="tl" href="https://maps.google.com/?q=Sector+63+Noida+UP+201301" target="_blank" rel="noopener">
            Get Directions
            <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
          </a>
        </div>
      </article>

      <!-- Office 2: Agra -->
      <article style="border: 1px solid var(--hairline); border-radius: 8px; overflow: hidden;">
        <div style="position: relative; height: 300px; background: #E9EAEE; overflow: hidden;" role="img" aria-label="Agra Office Map">
          <iframe src="https://maps.google.com/maps?q=Fatehabad%20Road,%20Agra,%20Uttar%20Pradesh&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                  style="position: absolute; inset: 0; width: 100%; height: 100%; border: 0;" 
                  allowfullscreen="" 
                  loading="lazy"></iframe>
          <span style="position: absolute; left: 12px; bottom: 12px; background: var(--offwhite); color: var(--navy); font-size: 11px; padding: 4px 8px; border-radius: 4px; z-index: 2; font-family: monospace;">Agra · Fatehabad Road</span>
        </div>
        <div style="padding: 32px; display: flex; justify-content: space-between; align-items: flex-end; gap: 24px; flex-wrap: wrap;">
          <div>
            <p class="mono" style="color: var(--orange-dark);">Agra Branch Office</p>
            <h3 class="h3" style="font-size: 22px; margin-top: 8px;">AVR Complex, A-1</h3>
            <p style="margin-top: 4px; color: var(--body);">Fatehabad Road, UP 283111</p>
          </div>
          <a class="tl" href="https://maps.google.com/?q=Fatehabad+Road+Agra+UP+283111" target="_blank" rel="noopener">
            Get Directions
            <svg class="ic" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
          </a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5. LOCKED CTA (noform prop) -->
<?php 
$cta_heading = 'Talk to a Counsellor';
$cta_sub = 'Not sure which degree fits? Get free guidance today.';
$cta_noform = true;
require __DIR__ . '/includes/cta.php'; 
?>

<!-- 6. LOCKED FOOTER -->
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<style>
@media (max-width: 1199px) {
  #contact-blocks-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
  #contact-split-grid {
    grid-template-columns: 1fr !important;
  }
  #offices-cards-grid {
    grid-template-columns: 1fr !important;
  }
}
@media (max-width: 767px) {
  #contact-blocks-grid {
    grid-template-columns: 1fr !important;
  }
  #contact-block-wa {
    border-left: none !important;
    border-top: 1px solid var(--hairline);
  }
  #contact-form-col {
    padding: 32px 20px !important;
  }
  #contact-aside-col {
    padding: 40px 20px !important;
  }
}
</style>
