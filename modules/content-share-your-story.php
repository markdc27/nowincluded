<?php 
/**
 * Component - Share Your Story
 *
**/
$videoEmbed = get_field('video_embed');
//$button = get_field('button');
$smallText = get_field('small_text')
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="share-your-story pt-14 md:pt-32 pb-10<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="container px-4 lg:px-6 max-w-screen-xl">
        <div class="text-center">
            <div class="pb-4 w-full h-auto">
                <div class="border border-blue p-4">
                    <?php echo $videoEmbed; ?>
                </div>
            </div>
            <?php /*
            <a href="<?php echo $button['link']; ?>" class="block bg-blue hover:bg-magenta mx-auto max-w-full md:w-2/4 text-white px-4 md:px-10 py-5 font-display font-bold text-20 md:text-30">
                <?php echo $button['text']; ?>
            </a>*/ ?>
            <div class="mt-6 text-16 font-display text-gray">
                <?php echo $smallText; ?>
            </div>
        </div>
    </div>      
</section>