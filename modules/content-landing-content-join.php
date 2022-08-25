<?php 
/**
 * Component - Landing Page Info
 *
**/

$join_image = get_field('join_image');
$join_title = get_field('join_title');
$join_text = get_field('join_text');
$join_title2 = get_field('join_title2');
$join_text2 = get_field('join_text2');
$link_input = get_field('link_input');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>"
    class="component-landing<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="container pt-20">
        <div class="grid flex xl:grid-cols-2">
            <div class="xl:block order-last xl:order-first xl:mr-24">
                <h3 class="font-display font-semibold mx-5 xl:mx-0 mb-3 text-gray text-center xl:text-left text-48 xl:text-3xl">
                    <?php echo $join_title; ?></h3>
                <p
                    class="font-body text-gray pb-10 mb-10 mx-8 xl:mx-0 lg:mr-40 xl:mr-10 text-2xl text-center xl:text-left leading-9 border-b">
                    <?php echo $join_text; ?></p>
                <h3 class="font-display font-semibold mb-3 text-gray text-center xl:text-left text-48 xl:text-3xl">
                    What We Offer</h3>
                <ul class="mb-10 mx-10 xl:mx-0">
                    <li class="font-body text-2xl mb-2"><i class="fas fa-star pr-2" style="color: #287FDD"></i>Community Engagement</li>
                    <li class="font-body text-2xl mb-2"><i class="fas fa-star pr-2" style="color: #287FDD"></i>Clinical Research Opportunities</li>
                    <li class="font-body text-2xl mb-2"><i class="fas fa-star pr-2" style="color: #287FDD"></i>Educational Forums</li>
                    <li class="font-body text-2xl"><i class="fas fa-star pr-2" style="color: #287FDD"></i>Shared Perspectives</li>
                </ul>
                <a href="<?php echo $link_input ?>" id="TypeformButtonWrap" class="mt-10 mb-9 lg:mb-0 text-center lg:text-left text-20 lg:text-16 xl:text-30 block lg:inline-block mx-auto" target="_blank" rel="noopener noreferrer">
                    <button data-tf-slider="bPCmb9gx" data-tf-width="550" class=""
                        style="all:unset;font-family:Helvetica,Arial,sans-serif;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;background-color:#287FDD;color:#ffffff;border-radius:0px;padding:0 32px;font-weight:bold;height:64px;cursor:pointer;text-align:center;text-decoration:none;">Join the Community
                    </button>
                </a>
            </div>
            <div
                class="xl:block order-first xl:order-last pb-10 lg:pt-10 lg:px-44 xl:pl-0 xl:pr-0 2xl:pl-0 2xl:py-0 xl:pt-0">
                <img class="object-cover w-full" src="<?php echo $join_image['url']; ?>"
                    alt="<?php echo $join_image['alt']; ?>">
            </div>
        </div>
    </div>
</section>