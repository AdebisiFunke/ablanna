<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package ablanna
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses ablanna_header()
 */
function ablanna_custom_header() {
    $defaults = array('default-image' => ' ','header-text' => false,'default-text-color'=> '000', 'width' => 1000, 'height' => 100,'random-default'=> false,'uploads'=> false,'wp-head-callback' => 'wphead_cb', 'admin-head-callback' => 'adminhead_cb','admin-preview-callback'=> 'adminpreview_cb', );}
add_action( 'after_setup_theme', 'ablanna_custom_header' );

if ( ! function_exists( 'ablanna_header' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see ablanna_custom_header.
	 */
	function ablanna_header() {
		 $header_text_color = get_header_textcolor();
		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {return;}
	}
endif;
