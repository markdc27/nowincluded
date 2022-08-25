<?php 
/**
 * Component - Button CTA
 *
**/
$bgColor = get_field('background_color');
$text = get_field('text');
$button = get_field('button');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="button-cta py-6 md:py-14 w-full<?php echo ' ' . $bgColor; ?><?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="container px-0 md:px-4 lg:px-6 max-w-screen-xl">
        <div class="grid md:grid-cols-12 gap-5 md:gap-6 items-center justify-center text-center md:text-left px-8 md:px-0">
           <div class="md:col-span-6">
                <span class="font-display font-bold text-24 md:text-30 leading-tighter<?php if ($bgColor == 'bg-blue'): ?> text-white<?php else: ?> text-blue<?php endif;?>"><?php echo $text; ?></span>
           </div>
           <div id="TypeformButtonWrap" class="md:col-span-5 md:col-start-8">
               <?php echo $button; ?>
           </div>
        </div>
    </div>
</section>