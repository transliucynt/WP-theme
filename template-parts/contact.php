<?php 
/* 
Template Name: Contact
Template Description: displays title and content only
*/ 
?>

<?php get_header(); ?>

<div class="container-fluid add-bottom no-padding">
	<?php 
		if( have_posts() ):
			while( have_posts() ): the_post(); ?>
				<div class="divide divide-left">
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				</div>
			<?php endwhile;
		endif;
	?>
	<div class="divide divide-right">
		<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.1506932328143!2d-79.39583391005525!3d43.64503301309738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34d942a05c8f%3A0x4fe50ae63354255e!2sBrainStation!5e0!3m2!1sen!2sca!4v1464577399919" width="100%" height=100%" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	</div>
</div>

<?php get_footer(); ?>