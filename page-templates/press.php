<?php
/**
 * Template Name: Press
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="" class="press-page content-area">
	
	<div id="content" class="site-content">
		<h2 class="large center-text">Press</h2>
		<?php if( have_rows('press') ): ?>
		<?php while( have_rows('press') ): the_row(); ?>
		<div class="press-item">
			<a href="<?php the_sub_field('press_link'); ?>">
				<h4 class="publication"><?php the_sub_field('publication'); ?></h4>
				<h3 class="headline"><?php the_sub_field('headline'); ?></h3>
				<p class="quote"><?php the_sub_field('quote'); ?></p>
			</a>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div><!-- #content -->
</div>


<?php get_footer(); ?>
