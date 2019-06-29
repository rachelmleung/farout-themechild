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
				<a class="button" id="home-button" href="<?php echo site_url('/about/') ?>">About Me</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<section class="featured-work">
    <div class="site-content clearfix">
      <!--  <h4>Featured Work</h4> -->
        
    
            <?php while ( have_posts() ) : the_post(); 

                $image_1 = get_field('image_1');
                $size = 'medium';
                $work_cta_photo = get_field('work_cta_photo');
                $blog_cta_photo = get_field('blog_cta_photo');
            ?>

            <?php endwhile; ?> 
            <?php wp_reset_query(); ?>
        
        <div class="home-cta-buttons">
            <div class="work-cta-container">
                <a href="<?php echo site_url('/case-studies/') ?>">
                <?php if($work_cta_photo) {
                        echo wp_get_attachment_image( $work_cta_photo, $size ); 
                    }?>
                </a>
                        <a class="button-transparent" href="<?php echo site_url('/case-studies/') ?>">Work Projects</a>
            </div>
            
            
            
            <div class="blog-cta-container">
                <a href="<?php echo site_url('/case-studies/') ?>">
                <?php if($blog_cta_photo) {
                        echo wp_get_attachment_image( $blog_cta_photo, $size ); 
                    }?>
                </a>
                        <a class="button-transparent" href="<?php echo site_url('/blog/') ?>">Art Projects</a>
                </div>
        </div>   
    </div>
</section>

<section class="home-bottom">

<div class="slideshow-container">

<div class="mySlides">
  <q>"Rachel did a great job of giving real-life examples of best practices in experiential marketing. She addressed the group's individual needs and showed expertise in driving meaningful customer interactions through events."</q>
  <p class="author">- Kathryn Inglin<br>Associate Director of External Affairs<br>The Presidio Trust</p>
</div>

<div class="mySlides">
  <q>"I love what Rachel did to the website. She did a great job rewriting all the pages and making it sound more exciting. She was so organized and made it easy for us to stay focused on our students. We've gotten many more show requests because of the new site!"</q>
  <p class="author">- Camille Tualeilei <br> Entertainment Coordinator<br>Manuia Polynesian Revue</p>
</div>

<div class="mySlides">
  <q>"Rachel did a great job refreshing my website. Because I cater to an older clientel, I wanted it keep the design simple so she focused on organizing the site and making it easier to use."</q>
  <p class="author">- Philip Leung<br>Fitness Trainer<br>Fitness Therapy Trainer</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

</section>

<?php get_footer(); ?>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>
