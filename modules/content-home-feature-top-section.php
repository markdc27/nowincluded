<?php 
/**
 * Section - Home Feature Top Section
 *
**/
$fts = get_field('feature_top_section');
$allowed_blocks = array('core/paragraph');
?>
<div id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <section class="bg-white relative py-32 bg-bottom">
        <div class="container max-w-screen-xl py-10">
            <div class="grid md:grid-cols-12 gap-7">
                <div class="md:col-span-6">
                    <span class="text-black text-48 md:text-48 leading-none font-semibold"><?php echo $fts['section_title']; ?></span>
                    <div class="flex flex-col space-y-10 text-20 mt-9 text-white">
                        <span class="text-black font-body">
                            <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"/>
                        </span>
                    </div>
                    <div class="flex items-center justify-start gap-4 mt-8">
                        <a class="underline hover:text-magenta" href="<?php echo $fts['cta_url_left']; ?>">
                            <img class="w-fit lg:block object-contain" src="<?php echo $fts['cta_image_left']['url']; ?>" alt="<?php echo $fts['cta_image_left']['alt']; ?>" height="58" width="170">
                        </a>
                        <a class="underline hover:text-magenta" href="<?php echo $fts['cta_url_right']; ?>">
                            <img class="w-fit lg:block object-contain" src="<?php echo $fts['cta_image_right']['url']; ?>" alt="<?php echo $fts['cta_image_right']['alt']; ?>" height="58" width="170">
                        </a>
                    </div>
                    <div class="grid md:grid-cols-12 gap-7 mt-9">
                        <div class="w-full md:col-span-6">
                            <img class="w-fit lg:block object-contain mb-3" src="<?php echo $fts['blurb_icon_1']['url']; ?>" alt="<?php echo $fts['blurb_icon_1']['alt']; ?>" height="32" width="32">
                            <span class="text-20 md:text-20 text-black font-semibold"><?php echo $fts['blurb_title_1']; ?></span>
                            <p class="text-20 md:text-20 text-black font-body"><?php echo $fts['blurb_content_1']; ?></p>
                        </div>
                        <div class="w-full md:col-span-6">
                            <img class="w-fit lg:block object-contain mb-3" src="<?php echo $fts['blurb_icon_2']['url']; ?>" alt="<?php echo $fts['blurb_icon_2']['alt']; ?>" height="32" width="32">
                            <span class="text-20 md:text-20 text-black font-semibold"><?php echo $fts['blurb_title_2']; ?></span>
                            <p class="text-20 md:text-20 text-black font-body"><?php echo $fts['blurb_content_2']; ?></p>
                        </div>
                        <div class="w-full md:col-span-6">
                            <img class="w-fit lg:block object-contain mb-3" src="<?php echo $fts['blurb_icon_3']['url']; ?>" alt="<?php echo $fts['blurb_icon_3']['alt']; ?>" height="32" width="32">
                            <span class="text-20 md:text-20 text-black font-semibold"><?php echo $fts['blurb_title_3']; ?></span>
                            <p class="text-20 md:text-20 text-black font-body"><?php echo $fts['blurb_content_3']; ?></p>
                        </div>
                        <div class="w-full md:col-span-6">
                            <img class="w-fit lg:block object-contain mb-3" src="<?php echo $fts['blurb_icon_4']['url']; ?>" alt="<?php echo $fts['blurb_icon_4']['alt']; ?>" height="32" width="32">
                            <span class="text-20 md:text-20 text-black font-semibold"><?php echo $fts['blurb_title_4']; ?></span>
                            <p class="text-20 md:text-20 text-black font-body"><?php echo $fts['blurb_content_4']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block lg:hidden md:col-span-6">
                    <img class="filter transition grayscale hover:grayscale-0" src="<?php echo $fts['right_image']['url']; ?>" alt="<?php echo $fts['right_image']['alt']; ?>" height="527" width="360">
                </div>
                <div class="md:col-span-6 text-white">
                </div>
                <img class="absolute w-2/5 right-0 top-1/2" src="<?php echo $fts['section_backround_image']['url']; ?>" alt="<?php echo $fts['section_backround_image']['alt']; ?>" style="transform: translateY(-50%)">
            </div>
        </div>
    </section>
</div>