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
				<img src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/logo.png" alt="Company Logo" class="l-logo">
					<div class="l-navbar__title">
						レクリエの財務改善コーチング
					</div>
			</div>
		</div>
