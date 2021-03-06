<?php
/**
 *	Configure Theme Support & Image Sizes
 *
 * @package McBoots
 */

add_action( 'after_setup_theme', function() {

	// makes the featured image box show up in custom post types
	add_theme_support( 'post-thumbnails' );

	// tell wordpress to output the title tag
	add_theme_support( 'title-tag' );

	// make theme available for translation.
	load_theme_textdomain( 'mcboots', get_template_directory() . '/languages' );

	// switch default core markup to output valid HTML5
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	// options specific to McBoots
//	add_theme_support( 'mcboots-sidebars' );
//	add_theme_support( 'mcboots-blog' );

	$GLOBALS['content_width'] = 1140;

});


/**
 *	Thumbnails & Image Sizes
 */
add_action( 'after_setup_theme', function() {

	// fixed sizes for special situations
	add_image_size( 'home-slide', 780, 418, true );
    add_image_size( 'box-feature', 648, 452, true );	// 324, 226 on lg

	// for the pop-up gallery images
    add_image_size( 'max-gallery', 1200, 800 );

	// for embedding
    add_image_size( 'content-wide', 765, 420 );

});


// configure gallery sizes
// no need to filter 'mcb_gallery_thumb_size' as 'thumbnail' is default
add_filter( 'mcb_gallery_enlarged_size', function() {
	return 'max-gallery';
});