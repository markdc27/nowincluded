<?php 
/**
 * Component - Landing Page Header Image/Content
 *
**/

$image1 = get_field('image1');
$image2 = get_field('image2');
$image3 = get_field('image3');

?>
<section id="<?php if ( $block['anchor'] ) { echo $block['anchor']; } else { echo $block['id']; } ?>"
    class="component-landing<?php if ( $block['className'] ) { echo ' ' . $block['className']; } ?>">
    <div class="w-full" style="background-color: #000;">
        <div class="overflow-hidden">
            <img style="margin-top: -50px; "
                src="http://nowincludedstg.wpengine.com/wp-content/uploads/2022/04/tpUp.png"
                alt="<?php echo $join_image['alt']; ?>">
        </div>
        <div class="w-full mt-10">
            <p class="font-display font-bold text-blue text-center text-2xl pt-10 xl:pt-0 xl:text-6xl">See What's
                Happening In Our Community</p>
        </div>
        <div class="flex flex-row xl:px-80 mb-10">
            <img class="inline-block w-1/3" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>">
            <img class="inline-block w-1/3" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>">
            <img class="inline-block w-1/3" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>">
        </div>
        <div class="lg:container">
            <div class="w-full mt-10">
                <p class="font-display font-bold text-blue text-center text-2xl pt-10 xl:pt-0 xl:text-6xl">How To Get
                    Started</p>
            </div>
            <div class="grid md:grid-cols-4 text-white">
                <!-- Block #1 -->
                <div class="md:block pb-20 lg:pb-0 xl:pb-20">                    
                    <div class="md:block py-10 px-10 xl:px-20">
                        <img class="object-cover w-full" src="http://nowincluded.com/wp-content/uploads/2022/04/phones.png"
                            alt="">
                    </div>
                    <h1 class="font-display font-semibold pb-5 text-gray font-blue text-blue text-3xl"
                        style="line-height: 35px; text-align: center;">Step #1</h1>
                    <p class="font-body text-gray px-10 xl:px-10 text-white"
                        style=" font-size: 25px; line-height: 35px; text-align: center;">
                        Download and install our app from Google Play or the Apple App Store.</p>
                </div>

                <!-- Block #1 -->
                <div class="md:block pb-20 lg:pb-0 xl:pb-20">                    
                    <div class="md:block py-10 px-10 xl:px-20">
                        <img class="object-cover w-full" src="http://nowincluded.com/wp-content/uploads/2022/04/signup.png"
                            alt="">
                    </div>
                    <h1 class="font-display font-semibold pb-5 text-gray font-blue text-blue text-3xl"
                        style="line-height: 35px; text-align: center;">Step #2</h1>
                    <p class="font-body text-gray px-10 xl:px-10 text-white"
                        style=" font-size: 25px; line-height: 35px; text-align: center;">
                        Open the app and enter your credentials to create an account. You can also use Google, Facebook, or LinkedIn to create an account.</p>
                </div>

                <!-- Block #1 -->
                <div class="md:block pb-20 lg:pb-0 xl:pb-20">                    
                    <div class="md:block py-10 px-10 xl:px-20">
                        <img class="object-cover w-full" src="http://nowincluded.com/wp-content/uploads/2022/04/commun.png"
                            alt="">
                    </div>
                    <h1 class="font-display font-semibold pb-5 text-gray font-blue text-blue text-3xl"
                        style="line-height: 35px; text-align: center;">Step #3</h1>
                    <p class="font-body text-gray px-10 xl:px-10 text-white"
                        style=" font-size: 25px; line-height: 35px; text-align: center;">
                        Explore and connect with communities underneath the 'Communities' tab. (Menu > Communities > Gut-Health)</p>
                </div>

                <!-- Block #1 -->
                <div class="md:block pb-20 lg:pb-0 xl:pb-20">                    
                    <div class="md:block py-10 px-10 xl:px-20">
                        <img class="object-cover w-full" src="http://nowincluded.com/wp-content/uploads/2022/04/endgame.png"
                            alt="">
                    </div>
                    <h1 class="font-display font-semibold pb-5 text-gray font-blue text-blue text-3xl"
                        style="line-height: 35px; text-align: center;">Step #4</h1>
                    <p class="font-body text-gray px-10 xl:px-10 text-white"
                        style=" font-size: 25px; line-height: 35px; text-align: center;">
                        You're all set! Now you can start liking, commenting, sharing, or creating your own posts.</p>
                </div>
            </div>
        </div>
        <div>
            <img src="http://nowincludedstg.wpengine.com/wp-content/uploads/2022/04/tpDown.png"
                alt="<?php echo $join_image['alt']; ?>">
        </div>
    </div>
</section>