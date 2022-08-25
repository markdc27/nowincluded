<?php 
/**
 * Latest Stories
 *
**/
$title = get_field('title');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>" class="latest-stories container max-w-screen-xl pt-10 md:pt-20<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <h2 class="text-gray font-body font-semibold text-48 md:text-70"><?php echo $title; ?></h2>
    <div class="pt-8 md:pt-10 grid md:grid-cols-3 gap-6">
        <?php 
            $args = [
                'post_type'         => 'post',
                'posts_per_page'    => 3
            ];
            $latest = new WP_Query($args);
        ?>
        <?php if ( $latest->have_posts() ) : ?>
            <?php while ( $latest->have_posts() ) : $latest->the_post(); ?>
                <?php 
                $postID = get_the_ID();
                ?>
                <article data-url="<?php the_permalink(); ?>" class="js-article cursor-pointer flex flex-col justify-between pb-6 md:pb-32">
                    <div>
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
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>