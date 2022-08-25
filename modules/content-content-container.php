<?php 
/**
 * Component - Content Container
 *
**/

$allowed_blocks = array('core/paragraph','core/heading','core/list');
?>
<div id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="content-container container max-w-screen-xl prose-lg md:prose-xl py-20 lg:p-40<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"/>   
</div>