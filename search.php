<?php get_header(); ?>

<div class="container add-bottom">

	<?php 
		if( have_posts() ):
			while( have_posts() ): the_post(); ?>
				<?php get_template_part('content');
				?>
			<?php endwhile;
		endif;
	?>
</div>

<?php get_footer(); ?>