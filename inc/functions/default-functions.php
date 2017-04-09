<?php 
/**
 * Default wordpress functions
 */

if ( !function_exists( 'larry_setup' ) ) :
	


function larry_setup() {
	/**
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
	 */
	load_theme_textdomain( 'larry' );

	/** 
	 * Add default posts and comments RSS feed links to head.
	 * 
	 * Loads rss feed scripts in the code
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * CUSTOMIZER
	 *
	 * Enable support for custom logo.
	 *
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 * Default post thumnail size
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'larry' ),
		'social'  => __( 'Social Links Menu', 'larry' ),
	) );
}

endif;

?>