<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package some_like_it_neat
 */
?>
<!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>

    <?php tha_head_top(); ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<style type="text/css">
		<?php if ( 'no' === get_theme_mod( 'some-like-it-neat_post_format_support' ) ): ?>
			h1.entry-title:before {
				display: none;
			}
		<?php endif; ?>
		.twitter-icon {
			background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/icons/twitter-icon.svg');
		}
	</style>
	<!-- Typekit -->
	<script src="https://use.typekit.net/zwk6xpd.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<link rel="stylesheet" id="dashicons-css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.6/jquery.fullPage.css" type="text/css" media="all">
	<link rel="stylesheet" id="" href="<?php echo get_template_directory_uri(); ?>/assets/css/unslider.css " type="text/css" media="all">
	<link rel="stylesheet" id="" href="<?php echo get_template_directory_uri(); ?>/assets/css/unslider-dots.css " type="text/css" media="all">

	<!-- GSAP -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/ScrollToPlugin.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/easing/EasePack.min.js"></script>

	<!-- scrollmagic -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>

    <?php tha_head_bottom(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'some-like-it-neat' ); ?></a>

	<?php tha_header_before(); ?>
	<header id="masthead" class="site-header wrap not-scrolled" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">

	<?php tha_header_top(); ?>
		
		<nav id="primary-nav" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
			<div class="logo">
				<a href="<?php echo get_site_url(); ?>">
					<img class="dark" src="<?php echo get_site_url(); ?>/wp-content/uploads/logos/frg-logo-dark.svg">
				</a>
			</div>
	        <?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary-navigation',
						'menu_class' => 'hide-scroll menu-list', //Adding the class for FlexNav
						'items_wrap' => '<ul data-breakpoint=" '. esc_attr( get_theme_mod( 'some_like_it_neat_mobile_min_width', '768' ) ) .' " id="%1$s" class="%2$s">%3$s</ul>', // Adding data-breakpoint for FlexNav
					)
				); ?>
		</nav>
		<nav id="secondary-nav" class="secondary-nav">

			<div class="logo">
				<a href="<?php echo get_site_url(); ?>">
					<img class="light" src="<?php echo get_site_url(); ?>/wp-content/uploads/logos/frg-logo-light.svg">
				</a>
			</div>
			<label for="showblock" class="">
            <ul class='hamburger'>
	                <li class="one"></li>
	                <li class="two"></li>
	                <li class="three"></li>
	            </ul>
	        </label>
	        <input type="checkbox" id="showblock" />
			<?php 
				wp_nav_menu(
					array(
						//'reverse' => true,
						'theme_location' => 'primary-navigation',
						'menu_class' => 'show-scroll menu-list', //Adding the class for FlexNav
						'items_wrap' => '<ul data-breakpoint=" '. esc_attr( get_theme_mod( 'some_like_it_neat_mobile_min_width', '768' ) ) .' " id="%1$s" class="%2$s">%3$s</ul>', // Adding data-breakpoint for FlexNav
					)
				);
			?>

		</nav><!-- #site-navigation -->

		<?php tha_header_bottom(); ?>

	</header><!-- #masthead -->
	<?php tha_header_after(); ?>

	<?php tha_content_before(); ?>

	<main id="main" class="site-main wrap" role="main">
		<?php tha_content_top(); ?>


