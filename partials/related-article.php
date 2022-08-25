<?php 
$postID = get_the_ID();
$location = get_field('location', $postID); 
$locationArray = explode(',', $location); 
$stateAbbr = trim($locationArray[1]);
$category = get_the_category($postID);
$contentType = '';
$isImageBlurred = get_field('blur_featured_image', $postID);
$blurClass = '';
$blurContainer = '';
if ($isImageBlurred) {
    $blurClass = ' filter blur-xl';
    $blurContainer = ' blur-container';
}

if ( $currentTag ) {
    $contentType = $currentTag;
} else {
    $contentType = $category[0]->name;
}
?>
<article data-url="<?php the_permalink(); ?>" class="js-article cursor-pointer flex flex-col justify-between pb-6 md:pb-32">
    <div>
        <?php if ( $showFeaturedImage == true ) : ?>
            <div class="overflow-hidden relative">
                <?php if ($isImageBlurred): ?>
                    <a href="<?php the_permalink(); ?>" class="blur-container absolute inset-0 z-40 w-full h-full"></a>
                <?php endif; ?>    
                <a href="<?php the_permalink(); ?>" class="relative w-full block bg-no-repeat bg-center bg-cover aspect-w-323 aspect-h-256<?php echo $blurClass; ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">  
                    <div>
                        <span class="absolute top-3 left-3 text-12 font-bold font-display text-gray px-2 py-2 leading-none bg-white rounded-sm"><?php echo $contentType; ?></span>
                    </div>
                </a>
            </div>
        <?php endif ?>
        <div class="mt-5 pt-5 pb-6 flex items-center justify-between border-t">
            <?php im_get_story_byline($postID, false); ?>
            <?php im_get_tags($postID); ?>
        </div>
        <h3 class="font-body font-bold text-40 md:text-42 leading-tight md:leading-tighter hover:underline pt-8 md:pt-0"><a href="<?php the_permalink(); ?>" class="text-gray"><?php the_title(); ?></a></h3>
    </div>
    <div class="pt-4 text-gray font-body text-18 md:text-20 leading-normal">
        <?php echo im_get_excerpt(); ?>
    </div>
</article>