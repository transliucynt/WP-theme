<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

	<div id="primary" class="content-area container text-center vertical-center">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header>
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'cynthia' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Perhaps try something else?', 'cynthia' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

	</div><!-- .content-area -->

<?php get_footer(); ?>
