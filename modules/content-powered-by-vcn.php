<?php

/**
 * Powered by VCN
 *
 **/
$vcnLogo = get_field('vcn_logo');
$uabLogo = get_field('uab_logo');
$title = get_field('title');

?>

<section id = "powered_by_vcn" class="py-10" style = "background-color: #f4f4f4;">
    <div class="container px-0 md:px-4 lg:px-6 max-w-screen-xl">
        <div class="grid md:grid-cols-12">
            <div class = "p-4 md:col-span-4 order-1 md:order-1">
                <a href = 'https://sites.uab.edu/communityhealth/' target = 'PCR'>
                    <img class = "h-auto w-full" src = "<?php echo $vcnLogo['url']; ?>" alt = "<?php echo $vcnLogo['alt']; ?>"/>
                </a>
            </div>
            <div class = "p-4 md:col-span-4 order-2 md:order-2">
                <a href = 'https://sites.uab.edu/communityhealth/alabama-vaccine-confidence-network/' target = 'UAB'>
                    <img class = "h-auto w-full" src = "<?php echo $uabLogo['url']; ?>" alt = "<?php echo $uabLogo['alt']; ?>"/>
                </a>
            </div>
            <div class = "p-4 md:col-span-4 order-3 md:order-3">
                <h4 class = "pb-6 md:pb-6 text-gray font-body text-40 md:text-60 font-semibold leading-none">
                    <?php echo $title; ?>
                </h4>
                <div class = "flex space-x-10 font-body text-24 text-blue pt-10">
                    <a class = "underline hover:text-magenta" href = "https://nowincluded.com/alabama-vaccine-confidence-network/">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>