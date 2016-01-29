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

<div id="" class="content-area">
		<div id="content" class="site-content">

		<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

				<h2 class="entry-title" itemprop="name" ><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<h3 class="sub-title"><?php the_field('subheader'); ?></h3>


		<?php
endwhile; ?>

		<?php else : ?>

		<?php get_template_part( 'page-templates/template-parts/content', 'none' ); ?>

		<?php
endif; ?>

		</div><!-- #content -->
</div>


<?php get_footer(); ?>
