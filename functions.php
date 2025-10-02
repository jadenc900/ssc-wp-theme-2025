<?php 

// namespace SSCTheme; 

// Enqueue theme CSS and JS 

function ssc_theme_support(){
    
    //theme support for full and wide align images
    add_theme_support('align-wide'); 

    add_theme_support( 'custom-logo', array(
		'height'      => 46,
		'flex-width' => true,
	) );

}

add_action( 'after_setup_theme', 'ssc_theme_support');

// Enables WP menus
function ssc_menus(){

    $locations = array(
        'primary' => "Desktop Primary Menu",
        'footer' => "Footer Menu Items",
        'header' => "Header Menu Links"
        // mobile menu
    );

    register_nav_menus($locations);
}

add_action('init', 'ssc_menus');

// Connects Style Sheets
function ssc_register_styles(){

    $version = wp_get_theme()->get('Version');
    // wp_enqueue_style('ssc2025-bootstrap', get_template_directory_uri() . "assets\css\style.css", array(), $version, 'all');
    wp_enqueue_style('ssc2025-style', get_template_directory_uri(). "/style.css", array(), $version, 'all');

}
add_action('wp_enqueue_scripts', 'ssc_register_styles');

// Connects JS Scripts
function ssc_register_scripts(){

    wp_enqueue_script('ssc2025-jquery', get_template_directory_uri(), "/assets/js/main.js", array(), '1.0', true);


}
add_action('wp_enqueue_scripts', 'ssc_register_scripts');

// kinda cray but: disable all default block patterns
remove_theme_support('core-block-patterns');

add_action( 'init', 'ssc2025_register_pattern_categories' );

function ssc2025_register_pattern_categories() {
	register_block_pattern_category( 'ssc2025/page-layouts', array( 
		'label'       => __( 'Page Layouts', 'ssc2025' ),
		'description' => __( 'Custom page layouts for South Shore Conservatory', 'ssc2025' )
	) );
}

?>

