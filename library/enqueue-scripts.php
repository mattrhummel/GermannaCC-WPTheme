<?php
function foundationpress_scripts() {
wp_enqueue_style( 'foundation', get_stylesheet_directory_uri() . '/css/foundation.min.css');
wp_enqueue_style( 'outdatedbrowser', get_stylesheet_directory_uri() . '/css/outdatedbrowser.min.css');

wp_deregister_script( 'jquery' );
wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.8.3', true );
wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4', false);
wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '5.5.3', true );
wp_enqueue_script( 'outdatedbrowser', get_template_directory_uri() . '/js/outdatedbrowser.min.js', array('jquery'), '1.1.3', true );
wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '4.2.12', true );
wp_enqueue_script( 'gcc-scripts', get_template_directory_uri() . '/js/gcc-scripts.min.js', array('jquery'), '0.0.1', true );
if (is_page (array ('request-information', 'rif-thanks')) ) {
wp_enqueue_script( 'form-scripts', get_template_directory_uri() . '/js/form-scripts.js', array('jquery'), '0.0.1', true ); };
}
add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
function prefix_add_footer_styles() {
wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/css/animate.min.css');
wp_enqueue_style( 'print', get_template_directory_uri() . '/css/print.min.css', null, null, 'print');
wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
if ( is_page(array ('request-information', 'rif-thanks')) ){
wp_enqueue_style( 'request-info', get_stylesheet_directory_uri() . '/css/request-info.css');
wp_enqueue_style( 'testimonial-slider', get_stylesheet_directory_uri() . '/css/testimonial-slider.css');
};
};
add_action( 'get_footer', 'prefix_add_footer_styles' );
?>