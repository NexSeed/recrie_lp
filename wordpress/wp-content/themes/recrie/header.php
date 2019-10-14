<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Recrie</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <?php wp_head(); ?>
</head>

<body>
  <span id="top-link"></span>
  <div class="l-body-container">
    <div class="l-header-container">
      <div class="l-navbar">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/logo.png" alt="Company Logo" class="l-logo">
        <p class="l-navbar__title">
        レクリエの財務改善コーチング
        </p>
        <ul id="menu-list">
          <li>
            <a href="contact">トップ</a>
          </li>
          <li>
            <a href="">実績</a>
          </li>
          <li>
            <a href="">特徴</a>
          </li>
          <li>
            <a href="">サービス</a>
          </li>
          <li id="toggleHamburger2" class="l-close-hamburger">
            <a>
              <i class="far fa-times-circle"></i>閉じる
            </a>
          </li>
        </ul>
        <div id="toggleHamburger" class="l-hamburger">
          <img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/bars-icon.png" alt="" srcset="">
          <p>MENU</p>
        </div>
      </div>
    </div>
    <a href="#top-link"><img class="c-fab" src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/top-fab.png" alt="" srcset=""></a>