<?php 
/**
 * Component - Landing Page Header Image/Content
 *
**/

$image = get_field('image');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>"
    class="component-landing<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="container xl:px-40">
        <img class="object-cover w-full" src="<?php echo $image['url']; ?>"
            alt="<?php echo $image['alt']; ?>">
    </div>
</section>