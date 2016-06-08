<?php
/**
 * Template for displaying search forms
 */
?>
<div class="center">
	<form role="search" method="get" class="form-group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label>
			<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( '&hellip;', 'placeholder', 'cynthia' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		</label>
		<button type="submit" class="btn btn-default"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'cynthia' ); ?></span></button>
	</form>
</div>