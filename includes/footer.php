<?php
require_once __DIR__ . '/config.php';
?>
<!-- LOCKED FOOTER -->
<footer class="site-footer" style="width: 100%; background: var(--offwhite);" role="contentinfo">
  <!-- Top Branding & Contact Button -->
  <div class="container footer-top-row" style="padding-top: 48px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
    <a href="<?= BASE_URL ?>index.php" aria-label="<?= SITE_NAME ?> Home" style="display: inline-flex; align-items: center; text-decoration: none;">
      <img src="<?= BASE_URL ?>assets/img/logo.png" alt="<?= SITE_NAME ?>" style="height: 50px; width: auto; max-width: 200px; object-fit: contain;">
    </a>
    <a href="<?= BASE_URL ?>contact.php" style="display: inline-flex; align-items: center; height: 50px; padding: 0 32px; background: var(--navy); color: var(--white); font: 600 17px 'Heebo', sans-serif; text-decoration: none; transition: background .2s; border-radius: 8px;">
      Contact Us
    </a>
  </div>

  <!-- 4 Link Columns -->
  <div class="container" style="padding-top: 40px; padding-bottom: 64px; display: grid; grid-template-columns: 1fr 1fr 1fr 1.5fr; gap: 48px;" id="footer-cols-grid">
    <!-- Col 1: UG Courses -->
    <div>
      <p class="mono" style="color: var(--orange-dark); margin-bottom: 14px;">Courses (UG)</p>
      <ul style="list-style: none; margin: 0; padding: 0;">
        <?php foreach ($UG_COURSES as $ug_c): ?>
          <li><a class="flink" href="<?= BASE_URL . $ug_c['slug'] ?>"><?= $ug_c['abbr'] ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- Col 2: PG Courses -->
    <div>
      <p class="mono" style="color: var(--orange-dark); margin-bottom: 14px;">Courses (PG)</p>
      <ul style="list-style: none; margin: 0; padding: 0;">
        <?php foreach ($PG_COURSES as $slug => $pg_c): ?>
          <li><a class="flink" href="<?= BASE_URL . $pg_c['slug'] ?>"><?= $pg_c['abbr'] ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- Col 3: Company -->
    <div>
      <p class="mono" style="color: var(--orange-dark); margin-bottom: 14px;">Company</p>
      <ul style="list-style: none; margin: 0; padding: 0;">
        <li><a class="flink" href="<?= BASE_URL ?>about.php">About</a></li>
        <li><a class="flink" href="<?= BASE_URL ?>placement.php">Placement</a></li>
        <li><a class="flink" href="<?= BASE_URL ?>refer-and-earn.php">Refer &amp; Earn</a></li>
        <li><a class="flink" href="<?= BASE_URL ?>gallery.php">Gallery</a></li>
        <li><a class="flink" href="<?= BASE_URL ?>contact.php">Contact</a></li>
      </ul>
    </div>

    <!-- Col 4: Contact Lines -->
    <div>
      <p class="mono" style="color: var(--orange-dark); margin-bottom: 14px;">Contact</p>
      <ul class="mono" style="list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column; gap: 12px; color: var(--navy); line-height: 1.7;">
        <li class="fct">
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
          <span>Noida: <?= NOIDA_OFFICE ?></span>
        </li>
        <li class="fct">
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
          <span>Agra: <?= AGRA_OFFICE ?></span>
        </li>
        <li class="fct">
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <a class="flink" href="tel:<?= PHONE_CLEAN ?>" style="min-height: 0; text-transform: none;"><?= PHONE ?></a>
        </li>
        <li class="fct">
          <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
          <a class="flink" href="mailto:<?= EMAIL ?>" style="min-height: 0; text-transform: none;"><?= EMAIL ?></a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Social & Legal on Tint Band -->
  <div style="background: var(--tint);">
    <div class="container" style="height: 72px; border-bottom: 1px solid rgba(24,29,56,.12); display: flex; align-items: center; justify-content: space-between;">
      <a class="flink" href="https://instagram.com" target="_blank" rel="noopener">Instagram</a>
      <a class="flink" href="https://facebook.com" target="_blank" rel="noopener">Facebook</a>
      <a class="flink" href="https://linkedin.com" target="_blank" rel="noopener">LinkedIn</a>
      <a class="flink" href="<?= WHATSAPP_LINK ?>" target="_blank" rel="noopener">WhatsApp</a>
    </div>
    <div class="container" style="height: 64px; display: flex; align-items: center; justify-content: space-between;" id="footer-copy-row">
      <p style="font-size: 14px; color: var(--body);">© <?= date('Y') ?> <?= SITE_NAME ?>. All rights reserved.</p>
      <div style="display: flex; gap: 32px;">
        <a class="flink" href="<?= BASE_URL ?>contact.php">Terms &amp; Conditions</a>
        <a class="flink" href="<?= BASE_URL ?>contact.php">Privacy Policy</a>
      </div>
    </div>

    <!-- Giant Wordmark with Overlapping Objects -->
    <div aria-hidden="true" class="giant-wordmark-layer">
      <!-- Laptop SVG -->
      <svg viewBox="0 0 180 120" style="position: absolute; left: 60%; top: 8px; width: 170px; z-index: 0;">
        <rect x="28" y="6" width="124" height="82" fill="#FFFFFF" stroke="#181D38" stroke-width="3"></rect>
        <rect x="38" y="16" width="104" height="62" fill="#F4F3EF"></rect>
        <rect x="48" y="28" width="50" height="8" fill="#E85612"></rect>
        <rect x="48" y="44" width="80" height="5" fill="#181D38"></rect>
        <rect x="48" y="54" width="64" height="5" fill="#181D38"></rect>
        <path d="M10 96h160l-12 16H22z" fill="#181D38"></path>
      </svg>
      
      <!-- Giant Wordmark Text -->
      <div class="giant-wordmark-text">ESHIKSHAHUB</div>

      <!-- Graduation Cap SVG -->
      <svg viewBox="0 0 160 110" style="position: absolute; left: 10%; top: 0; width: 150px; z-index: 2; transform: rotate(-10deg);">
        <path d="M40 52v26c0 10 80 10 80 0V52L80 68z" fill="#B8410A"></path>
        <polygon points="80,14 156,44 80,74 4,44" fill="#E85612" stroke="#181D38" stroke-width="2"></polygon>
        <path d="M80 44 L132 54 V86" fill="none" stroke="#181D38" stroke-width="3"></path>
        <rect x="126" y="84" width="12" height="18" fill="#181D38"></rect>
      </svg>

      <!-- Books Stack SVG -->
      <svg viewBox="0 0 170 100" style="position: absolute; left: 35%; top: 70px; width: 170px; z-index: 2;">
        <rect x="10" y="62" width="150" height="30" fill="#181D38"></rect>
        <rect x="16" y="68" width="138" height="4" fill="#F4F3EF"></rect>
        <rect x="22" y="34" width="132" height="28" fill="#E85612"></rect>
        <rect x="22" y="42" width="132" height="3" fill="#FDEEE7"></rect>
        <rect x="4" y="8" width="140" height="26" fill="#FFFFFF" stroke="#181D38" stroke-width="2"></rect>
        <rect x="4" y="8" width="16" height="26" fill="#181D38"></rect>
      </svg>

      <!-- Certificate Scroll SVG -->
      <svg viewBox="0 0 170 80" style="position: absolute; left: 82%; top: 30px; width: 180px; z-index: 2;">
        <g transform="rotate(-14 85 40)">
          <rect x="10" y="22" width="150" height="34" fill="#FFFFFF" stroke="#181D38" stroke-width="2"></rect>
          <ellipse cx="160" cy="39" rx="7" ry="17" fill="#F4F3EF" stroke="#181D38" stroke-width="2"></ellipse>
          <rect x="70" y="20" width="16" height="38" fill="#E85612"></rect>
          <path d="M74 58l-6 14 10-6 10 6-6-14" fill="#E85612"></path>
        </g>
      </svg>
    </div>
  </div>
</footer>

<style>
@media (max-width: 1024px) {
  #footer-cols-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 36px !important;
  }
}
@media (max-width: 600px) {
  #footer-cols-grid {
    grid-template-columns: 1fr !important;
  }
  #footer-copy-row {
    flex-direction: column !important;
    gap: 12px !important;
    height: auto !important;
    padding-top: 16px !important;
    padding-bottom: 16px !important;
    text-align: center;
  }
}
</style>

<!-- Mobile Sticky Bottom Bar -->
<?php require_once __DIR__ . '/mobile-sticky.php'; ?>

</div> <!-- end .site-wrap -->

<!-- Scripts -->
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
