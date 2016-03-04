<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package some_like_it_neat
 */
?>
		<?php tha_content_bottom(); ?>

		</main><!-- #main -->

		<?php tha_content_after(); ?>

		<?php tha_footer_before(); ?>

		<footer id="colophon" class="site-footer wrap" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

		<?php tha_footer_top(); ?>

			<section class="site-info">
				<div class="footer-right">
					<?php echo do_shortcode("[gravityform id='2' title='false' description='false' ajax='true']");  ?>	
				</div>
				<div class="footer-left">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-navigation',
							'menu_class' => 'hide-scroll menu-list', //Adding the class for FlexNav
							'items_wrap' => '<ul data-breakpoint=" '. esc_attr( get_theme_mod( 'some_like_it_neat_mobile_min_width', '768' ) ) .' " id="%1$s" class="%2$s">%3$s</ul>', // Adding data-breakpoint for FlexNav
						)
					); ?>
					<p class="copyright">Copyright &#169; <?php echo date("Y") ?> Farmers Restaurant Group | Restaurant Consulting</p>
				</div>
			</section><!-- .site-info -->

		</footer><!-- #colophon -->

		<?php tha_footer_after(); ?>

	</div><!-- .wrap -->

</div><!-- #page -->

<?php tha_body_bottom(); ?>

<?php wp_footer(); ?>

</body>
</html>
