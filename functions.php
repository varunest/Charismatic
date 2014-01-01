<?php
/**
 * Charismatic functions and definitions
 *
 * @package Charismatic
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
	
	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );
	
	add_theme_support( 'custom-background', apply_filters( 'charismatic_custom_background_args', array(
		'default-color' => 'EEEEEE',
		'default-image' => '',
	) ) );
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */
		
	// Load Masonry 
	function mason_script() {
    wp_enqueue_script( 'jquery-masonry' );
    }
    add_action( 'wp_enqueue_scripts', 'mason_script' );
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    if(function_exists('register_nav_menus')){
    register_nav_menus(
    	array(
    		'main_nav' => 'Primary'
    	)
    );
    }
    
    
    if ( function_exists( 'add_theme_support' ) ) { 
	    add_theme_support( 'post-thumbnails' );
	    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

}
	
		
	
?>

