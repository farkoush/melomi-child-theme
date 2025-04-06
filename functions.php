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
	register_nav_menu('twentytwentyfour-child-mega-menu',__( 'Melomi Mega Menu' ));
}
add_action( 'init', 'register_my_menu' );


// add_action('init', function() {
//     register_block_pattern_category('melomi', [
//         'label' => __('Melomi', 'twentytwentyfour-child')
//     ]);
// });


function my_child_theme_register_block_patterns() {
    register_block_pattern(
        'twentytwentyfour-child/mega-menu',
        array(
            'title'       => __( 'Mega Menu', 'text-domain' ),
            'description' => __( 'A custom mega menu pattern.', 'text-domain' ),
            'content'     => file_get_contents( get_theme_file_path( '/patterns/mega-menu.php' ) ),
        )
    );
}
add_action( 'init', 'my_child_theme_register_block_patterns' );


// Register template parts and patterns
function register_custom_templates_and_patterns() {
    register_block_pattern_category( 'custom', array( 'label' => 'Custom Patterns' ) );

    // Register template part for header
    // register_block_template_part( 'header', get_template_directory() . '/parts/header.html' );
}
// add_action( 'after_setup_theme', 'register_custom_templates_and_patterns' );


// function load_custom_header() {
//     get_template_part( 'templates/header' );
// }
// add_action( 'wp_head', 'load_custom_header', 5 );

// function melomi_child_enqueue_block_assets() {
//     // بررسی اینکه آیا اسپکترا فعال است یا نه و استایل‌های آن را بارگذاری کنیم
//     // if ( function_exists( 'spectra_plugin_function' ) ) {
//         wp_enqueue_style( 'spectra-blocks-style', plugin_dir_url( __FILE__ ) . 'assets/css/spectra-block-positioning.min.css?ver=2.19.4' );
//     // }
// }
// add_action( 'enqueue_block_assets', 'melomi_child_enqueue_block_assets',1000 );

// add_action( 'wp_enqueue_scripts', 'enqueue_scripts_by_post_id' );

// function enqueue_scripts_by_post_id() {

//     // Create Instance. Pass the Post ID.
//     $post_assets_instance = new UAGB_Post_Assets( '220' );

//     // Enqueue the Assets.
//     $post_assets_instance->enqueue_scripts();
// }