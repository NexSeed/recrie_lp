      <div class="l-footer">
        <p>©2019 株式会社レクリエ</p>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://kit.fontawesome.com/125087969d.js" crossorigin="anonymous"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/polyfill.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/tst.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
            $("#lightgallery").lightGallery({
              thumbnail: true
            }); 
        });
      </script>
      <?php wp_footer(); ?>
    </div>
  </body>
</html>