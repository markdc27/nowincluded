<?php get_header(); ?>
<?php 
    $postID = get_the_ID(); 
    $featuredIndividual = get_field('featured_individual', $postID);
    $location = get_field('location', $postID);
    $includeCTA = get_field('include_call_to_action', $postID);
    $includeRS = get_field('include_related_stories', $postID);
    $isImageBlurred = get_field('blur_featured_image', $postID);
    $blurClass = '';
    if ($isImageBlurred) {
        $blurClass = ' filter blur-xl';
    }
?>
<main>
    <article class="container max-w-screen-xl pt-0 md:pt-24 pb-20 md:pb-40">
        <div class="overflow-hidden relative">
            <?php if ($isImageBlurred): ?>
                <div class="blur-container absolute inset-0 z-40 w-full h-full"></div>
            <?php endif; ?>
            <?php the_post_thumbnail('full', ['class'=>'w-full'.$blurClass]); ?>
        </div>
        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 mb-4 md:items-center mt-8 md:mt-10">
            <?php if ( $location ) : ?>
                <div>
                    <span class="text-12 text-gray font-display font-bold bg-light-gray rounded-full py-1 px-2 inline-flex items-center">
                        <svg width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.337 9.093c-.564-.5-1.644-1.457-1.644-1.492-.66-.565-.989-1.413-.989-2.307A3.276 3.276 0 016 1.998a3.276 3.276 0 013.296 3.296c0 .894-.33 1.742-.988 2.354-.024.024-.507.46-.99.895-.482.435-.965.871-.988.895a.504.504 0 01-.66-.048 36.111 36.111 0 00-.333-.297zm-.938-2.057L6 8.449l1.601-1.413c.471-.47.754-1.036.754-1.695A2.332 2.332 0 006 2.986c-1.318 0-2.354.99-2.354 2.308 0 .659.282 1.271.753 1.742zM6 6.236a.942.942 0 100-1.884.942.942 0 000 1.883z" fill="#1D1D1D"/></svg> 
                        <?php echo $location; ?>
                    </span>
                </div>
            <?php endif; ?>
            <div class="text-14 text-gray font-display">
                <span class="font-bold"><?php echo get_the_date('F Y'); ?></span> | 
                <?php if ( $featuredIndividual ) : ?>
                    <span>Featurning: <?php echo $featuredIndividual; ?> & </span>
                <?php endif; ?>
                Written by: <?php echo the_author_meta('display_name',$post->post_author); ?>
            </div>
        </div>
        <h1 class="text-gray text-40 md:text-70 leading-tighter md:leading-snug font-body font-semibold mb-10 md:mb-20"><?php the_title(); ?></h1>
        <?php 
            set_query_var('post_url', get_permalink() );
            set_query_var('extra_classes', 'pb-6 md:pb-8' );
            get_template_part('partials/social', 'share'); 
        ?>
        <div class="post-content prose-lg font-body">
            <?php the_content(); ?>
        </div>
        <?php 
            set_query_var('post_url', get_permalink() );
            set_query_var('extra_classes', 'pt-10 md:pt-14' );
            get_template_part('partials/social', 'share'); 
        ?>
    </article>
    <?php if ( $includeCTA == true ) : ?>
        <?php $shortCTA = get_field('short_call_to_action', $postID); ?>
        <div class="bg-light-gray py-10">
            <div class="container max-w-screen-xl">
                <a href="https://app.nowincluded.com/share/EaxvrVV536HdUnrF?utm_source=manual" class="flex items-center space-x-8 justify-center text-24 md:text-30 text-blue font-display font-bold">
                    <span>Become a member today!</span> 
                    <svg width="27" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.122.84l-2.277 1.81 6.992 5.557H0v2.585h19.837l-6.992 5.558 2.277 1.81L26.016 9.5 15.122.84z" fill="#287FDD"/></svg>
                </a>
            </div>
        </div>
    <?php endif; ?>

    <?php if ( $includeRS == true ) : ?>
        <?php set_query_var( 'current_id', $postID ); ?>
        <?php get_template_part('partials/related', 'stories'); ?>
    <?php endif; ?>

    <?php if ( $includeFCTA == true ) : ?>
        <?php $ctaBlock = get_post(237); ?>
        <?php echo apply_filters( 'the_content',$ctaBlock->post_content); ?>
    <?php endif; ?>
</main>
<?php get_footer();