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
	wp_enqueue_style('icomoon-style',get_stylesheet_directory_uri() . '/assets/style.css');
	wp_enqueue_style( 
		'grand-sunrise-style', 
		get_stylesheet_uri()
	);
	wp_enqueue_style( 
		'grand-sunrise-parent-style', 
		get_parent_theme_file_uri( 'style.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 100 );

function custom_enqueue_scripts() {
    wp_enqueue_script('custom-menu-script', get_stylesheet_directory_uri() . '/scripts.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');

function register_my_menu() {
	register_nav_menu('child-theme-mega-menu',__( 'Melomi Mega Menuu' ));
    register_nav_menu('child-theme-mega-menu-small',__( 'Melomi Mega Menu - Small' ));
}
add_action( 'init', 'register_my_menu' );


function my_child_theme_register_block_patterns() {
    register_block_pattern(
        'twentytwentyfour-child/mega-menu',
        array(
            'title'       => __( 'Mega Menu', 'text-domain' ),
            'description' => __( 'A custom mega menu pattern.', 'text-domain' ),
            'content'     => file_get_contents( get_theme_file_path( '/patterns/mega-menu.php' ) ),
        )
    );
    // register_block_pattern(
    //     'twentytwentyfour-child/footer-defult',
    //     array(
    //         'title'       => __( 'Footer defult', 'text-domain' ),
    //         'description' => __( 'A custom mega menu pattern.', 'text-domain' ),
    //         'content'     => file_get_contents( get_theme_file_path( '/patterns/footer-defult.php' ) ),
    //     )
    // );
}
add_action( 'init', 'my_child_theme_register_block_patterns' );

add_action('init', function () {
    register_block_pattern(
        'twentytwentyfour-child/footer-default',
        [
            'title'       => __('Footer Default', 'textdomain'),
            'description' => __('A default footer layout', 'textdomain'),
            'categories'  => ['footer'],
            'content'     => file_get_contents(get_stylesheet_directory() . '/patterns/footer-default.php'),
        ]
    );
});