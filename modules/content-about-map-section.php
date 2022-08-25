<?php 
/**
 * Section - About Content Section
 *
**/

$title = get_field('section_title');
$link1 = get_field('link_1');
$link2 = get_field('link_2');
$mapImage = get_field('map_image');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="about-map-section bg-white pt-14 md:pt-32 pb-10<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="container max-w-screen-xl text-center">
        <h2 class="text-gray font-display font-bold text-30 md:text-48 leading-tight"><?php echo $title; ?></h2>
        <div class="tf-link flex flex-col md:flex-row space-x-0 space-y-6 md:space-y-0 md:space-x-20 md:items-center justify-center pt-10 font-bold">
            <?php echo $link1; ?>
            <?php echo $link2; ?>
        </div>
        <div class="pt-10 md:pt-30">
            <img class="w-full h-auto" src="<?php echo $mapImage['url']; ?>" alt="<?php echo $mapImage['alt']; ?>">
        </div>
    </div>
</section>