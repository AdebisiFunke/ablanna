<?php
/**
 * ablanna functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ablanna
 */

if ( ! defined( 'ablanna_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ablanna_VERSION', '1.0.0' );
}
if ( ! function_exists( 'ablanna_setup' ) ) :
	function ablanna_setup() {
		load_theme_textdomain( 'ablanna', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'html5', array('navigation-widgets') );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support('custom-logo',array('height'=> 250,'width'=> 250,'flex-width'=> true,'flex-height' => true,));
		register_nav_menus(array('menu-1' => esc_html__( 'Primary', 'ablanna' ),));
		add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption','style','script',));
		add_theme_support(
			'custom-background',
			apply_filters(
				'ablanna_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
         
	
	}
endif;
add_action( 'after_setup_theme', 'ablanna_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ablanna_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ablanna_content_width', 640 );
}
add_action( 'after_setup_theme', 'ablanna_content_width', 0 );

/**
 * Register Sidebar 
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ablanna_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ablanna' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ablanna' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ablanna_widgets_init' );

add_editor_style( array(ablanna_fonts_url() ) );
/**
 * Register custom fonts.
 */
function ablanna_fonts_url() {
	$fonts_url = '';
	$font_families = array();
	$font_families[] = 'Roboto:300,300i,400,400i,500,700';
	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
	);
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function ablanna_scripts() {
	wp_enqueue_style( 'ablanna-google-fonts', ablanna_fonts_url(), array(), null );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.2', 'all');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
	wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), '1.0.3', 'all');
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'ablanna-default-block', get_template_directory_uri() . '/assets/css/default-block.css', array(), ablanna_VERSION, 'all');
	wp_enqueue_style( 'ablanna-style', get_template_directory_uri() . '/assets/css/ablanna-style.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'ablanna-style', get_stylesheet_uri(), array(), ablanna_VERSION ); 
	wp_style_add_data( 'ablanna-style', 'rtl', 'replace' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.5.0', true );
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '1.0.3', true );
	wp_enqueue_script( 'ablanna-script', get_template_directory_uri() . '/assets/js/ablanna-script.js', array('jquery'), ablanna_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {wp_enqueue_script( 'comment-reply' );}
}
add_action( 'wp_enqueue_scripts', 'ablanna_scripts' );
require get_template_directory().'/inc/custom-style.php';
require get_template_directory().'/inc/custom-header.php';
require get_template_directory().'/inc/customizer.php';
require get_template_directory().'/inc/header-section.php';
require get_template_directory().'/inc/template-tags.php';
require get_template_directory().'/inc/template-functions.php';
require get_template_directory().'/inc/footer-section.php';

