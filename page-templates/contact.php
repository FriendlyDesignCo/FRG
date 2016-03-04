<?php
/**
 * Template Name: Contact
 *
 * 
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="" class="contact-us-page content-area ">
	
	<div id="content" class="site-content">
		<div class="contact-form-wrap">
			<?php echo do_shortcode("[gravityform id='1' title='true' description='true' ajax='true']");  ?>	
		</div>
		<div class="locations-list-wrap">
			<?php if( have_rows('locations') ): ?>
			<?php while( have_rows('locations') ): the_row(); ?>
			<div class="location-item">
				<h3 class="location-name"><a class="text-red" href="<?php the_sub_field('location_link'); ?>"><?php the_sub_field('location_name'); ?></a></h3>
				<p class="phone-number text-red"><?php the_sub_field('phone_number'); ?></p>
				<p class="address"><?php the_sub_field('address_line_1'); ?></p>
				<p class="address"><?php the_sub_field('address_line_2'); ?></p>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div><!-- #content -->
</div>


<?php get_footer(); ?>
