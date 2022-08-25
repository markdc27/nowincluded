<?php
/**
 * VCN Pop Up
 *
 **/
$sectionTitle = get_field('section_title');
$sectionSubtitle = get_field('section_subtitle');
$hubSpotScript = get_field('hubspot_script');

?>
<div id = "vcn_pop_up" class = "mt-10 mb-10">
    <div class = "m-10">
        <div>
            <h4 class = "text-center pb-6 md:pb-6 text-gray font-body text-30 font-semibold leading-none">
                <?php echo $sectionTitle; ?>
            </h4>
            <p class = "text-center pb-4 font-body text-20 text-gray leading-snug">
                <?php echo $sectionSubtitle; ?>
            </p>
        </div>
        <div class = "border p-4">
            <?php echo $hubSpotScript; ?>
        </div>
    </div>
</div>