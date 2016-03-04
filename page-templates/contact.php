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
		<div class="">
			
		</div>
	</div><!-- #content -->
</div>


<?php get_footer(); ?>
