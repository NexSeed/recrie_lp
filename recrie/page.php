<?php
    get_header();
?>
<main>
<?php
  while (have_posts()) : the_post();
    remove_filter('the_content', 'wpautop');
    the_content();
  endwhile;
?>
</main>
<!-- /main-->
<?php
    get_footer();
?>
