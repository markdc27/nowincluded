<?php 
/**
 * Component - Landing Page Info
 *
**/


?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>"
    class="component-landing<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="xl:w-1/2 mx-5 xl:mx-auto my-20 xl:my-20">
        <h1 class="font-display font-bold text-5xl mb-10 xl:mb-20 text-center">Frequently Asked Questions</h1>
        <?php echo do_shortcode("[accordions id='995']"); ?>
    </div>
</section>