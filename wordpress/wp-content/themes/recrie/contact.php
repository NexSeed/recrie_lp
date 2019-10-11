<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * Template Name: contact
 *
 * @package WordPress

 */

?>

<?php get_header(); ?>
<div>
  <div class="p-heading">
    <div class="c-staff">
      <img class="c-staff__img" src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/staff-1.png" alt="">
      <img class="c-staff__img --margin-middle" src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/staff-2.png" alt="">
      <img class="c-staff__img" src="<?php echo get_template_directory_uri(); ?>/assets/minified/images/staff-3.png" alt="">
    </div>
    <div class="c-finance">
      <p class="c-finance__title">財務の専門家による財務改善診断</p>
      <p class="c-finance__tax">
        <strong class="c-finance__cost">20,000円</strong>(税抜き)</p>
    </div>
  </div>
</div>
  <?php echo do_shortcode('[contact-form-7 id="34" title="Contact Recrie"]'); ?>

<?php get_footer(); ?>