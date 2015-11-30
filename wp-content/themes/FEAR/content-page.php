<div class="subheader"<?php if(has_post_thumbnail()) echo " style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . ");\""; ?>>
	<div class="site-width">
		<div>
			<?php the_title( '<h2>', '</h2>' ); ?>
			<?php the_subtitle( '<div>', '</div>' ); ?>
		</div>
	</div>
</div>

<div class="site-width mb">
	<?php the_content(); ?>
</div>