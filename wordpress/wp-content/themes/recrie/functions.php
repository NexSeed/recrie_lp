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

// ページの追加
add_action('admin_menu', 'register_my_custom_menu_page');
function register_my_custom_menu_page()
{
		add_menu_page('顧客リスト一覧', 'Uploaded Files', 'manage_options', 'customer-list', 'show_list', 'dashicoxns-welcome-learn-more', 6);
}

define('PDF_MAGIC', "\x25\x50\x44\x46\x2D");
function is_pdf($filename) {
    return (file_get_contents($filename, false, null, 0, strlen(PDF_MAGIC)) === PDF_MAGIC) ? true : false;
}

function show_list() 
{
	
	$uploads = wp_upload_dir();
	$uploaded_files = glob($uploads['basedir'].'/wp_dndcf7_uploads/*');

	?>
	<style>
		.container {
			display: flex;
			justify-content: space-evenly;
			margin: 15px 0;
		}

		.files {
			width: 48%;
			background: #eaece5;
			padding: 20px 30px;	
		}

		.files a {
			font-size: 16px;
			color: #454140;
		}

		.p-file__table {
			width: 48%;
			border-collapse: collapse;
		}
		
		.p-file__table > thead {
			background: #394829;
			color: #fff;
			font-size: 16px;
		} 

		.p-file__table > thead th {
			padding: 15px;
		}

		.p-file__table tr {
			text-align: center;
		}

		.p-file__table td {
			padding: 15px 0;
		}

		.p-file__table tr:nth-child(even) {
			background-color: #DFE3EE;
		}

		.p-file__table tbody tr:hover {background-color: #f5f5f5;}

		
		.c-btn--common {
			transition: .3s;
			border: 1px solid #394829;
			display: inline-block;
			text-decoration: none;
			color: #fff;
			background: #394829;
			padding: .9em 1.5em;
			text-align: center;
			border-radius: 10px;
			font-weight: bold;
		}

		.c-btn--common:visited, .c-btn--common:focus {
			color: #fff;
			background: #394829;
		}

		.c-btn--common:hover{
			background: #fff;
			color: #394829;
		}

		/* .p-file__table a:focus .p-file__table a:hover  {
			background: #fff;
		} */

	</style>
	<div class="container">
		<table class="p-file__table">
		<thead>
			<th>Serial No.</th>
			<th>Action</th>
		</thead>
		<?php
		foreach($uploaded_files as $upload) 
		{
			$containing_dir = explode('/', $upload);
			// Open a directory, and read its contents
			?>
			<tr>
				<td>
					<?php echo $containing_dir[7];?>
				</td>
				<td>
					<a href="javascript:;" id="<?php echo $containing_dir[7]; ?>" class="c-btn--common">View Files</a>						
				</td>
			</tr>
			<?php
		}
		$temp = json_encode($uploads);
	?>
		</table>	
		<div class="files"></div>
	</div>
	<script>
		jQuery(document).ready(function($) {
			$('.c-btn--common').on('click', function () {
				let id = $(this).attr('id');
				var uploads = <?php echo $temp; ?>;

				$.ajax({
					type: 'GET',
					url: '../wp-content/themes/recrie/files.php',
					dataType: 'json',
					data: {
						'id': id,
						'uploads': uploads,
					}
				}).done(function(data) {
					$('.files').empty();
					$('.files').append(`<h2>List of uploaded files of Serial No: ${id}</h2>`);
					$.each(data, function (index, value) {
						console.log(index);
						if(value !== '.' && value !== '..') {
							$('.files').append(`<a href="${uploads.baseurl}/wp_dndcf7_uploads/${id}/${value}" target="_blank">${value}</a> <br><br>`);
						}
					})
				});
			});
		});
		
	</script>

	<?php
}