<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row row-margin">
			
		<?php if( has_post_thumbnail() ): ?>
		
			<div class="col-xs-12 col-sm-4 thumbnail">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<div class="col-xs-12 col-sm-8">
				<header class="entry-header">
					<?php the_title( sprintf('<h1 class="entry-title" id="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
				</header>
				<small><?php the_time('F j, Y'); ?></small>
				
				<?php the_excerpt(); ?>
			</div>
		
		<?php else: ?>
			<div class="col-xs-12 col-sm-12">
				<header class="entry-header">
					<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
				</header>
				<small><?php the_time('F j, Y'); ?></small>
				<?php the_excerpt(); ?>
			</div>
		
		<?php endif; ?>
	</div>

</article>