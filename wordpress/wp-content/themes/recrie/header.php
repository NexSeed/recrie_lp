<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Recrie</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lightgallery.css">
	<?php wp_head(); ?>
	<?php if(is_page('thanks') || is_page('upload-thanks') ): ?>
  <style>
    .l-footer {
			position: absolute;
			bottom: 0;
		}
		@media only screen and (max-width: 400px)  {
			.l-footer {
				position: relative;
			}
		}
	</style>
	<?php endif; ?>
</head>

<body>
	<span id="top-link"></span>
	<div class="l-body-container">
		<div class="l-header-container">
			<div class="l-navbar">
				<a href="<?php echo home_url(); ?>" class="l-navbar__top-link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/logo.png" alt="Company Logo" class="l-logo">
					<div class="l-navbar__title">
						レクリエの財務改善コーチング
						</div>
				</a>
				
			</div>
		</div>

<!-- <ul class="p-financial_sample__content" id="lightgallery">
	<li data-src="assets/minified/images/financial_report-1.jpg">
		<img src="assets/minified/images/financial_report-1.jpg" class="p-financial_sample__thumbnail" alt="McSS 経営診断報告書1">	
	</li>
	<li data-src="assets/minified/images/financial_report-2.jpg">
		<img src="assets/minified/images/financial_report-2.jpg" class="p-financial_sample__thumbnail" alt="McSS 経営診断報告書2">	
	</li>
	<li data-src="assets/minified/images/financial_report-3.jpg">
		<img src="assets/minified/images/financial_report-3.jpg" class="p-financial_sample__thumbnail" alt="McSS 経営診断報告書3">	
	</li>
	<li data-src="assets/minified/images/financial_report-4.jpg">
		<img src="assets/minified/images/financial_report-4.jpg" class="p-financial_sample__thumbnail" alt="McSS 経営診断報告書4">	
	</li>
	<li data-src="assets/minified/images/financial_report-5.jpg">
		<img src="assets/minified/images/financial_report-5.jpg" class="p-financial_sample__thumbnail" alt="McSS 経営診断報告書5">	
	</li>
	<li data-src="assets/minified/images/financial_report-6.jpg">
		<img src="assets/minified/images/financial_report-6.jpg" class="p-financial_sample__thumbnail" alt="McSS 経営診断報告書6">	
	</li>
	<li data-src="assets/minified/images/financial_report-7.jpg">
		<img src="assets/minified/images/financial_report-7.jpg" class="p-financial_sample__thumbnail" alt="McSS 経営診断報告書7">	
	</li>
	<p><span class="p-financial_sample__btn-close">閉じる</span></p>
</ul> -->

<!-- <div class="p-financial_sample__content">
	<img src="assets/minified/images/financial_report-1.jpg" alt="McSS 経営診断報告書1">
	<img src="assets/minified/images/financial_report-2.jpg" alt="McSS 経営診断報告書2">
	<img src="assets/minified/images/financial_report-3.jpg" alt="McSS 経営診断報告書3">
	<img src="assets/minified/images/financial_report-4.jpg" alt="McSS 経営診断報告書4">
	<img src="assets/minified/images/financial_report-5.jpg" alt="McSS 経営診断報告書5">
	<img src="assets/minified/images/financial_report-6.jpg" alt="McSS 経営診断報告書6">
	<img src="assets/minified/images/financial_report-7.jpg" alt="McSS 経営診断報告書7">
	<p><span class="p-financial_sample__btn-close">閉じる</span></p>
</div> -->