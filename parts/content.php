<li <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('event-image'); ?>
		<?php endif; ?>
		<?php the_field('event_date', get_the_ID());
		?>
		<?php the_content(); ?>
	</a>
</li>