<?php
/**
 * The template 404 page
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

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>

        
			<?php endwhile; // end of the loop. ?>
            
            <div class="your-adventure">
                <h1>Choose Your Own 404 Adventure</h1>
                <h3> Whoops, it looks like you've taken a wrong turn.</h3>
                
            </div>
            <div class="map">
            </div>
            <div class="adventures">
                        <hr>
                        <p>If you think there's more to explore, stroll on over to the <a href="blog">blog</a>.</p>
                        <p>If you decide to play it safe and retrace your steps, you'll need to turn <a href="javascript:history.back()">back</a> now.</p>                         <p>If you need a mulligan, return <a href="<?php echo home_url(); ?>">home</a> and try again. </p>

            </div>
            
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
