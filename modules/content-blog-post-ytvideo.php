<?php 
/**
 * Component - Landing Page Header Image/Content
 *
**/

$video = get_field('video');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>"
    class="component-landing<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="container xl:px-40 py-10">
        <iframe width="100%" height="500px" src="<?php echo $video; ?>" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
</section>