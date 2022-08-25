<?php 
/**
 * Component - Button CTA
 *
**/
$items = get_field('items');
$bgColor = get_field('background_color');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="story-section py-20 md:py-60 <?php echo $bgColor; ?><?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="container px-0 md:px-4 lg:px-6 max-w-screen-xl">
        <div class="grid md:grid-cols-6 gap-6 text-center">
            <div class="md:col-span-4 md:col-start-2">
                <div class="grid gap-y-20 md:gap-y-240 text-white px-4 md:px-0">
                    <?php foreach ( $items as $item ) : ?>
                        <?php if ( $item['item_type'] == 'content' ) : ?>
                            <div x-data="{ shown: false }" x-intersect="shown = true">
                                <div x-show="shown" x-transition.delay.300ms.duration.500ms>
                                    <img class="w-full h-auto mb-4 mb:mb-12" src="<?php echo $item['content']['image']['url']; ?>" alt="<?php echo $item['content']['image']['alt']; ?>">
                                    <?php if ( $item['content']['title'] ) : ?>
                                        <h3 class="mb-2 md:mb-4 font-display font-bold text-24 md:text-48"><?php echo $item['content']['title']; ?></h3>
                                    <?php endif; ?>
                                    <div class="font-body text-18 md:text-24">
                                        <?php echo $item['content']['description']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="max-w-full flex space-between space-x-3 items-center mx-auto" style="width: 230px;height:25px;">
                                <div x-data="{ draw1 : false }" x-intersect="draw1 = true" class="lines flex-1 draw-line flex items-center w-full h-full" style="direction:rtl;">
                                    <div  :class="{ 'in-view' : draw1 }"class="bg-white block" style="height:1px;"></div>
                                </div>
                                <div x-data="{ reveal: false }" x-intersect="reveal = true" class="h-full">
                                    <div :class="{ 'in-view' : reveal }" class="logo">
                                        <img src="/wp-content/themes/nowincluded/assets/images/small-logo.svg" role="presentation">
                                    </div>
                                </div>
                                <div x-data="{ draw2 : false }" x-intersect="draw2 = true" class="lines flex-1 draw-line flex items-center w-full h-full">
                                    <div :class="{ 'in-view' : draw2 }" class="bg-white block" style="height:1px;"></div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>