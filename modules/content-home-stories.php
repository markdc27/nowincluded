<?php 
/**
 * Section - Home Stories
 *
**/

$st = get_field('section_title');
?>
<section class="bg-white pt-24 pb-14">
    <div class="container max-w-screen-xl">
        <h2 class="pb-6 md:pb-14 text-gray font-body text-40 md:text-70 font-semibold leading-none"><?php echo $st; ?></h2>
        <div class="grid md:grid-cols-12 gap-x-6 gap-y-10 md:gap-y-24">
            <?php 
                $args = [
                    'posts_per_page'  => 6
                ];
                $count = 1;
                $latest = new WP_Query($args);
            ?>
            <?php while ( $latest->have_posts() ) : $latest->the_post(); ?>
                <?php 
                $postID = get_the_ID(); 
                $contentType = get_the_category();
                $isImageBlurred = get_field('blur_featured_image', $postID);
                $blurClass = '';
                if ($isImageBlurred) {
                    $blurClass = ' filter blur-xl';
                }
                ?>
                <?php if ( $count == 1 ) : ?>
                    <article data-url="<?php the_permalink(); ?>" class="js-article cursor-pointer grid md:grid-cols-12 gap-6 md:col-span-12">
                        <div class="md:col-span-5 relative">
                            <div class="overflow-hidden md:aspect-w-9 md:aspect-h-8 relative">
                                <?php if ($isImageBlurred): ?>
                                    <a href="<?php the_permalink(); ?>" class="blur-container absolute inset-0 z-40 w-full h-full"></a>
                                <?php endif; ?>
                                <?php the_post_thumbnail('full', ['class' => 'md:object-cover md:object-center w-full h-auto' . $blurClass]); ?>
                            </div>
                            <div>
                                <span class="absolute top-3 left-3 text-12 font-bold font-display text-gray px-2 py-2 leading-none bg-white rounded-sm"><?php echo $contentType[0]->name; ?></span>
                            </div>
                        </div>
                        <div class="md:col-span-6 md:col-start-7 flex flex-col justify-between border-t border-black">
                            <div class="pt-4 flex justify-between items-center">
                                <?php im_get_story_byline($postID); ?>
                                <?php im_get_tags($postID, true); ?>
                            </div>
                            <div class="pt-8 md:pt-0">
                                <h3 class="text-gray font-body font-semibold text-40 md:text-70 leading-tighter hover:underline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="pt-5 font-body text-20 leading-snug">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php elseif ( $count == 2 ) : ?>
                    <article data-url="<?php the_permalink(); ?>" class="js-article grid cursor-pointer md:grid-cols-12 gap-6 md:col-span-12">
                        <div class="order-2 md:order-1 md:col-span-6 flex flex-col justify-between border-t border-black">
                            <div class="pt-4 flex justify-between items-center">
                                <?php im_get_story_byline($postID); ?>
                                <?php im_get_tags($postID, true); ?>
                            </div>
                            <div class="pt-8 md:pt-0">
                                <h3 class="text-gray font-body font-semibold text-40 md:text-70 leading-tighter hover:underline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="pt-5 font-body text-20 leading-snug">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="order-1 md:order-2 md:col-span-5 md:col-start-8 relative">
                            <div class="overflow-hidden md:aspect-w-9 md:aspect-h-8 relative">
                                <?php if ($isImageBlurred): ?>
                                    <a href="<?php the_permalink(); ?>" class="blur-container absolute inset-0 z-40 w-full h-full"></a>
                                <?php endif; ?>
                                <?php the_post_thumbnail('full', ['class' => 'md:object-cover md:object-center w-full h-auto' . $blurClass]); ?>
                            </div>
                            <div>
                                <span class="absolute top-3 left-3 text-12 font-bold font-display text-gray px-2 py-2 leading-none bg-white rounded-sm"><?php echo $contentType[0]->name; ?></span>
                            </div>
                        </div>
                    </article>
                <?php elseif ( $count >=3 && $count < 6 ) : ?>
                    <article data-url="<?php the_permalink(); ?>" class="js-article cursor-pointer md:col-span-4 flex flex-col justify-between">
                        <div>
                            <div class="mb-5 relative w-full">
                                <div class="overflow-hidden relative">
                                    <?php if ($isImageBlurred): ?>
                                        <a href="<?php the_permalink(); ?>" class="blur-container absolute inset-0 z-40 w-full h-full"></a>
                                    <?php endif; ?>
                                    <?php the_post_thumbnail('full', ['class' => 'w-full h-auto' . $blurClass]); ?>
                                </div>
                                <div>
                                    <span class="absolute top-3 left-3 text-12 font-bold font-display text-gray px-2 py-2 leading-none bg-white rounded-sm"><?php echo $contentType[0]->name; ?></span>
                                </div>
                            </div>
                            <div class="pt-5 pb-6 flex items-center justify-between border-t">
                                <?php im_get_story_byline($postID, false); ?>
                                <?php im_get_tags($postID); ?>
                            </div>
                            <h3 class="font-body font-bold text-40 md:text-42 leading-tight md:leading-tighter hover:underline pt-8 md:pt-0"><a href="<?php the_permalink(); ?>" class="text-gray"><?php the_title(); ?></a></h3>
                        </div>
                        <div class="pt-4 text-gray font-body text-18 md:text-20 leading-normal">
                            <?php echo im_excerpt(16); ?>
                        </div>
                    </article>
                <?php else : ?>
                    <article data-url="<?php the_permalink(); ?>" class="js-article cursor-pointer grid md:grid-cols-12 gap-10 md:col-span-12">
                        <div class="md:col-span-4 relative">
                            <div class="overflow-hidden md:aspect-w-9 md:aspect-h-10 relative">
                                <?php if ($isImageBlurred): ?>
                                    <a href="<?php the_permalink(); ?>" class="blur-container absolute inset-0 z-40 w-full h-full"></a>
                                <?php endif; ?>
                                <?php the_post_thumbnail('full', ['class' => 'md:object-cover md:object-center w-full h-auto' . $blurClass]); ?>
                            </div>
                            <div>
                                <span class="absolute top-3 left-3 text-12 font-bold font-display text-gray px-2 py-2 leading-none bg-white rounded-sm"><?php echo $contentType[0]->name; ?></span>
                            </div>
                        </div>
                        <div class="md:col-span-8 flex flex-col justify-between border-t border-black">
                            <div class="pt-4 flex justify-between items-center">
                                <?php im_get_story_byline($postID); ?>
                                <?php im_get_tags($postID, true); ?>
                            </div>
                            <div class="pt-8 md:pt-0">
                                <h3 class="text-gray font-body font-semibold text-40 md:text-70 leading-tighter hover:underline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="pt-5 font-body text-20 leading-snug">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endif; ?>
                <?php $count++; ?>
            <?php endwhile; ?>
        </div>
    </div>
</section>