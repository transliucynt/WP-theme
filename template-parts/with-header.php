<?php 
/* 
Template Name: Header
Template Description: displays title, content, and featured image in header
*/ 
?>

<?php get_header(); ?>
<div class="add-bottom">
<?php 
	if ( has_post_thumbnail() ): ?>
		<div class="page-header">
			<?php the_post_thumbnail('full'); ?>
		</div>
	<?php else: ?>
		<!-- Do Nothing -->
<?php endif; ?>

<div class="container">
	<?php 
		if( have_posts() ):
			while( have_posts() ): the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
			<?php endwhile;
		endif;
	?>
	</div>

	</div>
</div>
</div>

<?php get_footer(); ?>