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

    <!-- datepicker -->
    <script type='text/javascript' src='http://www.wearefoundingfarmers.com/wp-content/themes/Founding-Farmers/assets/js/moment.js'></script>
	<link rel="stylesheet" id="" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" type="text/css" media="all">
	<script src="http://www.wearefoundingfarmers.com/wp-content/themes/Founding-Farmers/assets/js/bootstrap-datetimepicker.min.js"></script>

</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'some-like-it-neat' ); ?></a>

	<?php tha_header_before(); ?>
	<header id="masthead" class="site-header wrap not-scrolled" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<?php tha_header_top(); ?>
		
		<nav id="primary-nav" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
			<div class="reservation-widget">
				<a href="/reservations">Reserve A Table</a>
			</div>
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
			<div class="reservation-widget">
				<a href="">Reserve A Table</a>
				<div class="widget-wrap">
					<div id="OT_searchWrapperAll">
						<form name="ism" id="ism" class="clearfix" method="post" target="_blank" action="http://www.opentable.com/restaurant-search.aspx">
							<div class="form-group dropdown">
								
					            <div class="drop"  style="">
					            	<h3 class="left">LOCATION</h3>
					            </div>
					            <ul class="dropdown-list list-unstyled" style="display: none;"></ul>
						     
						          
								<select name="RestaurantID" class="source form-control selectpicker" onchange="document.ism.RestaurantReferralID.value = document.ism.RestaurantID.value">
									<option value="0" class="hidden">LOCATION</option>
									<option value="24712">DC</option>
									<option value="70411">MOCO</option>
									<option value="150769">TYSONS</option>
									<option value="93802" class="ffb">FARMERS FISHERS BAKERS</option>
								</select>
							</div>
							<div class="form-group">
								<span class="date-input">
									<input type="text" name="startDate" class="form-control datepicker" placeholder="DATE" autocomplete="off"/>
									<span class="btn-caret"><i class="fa fa-angle-down"></i></span>
								</span>
							</div>
							<div class="form-group dropdown">
								<div class="drop"  style="">
					            	<h3 class="left">TIME</h3>
					            </div>
					            <ul class="dropdown-list list-unstyled" style="display: none;"></ul>
						     
								<select name="ResTime" class="source form-control res-time selectpicker">
									<option value="0" class="hidden">TIME</option>
									<option value="7:00 AM">7:00 AM</option>
									<option value="7:30 AM">7:30 AM</option>
									<option value="8:00 AM">8:00 AM</option>
									<option value="8:30 AM">8:30 AM</option>
									<option value="9:00 AM">9:00 AM</option>
									<option value="9:30 AM">9:30 AM</option>
									<option value="10:00 AM">10:00 AM</option>
									<option value="10:30 AM">10:30 AM</option>
									<option value="11:00 AM">11:00 AM</option>
									<option value="11:30 AM">11:30 AM</option>
									<option value="12:00 PM">12:00 PM</option>
									<option value="12:30 PM">12:30 PM</option>
									<option value="1:00 PM">1:00 PM</option>
									<option value="1:30 PM">1:30 PM</option>
									<option value="2:00 PM">2:00 PM</option>
									<option value="2:30 PM">2:30 PM</option>
									<option value="3:00 PM">3:00 PM</option>
									<option value="3:30 PM">3:30 PM</option>
									<option value="4:00 PM">4:00 PM</option>
									<option value="4:30 PM">4:30 PM</option>
									<option value="5:00 PM">5:00 PM</option>
									<option value="5:30 PM">5:30 PM</option>
									<option value="6:00 PM">6:00 PM</option>
									<option value="6:30 PM">6:30 PM</option>
									<option value="7:00 PM">7:00 PM</option>
									<option value="7:30 PM">7:30 PM</option>
									<option value="8:00 PM">8:00 PM</option>
									<option value="8:30 PM">8:30 PM</option>
									<option value="9:00 PM">9:00 PM</option>
									<option value="9:30 PM">9:30 PM</option>
									<option value="10:00 PM">10:00 PM</option>
									<option value="10:30 PM">10:30 PM</option>
									<option value="11:00 PM">11:00 PM</option>
									<option value="11:30 PM">11:30 PM</option>
									<option value="12:00 AM">12:00 AM</option>
								</select>
							</div>
							<div class="form-group dropdown">
								<div class="drop"  style="">
					            	<h3 class="left">SIZE</h3>
					            </div>
					            <ul class="dropdown-list list-unstyled" style="display: none;"></ul>

								<select name="PartySize" class="source form-control party-size selectpicker">
									<option value="0" class="hidden">SIZE</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
								</select>
							</div>
							<div class="form-actions">
								<input type="hidden" id="RestaurantReferralID" name="RestaurantReferralID" value="0">
								<input type="hidden" name="txtDateFormat" value="MM/dd/yyyy">
								<input type="hidden" name="widget" value="reservpage">
								<input type="submit" name="submit" value="SEARCH" class="button btn btn-submit" onmousedown="document.ism.RestaurantReferralID.value = document.ism.RestaurantID.value;/*fbq('track', 'Lead');*/" />
							</div>

						</form>	
					</div> 
					<script>
				
					(function($) {
					
					   	$('input.datepicker').datetimepicker({
							
							format: 'MM/DD/YYYY',
							useCurrent: false,
							defaultDate: false
						});
						$('span.date-input').click();

						    
					})(jQuery);
				</script>
				</div>
			</div>
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
