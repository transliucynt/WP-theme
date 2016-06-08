<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>
		<!-- <?php 
			$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 3 );
			$the_query = new WP_Query( $args ); 
			?> -->
			<div class="row">	
				<?php
				//page id
				  $page_id = array('146', '55', '57'); //example stores multiple page ID in an array

					//render image for each page using foreach conditional loop
					foreach($page_id as $id){

					if (has_post_thumbnail($id) ):
						$image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'single-post-thumbnail' );
					endif;
					
					echo
					"<div class='col-xs-12 col-sm-6 col-md-6 col-lg-4 img-responsive img-contain'>
						<img src=".$image[0].">
						<a href='". get_permalink($id) ."'><div class='media__body'>
								<h1>
								". get_the_title($id) ."
								</h1>
						</div>
						</a>	
					</div>";
				}
				?>
					</div>
			</div>
	 </div>

<?php get_footer(); ?>
<!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 img-responsive img-contain"> -->