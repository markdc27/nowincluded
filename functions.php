<?php if ( ! defined( 'ABSPATH' ) || ! function_exists( 'add_action' ) || ! function_exists( 'plugins_url' ) ) { die( 'exit' ); }

function ni_enqueue_assets() {
    wp_enqueue_style( 
        'im-stylesheet', 
        get_template_directory_uri() . '/style.css', 
        array(), 
        filemtime( get_template_directory() . '/style.css' ) 
    );

    wp_enqueue_script( 
        'im-scripts', 
        get_template_directory_uri() . '/main.js', 
        array('jquery'), 
        filemtime( get_template_directory() . '/main.js' ), 
        true 
    );
}
add_action('wp_enqueue_scripts', 'ni_enqueue_assets');


/**
 * Gutenberg scripts and styles
 * @link https://www.billerickson.net/block-styles-in-gutenberg/
 */
function ni_gutenberg_scripts() {

	wp_enqueue_script(
		'im-editor', 
		get_stylesheet_directory_uri() . '/assets/js/editor.js', 
		array( 'wp-blocks', 'wp-dom' ), 
		filemtime( get_stylesheet_directory() . '/assets/js/editor.js' ),
		true
	);
}
//add_action( 'enqueue_block_editor_assets', 'ni_gutenberg_scripts' );


function ni_gutenberg_css(){
	add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
	add_editor_style( 'style-editor.css' ); // tries to include style-editor.css directly from your theme folder
}
add_action( 'after_setup_theme', 'ni_gutenberg_css' );


require_once('core/core.php');
require_once('core/wordpress-cleanup.php');
require_once( 'core/utilities.php' );
require_once( 'core/acf.php' );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}