<?php 
/**
 * Component - Landing Page Info
 *
**/


?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>"
    class="component-landing<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="py-10 xl:py-12 mx-auto" style="background-color: #287FFD;">
        <div class="container w-full xl:w-1/2">
            <div class="w-full xl:w-full block pb-10 xl:pt-3 xl:mb-0 xl:inline-block text-center">
                <a class="font-display font-bold underline xl:px-6 text-white text-3xl text-center xl:text-left xl:mx-24"
                    href="https://app.nowincluded.com/courses/7088289/feed">Join the Gut-Health Newsletter</a>
            </div>
            <div class="w-full xl:w-full block xl:inline-block">
                <?php echo do_shortcode('[hubspot type=form portal=19943632 id=2e598e7b-3326-4d17-97c2-5b88a3440753]'); ?>
            </div>
        </div>
    </div>
</section>