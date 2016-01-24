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
			    var slider = $('.slide').unslider({
			    	 animation: 'fade',  arrows: false
		    	});
			});
		})(jQuery);
		
	</script>
<div id="fullpage" class="careers-wrap page-wrap content-area">
	
	<section class="section careers-section slide-1 section-wrap">
		<div class="section-inner">
			<h2 class="small"><?php the_field('hero_header_line_1'); ?></h2>
			<h2 class="small"><?php the_field('hero_header_line_2'); ?></h2>
			<p class="text-red"><?php the_field('hero_paragraph'); ?></p>
			<p class="text-red medium"><?php the_field('scroll_more_text'); ?></p>
		</div>
	</section>
	<section class="section careers-section career-slide-wrap section-wrap ">
	<div class="slide">
		<div class="sprinkler-animation">
			<div class="water" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/animation/water.svg')"></div>
		</div>
		<ul class="career-slide-list">
			<?php if( have_rows('career_path') ): ?>
			<?php while( have_rows('career_path') ): the_row(); ?>
			
			<li class="section careers-section career-slide">
				<div class="section-inner ">
					<div class="case-study">

						<!-- career loop -->
						<h2 class="career-title"><?php the_sub_field('career_title'); ?></h2>
						<p class="text-red"><?php the_sub_field('career_description'); ?></p>
						<div class="compensation-wrap">
							<h3 class="compensation-header">Compensation</h3>
							<p>$<?php the_sub_field('career_compensation'); ?></p>	
						</div>
						

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
						<!-- end positions loop -->

						
						<div class="case-study-card-wrap">
							<?php if( have_rows('career_case_study') ): ?>
							<?php while( have_rows('career_case_study') ): the_row(); ?>
							<div class="case-study-card">
								<div class="case-study-card-image" style="background-image:url('<?php the_sub_field('case_study_image'); ?>')"></div>
								<div class="case-study-card-blurb">
									<p><?php the_sub_field('case_study_outer_blurb'); ?></p>
									<div class="case-study-card-expanded">
										<?php if( have_rows('case_study_path') ): ?>
										<?php while( have_rows('case_study_path') ): the_row(); ?>
											<p>Job: <?php the_sub_field('case_study_job'); ?></p>
										<?php endwhile; ?>
										<?php endif; ?>
										<p><?php the_sub_field('case_study_inner_blurb'); ?></p> 
										<p><?php the_sub_field('case_study_paragraph'); ?></p>
									</div>
								</div>
							</div>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<!-- end career loop -->
			</li>
			
		
			<?php endwhile; ?>
			<?php endif; ?>
			</ul>
		</div>
	</section>
</div><!-- .page-wrap -->
<?php get_footer(); ?>

