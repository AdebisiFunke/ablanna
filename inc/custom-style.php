<?php
/**
 * ablanna custom style
 * @package ablanna
 */
function ablanna_custom_css() {
    wp_enqueue_style('ablanna-custom', get_template_directory_uri() . '/assets/css/custom-style.css' );
    $header_text_color = get_header_textcolor();
    $ablanna_custom_css = '';
    $ablanna_custom_css .= '
        .site-title a,
        .site-description{color:'.esc_attr( $header_text_color ).';}
    ';
    wp_add_inline_style( 'ablanna-custom', $ablanna_custom_css );
}
add_action( 'wp_enqueue_scripts', 'ablanna_custom_css' );

function header_text_style(){?>
    <style type="text/css">
    .site-branding, .site-branding a,
    .site-description{color:#<?php echo get_header_textcolor();?>;}
    </style>
   
    <?php 
    }
    add_action('wp_head', 'header_text_style');

    