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

<div id="fullpage" class="home-wrap page-wrap content-area ">
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
				    var homeCount = new CountUp("home-count", 0, 47553, 0, 3);
					homeCount.start();

					// scroll check for menu
					var e=$(".home-section.slide-1").offset().top;
					console.log(e);
					s=function(){
						var s=$(window).scrollTop();
						s>e?$(window).width() > 1024 &&(
							$("header#masthead ").removeClass("not-scrolled"),$(".secondary-nav").addClass("slide-down")) :
							$(window).width() > 1024 && ( $("header#masthead ").addClass("not-scrolled"),$(".secondary-nav").removeClass("slide-down"));

					};
				});

			    var body = $("body");


			    // add class for mobile or desktop screen sizes
			    if ($(window).width() < 768) {
		             $('body').addClass("mobile-screen");
		        }
		        else if ($(window).width() < 1024) {
		             $('body').addClass("tablet-screen");
		        }
		        else {
		        	$('body').addClass("desktop-screen");
		        }

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
			<a class="arrow-link" href="#home-anchor-1"><div class="arrow arrow-tan"></div></a>
		</div>
	</section>

	<section class="home-section slide-1">
		<a class="anchor-scroll-link" name="home-anchor-1"></a>
		<div class="home-section-inner">
			<h2><?php the_field('slide_1_header'); ?></h2>
			<?php the_field('slide_1_paragraph'); ?>
			<div class="arrow-wrap"><a class="arrow-link" href="#home-anchor-2">
				<div class="arrow arrow-red arrow-1"></div>
				<div class="arrow arrow-red arrow-2"></div>
				<div class="arrow arrow-red arrow-3"></div></a>
			</div>
		</div>
	</section>

	<section class="home-section slide-2" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2016/01/home-field.jpg');">
		<a class="anchor-scroll-link" name="home-anchor-2"></a>
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

				var controller = new ScrollMagic.Controller();

				new ScrollMagic.Scene({triggerElement: "#trigger1" ,duration: "50%"})
							//.setVelocity(".flip-icon", {opacity: 0}, {duration: 400})
							.setTween(".desktop-screen .flip-icon-wrap", {width: 180, height: 180}) // the tween durtion can be omitted and defaults to 1
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
				new ScrollMagic.Scene({triggerElement: "#trigger2", duration: "100%",offset: "-200"})
							.setPin(".tablet-screen .flip-icons")
							.addTo(controller);
				new ScrollMagic.Scene({triggerElement: "#trigger2", duration: "100%"})
							.setPin(".tablet-screen .slide-3 p")
							.addTo(controller);

				new ScrollMagic.Scene({triggerElement: "#trigger2", duration: "100%",offset: "-50"})
							.setPin(".desktop-screen .flip-icons")
							.addTo(controller);
				new ScrollMagic.Scene({triggerElement: "#trigger2", duration: "100%"})
							.setPin(".desktop-screen .slide-3 p")
							.addTo(controller);
			</script>
		</div>

		<script>
			// mobile
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-1"})
						.setTween(".mobile-screen .icon-1 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-1"})
						.setTween(".mobile-screen .icon-2 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-1"})
						.setTween(".mobile-screen .icon-3 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-1"})
						.setTween(".mobile-screen .icon-4 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-1"})
						.setTween(".mobile-screen .icon-5 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);

			//tablet
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-1"})
						.setTween(".tablet-screen .icon-1 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-1"})
						.setTween(".tablet-screen .icon-2 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-1"})
						.setTween(".tablet-screen .icon-3 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-1"})
						.setTween(".tablet-screen .icon-4 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-1"})
						.setTween(".tablet-screen .icon-5 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);

			// desktop
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-1"})
						.setTween(".desktop-screen .icon-1 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-2"})
						.setTween(".desktop-screen .icon-2 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-3"})
						.setTween(".desktop-screen .icon-3 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-4"})
						.setTween(".desktop-screen .icon-4 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#icon-trigger-5"})
						.setTween(".desktop-screen .icon-5 .flip-icon", {rotationY:180}) // the tween durtion can be omitted and defaults to 1
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
							.setTween(".image-cookie", {y:"20%"})
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
					<div class="ingredients-row">
						<p class="highlighted hidden-ingredient hidden-1"><?php the_field('hidden_ingredient_1'); ?></p>
						<p class="highlighted hidden-ingredient hidden-2"><?php the_field('hidden_ingredient_2'); ?></p>
					</div>
				</div>
			</div>
			<script>

				new ScrollMagic.Scene({triggerElement: "#ingredient-trigger", duration: "200%"})
							.setPin(".desktop-screen .ingredients-wrap")
							.addTo(controller);

				new ScrollMagic.Scene({triggerElement: "#ingredient-trigger", duration: "220%"})
							.setPin(".tablet-screen .ingredients-wrap")
							.addTo(controller);

				new ScrollMagic.Scene({triggerElement: "#ingredient-trigger", duration: "220%"})
							.setPin(".mobile-screen .ingredients-wrap")
							.addTo(controller);
			</script>
		</div>
	</section>

	<section class="home-section slide-6">
		<div id="ingredient-bold-trigger"></div>
		<div id="cookie-header-trigger"></div>
		<h2 class="translate-3d"><?php the_field('slide_7_header'); ?></h2>
		<script>
			new ScrollMagic.Scene({triggerElement: "#cookie-header-trigger", duration: "100%", offset: "-50"})
					.setPin(".mobile-screen .slide-6 h2")
					.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#cookie-header-trigger", duration: "100%",offset: "-50"})
					.setPin(".tablet-screen .slide-6 h2")
					.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#cookie-header-trigger", duration: "100%"})
					.setPin(".desktop-screen .slide-6 h2")
					.addTo(controller);
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

			<script>
			// desktop and mobile
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".ingredients-row p:not(.highlighted)", { opacity: 0 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".ingredients-row p", { borderColor: "rgba(255,231,204, 0) "})
						.addTo(controller);

			// desktop
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".desktop-screen p#highlighted2", { x: "-133%", y: "-50%", scale: 1.4 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".desktop-screen p#highlighted6", { x: "16%", y: "-50%", scale: 1.86 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".desktop-screen p#highlighted7", { x: "-93%", y: "120%", scale: 1.86 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".desktop-screen p#highlighted9", { x: "80%", y: "110%", scale: 1.44 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".desktop-screen p#highlighted20", { x: "-149%", y: "-170%", scale: 1.66 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".desktop-screen p#highlighted21", { x: "-170%", y: "-10%", scale: 1.66 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".desktop-screen p#highlighted22", { x: "120%", y: "20%", scale: 1.66 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".desktop-screen p.hidden-1", { x: "300%", y: "-110%", scale: 1.3 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".desktop-screen p.hidden-2", { x: "201%", y: "10%", scale: 1.3 })
						.addTo(controller);

			// tablet
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".tablet-screen p#highlighted2", { x: "-100%", y: "-40%", scale: 1.4 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".tablet-screen p#highlighted6", { x: "65%", y: "-40%", scale: 2.08 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".tablet-screen p#highlighted7", { x: "-24%", y: "150%", scale: 2.08 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".tablet-screen p#highlighted9", { x: "95%", y: "100%", scale: 1.44 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".tablet-screen p#highlighted20", { x: "-110%", y: "-230%", scale: 1.66 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".tablet-screen p#highlighted21", { x: "-153%", y: "-80%", scale: 1.66 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".tablet-screen p#highlighted22", { x: "129%", y: "-70%", scale: 1.66 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".tablet-screen p.hidden-1", { x: "295%", y: "-190%", scale: 1.2 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".tablet-screen p.hidden-2", { x: "203%", y: "-80%", scale: 1.2 })
						.addTo(controller);
			// mobile
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".mobile-screen p#highlighted2", { x: "-102%", y: "60%", scale: 1.4 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".mobile-screen p#highlighted6", { x: "19%", y: "60%", scale: 2.1 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".mobile-screen p#highlighted7", { x: "-88%", y: "270%", scale: 2.1 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".mobile-screen p#highlighted9", { x: "90%", y: "135%", scale: 1.44 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".mobile-screen p#highlighted20", { x: "-125%", y: "-320%", scale: 1.66 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".mobile-screen p#highlighted21", { x: "-169%", y: "-150%", scale: 1.66 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".mobile-screen p#highlighted22", { x: "123%", y: "-180%", scale: 1.66 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".mobile-screen p.hidden-1", { x: "258%", y: "-188%", scale: 1.3 })
						.addTo(controller);
			new ScrollMagic.Scene({triggerElement: "#ingredient-position-trigger"})
						.setTween(".mobile-screen p.hidden-2", { x: "179%", y: "-315%", scale: 1.3 })
						.addTo(controller);
		</script>
		</div>
	</section>

	<section class="home-section slide-8">
		<div class="home-section-inner">
			<h2 class=""> <?php the_field('slide_8_paragraph'); ?></h2>
			<div class="slide-8-block-wrap">
				<?php if( have_rows('slide_8_block') ): ?>
					<?php while( have_rows('slide_8_block') ): the_row(); ?>
					<div class="slide-8-block" style="background-image:url('<?php the_sub_field('block_background'); ?>')">
						<a href="<?php the_sub_field('block_link'); ?>" target="_blank">
						<div class="slide-8-block-inner">
							<div class="slide-8-header">
								<img class="" src="<?php the_sub_field('block_icon'); ?>">
								<h4 class=""><?php the_sub_field('block_header'); ?></h4>
							</div>
							<p class="move-text"><?php the_sub_field('block_paragraph'); ?></p>
						</div></a>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

</div><!-- #primary -->

<?php get_footer(); ?>