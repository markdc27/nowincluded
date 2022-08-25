<?php 
/**
 * Component - Landing Page Header Image/Content
 *
**/

$header_image = get_field('header_image');
$header_title = get_field('header_title');
$header_subTitle = get_field('header_subtitle');
$link_input = get_field('link_input');
$button = get_field('button');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>"
    class="component-landing<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="w-full grid grid-cols-1 lg:grid-cols-2">
        <div class="image">
            <img class="object-cover w-full" src="<?php echo $header_image['url']; ?>"
                alt="<?php echo $header_image['alt']; ?>">
        </div>
        <div class="content p-10 lg:px-10 lg:py-0 2xl:pl-16 xl:pt-5 2xl:pr-20">
            <div class="inner h-full md:h-full border-b border-black">
                <h1 class="text-48 md:text-48 lg:text-5xl xl:text-7xl 2xl:text-70 2xl:mr-40 lg:line-height1 mb-9 md:mb-5 text-center lg:text-left tighter font-body font-semibold text-gray"><?php echo $header_title; ?></h1>
                <h2 class="text-30 lg:text-20 xl:text-24 text-center lg:text-left leading-loose lg:leading-9 font-body"><?php echo $header_subTitle; ?></h2>
                <a href="<?php echo $link_input ?>" id="TypeformButtonWrap" class="mt-10 mb-9 lg:mb-0 text-center lg:text-left text-20 lg:text-16 xl:text-30 block lg:inline-block mx-auto" target="_blank" rel="noopener noreferrer">
                    <button data-tf-slider="bPCmb9gx" data-tf-width="550" class=""
                        style="all:unset;font-family:Helvetica,Arial,sans-serif;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;background-color:#287FDD;color:#ffffff;border-radius:0px;padding:0 32px;font-weight:bold;height:64px;cursor:pointer;text-align:center;text-decoration:none;">Join the Community
                    </button>
                </a>
            </div>
        </div>
    </div>    
</section>