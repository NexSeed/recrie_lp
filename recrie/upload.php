<?php

/**
 * The template for displaying the upload page
 *
 * Contains the template and shortcode for upload page.
 *
 * Template Name: upload
 *
 * @package WordPress

 */

?>

<?php
// URL watcher for client serialnumber
if (!isset($_GET['serial'])) {
	header("Location: /recrie_lp ");
}
?>
<?php
session_start();
$_SESSION["serial"] = $_GET['serial'];
?>

<?php get_header(); ?>
<main>
<?php
  while (have_posts()) : the_post();
    remove_filter('the_content', 'wpautop');
    the_content();
  endwhile;
?>
</main>

<?php get_footer(); ?>
