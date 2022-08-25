<?php
/**
 * Channel Partners Sub Partners
 *
 **/
$backgroundColor = get_field('background_color');
$sectionTitle = get_field('section_title');
$sectionSubtitle = get_field('section_subtitle');
$partnerOne = get_field('partner_one');
$partnerOneLink = get_field('partner_one_link');
$partnerTwo = get_field('partner_two');
$partnerTwoLink = get_field('partner_two_link');
$partnerThree = get_field('partner_three');
$partnerThreeLink = get_field('partner_three_link');
$partnerFour = get_field('partner_four');
$partnerFourLink = get_field('partner_four_link');
$partnerFive = get_field('partner_five');
$partnerFiveLink = get_field('partner_five_link');
$partnerSix = get_field('partner_six');
$partnerSixLink = get_field('partner_six_link');
$partnerSeven = get_field('partner_seven');
$partnerSevenLink = get_field('partner_seven_link');
$partnerEight = get_field('partner_eight');
$partnerEightLink = get_field('partner_eight_link');
$block = '';

?>

<section class="py-10 <?php echo $backgroundColor; ?>">
    <div class="container py-10">
        <div class = "px-10 lg:pb-20 md:px-4 lg:px-6 max-w-screen-xl">
            <h2 class = "pb-6 md:pb-14 text-gray font-body text-40 md:text-70 font-semibold leading-none"><?php echo $sectionTitle; ?></h2>
            <p class="font-body text-20 text-gray leading-snug">
                <?php echo $sectionSubtitle; ?>
            </p>
        </div>
        <div>
            <div class = "grid grid-cols-4 gap-4 lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2">
                <div>
                    <a href = "<?php echo $partnerOneLink; ?>">
                        <img src = "<?php echo $partnerOne['url']; ?>" alt="<?php echo $partnerOne['alt']; ?>" />
                    </a>
                </div>
                <div>
                    <a href = "<?php echo $partnerTwoLink; ?>">
                        <img src = "<?php echo $partnerTwo['url']; ?>" alt="<?php echo $partnerTwo['alt']; ?>" />
                    </a>
                </div>
                <div>
                    <a href = "<?php echo $partnerThreeLink; ?>">
                        <img src = "<?php echo $partnerThree['url']; ?>" alt="<?php echo $partnerThree['alt']; ?>" />
                    </a>
                </div>
                <div>
                    <a href = "<?php echo $partnerFourLink; ?>">
                        <img src = "<?php echo $partnerFour['url']; ?>" alt="<?php echo $partnerFour['alt']; ?>" />
                    </a>
                </div>
                <div>
                    <a href = "<?php echo $partnerFiveLink; ?>">
                        <img src = "<?php echo $partnerFive['url']; ?>" alt="<?php echo $partnerFive['alt']; ?>" />
                    </a>
                </div>
                <div>
                    <a href = "<?php echo $partnerSixLink; ?>">
                        <img src = "<?php echo $partnerSix['url']; ?>" alt="<?php echo $partnerSix['alt']; ?>" />
                    </a>
                </div>
                <div>
                    <a href = "<?php echo $partnerSevenLink; ?>">
                        <img src = "<?php echo $partnerSeven['url']; ?>" alt="<?php echo $partnerSeven['alt']; ?>" />
                    </a>
                </div>
                <div>
                    <a href = "<?php echo $partnerEightLink; ?>">
                        <img src = "<?php echo $partnerEight['url']; ?>" alt="<?php echo $partnerEight['alt']; ?>" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
