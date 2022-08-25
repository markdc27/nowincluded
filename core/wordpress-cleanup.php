<?php if ( ! defined( 'ABSPATH' ) || ! function_exists( 'add_action' ) || ! function_exists( 'plugins_url' ) ) { die( 'exit' ); }

/**
 * Header Meta Tags
 *
 */
function im_header_meta_tags() {
	echo '<meta charset="' . get_bloginfo( 'charset' ) . '">';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>';
}
add_action( 'wp_head', 'im_header_meta_tags' );


/**
 * Singular body class
 *
 */
function im_singular_body_class( $classes ) {
	if( is_singular() )
		$classes[] = 'singular';
	return $classes;
}
add_filter( 'body_class', 'im_singular_body_class' );


/**
 * Clean body classes
 *
 */
function im_clean_body_classes( $classes ) {

	$allowed_classes = [
		'singular',
		'single',
		'page',
		'archive',
		'admin-bar',
		'full-width-content',
		'content-sidebar',
		'content',
		'min-h-screen',
		'antialiased',
		'bg-white',
		'relative',
	];

	return array_intersect( $classes, $allowed_classes );

}
//add_filter( 'body_class', 'im_clean_body_classes', 20 );

/**
 * Clean Nav Menu Classes
 *
 */
function im_clean_nav_menu_classes( $classes ) {
	if( ! is_array( $classes ) )
		return $classes;

	foreach( $classes as $i => $class ) {

		// Remove class with menu item id
		$id = strtok( $class, 'menu-item-' );
		if( 0 < intval( $id ) )
			unset( $classes[ $i ] );

		// Remove menu-item-type-*
		if( false !== strpos( $class, 'menu-item-type-' ) )
			unset( $classes[ $i ] );

		// Remove menu-item-object-*
		if( false !== strpos( $class, 'menu-item-object-' ) )
			unset( $classes[ $i ] );

		// Change page ancestor to menu ancestor
		if( 'current-page-ancestor' == $class ) {
			$classes[] = 'current-menu-ancestor';
			unset( $classes[ $i ] );
		}
	}

	// Remove submenu class if depth is limited
	if( isset( $args->depth ) && 1 === $args->depth ) {
		$classes = array_diff( $classes, array( 'menu-item-has-children' ) );
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'im_clean_nav_menu_classes', 5 );

/**
* Clean Post Classes
*
*/
function im_clean_post_classes( $classes ) {

   if( ! is_array( $classes ) )
       return $classes;

   $allowed_classes = array(
         'hentry',
         'type-' . get_post_type(),
      );

   return array_intersect( $classes, $allowed_classes );
}
add_filter( 'post_class', 'im_clean_post_classes', 5 );

/**
 * Archive Title, remove prefix
 *
 */
function im_archive_title_remove_prefix( $title ) {
	$title_pieces = explode( ': ', $title );
	if( count( $title_pieces ) > 1 ) {
		unset( $title_pieces[0] );
		$title = join( ': ', $title_pieces );
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'im_archive_title_remove_prefix' );

remove_action( 'wp_head', 'wlwmanifest_link');

remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

/**
 * Disable and remove emoji scripts
 */
function im_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'im_disable_emojis_tinymce' );
}
add_action( 'init', 'im_disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function im_disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

add_filter('jpeg_quality', function($arg){return 100;});

/**
 * Remove WPSEO Notifications
 *
 */
function im_remove_wpseo_notifications() {

	if( ! class_exists( 'Yoast_Notification_Center' ) )
		return;

	remove_action( 'admin_notices', array( Yoast_Notification_Center::get(), 'display_notifications' ) );
	remove_action( 'all_admin_notices', array( Yoast_Notification_Center::get(), 'display_notifications' ) );
}
add_action( 'init', 'im_remove_wpseo_notifications' );

/**
  * Exclude No-index content from search
  *
  */
  function ea_exclude_noindex_from_search( $query ) {

	if( $query->is_main_query() && $query->is_search() && ! is_admin() ) {

		$meta_query = empty( $query->query_vars['meta_query'] ) ? array() : $query->query_vars['meta_query'];
		$meta_query[] = array(
			'key' => '_yoast_wpseo_meta-robots-noindex',
			'compare' => 'NOT EXISTS',
		);

		$query->set( 'meta_query', $meta_query );
	}
}
add_action( 'pre_get_posts', 'ea_exclude_noindex_from_search' );

/*
Plugin Name: Kill Trackbacks
Plugin URI: http://pmg.co/category/wordpress
Description: Kill all trackbacks on WordPress
Version: 1.0
Author: Christopher Davis
Author URI: http://pmg.co/people/chris
*/

add_filter( 'wp_headers', 'pmg_kt_filter_headers', 10, 1 );
function pmg_kt_filter_headers( $headers )
{
	if( isset( $headers['X-Pingback'] ) )
	{
		unset( $headers['X-Pingback'] );
	}
	return $headers;
}

// Kill the rewrite rule
add_filter( 'rewrite_rules_array', 'pmg_kt_filter_rewrites' );
function pmg_kt_filter_rewrites( $rules )
{
	foreach( $rules as $rule => $rewrite )
	{
		if( preg_match( '/trackback\/\?\$$/i', $rule ) )
		{
			unset( $rules[$rule] );
		}
	}
	return $rules;
}

// Kill bloginfo( 'pingback_url' )
add_filter( 'bloginfo_url', 'pmg_kt_kill_pingback_url', 10, 2 );
function pmg_kt_kill_pingback_url( $output, $show )
{
	if( $show == 'pingback_url' )
	{
		$output = '';
	}
	return $output;
}

// remove RSD link
remove_action( 'wp_head', 'rsd_link' );

// hijack options updating for XMLRPC
add_filter( 'pre_update_option_enable_xmlrpc', '__return_false' );
add_filter( 'pre_option_enable_xmlrpc', '__return_zero' );

// Disable XMLRPC call
add_action( 'xmlrpc_call', 'pmg_kt_kill_xmlrpc' );
function pmg_kt_kill_xmlrpc( $action )
{
	if( 'pingback.ping' === $action )
	{
		wp_die(
			'Pingbacks are not supported',
			'Not Allowed!',
			array( 'response' => 403 )
		);
	}
}