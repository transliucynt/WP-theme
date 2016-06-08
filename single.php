<?php
/*
 The template for displaying all single posts and attachments
 */

get_header(); ?>

	<?php 
		if ( has_post_thumbnail() ): ?>
			<div class="page-header">
				<?php the_post_thumbnail('full'); ?>
			</div>
		<?php else: ?>
			<!-- Do Nothing -->
	<?php endif; ?>
<div class="container add-bottom">

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();
		// Include the single post content template.
		get_template_part( 'template-parts/content', 'single' );


		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

		// End of the loop.
	endwhile;
	?>

</div><!-- .content-area -->

<?php get_footer(); ?>