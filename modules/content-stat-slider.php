<?php 
/**
 * Section - Stat Slider
 *
**/

$slides = get_field('slides');
$cta = get_field('bottom_cta');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" style="background-color:rgba(40, 127, 221, 0.1);" class="stat-slider pt-4 md:pt-20 pb-8 md:pb-20 overflow-x-hidden<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div id="StatSlider" class="relative container max-w-screen-2xl">
        <div class="swiper-wrapper">
            <?php foreach ( $slides as $s ) : ?>
                <div class="swiper-slide flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-10 text-center md:text-left">
                    <span class="font-display font-bold text-70 md:text-150 text-blue leading-none px-6 md:px-0"><?php echo $s['number']; ?></span>
                    <div class="font-body text-20 text-gray leading-tight max-w-full px-10 md:px-0" style="width:360px;"><?php echo $s['context']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <?php /*<a class="text-blue font-display text-20 md:text-30 font-bold flex items-center space-x-6 justify-center pt-10 hover:text-magenta" href="<?php echo $cta['url']; ?>">
        <span><?php echo $cta['text']; ?></span>
        <svg class="fill-current" width="27" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.122.84l-2.277 1.81 6.992 5.558H0v2.585h19.837l-6.992 5.557 2.277 1.81L26.016 9.5 15.122.84z"/></svg>
    </a>*/ ?>
</section>