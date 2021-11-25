<?php
add_filter('the_content', function ($content) {
	return str_replace('WordPress', '<strong>WordPress</strong>', $content);
});

add_action('wp_enqueue_scripts', 'mon_theme_assets');

function mon_theme_assets()
{
	wp_enqueue_style('twentytwentyone/app_css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('mon_theme/app_css', get_stylesheet_directory_uri() . '/assets/css/app.css', [], '1.0');
}

add_action('after_setup_theme', function () {
	add_theme_support('post-thumbnails');
});

add_action('init', function () {
	register_nav_menu('event-menu', 'Menu évènement');
});

add_image_size('event-image', 100, 100, true);

function my_related_event_block($ids = [], $order = 'DESC')
{
	$args = [
		'post_type' => 'event', // slug du type de contenu personnalisé
		//'posts_per_page' => 2,
		'orderby' => 'post_date',
		'order' => $order,
		'post__in' => $ids,
	];

	return new WP_Query($args); // appel de la requète en base de données
}


acf_register_block_type([
	'name' => 'related-event',
	'title' => 'Évènement mis en avant',
	'render_template' => get_stylesheet_directory() . '/parts/block/events.php',
	'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/blocks/related-event.css',
	'supports' => [
		'jsx' => true,
	]
]);

acf_register_block_type([
	'name' => 'testimony',
	'title' => 'Témoignage',
	'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
</svg>',
	'render_template' => get_stylesheet_directory() . '/parts/block/testimony.php',
	'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/blocks/testimony.css',
]);
