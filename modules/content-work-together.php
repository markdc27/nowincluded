<?php
/**
 * Work Together
 *
 **/

$title = get_field('work_together_title');
$description = get_field('work_together_description');
$image = get_field('work_together_image');

?>

<section class="work_together py-10" style = "background-color: #f4f4f4;">
    <div class="container px-0 md:px-4 lg:px-6 max-w-screen-xl">
        <div>
            <h3 class = "text-gray font-body font-semibold text-40 md:text-70 leading-tighter"><?php echo $title; ?></h3>
            <p class="font-body text-20 text-gray leading-snug"><?php echo $description; ?></p>
            <img class="h-auto w-full" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
    </div>
</section>