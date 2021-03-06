<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <?php wp_head(); ?>
</head>
<body>
<?php
  while (have_posts()) : the_post();
    remove_filter('the_content', 'wpautop');
    the_content();
  endwhile;
?>
  <?php get_footer(); ?>
