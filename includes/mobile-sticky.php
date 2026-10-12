<?php
require_once __DIR__ . '/config.php';
$is_course_page = !empty($is_course_page);
?>
<!-- MOBILE STICKY BAR (60px fixed bottom) -->
<aside class="mobile-sticky-bar <?= $is_course_page ? 'course-page' : '' ?>" aria-label="Quick contact mobile bar">
  <?php if ($is_course_page): ?>
    <a href="#enquiry-form" class="ms-btn ms-apply" style="padding: 0 16px; font-weight: 700;">
      <span>Apply Now</span>
      <svg class="ic" viewBox="0 0 24 24" aria-hidden="true" style="width: 18px; height: 18px;"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
    </a>
    <a href="tel:<?= PHONE_CLEAN ?>" class="ms-btn ms-call" aria-label="Call <?= PHONE ?>">
      <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
    </a>
    <a href="<?= WHATSAPP_LINK ?>" class="ms-btn ms-wa" aria-label="WhatsApp" target="_blank" rel="noopener">
      <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"></path><path d="M9 9.5c0 3 2.5 5.5 5.5 5.5l1.5-1.5-2-1-1 1c-1 0-2.5-1.5-2.5-2.5l1-1-1-2z"></path></svg>
    </a>
  <?php else: ?>
    <a href="tel:<?= PHONE_CLEAN ?>" class="ms-btn ms-call">
      <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
      <span>Call</span>
    </a>
    <a href="<?= WHATSAPP_LINK ?>" class="ms-btn ms-wa" target="_blank" rel="noopener">
      <svg class="ic" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"></path><path d="M9 9.5c0 3 2.5 5.5 5.5 5.5l1.5-1.5-2-1-1 1c-1 0-2.5-1.5-2.5-2.5l1-1-1-2z"></path></svg>
      <span>WhatsApp</span>
    </a>
  <?php endif; ?>
</aside>
