<?php
	use McBoots\Template;

/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package McBoots
 */

if ( !is_active_sidebar( 'sidebar-primary' ) ) {
	mcw_log( "expected active 'sidebar-primary' in template-parts/sidebar.php" );
	return;
}
?>
<aside class="widget-area sidebar-primary <?= Template\sidebar_class(); ?>" role="complementary">
	<?php dynamic_sidebar( 'sidebar-primary' ); ?>
</aside><!-- sidebar-primary -->
