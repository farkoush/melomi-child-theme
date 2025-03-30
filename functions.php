<?php
/**
 * melomi Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package melomi
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_MELOMI_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {
//array('astra-theme-css')
	wp_enqueue_style( 
		'grand-sunrise-style', 
		get_stylesheet_uri()
	);
	wp_enqueue_style( 
		'grand-sunrise-parent-style', 
		get_parent_theme_file_uri( 'style.css' )
	);
	// wp_enqueue_style( 'melomi-theme-css', get_stylesheet_directory_uri() . '/style.css', "", CHILD_THEME_MELOMI_VERSION, 'all' );
	wp_enqueue_style('icomoon-style',get_stylesheet_directory_uri() . '/assets/style.css');
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 100 );