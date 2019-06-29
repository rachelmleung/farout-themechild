<?php
/**
 * The template for displaying all pages
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
			<?php while ( have_posts() ) : the_post(); 
                $services = get_field('services');
                $client = get_field('client');
                $link = get_field('site_link');
                $image_1 = get_field('image_1');
                $image_2 = get_field('image_2');
                $image_3 = get_field('image_3');
                $image_before = get_field('image_before');
                $case_study_info = get_field('case_study_info');
                $case_study_more = get_field('case_study_more');
            ?>
            
            <article class="case-study">   
                <aside class="case-study-sidebar">
                    <?php $size = "full"; ?>
                    <h2><?php the_title(); ?></h2>
                    <h4><?php echo $services; ?></h4>
                    <!--<h4><?php echo $client; ?></h4>-->
                    <?php the_content(); ?>
                    <p class="read-more-link"><a href="<?php echo $link; ?>">Visit Live Site ›</a></p>
                </aside>
                
                <div class="case-study-images">
                    <div class="case-study-image">
                    <?php if($image_1) {
                        echo wp_get_attachment_image( $image_1, $size ); 
                    }?>
                    </div>
                    <div class="case-study-image">
                    <?php if($image_2) {
                        echo wp_get_attachment_image( $image_2, $size ); 
                    }?>
                    </div>
                    
                    <div class="case-study-info">
                    <p><?php echo $case_study_info; ?></p>    
                    </div>

                    <div class="case-study-image">
                    <?php if($image_3) {
                        echo wp_get_attachment_image( $image_3, $size ); 
                    }?>
                    </div>
                    <div class="case-study-image">
                        <?php if($image_3) {
                        echo wp_get_attachment_image( $image_before, $size ); 
                    }?>
                    </div>
                    
                    <div class="case-study-more">
                    <p><?php echo $case_study_more; ?></p>
                    </div>

                      
                    
                </div>
                
            </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
