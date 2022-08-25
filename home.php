<?php get_header(); ?>
<main class="pt-10 md:pt-20">
    <div class="pb-14 md:pb-40 flex flex-col space-y-32">
        <?php $categories = get_categories(); ?>
        <?php foreach ( $categories as $cat ): ?>
            <section class="container max-w-screen-xl">
                <div>
                    <div class="pb-2">
                        <h2 class="text-gray font-display font-bold text-20 inline-block pr-4"><?php echo $cat->name; ?></h2>
                        <a class="uppercase opacity-20 text-black font-display font-bold text-12" href="<?php echo get_term_link($cat->term_id); ?>">View All</a>
                    </div>
                </div>
                <?php 
                $args = [
                    "posts_per_page" => 6,
                    "cat"   => $cat->term_id,
                ]; 
                
                $categoryPosts = new WP_Query($args);
                ?>
                <?php if ( $categoryPosts->have_posts() ) : ?>
                    <div class="relative">
                        <div class="post-slider">
                            <div class="swiper-wrapper"> 
                                <?php while( $categoryPosts->have_posts() ) : $categoryPosts->the_post(); ?>
                                    <?php 
                                        $tags = get_the_tags($postID);
                                        $location = get_field('location', $postID ); 
                                        $stateAbbr = '';
                                        $locationArray = [];
                                    
                                        if ( $location ) {
                                        $locationArray = explode(',', $location); 
                                        $stateAbbr = trim($locationArray[1]);
                                        }

                                        $isImageBlurred = get_field('blur_featured_image', $postID);
                                        $blurClass = '';
                                        if ($isImageBlurred) {
                                            $blurClass = ' filter blur-xl';
                                        }
                                    ?>
                                    <article data-url="<?php the_permalink(); ?>" class="swiper-slide js-article border border-gray p-5 flex flex-col justify-between min-h-full cursor-pointer">
                                        <div class="overflow-hidden relative">
                                            <?php if ($isImageBlurred): ?>
                                                <a href="<?php the_permalink(); ?>" class="blur-container absolute inset-0 z-40 w-full h-full block"></a>
                                            <?php endif; ?>
                                            <a href="<?php the_permalink(); ?>" class="w-full block aspect-h-16 aspect-w-23 flex-shrink bg-no-repeat bg-center bg-cover<?php echo $blurClass; ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"></a>
                                        </div>
                                        <h3 class="pt-6 pb-8 font-body font-semibold text-gray text-18 flex-1"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="flex-shrink">
                                            <span class="text-12 text-gray font-bold font-display opacity-50">
                                                <?php echo get_the_date('F Y'); ?> 
                                                <?php if ( $stateAbbr ) : ?>
                                                    | <?php echo $stateAbbr; ?>
                                                <?php endif; ?>
                                            </span>
                                            <div>
                                                <?php if ( ! empty($tags) ) : ?>
                                                    <div class="text-12 leading-none text-gray font-bold font-display space-x-2 rounded-sm pt-1">
                                                        <span class="inline-block py-3 px-3" style="background-color:rgba(40, 127, 221, 0.1);"><?php echo $tags[0]->name; ?></span>
                                                        <?php if ( count($tags) > 1 ) : ?>
                                                            <span class="hidden md:inline-block py-3 px-3" style="background-color:rgba(40, 127, 221, 0.1);">+<?php echo count($tags) - 1; ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </article>
                                <?php endwhile; ?>  
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-pagination md:hidden"></div>
                        </div>
                    </div>
                    
                <?php endif; ?>
            </section>
        <?php endforeach; ?>
    </div>
    <?php $ctaBlock = get_post(237); ?>
    <?php echo apply_filters( 'the_content',$ctaBlock->post_content); ?>
</main>
<?php get_footer();