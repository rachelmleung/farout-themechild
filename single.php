<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage faroutrachel Marketing
 * @since faroutrachel Marketing 2.0
 */

get_header(); ?>

<section class="single-page">
	<div class="site-content">
		<div class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('content', get_post_format()); ?>
			<?php endwhile; ?>
		</div>

		<?php get_sidebar(); ?>
	</div>
</section>

<div id="navigation" class="container">
	<div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to posts</span></a></div>
</div>

<?php get_footer(); ?>
