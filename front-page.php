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
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View My Work</a>
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
                     <a href="<?php the_permalink(); ?>"> <?php echo wp_get_attachment_image($image_1, $size); ?></a>
                </figure>

                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
             </li>           
            
            <?php endwhile; ?> 
            <?php wp_reset_query(); ?>
        </ul>
        
    </div>
</section>

<section class="home-bottom">
 <div class="site-content clearfix">

    <div class="get-to-know"> 
            <?php while ( have_posts() ) : the_post(); 

                $get_to_know = get_field('get_to_know');
                $home_img = get_field('home_img');
            ?>
        <h4> <?php echo $get_to_know; ?></h4>  
        <a class="button" href="<?php echo site_url('/about/') ?>">Get To Know Me</a>
       <!-- <p><?php echo wp_get_attachment_image($home_img, $size); ?></p> -->
                <?php endwhile; ?>     
    </div>
     
  </div>
</section>

<?php get_footer(); ?>
