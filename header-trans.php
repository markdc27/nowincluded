<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P4SD4NZ');</script>
<!-- End Google Tag Manager -->
	<?php im_header_meta_tags(); ?>
	<?php wp_head(); ?>
</head>
<body<?php body_class('min-h-screen antialiased bg-white relative'); ?>>

<!-- Google Tag Manager (noscript) -->
<!--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4SD4NZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
<!-- End Google Tag Manager (noscript) -->
	  
	<header id="header-trans">
		<div class="container max-w-screen-xl flex justify-between relative items-center py-8 md:py-0">
			<div class="inline-block">
				<a href="/" class="site-logo block">
					<img src="/wp-content/themes/nowincluded/assets/images/site-logo-white.svg">
				</a>
			</div>
			<div class="hidden md:block">
				<?php
					$args = array(
						'theme_location'	=> 'primary',
						'container'			=> 'nav',
						'menu_class'		=> 'main-menu',
					);

					wp_nav_menu($args);
				?>
			</div>
			<div class="flex justify-center items-center md:hidden">
				<button type="button" name="mobile-menu-open" id="MobileMenuOpen" class="bg-transparent">
					<svg width="25" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M0 0h25v3H0zM0 15h25v3H0zM0 7h25v3H0z"/></svg>
				</button>
			</div>
		</div>
	</header>
	<div class="mobile-menu-wrap relative mobile-menu-trans hidden">
		<?php
			$args = array(
				'theme_location'	=> 'primary',
				'container'			=> 'nav',
				'menu_class'		=> 'mobile-menu hidden',
			);

			wp_nav_menu($args);
		?>
	</div>