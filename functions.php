<?php
/**
 * ocifu functions and definitions
 *
 * @package ocifu
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'ocifu_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function ocifu_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on ocifu, use a find and replace
	 * to change 'ocifu' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ocifu', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ocifu' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'ocifu_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // ocifu_setup
add_action( 'after_setup_theme', 'ocifu_setup' );

/**
 * Allow to upload svg images
 */
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


/**
 * Register widgetized area and update sidebar with default widgets
 */
function ocifu_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ocifu' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'ocifu_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function ocifu_scripts() {
	// wp_enqueue_style( 'ocifu-style', get_stylesheet_uri() );

	//css style
	wp_enqueue_style( 'ocifu-style', get_template_directory_uri() . '/css/build/minified/global.css', array(), '20150201', 'all' );

	//Modernizr JS
	//we are include it directly. No need to support IE8
	// wp_enqueue_script( 'ocifu-modernizr', get_template_directory_uri() . '/js/libs/modernizr.custom.63353.js', array(), '201308013', false );
	
	//Main JS
	wp_enqueue_script( 'ocifu-main', get_template_directory_uri() . '/js/build/production.min.js', array('jquery'), '20150201', true );
}
add_action( 'wp_enqueue_scripts', 'ocifu_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load all functions and filtres custom by me
 */
require get_template_directory() . '/inc/template-functions.php';

