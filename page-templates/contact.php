<?php
/**
 * Template Name: Contact
 *
 * gi
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
				<?php if(get_sub_field('location_link') != null) {?>
					<h3 class="location-name"><a class="text-red" href="<?php the_sub_field('location_link'); ?>" target="_blank"><?php the_sub_field('location_name'); ?></a></h3>
				<?php } else { ?>
					<h3 class="location-name"><?php the_sub_field('location_name'); ?></h3>
				<?php } ?>
				
				<p class="phone-number text-red"><?php the_sub_field('phone_number'); ?></p>
				<p class="address"><?php the_sub_field('address_line_1'); ?></p>
				<p class="address"><?php the_sub_field('address_line_2'); ?></p>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>

			<?php if( have_rows('coming_soon_locations') ): ?>
			<h3 class="coming-soon-header">Coming Soon!</h3>
			<?php while( have_rows('coming_soon_locations') ): the_row(); ?>
			<div class="location-item">
				<?php if(get_sub_field('location_link') != null) {?>
					<h3 class="location-name"><a class="text-red" href="<?php the_sub_field('location_link'); ?>" target="_blank"><?php the_sub_field('location_name'); ?></a></h3>
				<?php } else { ?>
					<h3 class="location-name"><?php the_sub_field('location_name'); ?></h3>
				<?php } ?>
				
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
