<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage faroutrachel Marketing
 * @since faroutrachel Marketing 2.0
 */
?>

<div id="sidebar">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #primary-sidebar -->

	<?php else : ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<aside class="widget widget_text">
				<div class="textwidget">
					
				</div>
			</aside>

			<aside class="widget widget_search">
				<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="search" />
					<input type="submit" id="searchsubmit" value="" />
				</form>
			</aside>

			<aside class="widget widget_categories">
				<h2 class="widget-title">Categories</h2>
				<ul>
					<li><a href="">Art </a></li>
					<li><a href="">DIY Projects </a></li>
					<li><a href="">Photography </a></li>
					<li><a href="">Dance </a></li>
					<li><a href="">Sewing</a></li>
				</ul>
			</aside>

		<!--	<aside class="widget widget_archive">
				<h2 class="widget-title">Archives</h2>
				<ul>
					<li><a href="">September 2014</a></li>
					<li><a href="">August 2014</a></li>
					<li><a href="">July 2014</a></li>
					<li><a href="">June 2014</a></li>
					<li><a href="">May 2014</a></li>
				</ul>
			</aside>

			<aside class="widget widget_events">
				<h2 class="widget-title">Events</h3>
				<ul>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Brooklyn.png" alt=""/></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Rails.png" alt=""/></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Etsy.png" alt=""/></a></li>
				</ul>
			</aside>
		</div> -->
	<?php endif; ?>
</div>
