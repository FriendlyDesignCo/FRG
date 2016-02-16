<?php
/**
 * Template Name: Blog
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="" class="blog-page content-area interior-page">
	<style>
	
	</style>
	<div id="content" class="site-content">
		<div class="categories-list">
			<h3>Categories</h3>
			<?php 
				$list_args = array(
					'title_li'           => '',
					'exclude'            => '1', // exlude "uncategorized"
					'hide_empty'         => 0    // include empty categories
					);
				wp_list_categories($list_args); ?>
		</div>
		<div class="blog-list">
			<?php query_posts('posts_per_page=6'); ?> 
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> 
					<div class="blog-item">
						<h3 class="category"><?php the_category(); ?></h3>
						<h2 class="entry-title small" itemprop="name" ><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<h3 class="sub-title"><?php the_field('subheader'); ?></h3>
					</div>
				<?php endwhile; ?> 			
			<?php wp_reset_query(); ?> 
			
			<?php echo do_shortcode("[ajax_load_more post_type='post'  offset='6' posts_per_page='6']");  ?>
		</div>
	</div><!-- #content -->
</div>


<?php get_footer(); ?>
