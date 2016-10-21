<?php
/**
 * Template Name: Beverages
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="" class="beverages-page content-area">
	<script>
		(function($) {
			
		    $(document).ready(function() {
			    if ($(window).width() < 1059) {
		             $('body').addClass("mobile-screen");
		        }
		        else {
		        	$('body').addClass("desktop-screen");	
		        }
			   	 $('.desktop-screen #fullpage').fullpage({
			   	 	verticalCentered: false,
			   	 	sectionSelector: '.fp-section',
			   	 	onLeave: function(index, nextIndex, direction){
			            var leavingSection = $(this);

			            $(".slide-"+nextIndex+" .beverage-image").addClass("slide-down");
			            $(".slide-"+index+" .beverage-image").removeClass("slide-down");
			            //after leaving section 2
			            if(index == 2 && direction =='down'){
			                //alert("Going to section 3!");
			            }

			            else if(index == 2 && direction == 'up'){
			                //alert("Going to section 1!");
			            }
			        }
			   	 });
			});
			    
		})(jQuery);
	</script>
	<style>
		.arrow {
			width: 100px;
			height: 50px;
			background-repeat: no-repeat;

		}
		.arrow-wrap {
			margin-top: 40px;
			position: relative;
			bottom: 0;
		}
		.arrow-red {
			background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/home-icons/red-arrow.svg');
			margin-bottom: -40px;
		}
	</style>
	<div id="fullpage">
		<section class="section fp-section beverages-section section-wrap slide-1">
			<div class="section-inner ">
				<h2 class="small"><?php the_field('hero_header'); ?></h2>
				<?php the_field('hero_paragraph'); ?>
				<p class="text-red medium"><?php the_field('scroll_more_text'); ?></p>
				<div class="arrow-wrap">
					<div class="arrow arrow-red arrow-1"></div>
					<div class="arrow arrow-red arrow-2"></div>
					<div class="arrow arrow-red arrow-3"></div>
				</div>
			</div>
		</section>
		<?php if( have_rows('drinks') ): ?>
		<?php $slide_number = 2; ?>
		<?php while( have_rows('drinks') ): the_row(); ?>
		<section class="section fp-section beverages-section beverage-slide section-wrap slide-<?php echo $slide_number ?>"  style="background-image:url('<?php echo the_sub_field('background_image'); ?>')">
			<div class="section-inner ">
				<div class="beverage-image" style="background-image:url('<?php echo the_sub_field('drink_image'); ?>')">
				</div>
				<div class="beverage-info">
					<h2 class=""><?php the_sub_field('header'); ?></h2>
					<p><?php the_sub_field('paragraph_text'); ?></p>
					<p class="intro-text"><?php the_sub_field('restaurant_intro_text'); ?></p>

					<?php if( have_rows('drink_recipe') ): ?>
					<div class="drink-block-wrap">
					<?php while( have_rows('drink_recipe') ): the_row(); ?>
						<div class="drink-block">
							<h4 class="small"><?php the_sub_field('drink_name'); ?></h4>
							<?php if( have_rows('ingrdients') ): ?>
							<?php $ingredient_number = 1; ?>
							<p>
							<?php while( have_rows('ingrdients') ): the_row(); ?>
							 
							<?php if($ingredient_number > 1 ) { 
								$ingrient_not_first = " | ".get_sub_field('ingredient');
								echo $ingrient_not_first; 

							} else {
								the_sub_field('ingredient'); 
							}?>
							<?php ++$ingredient_number; ?>
							<?php endwhile; ?>
							</p>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
					</div>
					<?php endif; ?>
					<?php if(get_sub_field('html') != "") { ?> 
						<?php the_sub_field("html") ?>
					<?php } ?>
				</div>
			</div>
		</section>
		<?php ++$slide_number; endwhile; ?>
		<?php endif; ?>
		<footer id="colophon" class="fp-section fp-auto-height site-footer wrap" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

		<?php tha_footer_top(); ?>

			<section class="site-info">
				<div class="footer-right">

					<?php echo do_shortcode("[gravityform id='2' title='false' description='false' ajax='true']");  ?>	
					<!--<div class="sign-up-text">
						Sign up for a monthley newsletter from our restaurants
					</div>-->
				</div>
				<div class="footer-left">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-navigation',
							'menu_class' => 'hide-scroll menu-list', //Adding the class for FlexNav
							'items_wrap' => '<ul data-breakpoint=" '. esc_attr( get_theme_mod( 'some_like_it_neat_mobile_min_width', '768' ) ) .' " id="%1$s" class="%2$s">%3$s</ul>', // Adding data-breakpoint for FlexNav
						)
					); ?>
					<p class="copyright">Copyright &#169; <?php echo date("Y") ?> Farmers Restaurant Group | <a href="http://www.vsag.com" target="_blank">Restaurant Consulting</a> | <a href="<?php echo get_site_url(); ?>/reservations">Reservations</a></p>
				</div>
			</section><!-- .site-info -->

		</footer><!-- #colophon -->
	</div>
</div>


<?php tha_content_bottom(); ?>

		</main><!-- #main -->

		<?php tha_content_after(); ?>


	</div><!-- .wrap -->

</div><!-- #page -->

<?php tha_body_bottom(); ?>

</body>
</html>