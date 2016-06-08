<?php 
/* 
Template Name: No Header
Template Description: displays title and content only
*/ 
?>

<?php get_header(); ?>

<div class="container add-bottom">
	<?php 
		if( have_posts() ):
			while( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
			<?php endwhile;
		endif;
	?>
</div>

<?php get_footer(); ?>