<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage faroutrachel Marketing
 * @since faroutrachel Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<section class="featured-work">
    <div class="site-content clearfix">
        <h4>Featured Work</h4>
        
        <ul class="homepage-featured">
            <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>  
            <?php while ( have_posts() ) : the_post(); 

                $image_1 = get_field('image_1');
                $size = 'medium';
            ?>

            <li class="individual-featured-work">

                 <figure>
                    <?php echo wp_get_attachment_image($image_1, $size); ?>
                </figure>

                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
             </li>           
            
            <?php endwhile; ?> 
            <?php wp_reset_query(); ?>
        </ul>
        
    </div>
</section>

<section class="recent-posts">
 <div class="site-content">
    
    <div class="get-to-know"> 
        <h4>  </h4>  
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
    </div>
<?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
