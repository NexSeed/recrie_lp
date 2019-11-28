<?php

//imageパスのショートカット
function replaceImagePath($arg)
{
    $content = str_replace('"assets/', '"'.get_bloginfo('template_directory').'/assets/', $arg);

    return $content;
}
add_action('the_content', 'replaceImagePath');

// 不要な機能を停止
// 絵文字
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// 管理画面（ダッシュボード）での絵文字
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function set_seo()
{
    $setmeta = '';
    if (is_home() || is_front_page()) {
        $setmeta .= '<title>'.get_bloginfo('name')."</title>\n";
    } else {
        if (is_page() || is_single()) {
            $setmeta .= '<title>'.get_the_title().' | '.get_bloginfo('name')."</title>\n";
        }
    }
    echo $setmeta;
}
add_filter('wp_head', 'set_seo');

// トップページ以外アクセス禁止
function set_noindex()
{
    if (!is_front_page() && !is_home()) {
        echo '<meta name="robots" content="noindex">'."\n";
    }
}
add_filter('wp_head', 'set_noindex');

function add_thanks_page()
{
    if (is_page('contact')) {
        ?>
		<script>
			document.addEventListener('wpcf7mailsent', function(event) {
				location = "<?php echo home_url('/thanks/'); ?>";
			}, false);
		</script>
	<?php
    } elseif (is_page('upload')) {
        ?>
		<script>
			document.addEventListener('wpcf7mailsent', function(event) {
				location = "<?php echo home_url('/upload-thanks/'); ?>";
			}, false);
		</script>
<?php
    }
}

add_action('wp_footer', 'add_thanks_page');

// contact form 7 バリデーション追加
function wpcf7_validate_customize($result, $tags)
{
    foreach ($tags as $tag) {
        $type = $tag['type'];
        $name = $tag['name'];
        $post = trim(strtr((string) $_POST[$name], "\n", ''));

        if ($type == 'tel' || $type == 'tel*') {
            if (preg_match('/^0[0-9]{9,10}$/', $_POST[$name]) == false) {
                $result->invalidate($name, 'ハイフンを省略し、正しい桁数をご入力下さい。');
            }
        }
    }

    return $result;
}
add_filter('wpcf7_validate', 'wpcf7_validate_customize', 11, 2);
