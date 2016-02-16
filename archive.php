<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package some_like_it_neat
 */


get_header(); ?>

	<section id="" class="content-area">
		<div id="content" class="site-content">

		<?php if ( have_posts() ) : ?>
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
			<header class="page-header">
				<h2 class="page-title">
					<?php echo get_the_archive_title(); ?>
				</h2>
				<?php
					// Show an optional term description.
				if ( function_exists( 'get_the_archive_description' ) ) :
					echo '<div class="taxonomy-description">' .get_the_archive_description(). '</div>';
					/*
					* TO-DO Might remove this code block at some point, since
					*   get_the_archive_description() does the same thing
					*   the below code does
					*/
					elseif ( $term_description = term_description() ) :
						printf( '<div class="taxonomy-description">%s</div>',	$term_description );
					endif;
				?>
			</header><!-- .page-header -->
		
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

				<div class="blog-item">
					<h3 class="category"><?php the_category(); ?></h3>
					<h2 class="entry-title small" itemprop="name" ><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="sub-title"><?php the_field('subheader'); ?></h3>
				</div>

		<?php endwhile; 
		if( is_category() ) {
				$cat = get_queried_object();
			echo do_shortcode("[ajax_load_more post_type='post' category='".$cat->slug."' offset='6' posts_per_page='6' pause='true' scroll='false']");
		}
		?>

		</div>
			<?php else : ?>

				<?php get_template_part( 'page-templates/template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->


<?php get_footer(); ?>
