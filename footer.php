<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage faroutrachel Marketing
 * @since faroutrachel Marketing 2.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
					<p>&copy; <?php bloginfo('title'); ?>
				</div>

				<nav class="social-media-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
				</nav>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
