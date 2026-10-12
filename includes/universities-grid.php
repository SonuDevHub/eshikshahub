<?php
require_once __DIR__ . '/config.php';
?>
<!-- UNIVERSITIES GRID SECTION -->
<section class="sec" style="background: var(--white); padding-top: 80px; padding-bottom: 80px;" data-reveal>
  <div class="container">
    <div style="display: grid; grid-template-columns: 7fr 5fr; gap: 48px; align-items: end; margin-bottom: 40px;" class="uni-header-row">
      <div class="head">
        <p class="lbl">Our Universities</p>
        <h2 class="h2">Top-Ranked Partner Universities</h2>
      </div>
      <p class="lead">Choose from India's leading UGC-approved online universities.</p>
    </div>
    
    <div class="uni-grid-container" style="display: grid; grid-template-columns: repeat(6, minmax(0, 1fr)); gap: 1px; background: var(--hairline); border: 1px solid var(--hairline); border-radius: 8px; overflow: hidden;">
      <?php foreach ($UNIVERSITIES as $u): ?>
        <a class="lg" href="<?= BASE_URL ?>courses.php" title="<?= htmlspecialchars($u['name']) ?>">
          <?php if (!empty($u['logo']) && file_exists(__DIR__ . '/../' . $u['logo'])): ?>
            <img src="<?= BASE_URL . $u['logo'] ?>" alt="<?= htmlspecialchars($u['name']) ?> Logo" class="lg-img">
          <?php else: ?>
            <svg class="ic mk" viewBox="0 0 32 32" aria-hidden="true"><rect x="4" y="4" width="24" height="24"></rect><path d="M16 9l7 7-7 7-7-7z"></path></svg>
          <?php endif; ?>
          <span><?= htmlspecialchars($u['name']) ?></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
@media (max-width: 1199px) {
  .uni-header-row {
    grid-template-columns: 1fr !important;
    gap: 20px !important;
  }
  .uni-grid-container {
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
  }
}
@media (max-width: 767px) {
  .uni-grid-container {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
}
</style>
