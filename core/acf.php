<?php
/**
 * @package WordPress
 * @subpackage WPS
 *
 * Description: ACF Custom Blocks
 * Author: Brad Elsmore
 * Version: 1.0
 */

if ( ! defined( 'ABSPATH' ) || ! function_exists( 'add_action' ) || ! function_exists( 'plugins_url' ) ) {
	die( 'exit' );
}


add_action('acf/init', 'im_acf_init');

function im_acf_init() {
	
	if( function_exists('acf_register_block') ) {

		acf_register_block(array(
			'name'				=> 'component-stats',
			'title'				=> __('Component - Stats'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'image-text-hero',
			'title'				=> __('Hero - Image / Text'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'native-columns',
			'title'				=> __('Native Columns'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'list-partner',
			'title'				=> __('List Partner'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

        acf_register_block(array(
            'name'				=> 'channel-partner-title',
            'title'				=> __('Channel Partner Title'),
            'render_callback'	=> 'im_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
        ));

        acf_register_block(array(
            'name'				=> 'channel-partner-resources',
            'title'				=> __('Channel Partner Resources'),
            'render_callback'	=> 'im_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
        ));

        acf_register_block(array(
            'name'				=> 'channel-partners-sub-partners',
            'title'				=> __('Channel Partners Sub Partners'),
            'render_callback'	=> 'im_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
        ));

        acf_register_block(array(
            'name'				=> 'work_together',
            'title'				=> __('Work Together'),
            'render_callback'	=> 'im_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
        ));

        acf_register_block(array(
            'name'				=> 'powered_by_vcn',
            'title'				=> __('Powered By VCN'),
            'render_callback'	=> 'im_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
        ));

		acf_register_block(array(
			'name'				=> 'button-cta',
			'title'				=> __('Button CTA'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'vcn-pop-up',
			'title'				=> __('VCN Pop Up'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'story-section',
			'title'				=> __('Story Section'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'join-the-community-pop-up',
			'title'				=> __('Join the Community Pop Up'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'join-the-community',
			'title'				=> __('Join the Community'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'become-a-partner',
			'title'				=> __('Become a Partner'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'latest-stories',
			'title'				=> __('Latest Stories'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'home-hero',
			'title'				=> __('Home Hero'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'stat-slider',
			'title'				=> __('Stat Slider'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'home-stories',
			'title'				=> __('Home Stories'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'share-your-story',
			'title'				=> __('Share Your Story'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'home-featured-partner',
			'title'				=> __('Home Featured Partner'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'about-featured-story',
			'title'				=> __('About Featured Story'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'about-content-section',
			'title'				=> __('About Content Section'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'about-map-section',
			'title'				=> __('About Map Section'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

		acf_register_block(array(
			'name'				=> 'content-container',
			'title'				=> __('Content Container'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

        acf_register_block(array(
			'name'				=> 'landing-header',
			'title'				=> __('Landing Page Header Component'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

        acf_register_block(array(
			'name'				=> 'landing-content-video',
			'title'				=> __('Landing Page Video Component'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

        acf_register_block(array(
			'name'				=> 'landing-content-join',
			'title'				=> __('Landing Page Content Join'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));
        
        acf_register_block(array(
			'name'				=> 'landing-content-divider',
			'title'				=> __('Landing Page Content Divider'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

        acf_register_block(array(
			'name'				=> 'landing-content-faq',
			'title'				=> __('Landing Page Content FAQ'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

        acf_register_block(array(
			'name'				=> 'landing-content-related-articles',
			'title'				=> __('Landing Page Related Articles Block'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

        acf_register_block(array(
			'name'				=> 'landing-content-community-ad',
			'title'				=> __('Landing Page Community Snapshots'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

        acf_register_block(array(
			'name'				=> 'landing-content-map',
			'title'				=> __('Landing Page Content Map'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		));

        acf_register_block(array(
			'name'				=> 'landing-form-block',
			'title'				=> __('Landing Page Contact Form Block'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		)); 

        acf_register_block(array(
			'name'				=> 'landing-content-accordion',
			'title'				=> __('Landing Page Accordion'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		)); 

        acf_register_block(array(
			'name'				=> 'blog-post-image',
			'title'				=> __('Image Block For Blog Post(s)'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		)); 

        acf_register_block(array(
			'name'				=> 'blog-post-ytvideo',
			'title'				=> __('YT-Video Block For Blog Post(s)'),
			'render_callback'	=> 'im_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'star-empty',
            'mode'              => 'preview',
            'supports'          => [
                'align'			    => false,
                'anchor'		    => true,
                'customClassName'	=> true,
                'jsx' 			    => true,
            ]
		)); 
		
	}
}

function im_acf_block_render_callback( $block ) {
    $slug = str_replace('acf/', '', $block['name']);

    if( file_exists( get_theme_file_path("/modules/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/modules/content-{$slug}.php") );
	}
}
