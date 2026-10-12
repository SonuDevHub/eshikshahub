<?php
require_once __DIR__ . '/config.php';
$current_page = $current_page ?? 'home';
$page_title = $page_title ?? 'Best Online Learning Platform in India';
$page_desc = $page_desc ?? 'eShikshaHub connects learners with UGC-approved online degree programs from India\'s top universities. Flexible, affordable online degrees with placement assistance.';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?> · <?= SITE_NAME ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
  <link rel="canonical" href="https://eshikshahub.in/<?= ($current_page !== 'home') ? htmlspecialchars($current_page) : '' ?>">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?= BASE_URL ?>assets/img/favicon.png">
  
  <!-- Google Fonts: Nunito 700/800, Heebo 400/500/600/700, JetBrains Mono 500 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700;800&family=Heebo:wght@400;500;600;700&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body class="es">
<div class="site-wrap">
