<?php
/**
 * Join the Community Pop Up
 *
 **/

$title = get_field('pop_up_title');
$description = get_field('pop_up_description');
$image = get_field('image');

?>

<div>
    <div class="grid md:grid-cols-12 md:gap-6">
        <div class="md:col-span-5 sm:col-span-3">
            <div class="relative pb-10 sm:pb-0 sm:pt-16 md:pb-0 md:pt-10">
                <img class="h-auto w-full" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
        </div>
        <div class="flex flex-col pt-4 mx-4 md:mx-0 border-t pt-4 md:col-span-6 md:col-start-7 sm:col-start-4">
            <div class="mt-10 sm:mt-8 pb-10 sm:pb-10">
                <h3 class = "text-gray font-body font-semibold sm:text-30 text-40 md:text-4 leading-tighter pb-4"><?php echo $title; ?></h3>
                <p class="font-body text-20 text-gray leading-snug"><?php echo $description; ?></p>
            </div>
            <div>
                <form
                        action = "https://nowincluded.mn.co/share/EaxvrVV536HdUnrF?utm_source=manual" method = "get" target="mighty_networks" class = "text-center">
                    <button class = "hover:bg-magenta
                                     lg:text-28
                                     md:text-20
                                     sm:text-12
                                     pt-1
                                     pb-1
                                     lg:pr-18
                                     md:pr-16
                                     sm:pr-16
                                     lg-pl-18
                                     md:pl-16
                                     sm:pl-16
                                     font-bold
                                     bg-blue
                                     text-white">Join the Community</button>
                </form>
            </div>
        </div>
    </div>
</div>