<?php
add_action('init', function () {
	// Déclaration d'un type de contenu personnalisé de type Évènement
	register_post_type('event', [
		'labels' => [
			'name' => 'Évènements',
			'singular_name' => 'Évènement',
			'menu_name' => 'Évènement'
		],
		'rewrite' => ['slug' => 'evenement'],
		'has_archive' => true,
		'hierarchical'        => false, // de type chronologique
		'public'              => true,
		'supports' => ['title', 'editor', 'thumbnail']
	]);

	// Déclaration d'une classification de type catégorie d'évènement
	register_taxonomy(
		'event-category',
		['event'],
		[
			'labels' => [
				'name' => 'Catégories d\'évènement',
				'singular_name' => 'Catégorie d\'évènement',
				'menu_name' => 'Catégories'
			],
			'hierarchical' => true, // de type hierarchique
			'public' => true,
		],
	);
});
