<?php 
/**
 * Component - Native Columns (wrapper)
 *
**/
$bgColor = get_field('background_color');
$allowed_blocks = array('core/columns','core/column');
$colorClasses = '';

if ( $bgColor == 'bg-gray' ) { 
    $colorClasses = ' text-white';
} else {
    $colorClasses = ' text-gray';
}
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="native-columns<?php echo $colorClasses; ?><?php echo ' ' . $bgColor; ?><?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="container px-0 md:px-4 lg:px-6 max-w-screen-xl">
        <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"/> 
    </div>      
</section>