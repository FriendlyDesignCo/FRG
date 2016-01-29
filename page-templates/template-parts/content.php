<?php
/**
 * @package some_like_it_neat
 */
?>

<?php tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemType="http://schema.org/BlogPosting" >
	<?php tha_entry_top(); ?>
	<h2 class="entry-title" itemprop="name" ><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<h3 class="sub-title"><?php the_field('subheader'); ?></h3>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary" itemprop="description">
	<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	
	<?php
endif; ?>

	<footer class="entry-meta" itemprop="keywords">
	<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
	<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'some-like-it-neat' ) );
	if ( $categories_list && some_like_it_neat_categorized_blog() ) :
	?>
	<span class="cat-links">
	<?php printf( __( 'Posted in %1$s', 'some-like-it-neat' ), $categories_list ); ?>
	</span>
	<?php
	endif; // End if categories ?>

	<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'some-like-it-neat' ) );
	if ( $tags_list ) :
	?>
	<span class="tags-links">
	<?php printf( __( 'Tagged %1$s', 'some-like-it-neat' ), $tags_list ); ?>
	</span>
	<?php
	endif; // End if $tags_list ?>
	<?php
	endif; // End if 'post' == get_post_type() ?>

	

	<?php edit_post_link( __( 'Edit', 'some-like-it-neat' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
	<?php tha_entry_bottom(); ?>
</article><!-- #post-## -->
<?php tha_entry_after(); ?>
