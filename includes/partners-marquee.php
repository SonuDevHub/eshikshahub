<?php
require_once __DIR__ . '/config.php';
?>
<!-- HIRING PARTNERS MARQUEE SECTION -->
<section style="background: var(--navy); padding: 96px 0;" data-reveal>
  <div class="container" style="display: grid; grid-template-columns: 7fr 5fr; gap: 48px; align-items: end; margin-bottom: 48px;" id="marquee-header-row">
    <div class="head">
      <p class="lbl dk">Hiring Partners</p>
      <h2 class="h2 w">Careers with Global Brands</h2>
    </div>
    <p class="lead pdk">Our learners now work at India's most trusted companies.</p>
  </div>
  
  <div class="marquee-container" aria-label="Hiring partner companies marquee">
    <!-- Track 1: Forward -->
    <div class="marquee-track">
      <?php for ($i = 0; $i < 2; $i++): // Double for seamless loop ?>
        <?php foreach ($HIRING_ROW1 as $p): ?>
          <span class="mq">
            <?php if (!empty($p['logo']) && file_exists(__DIR__ . '/../' . $p['logo'])): ?>
              <img src="<?= BASE_URL . $p['logo'] ?>" alt="<?= htmlspecialchars($p['name']) ?>" class="mq-logo">
            <?php else: ?>
              <svg class="ic mk" viewBox="0 0 32 32" aria-hidden="true"><rect x="4" y="4" width="24" height="24"></rect><path d="M16 9l7 7-7 7-7-7z"></path></svg>
            <?php endif; ?>
            <span><?= htmlspecialchars($p['name']) ?></span>
          </span>
        <?php endforeach; ?>
      <?php endfor; ?>
    </div>

    <!-- Track 2: Reverse -->
    <div class="marquee-track reverse">
      <?php for ($i = 0; $i < 2; $i++): // Double for seamless loop ?>
        <?php foreach ($HIRING_ROW2 as $p): ?>
          <span class="mq">
            <?php if (!empty($p['logo']) && file_exists(__DIR__ . '/../' . $p['logo'])): ?>
              <img src="<?= BASE_URL . $p['logo'] ?>" alt="<?= htmlspecialchars($p['name']) ?>" class="mq-logo">
            <?php else: ?>
              <svg class="ic mk" viewBox="0 0 32 32" aria-hidden="true"><rect x="4" y="4" width="24" height="24"></rect><path d="M16 9l7 7-7 7-7-7z"></path></svg>
            <?php endif; ?>
            <span><?= htmlspecialchars($p['name']) ?></span>
          </span>
        <?php endforeach; ?>
      <?php endfor; ?>
    </div>
  </div>
</section>

<style>
@media (max-width: 1024px) {
  #marquee-header-row {
    grid-template-columns: 1fr !important;
    gap: 16px !important;
  }
}
</style>
