<?php 
/**
 * Component - Landing Page Info
 *
**/

$join_image = get_field('join_image');
$join_title = get_field('join_title');
$join_text = get_field('join_text');
$join_title2 = get_field('join_title2');
$join_text2 = get_field('join_text2');
$link_input = get_field('link_input');
?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>"
    class="component-landing<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="pt-0 xl:pt-20 xl:mx-10 2xl:mx-24">
        <!-- <h1 class="font-display text-center mb-10 xl:mb-24 font-bold text-4xl leading-9 md:text-6xl px-6 md:px-0" style="color:#287FDD;">Gut Health and Why Diversity In
            Clinical Trials Matter</h1> -->
        <div class="container">
            <div class="mb-20 grid xl:grid-cols-2 flex flex-row px-5 xl:px-0 text-conter xl:text-left">
                <div class="xl:pr-20 xl:block order-last xl:order-first text-center xl:text-left">
                    <h3 class="mb-5 font-display font-bold text-3xl text-gray pr-30" style="color:#287FDD;">Designing
                        microbiome therapeutics to
                        help cure cancer</h3>
                    <p class="text-2xl pr-10 font-body">Up to 80% of our immune cells exist in the gut, and unlike our
                        genome, which is mostly fixed from
                        birth, the microbiome can be modified by diet, overall lifestyle and microbial therapeutics. A
                        healthy microbiome increases the efficacy of drugs such as checkpoint inhibitors which take the
                        blindfold off of the immune system, allowing it to recognize, attack, and kill cancer cells.
                    </p>
                    <h1 class="font-display font-bold text-120 float-left mt-5 xl:my-10 mx-10 xl:ml-0 xl:mr-10"
                        style="color:#287FDD; line-height: 10rem;">70%</h1>
                    <h2 class="font-body text-20 mt-12 pr-10">Number of cancer patients who don’t respond to this drug
                        treatment due to severely damaged
                        microbiomes which have limited kinds of bacteria.</h2>
                </div>
                <div
                    class="xl:px-10 mb-10 h-80 xl:h-auto xl:mb-0 xl:pl-20 xl:border-l xl:block order-first xl:order-last">
                    <iframe class="w-full" height="95%" src="https://www.youtube.com/embed/_N00V_Zk0TQ"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <h3 class="mb-3 font-display font-bold text-gray">Stephanie Culler | TEDxSanDiegoSalon</h3>
                </div>
            </div>
        </div>
    </div>
    <div class=" py-20 px-10 xl:px-0 text-center xl:text-left" style="background-color: #287FDD50;">
        <div class="container">
            <div class="grid xl:grid-cols-2 flex flex-row xl:px-0 text-conter xl:text-left">
                <div class="xl:block order-last xl:order-first text-center xl:text-left">
                    <img class="w-full" src="http://nowincluded.com/wp-content/uploads/2022/04/Gut-Check-05.png" alt="">
                </div>
                <div
                    class="mb-10 xl:h-80 xl:pr-20 xl:pt-20 xl:h-auto xl:mb-0 xl:block order-first xl:order-last">
                    <h3 class="mb-5 font-display font-bold text-3xl text-gray" style="color:#287FDD;">Here's the truth.
                        When it
                        comes to medical
                        research, we aren't all included - not the way we should
                        be, and not the way we can be.
                    </h3>
                    <p class="mb-3 text-2xl font-body">People of Color make up 40 percent of the U.S. population, but
                        there’s a
                        real lack of diversity when
                        it comes to people participating in genetic testing and clinical trials. That’s why certain
                        medications don’t work for Black people, Hispanics and other People of Color, and that’s only
                        scratching the surface. Let me put it this way: we’re underrepresented, which has only widened
                        the
                        number of healthcare disparities for us. That’s a problem, so let’s fix it.</p>
                    <p class="mb-3 text-2xl font-body">Taking a unique approach to advocating gut microbiome health for
                        minority
                        groups. We help people
                        understand the importance of participant studies that leverage the rich metabolic capabilities
                        of
                        the microbes to develop targeted nutritional products and better therapeutic drugs for African
                        Americans. We provide content focused on innovative research in today’s market.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>