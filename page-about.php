
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

<section class="main-about-me">
    <div class="site-content clearfix">
         <?php while ( have_posts() ) : the_post(); 

                $more_about = get_field('more_about');
            ?>
        			<?php endwhile; // end of the loop. ?>
                <div class="more-about">
                    <h3><?php echo $more_about; ?></h3>
                </div>
    </div>
</section>
    
        


<section class="our-services">
    <div class="site-content clearfix">
         <?php while ( have_posts() ) : the_post(); 

                $services = get_field('our_services');
                $services_intro = get_field('services_intro');
                $service_image_1 = get_field('service_image_1');
                $service_1 = get_field('service_1');
                $service_image_2 = get_field('service_image_2');
                $service_2 = get_field('service_2');
                $service_image_3 = get_field('service_image_3');
                $service_3 = get_field('service_3');
                $service_image_4 = get_field('service_image_4');
                $service_4 = get_field('service_4');
                $size = 'medium';
            
                $service_1_title = get_field('service_1_title');
                $service_2_title = get_field('service_2_title');
                $service_3_title = get_field('service_3_title');
                $service_4_title = get_field('service_4_title');
                $about_cta = get_field('about_cta');
    
            ?>

        <h4><?php echo $services; ?></h4>
        <p><?php echo $services_intro; ?></p>
        
        
        <ul class="services-featured"> <!-- need to change homepage to services and copy CSS -->
           
            <li class="individual-featured-service">

                 <figure>
                    <?php echo wp_get_attachment_image($service_image_1, $size); ?>
                     <h2><?php echo $service_1_title; ?></h2>
                    <p><?php echo $service_1; ?></p>
                </figure>
                

            <!--   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
             </li>                
            <li class="individual-featured-service">

                    <figure>
                        <?php echo wp_get_attachment_image($service_image_2, $size); ?>
                         <div class="service-text">
                            <h2><?php echo $service_2_title; ?></h2>
                            <p><?php echo $service_2; ?></p>
                        </div>
                     </figure>
                     
                

            <!--   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
             </li>                
            <li class="individual-featured-service">

                 <figure>
                    <?php echo wp_get_attachment_image($service_image_3, $size); ?>
                     <h2><?php echo $service_3_title; ?></h2>                   
                    <p><?php echo $service_3; ?></p>
                </figure>
                

            <!--   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
             </li>               
            <li class="individual-featured-service">

                 <figure>
                    <?php echo wp_get_attachment_image($service_image_4, $size); ?>
                     <h2><?php echo $service_4_title; ?></h2>                  
                    <p><?php echo $service_4; ?></p>
                </figure>
                

            <!--   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
             </li>           
            
            
            <?php endwhile; ?> 
            <?php wp_reset_query(); ?>
        </ul>

      <!--  <div class="about-contact">
            <h2>Interested in working with us?</h2>
            <a href="../contact-us"><button>Contact Us</button></a>
        </div><br>-->

    </div>
</section> 
    
    
<section class="about-bottom">
 <div class="site-content clearfix">
    <div class="about-cta"> 
        <h4> <?php echo $about_cta; ?></h4>  
        <a class="button" href="<?php echo site_url('/case-studies/') ?>">View My Work</a>
 
    </div>
     
  </div>
</section>


<?php get_footer(); ?>
