<?php
/**
 * _themename functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _themename
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! defined( '_THEMENAME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_THEMENAME_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! defined( '_THEMENAME_THEMEROOT' ) ) {
	// Replace the version number of the theme on each release.
	define( '_THEMENAME_THEMEROOT', get_template_directory_uri());
}

if ( ! defined( '_THEMENAME_THEMEROOT_DIR' ) ) {
	// Replace the version number of the theme on each release.
	define( '_THEMENAME_THEMEROOT_DIR', get_template_directory());
}

if ( ! defined( '_THEMENAME_IMAGES' ) ) {
	// Replace the version number of the theme on each release.
	define( '_THEMENAME_IMAGES', _THEMENAME_THEMEROOT.'/assets/images');
}

if ( ! defined( '_THEMENAME_CSS' ) ) {
	// Replace the version number of the theme on each release.
	define( '_THEMENAME_CSS', _THEMENAME_THEMEROOT.'/assets/css');
}

if ( ! defined( '_THEMENAME_JS' ) ) {
	// Replace the version number of the theme on each release.
	define( '_THEMENAME_JS', _THEMENAME_THEMEROOT.'/assets/js');
}

if ( ! defined( '_THEMENAME_VEND' ) ) {
	// Replace the version number of the theme on each release.
	define( '_THEMENAME_VEND', _THEMENAME_THEMEROOT.'/assets/vendors');
}


if ( ! function_exists( '_themename_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function _themename_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _themename, use a find and replace
		 * to change '_themename' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( '_themename', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'main_menu' => esc_html__( 'Main Menu', '_themename' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'_themename_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', '_themename_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _themename_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_themename_content_width', 640 );
}
add_action( 'after_setup_theme', '_themename_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _themename_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', '_themename' ),
			'id'            => 'blog_sidebar',
			'description'   => esc_html__( 'Add widgets here.', '_themename' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', '_themename_widgets_init' );

/**
 * _themename required function init  
 */
require_once _THEMENAME_THEMEROOT_DIR . '/inc/init.php'; 

/**
 *  _themename options and metabox init 
 */

require_once _THEMENAME_THEMEROOT_DIR . '/lib/init.php'; 

