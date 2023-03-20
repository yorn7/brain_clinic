<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- meta情報 -->
  <title>渡邉脳神経外科</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="robots" content="noindex">
  <!-- ogp -->
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">
  <!-- ファビコン -->
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
  <!-- slider仕様のためのcss -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
  <!-- slider仕様のためのjs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
  <?php wp_head();?>
</head>
<body>
<!-- header開始 -->
<header class="header">
  <div class="header__inner">
    <h1 class="header__logo">
      <a href="<?php echo home_url( '/' );?>">
        <img src="<?php echo get_the_logo_url(); ?>" alt="渡邉脳神経外科クリニック">
      </a>
    </h1>
    <div class="header__content">
      <button class="header__hamburger hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="header__nav header-nav js-drawer">
          <ul class="header-nav__items">
            <li class="header-nav__item">
              <a href="<?php echo home_url(); ?>/about/">
                クリニックについて
              </a>
            </li>
            <li class="header_dot"></li>
            <li class="header-nav__item">
              <a href="<?php echo home_url(); ?>/news/">
                お知らせ
              </a>
            </li>
            <li class="header_dot"></li>
            <li class="header-nav__item">
              <a href="<?php echo home_url(); ?>/treatment/">
                診療案内
              </a>
            </li>
            <li class="header_dot"></li>
            <li class="header-nav__item">
              <a href="<?php echo home_url(); ?>/contact/">
                お問い合わせ
              </a>
            </li>
          </ul>
      </nav>
    </div>
  </div>
</header>
<div class="circle-bg"></div>
<!-- header終了 -->