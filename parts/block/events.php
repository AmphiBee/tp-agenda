<?php
$block_id = $block['id'];
$events = get_field('events', $block_id);
$order = get_field('order', $block_id);
$show_thumbnail = get_field('show_thumbnail', $block_id);
$event_posts = my_related_event_block($events, $order);
?>
<div class="related-events">
	<div>
		<InnerBlocks />
	</div>
	<?php if ($event_posts->have_posts()) : ?>
		<ul>
			<?php while ($event_posts->have_posts()) : $event_posts->the_post(); ?>
				<li>
					<?php if ($show_thumbnail) : ?>
						<?php the_post_thumbnail(); ?>
					<?php endif; ?>
					<h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php else : ?>
		<div>Aucun évènement</div>
	<?php endif; ?>
</div>