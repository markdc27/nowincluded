<?php 
/**
 * Section - Home Hero Sections
 *
**/

$ts = get_field('top_section');
$images = get_field('image_row');
$bs = get_field('bottom_section');
$allowed_blocks = array('core/paragraph');
?>
<div id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="home-hero<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <section class="bg-gray max-w-full">
        <div class="md:flex md:flex-row md:space-x-20 items-center">
            <div class="hidden md:block filter transition grayscale hover:grayscale-0">
                <img src="<?php echo $ts['left_image']['url']; ?>" alt="<?php echo $ts['left_image']['alt']; ?>" height="527" width="360">
            </div>
            <div class="text-white font-body text-20 md:text-35 flex justify-center items-center flex-1 text-center md:text-left px-14 md:px-0 pt-20 sm:pt-20 pb-14 md:py-0">
                <div class="max-w-full leading-tight" style="width:456px;">
                    <?php echo $ts['content']; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="grid grid-cols-6 lg:grid-cols-8 gap-0 bg-gray">
        <?php $count = 1; ?>
        <?php foreach ( $images as $i ) : ?>
            <div class="filter transition grayscale hover:grayscale-0<?php if ( $count > 6 ) :?> hidden lg:block<?php endif; ?>">
                <img class="w-full h-auto" src="<?php echo $i['image']['url']; ?>" alt="<?php echo $i['image']['alt']; ?>">
            </div>
            <?php $count++; ?>
        <?php endforeach; ?>
    </section>
    <section class="relative bg-no-repeat bg-cover pb-32 md:pb-60 bg-bottom" style="background-color:rgba(40, 127, 221, 0.1);background-image:url(/wp-content/uploads/2021/09/TornPaper_White06-1.png);">
        <img class="absolute hidden lg:block top-0 right-0 object-contain filter transition grayscale hover:grayscale-0" height="527" width="360" src="<?php echo $bs['right_image']['url']; ?>" alt="<?php echo $bs['right_image']['alt']; ?>">
        <div class="container max-w-screen-2xl py-10">
            <div class="grid md:grid-cols-12 gap-6">
                <div class="md:col-span-7">
                    <span class="text-160 md:text-200 leading-none font-body text-gray"><?php echo $bs['large_callout_text']; ?></span>
                    <div class="flex flex-col space-y-10 text-gray font-body text-20">
                        <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"/>   
                    </div>
                    <div class="flex space-x-10 font-body text-24 text-blue pt-10">
                        <a class="underline hover:text-magenta" href="<?php echo $bs['link_1_url']; ?>"><?php echo $bs['link_1_text']; ?></a>
                        <a class="underline hover:text-magenta" href="<?php echo $bs['link_2_url']; ?>"><?php echo $bs['link_2_text']; ?></a>
                    </div>
                </div>
                <div class="hidden md:block lg:hidden md:col-span-5">
                    <img class="filter transition grayscale hover:grayscale-0" src="<?php echo $bs['right_image']['url']; ?>" alt="<?php echo $bs['right_image']['alt']; ?>" height="527" width="360">
                </div>
            </div>
        </div>
    </section> 
</div> 