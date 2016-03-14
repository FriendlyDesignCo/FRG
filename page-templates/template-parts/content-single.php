<?php
/**
 * @package some_like_it_neat
 */
?>
<?php tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemType="http://schema.org/BlogPosting">
	<?php tha_entry_top(); ?>
	<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ) ?>
	<?php if($image_url != null) {?>
		<div class="hero-image" style="background-image:url(<?php echo $image_url[0] ?>)" title="<?php echo the_title_attribute( 'echo=0' ) ?>"></div>
	<?php } ?>
	<div class="entry-content" itemprop="articleBody" >
		<h2 class="entry-title" itemprop="name" ><?php the_title(); ?></h2>
		<h3 class="sub-title"><?php the_field('subheader'); ?></h3>
		<?php the_content(); ?>
		<div class="article-share">
			<h4>Share</h4>
			<ul>
				<li class="share-button">
					<a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>.">Email <div class="icon"><span class="dashicons dashicons-email-alt"></span></div></a>
				</li>
				<li class="share-button">
					<a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()) ?>&related=twitterapi%2Ctwitter&text=<?php echo htmlspecialchars(urlencode(html_entity_decode(strip_tags(get_the_title( )), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8') ?>" onclick="javascript:void window.open('https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()) ?>&related=twitterapi%2Ctwitter&text=<?php echo htmlspecialchars(urlencode(html_entity_decode(strip_tags(get_the_title()), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8')  ?>','1449506432730','width=845,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
					Twitter
					<div class="icon">
					<span class="dashicons dashicons-twitter"></span>
					</a>
				</li>
				<li class="share-button">
					<a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" onclick="javascript:void window.open('http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>','1578831835770878','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
						Facebook
						<div class="icon"><span class="dashicons dashicons-facebook-alt"></span></div>
						
					</a>
				</li>
			</ul>
		</div>
	</div><!-- .entry-content -->

	
	<?php tha_entry_bottom(); ?>
</article>