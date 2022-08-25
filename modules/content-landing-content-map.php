<?php 
/**
 * Component - Landing Page Content (Map)
 *
**/

// $who_image = get_field('who_image');
$map_image = get_field('map_image');
$link_input = get_field('link_input');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>"
    class="component-landing<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="md:container my-10 md:my-20">
        <div class="columns-1">
            <h1 class="font-display font-bold text-4xl leading-9 md:text-6xl px-6 md:px-0"
                style="text-align: center;">
                Our community spans multiple states and reaches thousands of individuals.
            </h1>
        </div>
        <div class="my-5" style="text-align: center;">
            <a class="font-display font-bold underline px-6 text-blue block md:inline-block mb-3 md:mb-0"
                style="font-size: 25px;" href="<?php echo $link_input; ?>" target="_blank" rel="noopener noreferrer">Join the
                Community</a>
            <a class="font-display font-bold underline px-6 text-blue block md:inline-block" style="font-size: 25px;"
                href="#">Connect with
                our Team</a>
        </div>
        <div class="columns1 my-20">
            <img class="object-cover w-full" src="<?php echo $map_image['url']; ?>"
                alt="<?php echo $map_image['alt']; ?>">
        </div>
        <div class="grid md:grid-cols-2">
            <div class="text-center">
                <p class="font-display font-bold underline text-blue text-center md:text-left mb-10 md:mb-0 md:mx-auto lg:mx-0 w-auto md:w-96"
                    style="font-size: 32px;" href="#">Include
                    your state and community on the map</p>
            </div>
            <a href="<?php echo $link_input; ?>" id="TypeformButtonWrap" class="py-6 md:p-0 text-center md:text-right" target="_blank" rel="noopener noreferrer">
                <button class="float-none md:float-right mx-auto"
                    style="all:unset;display:inline-block;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;background-color:#287FDD;color:#000;border-radius:0px;padding:0 40px;font-size:30px;font-weight:bold;height:100px;cursor:pointer;line-height:50px;text-align:center;margin:0;text-decoration:none;">Join
                    the Community</button>
            </a>
        </div>
    </div>
</section>