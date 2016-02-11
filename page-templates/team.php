<?php
/**
 * Template Name: Team
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="" class="team-page content-area interior-page">
	
	<div id="content" class="site-content">
		<h2 class="large">Team</h2>
		<h3 class=""><?php the_field('subheader'); ?></h3>
		<?php if( have_rows('team_member') ): ?>
		<?php while( have_rows('team_member') ): the_row(); ?>
		<div class="team-member-item">
			<div class="image" style="background-image:url('<?php the_sub_field('photo'); ?>')">
				<img src="<?php the_sub_field('photo'); ?>">	
			</div>
			<div class="text">
				<h3 class="name"><?php the_sub_field('name'); ?></h3>
				<p class="job-title"><?php the_sub_field('job_title'); ?></p>
			</div>
			<div class="team-member-expanded">
				<div class="close-button">Close</div>
				<div class="image">
					<img src="<?php the_sub_field('photo'); ?>">	
				</div>
				<div class="text">
					<h3 class="name"><?php the_sub_field('name'); ?></h3>	
					<p class="highlighted-text"><?php the_sub_field('highlighted_text'); ?></p>
					<div class="bio">
						<?php the_sub_field('bio'); ?>	
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
		<div class='modal-bg'></div>
	</div><!-- #content -->
</div>


<?php get_footer(); ?>
