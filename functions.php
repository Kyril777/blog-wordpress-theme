<?php

// Obtain Stylesheet
function obtain_stylesheet() {

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'obtain_stylesheet');

function iKyrilTheme_setup() {

	// Navigation Menus
	register_nav_menus(array(
		'header' => __( 'Header Menu'),
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));

	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 180, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));

	// Add post format support.
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));


}

add_action('after_setup_theme', 'iKyrilTheme_setup');

// Customize excerpt word count length
function custom_excerpt_length(){
	return 75;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Add our widgets location
function ourWidgetsInit() {

	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1'
	));

	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1'
	));

	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2'
	));

	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer3'
	));

	register_sidebar( array(
		'name' => 'Footer Area 4',
		'id' => 'footer4'
	));


}

add_action('widgets_init', 'ourWidgetsInit');


// Pagination.
if ( ! function_exists( 'my_pagination' ) ) :
    function my_pagination() {
        global $wp_query;

        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
    }
endif;
