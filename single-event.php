<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		if (have_posts()) {

			// Load posts loop.
			while (have_posts()) {
				the_post();
		?>
				<div class="event">
					<h1><?php the_title(); ?></h1>
					<?php if ($event_date = get_field('event_date')) : ?>
						<time><?php echo $event_date; ?></time>
					<?php endif; ?>
					<?php the_content(); ?>

					<div class="other-event">
						<?php
						if (have_rows('dates')) {
							while (have_rows('dates')) {
								the_row();
								echo get_sub_field('date');
							}
						}
						?>
					</div>
				</div>
		<?php
			}
		}
		?>

	</main><!-- .site-main -->

	<?php



	?>
	<?php if (function_exists('event_related_posts')) : ?>
		<?php
		$related_posts = event_related_posts();
		?>
		<?php if ($related_posts && $related_posts->have_posts()) : ?>
			<h2>Évènements en relation</h2>
			<ul>
				<?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
					<?php get_template_part('parts/content', 'event'); ?>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	<?php endif; ?>
</div><!-- .content-area -->

<?php
get_footer();
