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

add_image_size('event-image', 100, 100, true);
