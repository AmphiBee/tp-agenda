<?php
$block_id = $block['id'];
$testimony_author = get_field('testimony_author', $block_id);
$testimony_cite = get_field('testimony_cite', $block_id);
$testimony_thumbnail = get_field('testimony_thumbnail', $block_id);
?>

<blockquote class="testimony-block">
	<?php if ($testimony_thumbnail) : ?>
		<figure class="post-thumbnail">
			<?php echo wp_get_attachment_image($testimony_thumbnail); ?>
		</figure>
	<?php endif; ?>
	<div class="testimony-content">
		<p>
			<?php echo $testimony_cite ?>
		</p>
		<cite><?php echo $testimony_author; ?></cite>
	</div>
</blockquote>