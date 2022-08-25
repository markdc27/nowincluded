<?php
/**
 * Channel Partners Resources
 *
 **/
$sectionTitle = get_field('section_title');
$sectionSubtitle = get_field('section_subtitle');
$hubSpotScript = get_field('hubspot_script');

?>

<section id = "channel_partner_resources" class="py-10">
    <div class="container px-0 md:px-4 lg:px-6 max-w-screen-xl">
        <div class="grid md:grid-cols-12">
            <div class = "pt-4 md:col-span-6 order-1 md:order-1">
                <h2 class = "pb-6 md:pb-6 text-gray font-body text-40 md:text-60 font-semibold leading-none"><?php echo $sectionTitle; ?></h2>
                <p class = "font-body text-20 text-gray leading-snug"><?php echo $sectionSubtitle; ?></p>
            </div>
            <div class="border flex flex-col pt-4 mx-4 md:mx-0 p-4 md:col-span-6 md:col-start-7 order-2 md:order-2">
               <?php echo $hubSpotScript; ?>
            </div>
        </div>
    </div>
</section>