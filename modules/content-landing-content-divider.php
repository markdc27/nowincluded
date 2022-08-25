<?php 
/**
 * Component - Landing Page Content (Divider)
 *
**/

$background_image = get_field('background_image');
$divider_text = get_field('divider_text');
// $header_subTitle = get_field('header_subtitle');
// $button = get_field('button');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>"
    class="component-landing<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="w-full bg-auto xl:bg-cover bg-center h-fit xl:mb-10"
        style="background-image: url(<?php echo $background_image['url']; ?>);">
        <div class="container py-60 xl:py-96 xl:px-36">
            <p class="font-body text-2xl md:text-3xl text-center font-bold px-10 md:px-20 lg:px-30 xl:px-48"><?php echo $divider_text; ?></p>
        </div>
    </div>
</section>