<?php get_header(); ?>
<main>
    <?php 
    $categories = get_categories([
        'hide_empty' => false
    ]); 

    $queriedObject = get_queried_object();
    $singularName = get_post_meta('singular_name', $queriedObject->term_id);
    $visibleTags = get_field('category_tag_options', 'options');
    $excludeTags = [];
    foreach ( $visibleTags as $t ) {
        $excludeTags[] = $t->term_id;
    }
    $tags = get_tags([
        'exclude' => $excludeTags,
    ]);
    ?>
    <nav class="pt-8 pb-4">
        <div class="container max-w-screen-xl flex md:space-x-6 items-center flex-wrap">
            <a class="uppercase font-display font-bold text-16 text-black mr-6 md:mr-0 mb-2 md:mb-0" href="/explore/">Latest</a>
            <?php foreach( $categories as $c ) : ?>
                <?php if ( $c->name != 'Uncategorized' ) : ?>
                    <a class="uppercase font-display font-bold text-16 mr-6 md:mr-0 mb-2 md:mb-0<?php if ( $c->term_id == $queriedObject->term_id ) : ?> text-blue<?php else: ?> text-black<?php endif; ?>" href="<?php echo get_category_link($c->term_id); ?>"><?php echo $c->name; ?></a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="container max-w-screen-xl hidden md:flex space-x-6 pt-4">
            <div id="TagList" class="flex-1 flex-wrap flex items-center">
                <?php foreach ( $visibleTags as $t ) : ?>
                    <a href="<?php echo get_term_link($t->term_id); ?>" class=" hover:bg-blue hover:text-white text-12 font-bold font-display px-3 py-2 mr-3 mb-3<?php if ( $t->term_id == $queriedObject->term_id ) : ?> text-white bg-blue<?php else: ?> text-gray bg-light-blue<?php endif; ?>"><?php echo $t->name; ?></a>
                <?php endforeach; ?>
            </div>
            <?php if ( count($tags) > 0 ) : ?>
                <div class="flex-shrink">
                    <button id="TagListToggle" class="uppercase text-gray text-12 font-display font-bold">View All</button>
                </div>
            <?php endif; ?>
        </div>
        <div id="ExtraTagList" class="container max-w-screen-xl hidden">
            <div class="flex-1 flex-wrap flex items-center">
                <?php foreach ( $tags as $t ) : ?>
                    <a href="<?php echo get_term_link($t->term_id); ?>" class=" hover:bg-blue hover:text-white text-12 font-bold font-display px-3 py-2 mr-3 mb-3<?php if ( $t->term_id == $queriedObject->term_id ) : ?> text-white bg-blue<?php else: ?> text-gray bg-light-blue<?php endif; ?>"><?php echo $t->name; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="container max-w-screen-xl md:hidden mt-8">
            <a id="MobileTaglistToggle" href="#" class="flex space-x-3 items-center">
                <span class="font-display font-bold text-14 text-gray">VIEW TAGS</span>
                <svg  width="10" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m1 1 4 4 4-4" stroke="#1d1d1d" stroke-width="1.5"/></svg>
            </a>
        </div>
        <div class="js-tag-list-container bg-light-gray p-10 mt-6 hidden">
            <div class="relative flex flex-wrap">
                <?php foreach ( get_tags() as $t ) : ?>
                    <a href="<?php echo get_term_link($t->term_id); ?>" class="hover:bg-magenta hover:text-white text-12 font-bold font-display px-3 py-2 mr-3 mb-3<?php if ( $t->term_id == $queriedObject->term_id ) : ?> text-white bg-magenta<?php else: ?> text-gray bg-white<?php endif; ?>"><?php echo $t->name; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </nav>
    <div class="container max-w-screen-xl">
        <div class="pt-8 md:pt-10 grid md:grid-cols-3 gap-20">
            <?php 
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                $args = [
                    'posts_per_page'    => 9,
                    'paged' => $paged,
                ];

                switch($queriedObject->taxonomy) {
                    case 'category':
                        $args['cat'] = $queriedObject->term_id;
                        break;
                    case 'post_tag':
                        $args['tag_id'] = $queriedObject->term_id;
                        break;
                    default:
                        break;
                }

                $archive = new WP_Query($args);
            ?>
            <?php if ( $archive->have_posts() ) : ?>
                <?php while ( $archive->have_posts() ) : $archive->the_post(); ?>
                    <?php set_query_var('showFeaturedImage', true ); ?>
                    <?php set_query_var('category', $singularName ); ?>
                    <?php set_query_var('current_tag', $queriedObject->term_id); ?>
                    <?php echo get_template_part('partials/related', 'article'); ?>
                <?php endwhile; ?>
                <div class="text-right md:col-span-3 pb-14">
                    <?php wp_pagenavi( array( 'query' => $archive ) ); ?>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    <?php $ctaBlock = get_post(237); ?>
    <?php echo apply_filters( 'the_content',$ctaBlock->post_content); ?>
    <?php $shareStoryBlock = get_post(240); ?>
    <?php echo apply_filters( 'the_content',$shareStoryBlock->post_content); ?>
</main>
<?php get_footer();