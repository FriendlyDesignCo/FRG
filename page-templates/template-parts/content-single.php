<?php
/**
 * @package some_like_it_neat
 */
?>
<?php tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemType="http://schema.org/BlogPosting">
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
</article><!-- #post-## -->
<?php tha_entry_after(); ?>
