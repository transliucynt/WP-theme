<?php get_header(); ?>

<div class="container add-bottom">

	<h1><?php single_post_title() ?></h1>

	<?php 
		if( have_posts() ):
			while( have_posts() ): the_post(); ?>
				<?php get_template_part('content',get_post_format());
				?>
			<?php endwhile;
		endif;
	?>
</div>

<?php get_footer(); ?>