<?php 
    $logo = get_field('logo', 'options');
    $footerLeftColumn = get_field('footer_left_column', 'options');
    $tos = get_field('terms_of_service', 'options');
    $privacy = get_field('privacy_policy', 'options');
    $dbPolicy = get_field('data_breach_policy', 'options');
?>
    <footer class="site-footer bg-gray pt-20 pb-16">
        <div class="container max-w-screen-xl flex flex-col md:flex-row md:space-x-10 space-between text-white">
            <div class="flex-1 mb-16 md:mb-0">
                <a href="/" class="block">
                    <img width="72" height="50" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                </a>
                <?php if ( $footerLeftColumn['contact_text'] &&  $footerLeftColumn['contact_url'] ) : ?>
                    <p class="font-display text-20 md:text-16 mt-8 mb-0 underline font-bold">
                        <a class="hover:text-yellow" href="<?php echo $footerLeftColumn['contact_url']; ?>"><?php echo $footerLeftColumn['contact_text']; ?></a>
                    </p>
                <?php endif; ?>
                <?php if ( $footerLeftColumn['phone_number'] &&  $footerLeftColumn['phone_number_link'] ) : ?>
                    <p class="font-display text-16 mt-4 mb-0">
                        <a class="opacity-50 hover:text-yellow" href="<?php echo $footerLeftColumn['phone_number_link']; ?>"><?php echo $footerLeftColumn['phone_number']; ?></a>
                    </p>
                <?php endif; ?>
                <?php if ( $footerLeftColumn['email_text'] ) : ?>
                    <p class="font-display text-14 mt-2 mb-0">
                        <a class="opacity-50 hover:text-yellow" href="mailto:<?php echo $footerLeftColumn['email_text']; ?>"><?php echo $footerLeftColumn['email_text']; ?></a>
                    </p>
                <?php endif; ?>
                <?php if ( is_array( $footerLeftColumn['social_links'] ) ) : ?>
                    <div class="flex space-x-2 pt-6">
                        <?php foreach ( $footerLeftColumn['social_links'] as $social ) : ?>
                            <?php if ( $social['icon'] && $social['link'] ): ?>
                                <a class="opacity-50 hover:opacity-100" href="<?php echo $social['link']; ?>">
                                    <img width="24" height="24" src="<?php echo $social['icon']['url']; ?>" alt="<?php echo $social['icon']['alt']; ?>">
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="grid md:flex md:flex-row md:space-x-32 mt-8 md:mt-0">
                <div class="about mb-10 md:mb-0">
                    <?php
                        $args = array(
                            'theme_location'	=> 'footer-1',
                            'container'			=> 'nav',
                            'menu_class'		=> 'footer-menu',
                        );

                        wp_nav_menu($args);
                    ?>
                </div>
                <div class="partners mb-10 md:mb-0">
                        <?php
                            $args = array(
                                'theme_location'	=> 'footer-2',
                                'container'			=> 'nav',
                                'menu_class'		=> 'footer-menu',
                            );

                            wp_nav_menu($args);
                        ?>
                </div>
                <div class="explore mb-10 md:mb-0">
                        <?php
                            $args = array(
                                'theme_location'	=> 'footer-3',
                                'container'			=> 'nav',
                                'menu_class'		=> 'footer-menu',
                            );

                            wp_nav_menu($args);
                        ?>
                </div>
            </div>
        </div>
        <div class="container max-w-screen-xl text-left md:text-center opacity-50 text-white pt-14">
            <span>© <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>
            <?php if ( $tos['page'] && $tos['text'] ) : ?> | <a class="text-white" href='<?php echo $tos['page']; ?>' title='<?php echo $tos['text']; ?>'><?php echo $tos['text']; ?></a>
            <?php endif; ?><?php if ( $privacy['page'] && $privacy['text'] ) : ?> | <a class="text-white hover:text-yellow" href='<?php echo $privacy['page']; ?>' title='<?php echo $privacy['text']; ?>'><?php echo $privacy['text']; ?></a>
            <?php endif; ?><?php if ( $dbPolicy['page'] && $dbPolicy['text'] ) : ?> | <a class="text-white hover:text-yellow" href='<?php echo $dbPolicy['page']; ?>' title='<?php echo $dbPolicy['text']; ?>'><?php echo $dbPolicy['text']; ?></a><?php endif; ?></span>
        </div>
    </footer>
    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-175327622-1', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
    <?php wp_footer(); ?>
</body>
</html>
