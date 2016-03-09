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
		
		.twitter-icon {
			background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/icons/twitter-icon.svg');
		}
		.form-group:after, .ginput_container_select:after {
			content: "";
			position: absolute;
			right: 10px;
			background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/icons/form-arrow-down.svg');
			top: 0;
			width: 20px;
		    height: 45px;
		    background-repeat: no-repeat;
		    background-position: center;
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

	<script>
	 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	 ga('create', 'UA-41448103-1', 'auto');
	 ga('send', 'pageview');

	</script>

	<script>
					
					(function($) {

						$(function() {
						  $('a[href*="#"]:not([href="#"])').click(function() {
						    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
						      var target = $(this.hash);
						      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
						      if (target.length) {
						        $('html, body').animate({
						          scrollTop: target.offset().top
						        }, 700);
						        return false;
						      }
						    }
						  });
						});

						$(document).ready(function() {
							selected_restaurant = 0;
							var	selected_date = "weekday";
							var	selected_time = "t1";
							var	selected_party_size = "s1";

							$('.dropdown ul li').click(function() {
								// variables for what is selected
								

								var text = $(this).text();
								var index = $(this).index();

								console.log(index);
							    $(this).parent().parent().children().children("h3").html(text);
							    console.log("text "+ text);
							    switch(text) {
								    case "Founding Farmers DC":
								        $(this).parent().parent().children(".source").val(24712);
								        // change to dc photo
								        selected_restaurant = 0;
								        switchImages("url_1", reservation_images[0]["image"]);
								        //$(".reservation_image_wrap img").attr("src", reservation_images[0]["image"] );
								        break;
								    case "MoCo’s Founding Farmers":
								    	console.log("moco");
								        $(this).parent().parent().children(".source").val(70411);
								        // change to moco photo
								        selected_restaurant = 1;
								        switchImages("url_1", reservation_images[1]["image"] );
								        //$(".reservation_image_wrap img").attr("src", reservation_images[1]["image"] );
								        break;
								    case "Founding Farmers Tysons":
								        $(this).parent().parent().children(".source").val(150769);
								        // change to tysons photo
								        selected_restaurant = 2;
								        switchImages("url_1", reservation_images[2]["image"] );
								        //$(".reservation_image_wrap img").attr("src", reservation_images[2]["image"] );
								        break;
								    case "Farmers Fishers Bakers":
								        $(this).parent().parent().children(".source").val(93802);
								        // change to ffb photo
								        selected_restaurant = 3;
								        switchImages("url_1", reservation_images[3]["image"] );
								        //$(".reservation_image_wrap img").attr("src", reservation_images[3]["image"] );
								        break;
								    default:
								        $(this).parent().parent().children(".source").val(text);
								}

								if($(this).parent().hasClass("time-list")) {
									console.log("time list");
									if(index > 18) {
										console.log("time after 3pm")
								    	//console.log("time between 11am and 3pm")
								    	selected_time = "t3";
								    	switchImages("url_1", reservation_images[selected_restaurant]["images"][selected_time] );
								    	//$(".reservation_image_wrap img").attr("src", reservation_images[selected_restaurant]["images"][selected_time] );
								    } else if(index > 8) {
								    	selected_time = "t2";
								    	console.log("time between 11am and 3pm");
								    	switchImages("url_1", reservation_images[selected_restaurant]["images"][selected_time] );
								    	//$(".reservation_image_wrap img").attr("src", reservation_images[selected_restaurant]["images"][selected_time] );
								    } else {
								    	selected_time = "t1";
								    	console.log("time between 7am and 11am");
								    	switchImages("url_1", reservation_images[selected_restaurant]["images"][selected_time] );
								    	//$(".reservation_image_wrap img").attr("src", reservation_images[selected_restaurant]["images"][selected_time] );
								    }
								}

								if($(this).parent().hasClass("party-size-list")) {
									if(index > 4) {
										selected_party_size = "s2";
										console.log("5 or more");
										switchImages("url_1", reservation_images[selected_restaurant]["images"][selected_party_size] );
										//$(".reservation_image_wrap img").attr("src", reservation_images[selected_restaurant]["images"][selected_party_size] );
								    } else {
								    	selected_party_size = "s1";
								    	console.log("fewer than 4");
								    	switchImages("url_1", reservation_images[selected_restaurant]["images"][selected_party_size] );
								    	//$(".reservation_image_wrap img").attr("src", reservation_images[selected_restaurant]["images"][selected_party_size] );
								    }
								}

								$(".date-input").click(function() {
									$(".datepicker td").click(function() {
										if($(this).hasClass("weekend")) {
											//selected_date = "weekend";
											console.log("weekend");
											switchImages("url_1", reservation_images[selected_restaurant]["images"]["weekend"]);
											//$(".reservation_image_wrap img").attr("src", reservation_images[selected_restaurant]["images"]["weekend"] );
										} else {
											//selected_date = "weekday";
											console.log("day");
											switchImages("url_1", reservation_images[selected_restaurant]["images"]["weekday"]);
											//$(".reservation_image_wrap img").attr("src", reservation_images[selected_restaurant]["images"]["weekday"] );
										}
									});
								});

							});

							function switchImages(url_1, url_2) {
								var $img = $(".reservation_image_wrap img");
								var tl = new TimelineLite();
								tl.to($img, .2, {
									y: -50,
									opacity: 0,
									onComplete: function() {
										$img.attr("src", url_2);		
									}
								})
								.to($img, .4, {
									delay: .4,
									y: 0,
									opacity: 1
								});
								//$img.attr("src", url_2);
							}
						});
					
					   	$('input.datepicker').datetimepicker({
							
							format: 'MM/DD/YYYY',
							useCurrent: false,
							defaultDate: false,
							debug: true
						});
						//$('span.date-input').click();



						
						    
					})(jQuery);
	</script>
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
				<a href="reservations">Reserve A Table</a>
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
			<?php if(!is_page( 'Reservations' ) && !is_page( 'Careers' )  ) { ?>
				<div class="reservation-widget">
					<a class="reservation" ="r" href="">Reserve A Table</a>
					<div class="widget-wrap">
						<div class="OT_searchWrapperAll">
							<form name="ism" id="ism" class="clearfix" method="post" target="_blank" action="http://www.opentable.com/restaurant-search.aspx">
								<div class="form-group dropdown">
									
						            <div class="drop"  style="">
						            	<h3 class="">LOCATION</h3>
						            </div>
						            <ul class="dropdown-list list-unstyled" style="display: none;"></ul>
							     
							          
									<select name="RestaurantID" class="source form-control selectpicker" onchange="document.ism.RestaurantReferralID.value = document.ism.RestaurantID.value">
										<option value="0" class="hidden">LOCATION</option>
										<option value="24712">Founding Farmers DC</option>
										<option value="70411">MoCo’s Founding Farmers</option>
										<option value="150769">Founding Farmers Tysons</option>
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
						            	<h3 class="">TIME</h3>
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
						            	<h3 class="">SIZE</h3>
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
									<input type="submit" name="submit" value="SEARCH" class="button btn btn-submit" onmousedown="document.ism.RestaurantReferralID.value = document.ism.RestaurantID.value;fbq('track', 'Lead');" />
								</div>

							</form>	
							<h3 class="contact-text">Can’t get the reservation time you’re looking for online? Please call us, we might be able to help. <span class="phone-number">202-555-5555</span></h3>
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
				</div>
			<?php } ?>
			<?php if(is_page( 'Careers' )  ) { ?>
				<div class="reservation-widget careers-widget">
					<a class="" onmousedown="ga('send', 'event', 'apply', 'click', '1');" target="_blank" href="<?php the_field('apply_link', 8); ?>">Apply</a>
				</div>
			<?php } ?>
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
