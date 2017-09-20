
<?php /* Template Name: About Page */ ?>
<?php
/**
 * Template Name : About Page
 *
 *
 * @package WordPress
 * @subpackage faroutrachel Marketing
 * @since faroutrachel Marketing 2.0
 */

get_header(); ?>

<body <?php body_class(); ?>>
    
	<div id="primary" class="about-page">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<section class="our-services">
    <div class="site-content clearfix">
         <?php while ( have_posts() ) : the_post(); 
                $more_about = get_field('more_about');
                $services = get_field('our_services');
                $services_intro = get_field('services_intro');
                $service_image_1 = get_field('service_image_1');
                $service_1 = get_field('content_strategy');
                $service_image_2 = get_field('service_image_2');
                $service_2 = get_field('influencer_mapping');
                $service_image_3 = get_field('service_image_3');
                $service_3 = get_field('social_media_strategy');
                $service_image_4 = get_field('service_image_4');
                $service_4 = get_field('design_and_development');
                $size = 'medium';
            
                $title_1 = get_field('content_title');
                $title_2 = get_field('influencer_title');
                $title_3 = get_field('social_title');
                $title_4 = get_field('design_title');
            ?>
        <div class="more-about">
            <h3><?php echo $more_about; ?></h3>
        </div>
        
        <h4><?php echo $services; ?></h4>
        <p><?php echo $services_intro; ?></p>
        
        
        <ul class="services-featured"> <!-- need to change homepage to services and copy CSS -->
           
            <li class="individual-featured-service">

                 <figure>
                    <?php echo wp_get_attachment_image($service_image_1, $size); ?>
                     <h2><?php echo $title_1; ?></h2>
                    <p><?php echo $service_1; ?></p>
                </figure>
                

            <!--   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
             </li>                
            <li class="individual-featured-service">

                    <figure>
                        <?php echo wp_get_attachment_image($service_image_2, $size); ?>
                         <div class="service-text">
                            <h2><?php echo $title_2; ?></h2>
                            <p><?php echo $service_2; ?></p>
                        </div>
                     </figure>
                     
                

            <!--   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
             </li>                
            <li class="individual-featured-service">

                 <figure>
                    <?php echo wp_get_attachment_image($service_image_3, $size); ?>
                     <h2><?php echo $title_3; ?></h2>                   
                    <p><?php echo $service_3; ?></p>
                </figure>
                

            <!--   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
             </li>               
            <li class="individual-featured-service">

                 <figure>
                    <?php echo wp_get_attachment_image($service_image_4, $size); ?>
                     <h2><?php echo $title_4; ?></h2>                  
                    <p><?php echo $service_4; ?></p>
                </figure>
                

            <!--   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
             </li>           
            
            
            <?php endwhile; ?> 
            <?php wp_reset_query(); ?>
        </ul>
        

             <hr>   
        <div class="about-contact">
            <h2>Interested in working with us?</h2>
            <a href="../contact-us"><button>Contact Us</button></a>
        </div><br>
        
    </div>
</section>


<?php get_footer(); ?>
