<?php 
/**
 * Section - Home Stories
 *
**/

$storyID = get_field('featured_story');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="about-featured-story bg-gray pt-24 pb-14<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="container max-w-screen-2xl">
        <div class="grid md:grid-cols-12 gap-x-6 gap-y-10 md:gap-y-24">
            <?php 
                $args = [
                    'posts_per_page'  => 1,
                    'p' => $storyID,
                ];
                $latest = new WP_Query($args);
            ?>
            <?php while ( $latest->have_posts() ) : $latest->the_post(); ?>
                <?php 
                $postID = get_the_ID(); 
                $contentType = get_the_category();
                $singularContentName = get_field('singular_name', $contentType[0]->term_id); 
                $location = get_field('location', $postID ); 
                $locationArray = explode(',', $location);
                $tags = get_the_tags($postID); ?>
                <article class="grid md:grid-cols-12 gap-6 md:col-span-12">
                    <div class="md:col-span-5 relative">
                        <?php the_post_thumbnail('full', ['class' => 'w-full h-auto']); ?>
                        <?php if ( $singularContentName ) : ?>
                            <div>
                                <span class="absolute top-3 left-3 text-12 font-bold font-display text-gray px-2 py-2 leading-none bg-white rounded-sm"><?php echo $singularContentName; ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="md:col-span-6 md:col-start-7 flex flex-col justify-between border-t border-white">
                        <div class="pt-4 flex justify-between items-center text-white">
                            <span class="text-14 md:text-16 text-white font-bold font-display">
                                <?php echo get_the_date('F Y'); ?>
                                <?php if ( $location ) : ?>
                                    |  <span class="hidden md:inline-block"><?php echo $locationArray[0]; ?>,</span><?php echo ' ' . $locationArray[1]; ?>
                                <?php endif; ?>
                            </span>
                            <?php if ( $tags ) : ?>
                                <div class="text-12 leading-none text-gray font-bold font-display space-x-2 rounded-sm">
                                    <span class="py-3 px-3 text-gray" style="background: linear-gradient(0deg, rgba(40, 127, 221, 0.1), rgba(40, 127, 221, 0.1)), #FFFFFF;"><?php echo $tags[0]->name; ?></span>
                                    <?php /*
                                    <span class="hidden md:inline-block py-3 px-3 text-gray" style="background: linear-gradient(0deg, rgba(40, 127, 221, 0.1), rgba(40, 127, 221, 0.1)), #FFFFFF;">+<?php echo count($tags) - 1; ?></span>
                                    */ ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="pt-8">
                            <h3 class="text-white font-body font-semibold text-40 md:text-70 leading-tighter hover:underline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="pt-5 font-body text-20 leading-snug text-white">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</section>