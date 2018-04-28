<?php 
/**
 * fun functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fun
 */
if ( ! function_exists( 'fun_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fun_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _s, use a find and replace
		 * to change '_s' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fun', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu' => esc_html__( 'Primary', 'fun' ),
		) );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'fun_theme_setup' );
/**
*
* Enqueue style
**/
function fun_js_css(){
wp_enqueue_style("fun-zerogrid", get_template_directory_uri().'/css/zerogrid.css');
wp_enqueue_style("fun-style", get_template_directory_uri().'/css/style.css');
wp_enqueue_style("fun-responsiveslides", get_template_directory_uri().'/css/responsiveslides.css');
wp_enqueue_style("fun-carousel", get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');
wp_enqueue_style("fun-awesome", get_template_directory_uri().'/owl-carousel/owl.carousel.css');
wp_enqueue_style("fun-menu", get_template_directory_uri().'/css/menu.css');
wp_enqueue_style( 'fun-style', get_stylesheet_uri() );


wp_enqueue_script( 'fun-global', get_theme_file_uri( '/js/script.js' ), array( 'jquery' ), ' ', true );
wp_enqueue_script( 'fun-owl', get_theme_file_uri( '/owl-carousel/owl.carousel.js' ), array( 'jquery' ), ' ', true );
wp_enqueue_script( 'fun-custom', get_theme_file_uri( '/js/custom.js' ), array( 'jquery' ), ' ', true );
}
add_action("wp_enqueue_scripts",'fun_js_css');

