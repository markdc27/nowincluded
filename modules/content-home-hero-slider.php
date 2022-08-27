<?php 
/**
 * Section - Home Hero Slider
 *
**/
?>
<section class="hero-slider relative">
    <div class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <?php 
                    $args = [
                        'posts_per_page'  => 4
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
                    <?php if ( $count && $count < 4 ) : ?>
                        <li class="splide__slide">
                            <article data-url="<?php the_permalink(); ?>" class="js-article cursor-pointer grid md:grid-cols-12 gap-6 md:col-span-12">
                                <div class="md:col-span-12 relative">
                                    <div class="object-cover img-gradient">
                                        <?php if ($isImageBlurred): ?>
                                            <a href="<?php the_permalink(); ?>" class="blur-container absolute inset-0 z-40 w-full "></a>
                                        <?php endif; ?>
                                        <?php the_post_thumbnail('full', ['class' => 'h-screen md:object-cover md:object-center w-full ' . $blurClass]); ?>
                                    </div>
                                    <div class="container max-w-screen-xl">
                                        <div class="absolute top-1/3">
                                            <span class="category-text text-white text-2xl font-bold font-display text-gray"><?php echo $contentType[0]->name; ?></span>
                                            <h3 class="text-white font-body font-semibold text-40 md:text-70 leading-tighter hover:underline max-w-5xl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <div class="state-and-date text-white font-body pt-4 flex justify-between items-center">
                                                <?php im_get_story_byline($postID); ?>
                                                <?php im_get_tags($postID, true); ?>
                                            </div>
                                            <div class="mt-8">
                                                <a class="read-more-link" href="<?php the_permalink(); ?>">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>                    
                    <?php endif; ?>
                    <?php $count++; ?>
                <?php endwhile; ?>    
            </ul>
        </div>
        <div class="splide__progress">
            <div class="splide__progress__bar">
            </div>
        </div>
    </div>
</section>