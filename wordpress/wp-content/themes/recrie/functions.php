<?php

add_action('wp_footer', 'add_thanks_page');
function add_thanks_page()
{
	if (is_page('contact')) {
		?>
		<script>
			document.addEventListener('wpcf7mailsent', function(event) {
				location = home_url('/thanks/');
			}, false);
		</script>

	<?php
		} else if (is_page('upload')) {
			?>
		<script>
			document.addEventListener('wpcf7mailsent', function(event) {
				location = home_url('/thanks/');
			}, false);
		</script>
<?php
	}
}
