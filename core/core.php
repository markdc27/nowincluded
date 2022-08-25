<?php if ( ! defined( 'ABSPATH' ) || ! function_exists( 'add_action' ) || ! function_exists( 'plugins_url' ) ) {die( 'exit' );}

define( 'DISALLOW_FILE_EDIT', true);

function im_theme_setup() {

    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
	add_theme_support('html5',['comment-list','comment-form','search-form','gallery','caption']);
	remove_theme_support( 'core-block-patterns' );

    add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-styles.css' );

    add_image_size( 'featured-article', 1110, 784, true );
	
	register_nav_menus(
		[
			'primary' 		=> 'Primary Menu',
			'footer-1'		=> "Footer Column 1",
			'footer-2'		=> "Footer Column 2",
			'footer-3'		=> "Footer Column 3"
		]
    );
}
add_action( 'after_setup_theme', 'im_theme_setup' );