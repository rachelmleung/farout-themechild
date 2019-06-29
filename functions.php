<?php
/**
 * faroutrachel Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage faroutrachel Marketing
 * @since faroutrachel Marketing 2.0
 */

function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
}


add_action( 'init', 'create_custom_post_types' );

add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_page_template( 'contact-us.php' ) ) {
        $classes[] = 'contact-us';
    }
    return $classes;
}

function faroutrachel_theme_child_widget_init() {
	
	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'faroutrachel-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'faroutrachel-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'faroutrachel_theme_child_widget_init' );

/*function custom_excerpt_length( $length ) {
	return 55;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );*/

/* this prevents the [...] orphan and ends it at the end of a sentence*/
function end_with_sentence( $excerpt ) {

  if ( ( $pos = mb_strrpos( $excerpt, '.' ) ) !== false ) {
    $excerpt = substr( $excerpt, 0, $pos + 1 );
  }

  return $excerpt;
}
add_filter( 'the_excerpt', 'end_with_sentence' );