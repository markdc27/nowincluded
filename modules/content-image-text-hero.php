<?php 
/**
 * Hero - Image / Text
 *
**/

$image = get_field('image');
$options = get_field('options');
$contentOrder = get_field('content_order');
$allowed_blocks = array('core/paragraph');
$colorClasses = '';

if ( $options['background_color'] == 'bg-gray' ) { 
    $colorClasses = ' text-white border-white';
} else {
    $colorClasses = ' text-gray border-gray';
}
if ( $options['vertical_alignment'] == 'items-start' ) {
    $paddingClasses = ' md:pt-8';
} elseif ( $options['vertical_alignment'] == 'items-end' ) {
    $paddingClasses = ' md:pb-8';
}
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="hero-image-text<?php echo ' ' . $options['background_color']; ?><?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="container max-w-screen-2xl">
        <div class="mx-auto relative md:h-72">
            <?php if ( $contentOrder == 'image-left' ) : ?>
                <div class="hidden md:block md:absolute md:top-0 md:left-0" style="max-width:50%;">
                    <img class="object-cover h-72 w-full<?php if ( $options['colored_images_on_hover'] ) : ?> filter transition grayscale hover:grayscale-0<?php endif; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <div class="container px-0 md:px-4 lg:px-6 max-w-screen-xl grid md:grid-cols-12 h-full<?php echo ' ' . $options['vertical_alignment']; ?>">
                    <div class="md:col-span-7">
                        <div class="block md:hidden">
                            <img class="h-auto w-full<?php if ( $options['colored_images_on_hover'] ) : ?> filter transition grayscale hover:grayscale-0<?php endif; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </div>
                    </div>
                    <div class="md:col-span-5 flex text-20 md:text-24 font-body pt-12 pb-8 mx-4 md:mx-0 px-10 md:px-0 text-center md:text-left<?php echo $paddingClasses; ?><?php echo $colorClasses; ?><?php echo ' ' . $options['horizontal_alignment']; ?><?php if ( $options['has_border'] ) : ?> border-b<?php else: ?> border-b md:border-0<?php endif; ?>">
                        <div class="<?php echo ' ' . $options['right_text_width']; ?>">
                            <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"/>   
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="hidden md:block md:absolute md:top-0 md:right-0" style="max-width:50%;">
                    <img class="object-cover h-72 w-full<?php if ( $options['colored_images_on_hover'] ) : ?> filter transition grayscale hover:grayscale-0<?php endif; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <div class="container px-0 md:px-4 lg:px-6 max-w-screen-xl grid md:grid-cols-12 h-full<?php echo ' ' . $options['vertical_alignment']; ?>">
                    <div class="order-2 md:order-1 md:col-span-5 flex text-20 md:text-24 font-body pt-12 pb-8 mx-4 md:mx-0 px-10 md:px-0 text-center md:text-left<?php echo $paddingClasses; ?><?php echo $colorClasses; ?><?php echo ' ' . $options['horizontal_alignment']; ?><?php if ( $options['has_border'] ) : ?> border-b<?php else: ?> border-b md:border-0<?php endif; ?>">
                        <div class="<?php echo ' ' . $options['right_text_width']; ?>">
                            <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"/>   
                        </div>
                    </div>
                    <div class="md:col-span-7 order-1 md:order-2">
                        <div class="block md:hidden">
                            <img class="h-auto w-full<?php if ( $options['colored_images_on_hover'] ) : ?> filter transition grayscale hover:grayscale-0<?php endif; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>    
</section>