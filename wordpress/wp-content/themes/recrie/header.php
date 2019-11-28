<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Recrie</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
	<?php if(is_page('thanks') || is_page('upload-thanks') ): ?>
  <style>
    .l-footer {
			position: absolute;
			bottom: 0;
    }
	</style>
	<?php endif; ?>
</head>

<body>
	<span id="top-link"></span>
	<div class="l-body-container">
		<div class="l-header-container">
			<div class="l-navbar">
				<a href="<?php echo home_url(); ?>" class="l-navbar__link"><img src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/logo.png" alt="Company Logo" class="l-logo">
					<div class="l-navbar__title">
						レクリエの財務改善コーチング
					</div>
				</a>
				<ul id="menu-list">
					<li>
						<a href="<?php echo home_url(); ?>">トップ</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>#work">実績</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>#feature">特徴</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>#service">サービス</a>
					</li>
					<li id="toggleHamburger2" class="l-close-hamburger">
						<a>
							<i class="far fa-times-circle"></i>閉じる
						</a>
					</li>
				</ul>
				<div id="toggleHamburger" class="l-hamburger">
					<img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/menu.png" alt="" srcset="">
				</div>
			</div>
		</div>
		<a href="#top-link"><img class="c-fab" src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/top-fab.png" alt="" srcset=""></a>
