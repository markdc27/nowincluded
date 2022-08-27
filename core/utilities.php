<?php
/**
 * @package WordPress
 * @subpackage WPS
 *
 * Description: Utility Functions
 * Author: Brad Elsmore
 * Version: 1.0
 */

if ( ! defined( 'ABSPATH' ) || ! function_exists( 'add_action' ) || ! function_exists( 'plugins_url' ) ) {
	die( 'exit' );
}

function im_wp_is_mobile() {
    static $is_mobile;

    if ( isset($is_mobile) )
        return $is_mobile;

    if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
        $is_mobile = false;
    } elseif (
        strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false ) {
            $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') == false) {
            $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) {
        $is_mobile = false;
    } else {
        $is_mobile = false;
    }

    return $is_mobile;
}

function im_browser_body_class($classes) {
        global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
        if($is_lynx) $classes[] = 'lynx';
        elseif($is_gecko) $classes[] = 'gecko';
        elseif($is_opera) $classes[] = 'opera';
        elseif($is_NS4) $classes[] = 'ns4';
        elseif($is_safari) $classes[] = 'safari';
        elseif($is_chrome) $classes[] = 'chrome';
        elseif($is_IE) {
                $classes[] = 'ie';
                if(preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
                $classes[] = 'ie'.$browser_version[1];
        } else $classes[] = 'unknown';
        if($is_iphone) $classes[] = 'iphone';
        if ( stristr( $_SERVER['HTTP_USER_AGENT'],"mac") ) {
                 $classes[] = 'osx';
           } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"linux") ) {
                 $classes[] = 'linux';
           } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"windows") ) {
                 $classes[] = 'windows';
           }
        return $classes;
}
add_filter('body_class','im_browser_body_class');

/* Must be called within loop */
function im_get_primary_category() {
	$category = get_the_category();

	// Get primary (Yoast) term if it is set
	$categoryArray = array();

	if ( class_exists('WPSEO_Primary_Term') ) {
		// Show the post's 'Primary' category, if this Yoast feature is available, & one is set
		$wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
		$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
		$term = get_term( $wpseo_primary_term );

		if ( is_wp_error( $term ) ) {
			// Default to first category (not Yoast) if an error is returned
			$categoryArray['display'] = $category[0]->name;
			$categoryArray['slug'] = $category[0]->slug;
			$categoryArray['url'] = get_category_link($category[0]->term_id);
		} else {
			// Set variables for category_display & category_slug based on Primary Yoast Term
			$category_id = $term->term_id;
			$category_term = get_category($category_id);
			$categoryArray['display'] = $term->name;
			$categoryArray['slug'] = $term->slug;
			$categoryArray['url'] = get_category_link($category_id);
		}
	} else {
		// Default, display the first category in WP's list of assigned categories
		$categoryArray['display'] = $category[0]->name;
		$categoryArray['slug'] = $category[0]->slug;
		$categoryArray['url'] = get_category_link($category[0]->term_id);
	}
	return $categoryArray;
}

function im_trim_excerpt($text, $limit) {
  if (str_word_count($text, 0) > $limit) {
      $words = str_word_count($text, 2);
      $pos   = array_keys($words);
      $text  = substr($text, 0, $pos[$limit]) . '...';
  }
  return $text;
}


function im_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function im_get_excerpt(){
  $excerpt = get_the_content();
  $excerpt = im_remove_urls_from_excerpts($excerpt);
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt);
  
  if ( strlen($excerpt) > 120 ) {
    $excerpt = substr($excerpt, 0, 120);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.'...';
  } 

  return $excerpt;
}

function im_remove_urls_from_excerpts($string) {
  return preg_replace('/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '', $string);
}
  
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]>', $content);
  return $content;
}


function im_get_story_byline( $postID, $extended = true ) {
  
  $location = get_field('location', $postID ); 
  $stateAbbr = '';
  $locationArray = explode(',', $location);
  
  if ( count($locationArray) == 2 ) : ?>
    <?php $stateAbbr = trim($locationArray[1]); ?>
    <?php if ( ! $extended && $location ) { ?>
      <span class="text-14 md:text-16 text-gray font-bold font-display">
        <?php echo get_the_date('F Y'); ?> | <?php echo $stateAbbr; ?>
      </span>
      
      <?php return;
    } ?>

    <span class="text-black font-display text-14 md:text-16">
      <?php if ( $location ) : ?>
            <span class="hidden md:inline-block"><?php echo $locationArray[0]; ?></span>
          <?php if ( $stateAbbr ) : ?>
            ,<?php echo ' ' . $stateAbbr; ?>
          <?php endif; ?>
      <?php endif; ?>
      &nbsp;&nbsp;<?php echo get_the_date('j F Y'); ?>
    </span>
    <?php return; ?>

  <?php elseif ( count($locationArray) == 1 ) : ?>
    <?php if ( ! $extended && $location ) { ?>
      <span class="text-14 md:text-16 text-gray font-bold font-display">
        <?php echo get_the_date('F Y'); ?> | <?php echo $location; ?>
      </span>
      
      <?php return;
    } ?>

    <span class="text-black font-display text-14 md:text-16">
      <?php if ( $location ) : ?>
            <span class="hidden md:inline-block"><?php echo $location; ?></span>
      <?php endif; ?>
      <?php echo get_the_date('j F Y'); ?>
    </span>
    <?php return; ?>
  <?php endif; ?>

  <?php return;
}

function im_get_tags( $postID, $extended = false ) {
  $tags = get_the_tags($postID); ?>

  <?php if ( ! empty($tags) ) : ?>
    <div class="text-12 leading-none text-gray font-bold font-display space-x-2 rounded-sm">
      <span class="py-3 px-3" style="background-color:rgba(40, 127, 221, 0.1);"><?php echo $tags[0]->name; ?></span>
      <?php if ( count($tags) > 1 && $extended ) : ?>
          <span class="hidden md:inline-block py-3 px-3" style="background-color:rgba(40, 127, 221, 0.1);">+<?php echo count($tags) - 1; ?></span>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php return;
}