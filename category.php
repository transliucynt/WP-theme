

<?php get_header(); ?>

	<?php
		$lastBlog = new WP_Query('type=post&posts_per_page=-1category_name=A');
		//-1 means infinite
			if ( have_posts() ):
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
					<?php get_template_part('content',get_post_format());
						?>
				<?php endwhile;
			endif;
		wp_reset_postdata();
	?>

<?php get_footer(); ?>