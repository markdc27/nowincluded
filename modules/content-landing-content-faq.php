<?php 
/**
 * Component - Landing Page FAQ section component
 *
**/

$who_image = get_field('who_image');
$who_title = get_field('who_title');
$who_content = get_field('who_content');
$how_image = get_field('how_image');
$how_title = get_field('how_title');
$how_content = get_field('how_content');
$why_image = get_field('why_image');
$why_title = get_field('why_title');
$why_content = get_field('why_content');
$what_image = get_field('what_image');
$what_title = get_field('what_title');
$what_content = get_field('what_content');
$allowed_blocks = array('core/paragraph');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>"
    class="component-landing<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="lg:container">
        <div class="grid md:grid-cols-2">

            <!-- Block #1 -->
            <div class="md:block pb-20 lg:pb-0 xl:pb-20">
                <div class="topper"
                    style="width: 40%; height:25px; margin: 0 auto; border-top: 1px solid #000000; position: relative;">
                    <svg width="76" height="25" viewBox="0 0 36 25" fill="none"
                        style="position: absolute; top: -12px; left: calc(50% - 38px); background-color: #fff; padding: 2px 20px;"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M35.1481 0V24.9804H15.668L7.12063 14.5681V24.9804H0V0H35.1481Z" fill="#287FDD" />
                    </svg>
                </div>
                <div class="md:block py-10 px-10 xl:px-44">
                    <img class="object-cover w-full" src="<?php echo $who_image['url']; ?>"
                        alt="<?php echo $who_image['alt']; ?>">
                </div>
                <h1 class="font-display font-semibold pb-5 text-gray"
                    style="font-size: 25px; line-height: 35px; text-align: center;"><?php echo $who_title; ?></h1>
                <p class="font-body text-gray px-10 xl:px-28" style=" font-size: 25px; line-height: 35px; text-align: center;">
                    <?php echo $who_content; ?></p>
            </div>

            <!-- Block #2 -->
            <div class="md:block pb-20 lg:pb-0 xl:pb-20">
                <div class="topper"
                    style="width: 40%; height:25px; margin: 0 auto; border-top: 1px solid #000000; position: relative;">
                    <svg width="76" height="25" viewBox="0 0 36 25" fill="none"
                        style="position: absolute; top: -12px; left: calc(50% - 38px); background-color: #fff; padding: 2px 20px;"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M35.1481 0V24.9804H15.668L7.12063 14.5681V24.9804H0V0H35.1481Z" fill="#287FDD" />
                    </svg>
                </div>
                <div class="md:block py-10 px-10 xl:px-44">
                    <img class="object-cover w-full" src="<?php echo $how_image['url']; ?>"
                        alt="<?php echo $how_image['alt']; ?>">
                </div>
                <h1 class="font-display font-semibold pb-5 text-gray"
                    style="font-size: 25px; line-height: 35px; text-align: center;"><?php echo $how_title; ?></h1>
                <div class="font-body text-gray px-10 xl:px-28"
                    style="font-size: 25px; line-height: 35px; text-align: center;"><?php echo $how_content; ?></div>
            </div>

            <!-- Block #3 -->
            <div class="md:block pb-20 lg:pb-0 xl:pb-20">
                <div class="topper"
                    style="width: 40%; height:25px; margin: 0 auto; border-top: 1px solid #000000; position: relative;">
                    <svg width="76" height="25" viewBox="0 0 36 25" fill="none"
                        style="position: absolute; top: -12px; left: calc(50% - 38px); background-color: #fff; padding: 2px 20px;"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M35.1481 0V24.9804H15.668L7.12063 14.5681V24.9804H0V0H35.1481Z" fill="#287FDD" />
                    </svg>
                </div>
                <div class="md:block py-10 px-10 xl:px-44">
                    <img class="object-cover w-full" src="<?php echo $why_image['url']; ?>"
                        alt="<?php echo $why_image['alt']; ?>">
                </div>
                <h1 class="font-display font-semibold pb-5 text-gray"
                    style="font-size: 25px; line-height: 35px; text-align: center;"><?php echo $why_title; ?></h1>
                <p class="font-body text-gray px-10 xl:px-28"
                    style="font-size: 25px; line-height: 35px; text-align: center;"><?php echo $why_content; ?></p>
            </div>

            <!-- Block #4 -->
            <div class="md:block pb-20 lg:pb-0 xl:pb-20">
                <div class="topper"
                    style="width: 40%; height:25px; margin: 0 auto; border-top: 1px solid #000000; position: relative;">
                    <svg width="76" height="25" viewBox="0 0 36 25" fill="none"
                        style="position: absolute; top: -12px; left: calc(50% - 38px); background-color: #fff; padding: 2px 20px;"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M35.1481 0V24.9804H15.668L7.12063 14.5681V24.9804H0V0H35.1481Z" fill="#287FDD" />
                    </svg>
                </div>
                <div class="md:block py-10 px-10 xl:px-44">
                    <img class="object-cover w-full" src="<?php echo $what_image['url']; ?>"
                        alt="<?php echo $what_image['alt']; ?>">
                </div>
                <h1 class="font-display font-semibold pb-5 text-gray"
                    style="font-size: 25px; line-height: 35px; text-align: center;"><?php echo $what_title; ?></h1>
                <p class="font-body text-gray px-10 xl:px-28"
                    style="font-size: 25px; line-height: 35px; text-align: center;"><?php echo $what_content; ?></p>
            </div>
        </div>
    </div>
</section>