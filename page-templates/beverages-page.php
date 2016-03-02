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
			   	 	sectionSelector: '.beverages-section',
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
		<section class="section beverages-section section-wrap slide-1">
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
		<section class="section beverages-section beverage-slide section-wrap slide-<?php echo $slide_number ?>"  style="background-image:url('<?php echo the_sub_field('background_image'); ?>')">
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
				</div>
			</div>
		</section>
		<?php ++$slide_number; endwhile; ?>
		<?php endif; ?>
	</div>
</div>


<?php get_footer(); ?>
