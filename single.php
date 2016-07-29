<?php
/**
 * The template for displaying all single posts. Damn well better be only one of them.
 *
 * @package McBoots
 */

	while ( have_posts() ) : the_post();
	
		get_template_part( 'template-parts/page', 'header' );

		$post_type = get_post_type();
		if ( $post_type == 'post' ) {
			$selector = get_post_format();
		} else {
			$selector = $post_type;
		}

		get_template_part( 'template-parts/content-single', $selector );

	endwhile; // end of the loop
