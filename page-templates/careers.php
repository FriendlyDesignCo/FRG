<?php
/**
 * Template Name: Careers Page
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>
	<script>
		(function($) {
		    $(document).ready(function() {
			   //$('#fullpage').fullpage({
			   // 	normalScrollElements: '.slide-1'
			   //});
			    
			});
		})(jQuery);
		
	</script>

<div id="fullpage" class="careers-wrap page-wrap content-area">
	<?php if( have_rows('career_path') ): ?>
	<?php $slide_anchor = 0; ?>
	<?php while( have_rows('career_path') ): the_row(); ?>
	<?php ++$slide_anchor ?>
		<a class="dot-anchor" id="slide<?php echo $slide_anchor;?>"></a>
	<?php endwhile; ?>
	<?php endif; ?>
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
		.step-1 .corn {
			background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/animation/animation-step-1.svg');
		}
		.step-2 .corn {
			background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/animation/animation-step-2.svg');
		}
		.step-3 .corn {
			background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/animation/animation-step-3.svg');
		}
		.step-4 .corn {
			background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/animation/animation-step-3.svg');
		}
		.step-5 .corn {
			background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/animation/animation-step-4.svg');
		}
		.step-6 .corn {
			background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/animation/animation-step-5.svg');
		}
	</style>
	<section class="section careers-section slide-1 section-wrap">
		<div class="section-inner">
			<h2 class="small"><?php the_field('hero_header_line_1'); ?></h2>
			<h2 class="small"><?php the_field('hero_header_line_2'); ?></h2>
			<p class="text-red"><?php the_field('hero_paragraph'); ?></p>
			<a class="button " href="<?php the_field('apply_link'); ?>">Apply</a>
			<p class="text-red medium"><?php the_field('scroll_more_text'); ?></p>
			<div class="arrow-wrap">
				<div class="arrow arrow-red"></div>
				<div class="arrow arrow-red"></div>
				<div class="arrow arrow-red"></div>
			</div>
		</div>
	</section>
	<div id="career-trigger1" class="s0"></div>
	<div id="career-trigger2" class=" s0"></div>
	<div id="career-trigger3" class=" s0"></div>
	<div id="career-trigger4" class=" s0"></div>
	<div id="career-trigger5" class=" s0"></div>
	<div id="career-trigger6" class=" s0"></div>

	<div id="dot-trigger1" class="s0"></div>
	<div id="dot-trigger2" class=" s0"></div>
	<div id="dot-trigger3" class=" s0"></div>
	<div id="dot-trigger4" class=" s0"></div>
	<div id="dot-trigger5" class=" s0"></div>
	<div id="dot-trigger6" class=" s0"></div>
	<section class="section careers-section career-slide-wrap section-wrap ">
		
		<div class="slide-wrap">
			<div class="nav-dots">
				<div class="nav-dots-inner">
					<p>FRG CAREER PATH</p>
					<ul class="">	
					<?php if( have_rows('career_path') ): ?>
					<?php $dot_number = 0; ?>
					<?php while( have_rows('career_path') ): the_row(); ?>
						<?php ++$dot_number ?>
						<li class="dot-<?php echo $dot_number;?>"><a href="#slide<?php echo $dot_number;?>"></a></li>
					<?php endwhile; ?>
					<?php endif; ?>
					</ul>
				</div>
			</div>
			<!--<div class="sprinkler-animation">
				<div class="step-1" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/animation/animation-step-1.svg')"></div>
				<div class="step-2" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/animation/animation-step-2.svg')"></div>
				<div class="water" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/animation/water.svg')"></div>
				<div class="sprinkler" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/animation/sprinkler.svg')"></div>
			</div>-->
			
			
			<script>
				// init controller
				var controller = new ScrollMagic.Controller();
				new ScrollMagic.Scene({triggerElement: "#career-trigger1", duration: "600%"})
								.setPin(".slide-wrap")
								.addIndicators()
								.addTo(controller);
				
				
			</script>
			<?php if( have_rows('career_path') ): ?>
			<?php $slide_number = 0; ?>
			<?php while( have_rows('career_path') ): the_row(); ?>
			<?php ++$slide_number ?>
			
			<div class="section careers-section career-slide career-slide-<?php echo $slide_number;?>">

				
				<div class="section-inner ">
					<div class="sprinkler-animation step-<?php echo $slide_number ?>">
						<div class="corn"></div>
						<div class="water" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/animation/water.svg')"></div>
						<div class="sprinkler" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/animation/sprinkler.svg')"></div>
					</div>
					<div class="case-study">

						<!-- career loop -->
						<h2 class="career-title"><?php the_sub_field('career_title'); ?></h2>
						<p class="text-red"><?php the_sub_field('career_description'); ?></p>
						
						

						<!-- positions loop -->
						<?php if( have_rows('positions') ): ?>
						<div class="position-wrap">
							<h3 class="positions-header">Positions</h3>
							<ul class="positions no-list">
							<?php while( have_rows('positions') ): the_row(); ?>
								<li><?php the_sub_field('position'); ?></li>
							<?php endwhile; ?>
							</ul>
						</div>
						<?php endif; ?>
						<div class="compensation-wrap">
							<h3 class="compensation-header">Compensation</h3>
							<p><?php the_sub_field('career_compensation'); ?></p>	
						</div>
						<!-- end positions loop -->

						
						<div class="case-study-card-wrap">
							<?php if( have_rows('career_case_study') ): ?>
							<?php while( have_rows('career_case_study') ): the_row(); ?>
							<div class="case-study-card">
								<div class="case-study-card-image" style="background-image:url('<?php the_sub_field('case_study_image'); ?>')"></div>
								<div class="case-study-card-blurb">
									<p><?php the_sub_field('case_study_outer_blurb'); ?></p>
								</div>
								<div class="case-study-card-expanded">
									<div class="case-study-card-image" style="background-image:url('<?php the_sub_field('case_study_image'); ?>')"></div>
									<div class="close-button">Close</div>
									<?php if( have_rows('case_study_path') ): ?>
									<ul class="job-list-dots">
									<?php while( have_rows('case_study_path') ): the_row(); ?>
										<li><?php the_sub_field('case_study_job'); ?></li>
									<?php endwhile; ?>
									</ul>
									<?php endif; ?>
									<p class="inner-blurb"><?php the_sub_field('case_study_inner_blurb'); ?></p> 
									<p class="case-study-paragraph"><?php the_sub_field('case_study_paragraph'); ?></p>
								</div>
								<div class='modal-bg'></div>
							</div>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<!-- end career loop -->
			</div>
			<script>
				new ScrollMagic.Scene({triggerElement: "#career-trigger<?php echo $slide_number+1;?>" })
							.setTween(".career-slide-<?php echo $slide_number;?>", {opacity: 1})
							//.addIndicators()
							.addTo(controller);
				new ScrollMagic.Scene({triggerElement: "#career-trigger<?php echo $slide_number+1;?>",duration:"20px" })
							.setTween(".career-slide-<?php echo $slide_number;?>", { zIndex:0})
							.addTo(controller);
				new ScrollMagic.Scene({triggerElement: "#career-trigger<?php echo $slide_number+1;?>",duration:"20px" })
							.setTween(".career-slide-<?php echo $slide_number+1;?>", { opacity:1, delay: 0.3,zIndex:8})
							.addTo(controller);
				
				// sprinkler animations
				new ScrollMagic.Scene({triggerElement: "#career-trigger<?php echo $slide_number;?>" })
							.setTween(".sprinkler-animation.step-<?php echo $slide_number;?> .water", { scale: 1.4, opacity: 0})
							//.addIndicators()
							.addTo(controller);	
				new ScrollMagic.Scene({triggerElement: "#career-trigger<?php echo $slide_number;?>" })
							.setTween(".sprinkler-animation.step-<?php echo $slide_number;?> .corn", { delay: 0.5, opacity: 1})
							//.addIndicators()
							.addTo(controller);	

				/*new ScrollMagic.Scene({triggerElement: "#career-trigger1" })
							.setTween(".sprinkler-animation .step-1", { scale: 1.1, opacity: 1})
							.addTo(controller);
				new ScrollMagic.Scene({triggerElement: "#career-trigger2" })
							.setTween(".sprinkler-animation .step-1", { scale: 1, opacity: 0})
							.addTo(controller);
				new ScrollMagic.Scene({triggerElement: "#career-trigger2" })
							.setTween(".sprinkler-animation .step-2", { scale: 1.1, opacity: 1})
							.addTo(controller);
				new ScrollMagic.Scene({triggerElement: "#career-trigger3" })
							.setTween(".sprinkler-animation .step-2", { scale: 1, opacity: 0})
							.addTo(controller);*/
						

				new ScrollMagic.Scene({triggerElement: "#career-trigger<?php echo $slide_number;?>", duration: "100%"})
							.setClassToggle(".dot-<?php echo $slide_number;?>", "active") // add class toggle
							.addTo(controller);
			</script>
		
		<?php endwhile; ?>
		<?php endif; ?>
		<script>
			controller.scrollTo(function (newpos) {
				TweenMax.to(window, 0.5, {scrollTo: {y: newpos}});
			});

			(function($) {$(document).on("click", "a[href^='#']", function (e) {
				var id = $(this).attr("href");
				if ($(id).length > 0) {
					e.preventDefault();

					// trigger scroll
					controller.scrollTo(id);

						// if supported by the browser we can even update the URL.
					if (window.history && window.history.pushState) {
						history.pushState("", document.title, id);
					}
				}
			});})( jQuery );
		</script>
		</div>
	</section>
	<section class="section careers-section last-slide section-wrap">
		<div class="section-inner">
			<h2 class="small">Ready to start your journey?</h2>
	</section>
</div><!-- .page-wrap -->


