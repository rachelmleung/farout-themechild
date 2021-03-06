


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

<div class="work-intro">

<h1>Portfolio</h1>
<h4>Check out some of my latest projects. </h4>
</div>


	<div id="primary" class="site-content">
		<div class="main-content" role="main">
            <?php while ( have_posts() ) : the_post(); 
                $services = get_field('services');
                $client = get_field('client');
                $image_1 = get_field('image_1');
                $size = 'full';
            ?>

                        
   <div class="case-studies-container">                 
        <article class="case-study">   
            
            
            <aside class="case-study-sidebar">
              <div class="case-study-images">
                <a href="<?php the_permalink(); ?>">
                <?php if($image_1) {
                    echo wp_get_attachment_image( $image_1, $size ); 
                }?>
                </a>             
            </div>            
             <div class="case-study-info"> 
                <?php $size = "full"; ?>
                <h2><?php the_title(); ?></h2>  
                <h4><?php echo $services; ?></h4>
                <!--<h4><?php echo $client; ?></h4>-->
                <?php the_excerpt(); ?>
                 
                 
                <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project</a></p>
                 </div>  
            
            </aside>
                
             
        </article>
    </div>    
                        
            <?php endwhile; // End of the loop. ?>
    </div><!-- main content -->
</div><!-- #primary -->
<?php get_footer(); ?>
