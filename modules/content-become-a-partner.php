<?php 
/**
 * Become a Partner
 *
**/
$leftContent = get_field('left_content');
$rightContent = get_field('right_content');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" style="background-color: #fafafa;background-image: url(/wp-content/uploads/2021/08/top-rip-2.png), url(/wp-content/uploads/2021/08/bottom-rip-2.png); background-position:top left, bottom left;" class="become-a-partner bg-contain background-no-repeat overflow-hidden py-32 md:py-52 bg-no-repeat bg-cover<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="container px-4 lg:px-6 max-w-screen-xl">
        <div class="grid md:grid-cols-12 gap-6 text-center md:text-left">
            <div class="md:col-span-5">
                <h3 class="font-display font-bold text-24 md:text-30 text-black uppercase mb-3"><?php echo $leftContent['title']; ?></h3>
                <div class="text-20 md:text-24 font-body text-black leading-tight mb-6">
                    <?php echo $leftContent['description']; ?>
                </div>
                <div class="tf-link">
                    <?php echo $leftContent['link_embed']; ?>
                </div>
            </div>
            <div class="md:col-span-6 md:col-start-7">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between items-center">
                    <img src="<?php echo $rightContent['logo']['url']; ?>" alt="<?php echo $rightContent['logo']['alt']; ?>">
                    <div class="my-5 hidden md:block" style="background-color:rgba(196, 196, 196, 0.5);width:3px;height:89px;"></div>
                    <div class="my-5 block md:hidden" style="background-color:rgba(196, 196, 196, 0.5);width:89px;height:3px;"></div>
                    <img src="<?php echo $rightContent['partner_logo']['url']; ?>" alt="<?php echo $rightContent['partner_logo']['alt']; ?>">
                </div>
            </div>
        </div>
    </div>      
</section>