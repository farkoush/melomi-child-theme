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
	wp_enqueue_style( 'melomi-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_MELOMI_VERSION, 'all' );
	wp_enqueue_style('icomoon-style',get_stylesheet_directory_uri() . '/assets/style.css');
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 100 );

function custom_enqueue_scripts() {
    wp_enqueue_script('custom-menu-script', get_stylesheet_directory_uri() . '/scripts.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');

// function astra_child_register_patterns() {
//     // مسیر کامل به پوشه پترن‌ها
//     $patterns_dir = get_stylesheet_directory() . '/patterns/';

//     // فایل‌ها رو بگیر
//     $pattern_files = glob($patterns_dir . '*.php');
	
//     // یک دسته‌بندی بساز (اختیاری)
//     register_block_pattern_category(
//         'custom',
//         array('label' => __('Custom Patterns', 'astra-child'))
//     );

//     foreach ($pattern_files as $file) {
//         register_block_pattern(
//             'astra-child/' . basename($file, '.php'),
//             require $file
//         );
//     }
// }
// add_action('init', 'astra_child_register_patterns');

// if ( ! function_exists( 'astrachild_pattern_categories' ) ) :
// 	/**
// 	 * Register pattern categories
// 	 *
// 	 * @return void
// 	 */
// 	function twentytwentyfour_pattern_categories() {

// 		register_block_pattern_category(
// 			'astraChild_melomi',
// 			array(
// 				'label'       => _x( 'Pages', 'Block pattern category', 'astrachild' ),
// 				'description' => __( 'A collection of full page layouts.', 'astrachild' ),
// 			)
// 		);
// 	}
// endif;

// add_action( 'init', 'astrachild_pattern_categories' );


function astra_primary_header_HTML() {


	$astra_header_row = 'primary';
	if ( Astra_Builder_Helper::has_side_columns( $astra_header_row ) ) { 

    ?>
		<button id="desktop-menu-toggle" class="desktop-toggle-button" aria-expanded="false" aria-controls="desktop-offcanvas-menu">
			☰ Menu
		</button>

		<div id="desktop-offcanvas-menu" class="offcanvas-menu">
			<nav class="menu-container">
				<p>test</p>
				<!-- wp:pattern {"slug":"astra-child/hero-section"} /-->
				<?php
				// wp_nav_menu(array(
				// 	'theme_location' => 'primary', // یا لوکیشن دلخواه تو
				// 	'container' => false,
				// 	'menu_class' => 'custom-offcanvas-menu',
				// ));
				?>
				<!-- wp:pattern {"slug":"astra-child/hero-section"} /-->
			</nav>
		</div>
	<?php
	}
}
add_action( 'astra_header_primary_container_after', 'astra_primary_header_HTML');
