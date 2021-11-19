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
