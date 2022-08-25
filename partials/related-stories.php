<section class="latest-stories container max-w-screen-xl pt-10 md:pt-20">
    <h2 class="text-gray font-body font-semibold text-48 md:text-70">Related Stories</h2>
        <div class="pt-8 md:pt-10 grid md:grid-cols-3 gap-6">
        <?php 
            $args = [
                'post_type'         => 'post',
                'posts_per_page'    => 3,
                'post__not_in'      => [$current_id],
            ];

            $tags = [];

            foreach(get_the_tags() as $t) {
                $tags[] = $t->term_id;
            }

            if ( count($tags) > 0 ) {
                $args['tag__in'] = $tags;
            }

            $latest = new WP_Query($args);
        ?>
        <?php if ( $latest->have_posts() ) : ?>
            <?php while ( $latest->have_posts() ) : $latest->the_post(); ?>
                    <?php echo get_template_part('partials/related', 'article'); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>