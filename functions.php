<?php
require_once get_template_directory() .'/inc/ReduxCore/framework.php';
require_once get_template_directory() .'/inc/sample/config.php';

require_once get_template_directory() .'/class-wp-bootstrap-navwalker.php';
function wp_newsportal_scripts() {
	

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font/font-awesome.min.css', array(), '3.2' );
	wp_enqueue_style( 'font-defult', get_template_directory_uri() . '/assets/font/font.css', array(), '3.2' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.2' );


	wp_enqueue_style( 'style-defult', get_template_directory_uri() . '/assets/css/style.css', array(), '3.2' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '3.2' );
	wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/assets/css/jquery.bxslider.css', array(), '3.2' );
wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/style.css' );

	

	wp_enqueue_script( 'news-juery', get_template_directory_uri() . '/assets/js/jquery-min.js', array(), '20141010', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20141010', true );
	wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/assets/js/jquery.bxslider.js', array(), '20141010', true );
	wp_enqueue_script( 'selectnav', get_template_directory_uri() . '/assets/js/selectnav.min.js', array(), '20141010', true );
	

	


	
}
add_action( 'wp_enqueue_scripts', 'wp_newsportal_scripts' );


function wp_newsportal_setup() {
	/*
	 * Make theme available for translation.
	*/
	load_theme_textdomain( 'wp_newsportal' );

	

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'wp_newsportal-featured-image', 2000, 1200, true );

	add_image_size( 'wp_newsportal-thumbnail-avatar', 100, 100, true );

	

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top-menu'    => __( 'Top Menu', 'wp_newsportal' ),
		
		'main-menu' => __( 'Main Menu', 'wp_newsportal' ),
		'footer-menu' => __( 'Footer Menu', 'wp_newsportal' ),
	) );

	

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 241,
		'height'      => 37,
		
	) );	

	add_theme_support( 'html5', array( 'search-form' ) );

	
}
add_action( 'after_setup_theme', 'wp_newsportal_setup' );


