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
		<?php if (have_posts()) : ?>
			<ul class="events">
				<?php while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail(); ?>
							<?php endif; ?>
							<?php the_field('date'); ?>
							<?php the_content(); ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php
get_footer();
