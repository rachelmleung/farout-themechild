
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

                $services = get_field('our_services');
                $services_intro = get_field('services_intro');
                $about_image_1 = get_field('about_image_1');
                $service_1 = get_field('service_1');
                $about_image_2 = get_field('about_image_2');
                $service_2 = get_field('service_2');
                $service_3 = get_field('service_3');
                $about_headline = get_field('about_headline');
                $size = 'medium';
            ?>
        			<?php endwhile; // end of the loop. ?>
                <div class="more-about-container">
                    
                <figure class="about-image-top">
                    <?php echo wp_get_attachment_image($about_image_1, $size); ?>
                </figure>
                    <h3><?php echo $about_headline; ?></h3>
                    <p><?php echo $more_about; ?></p> 
                </div>
    </div>
</section>
    
        
<section class="our-services">
         <?php while ( have_posts() ) : the_post(); 

            
                $service_1_title = get_field('service_1_title');
                $service_2_title = get_field('service_2_title');
                $service_3_title = get_field('service_3_title');
                $service_4_title = get_field('service_4_title');
                $about_cta = get_field('about_cta');
                $experience_title = get_field('experience_title');
                $experience_body = get_field('experience_body');
    
    
            ?>

        <h3><?php echo $services; ?></h3>
        <p><?php echo $services_intro; ?></p>
        
        
        <ul class="services-featured"> <!-- need to change homepage to services and copy CSS -->
           
            <li class="individual-featured-service">

                 <figure>
                    <?php /* echo wp_get_attachment_image($about_image_1, $size); */?>
                     <h4><?php echo $service_1_title; ?></h4>
                    <p><?php echo $service_1; ?></p>
                </figure>
                

            <!--   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
             </li>                
            <li class="individual-featured-service">

                    <figure>
                        <?php /*echo wp_get_attachment_image($about_image_2, $size);*/ ?>
                         <div class="service-text">
                            <h4><?php echo $service_2_title; ?></h4>
                            <p><?php echo $service_2; ?></p>
                        </div>
                     </figure>
                     
                

            <!--   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
             </li>                
            <li class="individual-featured-service">

                 <figure>
                    <?php /* echo wp_get_attachment_image($service_image_3, $size);*/ ?>
                     <h4><?php echo $service_3_title; ?></h4>                   
                    <p><?php echo $service_3; ?></p>
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

</section> 
    
    
<section class="about-bottom">

                <div class="about-experience">
                    
                <figure class="about-image-bottom">
                    <?php echo wp_get_attachment_image($about_image_2, $size); ?>
                </figure>
                
                    <h3><?php echo $experience_title; ?></h3>
                    <p><?php echo $experience_body; ?></p>
                    
                </div>

    <div class="about-cta"> 
        <h4> <?php echo $about_cta; ?></h4>  
        <div class="about-cta-buttons">
        <a class="button-transparent" id="about-cta-work-button" href="<?php echo site_url('/case-studies/') ?>">Work Projects</a>
        <a class="button-transparent" href="<?php echo site_url('/blog/') ?>">Fun Projects</a>
        </div>
 
    </div>

</section>


<?php get_footer(); ?>
