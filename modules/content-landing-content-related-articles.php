<?php 
/**
 * Component - Landing Page Header Image/Content
 *
**/

$includeRS = get_field('include_related_stories', $postID);
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>"
    class="component-landing<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="w-full">
        <?php if ( $includeRS == true ) : ?>
            <?php set_query_var( 'current_id', $postID ); ?>
            <?php get_template_part('partials/related', 'stories'); ?>
        <?php endif; ?>
    </div>
</section>