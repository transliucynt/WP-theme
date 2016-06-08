<!-- <?php get_header(); ?>

<section class="content">
	
	<?php get_template_part('inc/page-title'); ?>
	
	<div class="pad group">
		
		<?php while ( have_posts() ): the_post(); ?>
			<article <?php post_class(); ?>>	
				<div class="post-inner group">
					
<?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>

<h1 class="post-title"><?php the_title(); ?></h1>


<div class="entry">	
	<div class="entry-inner">
		<?php the_content(); ?>

		<p class='resolutions'> Downloads: 
		<?php
			$images = array();
			$image_sizes = get_intermediate_image_sizes();
			array_unshift( $image_sizes, 'full' );
			foreach( $image_sizes as $image_size ) {
				$image = wp_get_attachment_image_src( get_the_ID(), $image_size );
				$name = $image_size . ' (' . $image[1] . 'x' . $image[2] . ')';
				$images[] = '<a href="' . $image[0] . '">' . $name . '</a>';
			}

			echo implode( ' | ', $images );
		?>
		</p>
	</div>
	<div class="clear"></div>				
</div><!--/.entry-->
					
				</div><!--/.post-inner-->	
			</article><!--/.post-->				
		<?php endwhile; ?>
		
	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?> -->