<?php
/**
 * Component - Join the Community
 *
 **/
$bgColor = get_field('background_color');
$text = get_field('text');
$buttonText = get_field('button_text');
?>
<section id="" class="button-cta py-6 md:py-14 w-full<?php echo ' ' . $bgColor; ?>">
    <div class="container px-0 md:px-4 lg:px-6 max-w-screen-xl">
        <div class="grid md:grid-cols-12 gap-5 md:gap-6 items-center justify-center text-center md:text-left px-8 md:px-0">
            <div class="md:col-span-6">
                <span class="font-display font-bold text-24 md:text-30 leading-tighter<?php if ($bgColor == 'bg-blue'): ?> text-white<?php else: ?> text-blue<?php endif;?>"><?php echo $text; ?></span>
            </div>
            <div class="md:col-span-5 md:col-start-8">
                <div style = "display: flex; justify-content: flex-end;">
                    <form
                        action = "https://nowincluded.mn.co/share/EaxvrVV536HdUnrF?utm_source=manual" method = "get" target="mighty_networks">
                        <button class = "hover:bg-magenta" style="font-family:Helvetica,Arial,sans-serif;display:inline-block;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;background-color:#ffffff; color:#287FDD;font-size:30px;border-radius:0px;padding:0 50px;font-weight:bold;height:75px;cursor:pointer;line-height:75px;text-align:center;">
                            <?php echo $buttonText; ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>