wp.domReady( () => {

    /* Brad note: I think this top section can now be achieved in theme.json */

    // Remove Block Styles 
    wp.blocks.unregisterBlockStyle(
		'core/button',
		[ 'default', 'outline', 'squared', 'fill' ]
	);
    wp.blocks.unregisterBlockStyle(
		'core/quote',
		[ 'large', 'default' ]
	);
    wp.blocks.unregisterBlockStyle(
		'core/pullquote',
		[ 'solid-color', 'default' ]
	);
    wp.blocks.unregisterBlockStyle(
		'core/separator',
		[ 'default', 'wide-line', 'dots']
	);
    wp.blocks.unregisterBlockStyle(
		'core/image',
		[ 'default', 'rounded']
	);





  

  // Unregister Block Types
  wp.blocks.unregisterBlockType( 'core/media-text' );
  wp.blocks.unregisterBlockType( 'core/archives' );
  wp.blocks.unregisterBlockType( 'core/audio' );
  wp.blocks.unregisterBlockType( 'core/buttons' );
  wp.blocks.unregisterBlockType( 'core/calendar' );
  wp.blocks.unregisterBlockType( 'core/categories' );
  wp.blocks.unregisterBlockType( 'core/classic' );
  wp.blocks.unregisterBlockType( 'core/code' );
  //wp.blocks.unregisterBlockType( 'core/column' );
  //wp.blocks.unregisterBlockType( 'core/columns' );
  wp.blocks.unregisterBlockType( 'core/cover' );
  wp.blocks.unregisterBlockType( 'core/file' );
  wp.blocks.unregisterBlockType( 'core/latest-comments' );
  wp.blocks.unregisterBlockType( 'core/latest-posts' );
  wp.blocks.unregisterBlockType( 'core/legacy-widget' );
  wp.blocks.unregisterBlockType( 'core/gallery' );
  wp.blocks.unregisterBlockType( 'core/group' );
  wp.blocks.unregisterBlockType( 'core/media-text' );
  wp.blocks.unregisterBlockType( 'core/more' );
  wp.blocks.unregisterBlockType( 'core/navigation' );
  wp.blocks.unregisterBlockType( 'core/navigation-link' );
  wp.blocks.unregisterBlockType( 'core/nextpage' );
  wp.blocks.unregisterBlockType( 'core/preformatted' );
  wp.blocks.unregisterBlockType( 'core/rss' );
  wp.blocks.unregisterBlockType( 'core/search' );
  wp.blocks.unregisterBlockType( 'core/separator' );
  wp.blocks.unregisterBlockType( 'core/social-link' );
  wp.blocks.unregisterBlockType( 'core/social-links' );
  wp.blocks.unregisterBlockType( 'core/spacer' );
  wp.blocks.unregisterBlockType( 'core/table' );
  wp.blocks.unregisterBlockType( 'core/tag-cloud' );
  //wp.blocks.unregisterBlockType( 'core/text-columns' );
  wp.blocks.unregisterBlockType( 'core/verse' );
  wp.blocks.unregisterBlockType( 'core/video' );
  wp.blocks.unregisterBlockType( 'core/widget-area' );
  wp.blocks.unregisterBlockType( 'core/embed' ); // comment this out as well as the embed you need below
  //wp.blocks.unregisterBlockVariation( 'core/embed', 'youtube' );
  //wp.blocks.unregisterBlockVariation( 'core/embed', 'twitter' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'facebook' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'instagram' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'wordpress' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'soundcloud' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'spotify' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'flickr' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'vimeo' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'animoto' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'cloudup' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'collegehumor' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'crowdsignal' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'dailymotion' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'imgur' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'issuu' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'kickstarter' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'meetup-com' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'mixcloud' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'reddit' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'reverbnation' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'screencast' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'scribd' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'slideshare' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'smugmug' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'speaker-deck' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'tiktok' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'ted' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'tumblr' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'videopress' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'wordpress-tv' );
  wp.blocks.unregisterBlockVariation( 'core/embed', 'amazon-kindle' );

  // console.log(wp.blocks.getBlockTypes());
} );