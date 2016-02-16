<?php
/**
 * Template Name: Default Page Template
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>
<div id="primary" class="content-area">
		<div id="content" class="site-content">
			
				<?php tha_entry_top(); ?>
				<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ) ?>
				<?php if($image_url != null) {?>
					<div class="hero-image" style="background-image:url(<?php echo $image_url[0] ?>)" title="<?php echo the_title_attribute( 'echo=0' ) ?>"></div>
				<?php } ?>
				<div class="entry-content" itemprop="articleBody" >
					<h2 class="entry-title" itemprop="name" ><?php the_title(); ?></h2>
					<h3 class="sub-title"><?php the_field('subheader'); ?></h3>
					<?php the_content(); ?>

				</div><!-- .entry-content -->

				
				<?php tha_entry_bottom(); ?>
			
	</div>
</div>