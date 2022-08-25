<?php 
/**
 * List Partner
 *
**/
$contentLayout = get_field('content_layout');
$image = get_field('image');
$title = get_field('title');
$desc = get_field('description');
$link = get_field('learn_more');
$imageClasses = '';
$contentClasses = '';

if ( $contentLayout == 'image-left' ) {
    $imageClasses = ' md:col-span-5';
    $contentClasses = ' border-t pt-4 md:col-span-6 md:col-start-7';
} else {
    $contentClasses = ' border-t pt-4 md:col-span-6 order-2 md:order-1';
    $imageClasses = ' md:col-span-5 md:col-start-8 order-1 md:order-2';
}
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="list-partner py-10<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="container px-0 md:px-4 lg:px-6 max-w-screen-xl">
        <div class="grid md:grid-cols-12 md:gap-6">
            <div class="<?php echo $imageClasses; ?>">
                <div class="relative pb-10 md:pb-0">
                    <img class="h-auto w-full" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <span class="absolute top-3 left-3 text-12 font-bold font-display text-gray px-2 py-2 leading-none bg-white rounded-sm">Featured Partner</span>
                </div>
            </div>
            <div class="flex flex-col justify-between pt-4 mx-4 md:mx-0<?php echo $contentClasses; ?>">
                <div class="">
                    <span class="text-12 font-bold font-display text-gray px-2 py-2 leading-none bg-light-gray rounded-sm">Partner</span>
                </div>
                <div class="pt-14 md:pt-0">
                    <h2 class="font-body font-bold text-40 md:text-70 text-gray pb-6 leading-tighter"><?php echo $title; ?></h2>
                    <p class="font-body text-20 text-gray leading-snug"><?php echo $desc; ?></p>
                    <!--<div class="flex font-body text-24 text-blue pt-10">
                        <a href = "<?php /*echo $link; */?>" class = "underline hover:text-magenta">Learn More</a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>      
</section>