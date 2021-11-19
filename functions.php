<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'cpt' . DIRECTORY_SEPARATOR . 'loader.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'fields' . DIRECTORY_SEPARATOR . 'loader.php';

add_filter('the_content', function ($content) {
	return str_replace('WordPress', '<strong>WordPress</strong>', $content);
});

add_action('wp_head', function () {
?>
	<style>
		body {
			background: #ebebeb;
		}
	</style>
<?php
});

add_action('wp_enqueue_scripts', 'mon_theme_assets');

function mon_theme_assets()
{
	wp_enqueue_style('mon_theme/app_css', get_stylesheet_directory_uri() . '/assets/css/app.css', [], '1.0');
}

add_action('after_setup_theme', function () {
	add_theme_support('post-thumbnails');
});
