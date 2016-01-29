<?php
/**
 * Template Name: Home Page
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="" class="home-wrap page-wrap content-area">
	<style>
		.arrow {
			width: 100px;
			height: 50px;
			background-repeat: no-repeat;
			margin: 0 auto;

		}
		.arrow-tan{
			background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/home-icons/tan-arrow.svg');
			position: absolute;
			bottom: 5vh;
			left: 0;
			right: 0;
		}
		.arrow-wrap {
			position: absolute;
			bottom: 10vh;
			left: 0;
			right: 0;
		}
		.arrow-red {
			background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/home-icons/red-arrow.svg');
			margin-bottom: -40px;
		}
	</style>
	<section class="home-section hero" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2016/01/home-hero.jpg');">
		<script>
			(function($) {
			    $(document).ready(function() {
				    
				    // home counter
				    var homeCount = new CountUp("home-count", 0, 42387, 0, 3);
					homeCount.start();

					// scroll check for menu
					var e=$(".home-section.slide-1").offset().top;
					console.log(e);
					s=function(){
						var s=$(window).scrollTop();
						s>e?$(window).width()>768&&( $("header#masthead ").removeClass("not-scrolled"),
							setTimeout(function() {$(".nav").addClass("fixed")}, 100)
							) : 
							$(window).width() > 768 && ( $("header#masthead ").addClass("not-scrolled")/*, $("#page").css("padding-top","0px")*/)
					};
				});


				$(window).scroll( function(){
					// call home scroll function
					s();
				});	
			})(jQuery);
			
		</script>
		<div class="home-section-inner">
			<h3>Owned By</h3>
			<h3 id="home-count" class="numbers-counting"></h3>
			<h3>Family Farmers</h3>
			<div class="arrow arrow-tan"></div>
		</div>
	</section>

	<section class="home-section slide-1">
		<div class="home-section-inner">
			<h2><?php the_field('slide_1_header'); ?></h2>
			<?php the_field('slide_1_paragraph'); ?>
			<div class="arrow-wrap">
				<div class="arrow arrow-red"></div>
				<div class="arrow arrow-red"></div>
				<div class="arrow arrow-red"></div>
			</div>
		</div>
	</section>

	<section class="home-section slide-2" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2016/01/home-field.jpg');">
		<div class="home-section-inner">
			<?php the_field('slide_2_paragraph'); ?>
			<div id="trigger1" class=" s0"></div>
			<h2><?php the_field('slide_2_header'); ?></h2>
			
			<div class="flip-icons">
				
				<div class="flip-icon-wrap icon-1">
					<div class="flip-icon">
						<div class="front" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/home-icons/supply-icon-1.svg');"></div>
						<div class="back" style="background-image: url('<?php the_field('backside_image_1'); ?>')"></div>
					</div>
				</div>
				<div class="flip-icon-wrap icon-2">
					<div class="flip-icon">
						<div class="front" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/home-icons/supply-icon-2.svg');"></div>
						<div class="back" style="background-image: url('<?php the_field('backside_image_2'); ?>')"></div>
					</div>
				</div>
				<div class="flip-icon-wrap icon-3">
					<div class="flip-icon">
						<div class="front" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/home-icons/supply-icon-3.svg');"></div>
						<div class="back" style="background-image: url('<?php the_field('backside_image_3'); ?>')"></div>
					</div>
				</div>
				<div class="flip-icon-wrap icon-4">
					<div class="flip-icon">
						<div class="front" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/home-icons/supply-icon-4.svg');"></div>
						<div class="back" style="background-image: url('<?php the_field('backside_image_4'); ?>')"></div>
					</div>
				</div>
				<div class="flip-icon-wrap icon-5">
					<div class="flip-icon">
						<div class="front" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/home-icons/supply-icon-5.svg');"></div>
						<div class="back" style="background-image: url('<?php the_field('backside_image_5'); ?>')"></div>
					</div>
				</div>
			</div>
			<script>
				// init controller
				var controller = new ScrollMagic.Controller();
				
				new ScrollMagic.Scene({triggerElement: "#trigger1" ,duration: 300})
							//.setVelocity(".flip-icon", {opacity: 0}, {duration: 400})
							.setTween(".flip-icon-wrap", {width: 140, height: 140}) // the tween durtion can be omitted and defaults to 1
							//.setClassToggle(".flip-icon-wrap", "hover") // add class toggle
							.addTo(controller);
				
			</script>
		</div>
	</section>

	<section class="home-section slide-3">
		<div id="trigger2" class=" s0"></div>
		<div class="home-section-inner">
			<div id="icon-trigger-1" class="spacer s1"></div>
			<div id="icon-trigger-2" class="spacer s2"></div>
			<div id="icon-trigger-3" class="spacer s3"></div>
			<div id="icon-trigger-4" class="spacer s4"></div>
			<div id="icon-trigger-5" class="spacer s5"></div>
			<?php the_field('slide_3_paragraph'); ?>
			
			<script>
				new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 800})
							.setPin(".flip-icons")
							.addTo(controller);
				new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 800})
							.setPin(".slide-3 p")
							.addTo(controller);
			</script>
		</div>
		
		<script>
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-1"})
						.setTween(".icon-1 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-2"})
						.setTween(".icon-2 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-3"})
						.setTween(".icon-3 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-4"})
						.setTween(".icon-4 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-5"})
						.setTween(".icon-5 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);						
		</script>
	</section>

	<section class="home-section slide-4">
		<div class="home-section-inner">
			<h2><?php the_field('slide_4_header'); ?></h2>
			<div id="cookie-trigger"></div>
			<div id="cookie-trigger-2"></div>
			<img class="image-cookie" src="<?php the_field('slide_4_image'); ?>"> 

			<script>
				new ScrollMagic.Scene({triggerElement: "#cookie-trigger", duration: "290%"})
							.setPin(".image-cookie")
							.addTo(controller);
				new ScrollMagic.Scene({triggerElement: "#cookie-trigger-2"})
							.setTween(".image-cookie", {y:180})
							.addTo(controller);							
			</script>
		</div>
	</section>

	<section class="home-section slide-5">
		<div class="home-section-inner">
			<h2><?php the_field('slide_5_header'); ?></h2>
			<div id="ingredient-trigger"></div>
			<div class="ingredients-wrap">
				<div class="ingredients-inner">
					<!-- cookie ingredient loop -->
					<?php if( have_rows('cookie_ingredients') ): ?>
					<?php $highlighted_number = 0; ?>
					<?php while( have_rows('cookie_ingredients') ): the_row(); ?>
						<div class="ingredients-row">
						<?php if( have_rows('ingredient_row') ): ?>
						<?php while( have_rows('ingredient_row') ): the_row(); ?>
							
							<?php $is_highlighted = get_sub_field('highlighted_ingredient');
							 
							if("highlighted" == get_sub_field('highlighted_ingredient')) {
								 ?>
								<p id="<?php echo "highlighted".$highlighted_number; ?>" class="<?php the_sub_field('highlighted_ingredient'); ?>"><?php the_sub_field('ingredient'); ?></p>
								
							<?php } else { 
								++$highlighted_number; ?>
								<p id="<?php echo "highlighted".$highlighted_number; ?>" class="<?php the_sub_field('highlighted_ingredient') ?>"><?php the_sub_field('ingredient') ?></p>
							<?php } ?>

							

						<?php endwhile ?>
						<?php endif ?>
						</div>
					<?php endwhile ?>
					<?php endif ?>
					<!-- end cookie ingredient loop -->
				</div>
			</div>
			<script>
				new ScrollMagic.Scene({triggerElement: "#ingredient-trigger", duration: "200%"})
							.setPin(".ingredients-wrap")
							.addTo(controller);					
			</script>
		</div>
	</section>

	<section class="home-section slide-6">
		<div id="ingredient-bold-trigger"></div>
		<div class="home-section-inner">
			<h2><?php the_field('slide_6_header'); ?></h2>
		</div>
		<script>
			new ScrollMagic.Scene({triggerElement: "#ingredient-trigger"})
						.setTween(".ingredients-row p", {opacity: .2, borderColor: "rgba(255,231,204, 0.2)" })
						.addTo(controller);		
			new ScrollMagic.Scene({triggerElement: "#ingredient-trigger"})
						.setTween("p.highlighted", {fontWeight: "bold", opacity: 1})
						.addTo(controller);							
		</script>
	</section>

	<section class="home-section slide-7">
		<div class="home-section-inner">
			<div id="ingredient-position-trigger"></div>
			<h2><?php the_field('slide_7_header'); ?></h2>
			<script>
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".ingredients-row p:not(.highlighted)", { opacity: 0 })
						.addTo(controller);	
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".ingredients-row p", { borderColor: "rgba(255,231,204, 0) "})
						.addTo(controller);	
			

			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween("p#highlighted2", { x: "-135%", y: "20%", scale: 1.4 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween("p#highlighted6", { x: "10%", y: "60%", scale: 1.86 })
						.addTo(controller);			
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween("p#highlighted9", { x: "80%", y: "70%", scale: 1.44 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween("p#highlighted20", { x: "-156%", y: "-210%", scale: 1.66 })
						.addTo(controller);			
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween("p#highlighted21", { x: "-170%", y: "-50%", scale: 1.66 })
						.addTo(controller);									
		</script>
		</div>
	</section>

	<section class="home-section slide-8">
		<div class="home-section-inner">
			<h2 class=""> <?php the_field('slide_8_paragraph'); ?></h2>
			<div class="slide-8-block-wrap">
				<div class="slide-8-block" style="background-image:url('<?php the_field('block_1_background'); ?>')">
					<div class="slide-8-block-inner">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/home-icons/<?php the_field('block_1_icon'); ?>">
						<h4><?php the_field('block_1_header'); ?></h4>
						<p><?php the_field('block_1_paragraph'); ?></p>	
					</div>
				</div>
				<div class="slide-8-block" style="background-image:url('<?php the_field('block_2_background'); ?>')">
					<div class="slide-8-block-inner">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/home-icons/<?php the_field('block_2_icon'); ?>">
						<h4><?php the_field('block_2_header'); ?></h4>
						<p><?php the_field('block_2_paragraph'); ?></p>
					</div>
				</div>
				<div class="slide-8-block" style="background-image:url('<?php the_field('block_3_background'); ?>')">
					<div class="slide-8-block-inner">	
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/home-icons/<?php the_field('block_3_icon'); ?>"> 
						<h4><?php the_field('block_2_header'); ?></h4>
						<p><?php the_field('block_2_paragraph'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

</div><!-- #primary -->

<?php get_footer(); ?>
