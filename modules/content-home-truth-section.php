<?php 
/**
 * Section - Home Truth Section
 *
**/
$ts = get_field('truth_section');
$allowed_blocks = array('core/paragraph');
?>
<div id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <section class="bg-black relative py-32 bg-bottom">
        <div class="container max-w-screen-xl py-10">
            <div class="grid md:grid-cols-12 gap-7">
                <div class="md:col-span-6">
                    <span class="text-white text-40 md:text-70 leading-none font-semibold font-body"><?php echo $ts['large_callout_text']; ?></span>
                    
                    <div class="flex flex-col space-y-10 text-20 mt-9 text-white">
                        <span class="text-white text-24 md:text-24 leading-none"><?php echo $ts['text_intro']; ?></span>
                        <span class="text-white font-body">
                            <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"/>
                        </span>
                    </div>
                    <div class="flex space-x-10 font-body text-24 text-blue pt-10">
                        <a class="underline hover:text-magenta" href="<?php echo $ts['link_2_url']; ?>"></a>
                    </div>
                </div>
                <div class="hidden md:block lg:hidden md:col-span-6">
                    <img class="filter transition grayscale hover:grayscale-0" src="<?php echo $ts['right_image']['url']; ?>" alt="<?php echo $ts['right_image']['alt']; ?>" height="527" width="360">
                </div>
                <div class="md:col-span-6 text-white">
                    <img class="w-full lg:block object-contain" src="<?php echo $ts['right_image']['url']; ?>" alt="<?php echo $ts['right_image']['alt']; ?>">
                    <div class="text-20 text-center w-9/12 m-auto"><?php echo $ts['image_description']; ?></div>

                    <div class="flex items-center justify-center mt-3.5 w-10/12  m-auto">
                        <span class="text-left text-24 w-6/12"><?php echo $ts['cta-text']; ?></span>
                        <a class="underline hover:text-magenta" href="<?php echo $ts['cta_url']; ?>">
                            <img class="w-fit lg:block object-contain" src="<?php echo $ts['cta_image']['url']; ?>" alt="<?php echo $ts['cta_image']['alt']; ?>" height="106" width="250">
                        </a>
                    <div>
                </div>
            </div>
        </div>
    </section>
</div>