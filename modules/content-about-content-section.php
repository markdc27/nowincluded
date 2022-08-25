<?php 
/**
 * Section - About Content Section
 *
**/

$allowed_blocks = array('core/paragraph');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="about-content-section bg-gray py-60 lg:py-0<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="relative">
        <img class="hidden lg:block w-full h-auto" src="/wp-content/uploads/2021/09/TornPaper_White04-1.png" role="presentation">
        <div class="lg:absolute lg:inset-0 container max-w-screen-2xl mx-auto flex h-full w-full items-center justify-center">
            <div class="text-gray flex-col space-y-8 text-20 md:text-24 font-body w-full md:w-1/2 mx-auto px-6 lg:px-0">
                <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"/>
            </div>
        </div>
    </div>
</section>