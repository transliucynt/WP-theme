<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title('<h1>','</h1>'); ?>
	</header><!-- .entry-header -->

	<div>
		<?php the_content(); ?>
		<?php echo get_the_tag_list('<p>Tags: ',', ','</p>'); ?>

		<div class="post-nav">

			<span class="prev_post">
				<?php previous_post_link( '
				<strong>&#10094;&#10094; %link</strong>' ); ?>
			</span>

			<span class="next_post">
				<?php next_post_link( '<strong>%link &#10095;&#10095; </strong>' ); ?>
			</span>
		</div>

	</div><!-- .entry-content -->
</article><!-- #post-## -->