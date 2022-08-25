<?php 
/**
 * Component - Stats
 *
**/

$stat = get_field('stat');
$allowed_blocks = array('core/paragraph');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="component-stats<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="grid md:grid-cols-2 gap-4 md:gap-8">
        <div>
            <span class="text-gray text-70 md:text-160 font-bold font-display leading-none"><?php echo $stat; ?></span>
        </div>
        <div class="flex items-center text-20 font-bold font-body text-gray">
            <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"/>   
        </div>
    </div>
</section>