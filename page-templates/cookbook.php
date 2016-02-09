<?php
/**
 * Template Name: Cookbook
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="" class="cookbook-page content-area ">
	
	<div id="content" class="site-content">
		<div class="cookbook-logo ">
			<img src="<?php the_field('cookbook_logo'); ?>">
		</div>
		<div class="cookbook-text">
			<p class="text-left"><?php the_field('paragraph_text_left'); ?></p>
			<p class="text-right"><?php the_field('paragraph_text_right'); ?></p>
			<a class="button "href="<?php the_field('buy_link'); ?>"><?php the_field('buy_button_text'); ?></a>
		</div>
		<div class="images-wrap">
		<?php if( have_rows('images') ): ?>
		<?php while( have_rows('images') ): the_row(); ?>
			<div class="image" style="background-image:url('<?php the_sub_field('image'); ?>')">
				<img src="">	
			</div>
			
		<?php endwhile; ?>
		<?php endif; ?>
		</div>
		<?php if( have_rows('faq') ): ?>
		<div class="qa-wrap">
		<h3>Frequently Asked Questions</h3>
		<?php while( have_rows('faq') ): the_row(); ?>
			<div class="qa-item">
				<ul class="qa-list-item">
					<li class="question">
						<div class="plus-minus">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
						<?php the_sub_field('question'); ?>
					</li>
					<li class="answer"><?php the_sub_field('answer'); ?></li>
				</ul>
			</div>
		<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div><!-- #content -->
</div>


<?php get_footer(); ?>
