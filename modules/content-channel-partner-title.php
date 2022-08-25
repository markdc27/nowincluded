<?php
/**
 * Channel Partner Title
 *
 **/

$contentLayout = get_field('content_layout');
$title = get_field('channel_partner_title');
$description = get_field('channel_partner_description');
$logo = get_field('channel_partner_logo');

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
<section class="channel-partner-title py-10">
    <div class="container px-0 md:px-4 lg:px-6 max-w-screen-xl">
        <div class="grid md:grid-cols-12 md:gap-6">
            <div class="<?php echo $imageClasses; ?>">
                <div class="relative pb-10 md:pb-0">
                    <img class="h-auto w-full" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                </div>
            </div>
            <div class="flex flex-col pt-4 mx-4 md:mx-0<?php echo $contentClasses; ?>">
                <div class="">
                    <span class="text-12 font-bold font-display text-gray px-2 py-2 leading-none bg-light-gray rounded-sm">Partner</span>
                </div>
                <div class="mt-10">
                    <h1 class = "text-gray font-body font-semibold text-40 md:text-60 leading-tighter"><?php echo $title; ?></h1>
                    <p class="font-body text-20 text-gray leading-snug"><?php echo $description; ?></p>
                    <div class = "flex space-x-10 font-body text-24 text-blue pt-10">
                        <a class = "underline hover:text-magenta" href = "#channel_partner_resources">Download Resources!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>