	<footer>

	<!-- Main Menu Links -->
		<nav class="navbar navbar-default navbar-fixed-bottom">
			<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">

				<!-- The overlay -->
				<div id="myNav" class="overlay">
				  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

				  	<!-- Overlay content -->
				  	<div class="overlay-content">
				    	<?php
			    		wp_nav_menu(array(
				    		'theme_location' => 'footer',
				    		'container' => false
				    		));
			    		?>

			    		<!-- <?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'cynthia' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
									) );
								?>
							</nav>
						<?php endif; ?> -->
				  	</div>

				</div>

		    	<button type="button" class="navbar-toggle collapsed" onclick="openNav()"">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>

		      	<?php the_custom_logo( $blog_id = 0, array(
			    	'menu_class' => 'navbar-brand'
		      		)
	      		); ?>

		    </div>
 			
 			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php
			    	wp_nav_menu(array(
			    		'theme_location' => 'footer',
			    		'container' => false,
			    		'menu_class' => 'nav navbar-nav navbar-right'
			    		)
		    		);
	    		?>
		    </div>

		  </div><!-- /.container-fluid -->
		</nav>
	</footer>

	<!-- Scripts -->
	<?php wp_footer(); ?>
	</body>
</html>