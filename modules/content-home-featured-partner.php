<?php 
/**
 * Home - Featured Partner
 *
**/
$leftContent = get_field('left_content');
$rightImage = get_field('right_image');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" style="background-image:url(/wp-content/uploads/2021/09/TornPaper_White06-2.png);" class="home-featured-partner pt-32 pb-10 md:pb-32 md:pt-72 overflow-hidden bg-no-repeat bg-cover bg-white bg-right-top md:bg-top<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="container px-4 lg:px-6 max-w-screen-xl">
        <div class="grid md:grid-cols-12 gap-6 items-center">
            <div class="md:col-span-5 text-center md:text-left">
                <div class="flex space-x-10 pb-14 items-center justify-center md:justify-start">
                    <img style="max-height:80px;width:auto;" src="<?php echo $leftContent['logo1']['url']; ?>" alt="<?php echo $leftContent['logo1']['alt']; ?>">
                </div>
                <h3 class="font-display uppercase text-30 font-bold text-black mb-3"><?php echo $leftContent['title']; ?></h3>
                <div class="text-body text-20 text-black pb-10">
                    <?php echo $leftContent['description']; ?>
                </div>
                <a class="text-blue hover:text-magenta font-display text-24 font-bold" href="<?php echo $leftContent['link_url']; ?>"><?php echo $leftContent['link_text']; ?></a>
            </div>
            <div class="md:col-span-6 md:col-start-7">
                <div>
                    <img src="<?php echo $rightImage['url']; ?>" alt="<?php echo $rightImage['alt']; ?>">
                </div>
            </div>
        </div>
    </div>
</section>