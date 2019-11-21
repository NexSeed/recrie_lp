<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * Template Name: upload
 *
 * @package WordPress

 */

?>

<?php
// URL watcher for client serialnumber
if (!isset($_GET['serial'])) {
	header("Location: / ");
}
?>
<?php
session_start();
$_SESSION["serial"] = $_GET['serial'];
?>

<?php get_header(); ?>

<div class="l-container">
	<div class="p-heading upload">
		<div class="c-staff">
			<img class="c-staff__img" src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/staff-1.png" alt="">
			<img class="c-staff__img --margin-middle" src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/staff-2.png" alt="">
			<img class="c-staff__img" src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/staff-3.png" alt="">
		</div>
		<div class="c-finance">
			<p class="c-finance__title">財務の専門家による財務改善診断</p>
		</div>
	</div>
</div>
<div class="l-container">
	<div class="p-upload">
		<header class="p-upload__head">アップロードページ</header>
		<span hidden name="serial" value="<?php echo $_SESSION['serial']; ?>"></span>
		<?php echo do_shortcode('[contact-form-7 id="40" title="Upload Recrie"]'); ?>
	</div>
</div>
<div class="l-container__fluid">
	<section class="p-application">
		<header class="p-application__title">申込み同意事項</header>
		<p class="p-application__text">
			ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
		</p>
	</section>
</div>
<div class="l-container__fluid">
	<section class="p-privacy">
		<header class="p-privacy__title">プライバシーポリシー</header>
		<p class="p-privacy__text">
			ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
		</p>
	</section>
</div>
<?php get_footer(); ?>
