<?php
function foundationpress_scripts() {
//hides admin styles if not logged in
if ( ! is_admin() )
{
//Load CSS Styles in Min Format
wp_enqueue_style( 'foundation', get_stylesheet_directory_uri() . '/css/foundation.min.css');
wp_enqueue_style( 'outdatedbrowser', get_stylesheet_directory_uri() . '/css/outdatedbrowser.min.css');

}
//Dereigisters Uniminified Scripts from WP
wp_deregister_script( 'jquery' );
wp_deregister_script( 'jquery-spinner' );
wp_deregister_script( 'custom_script' );
wp_deregister_script( 'contact-form-7' );

//Load Needed Scripts in Min format
wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.8.3', true );
wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', array(), '1.8.2', false);
wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '5.5.3', true );
wp_enqueue_script( 'outdatedbrowser', get_template_directory_uri() . '/js/outdatedbrowser.min.js', array('jquery'), '1.1.3', true );
wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '4.2.12', true );
wp_enqueue_script( 'gcc-scripts', get_template_directory_uri() . '/js/gcc-scripts.min.js', array('jquery'), '0.0.1', true );
wp_enqueue_script( 'jquery-spinner-min', get_template_directory_uri() . '/js/jquery.ui.spinner.min.js', array('jquery'), '0.0.1', true );
wp_enqueue_script( 'cf7-datepicker-ie-fixer-min', get_template_directory_uri() . '/js/cf7-datepicker-ie-fixer.min.js', array('jquery'), '0.0.1', true );
wp_enqueue_script( 'contact-form-7-min', get_template_directory_uri() . '/js/contact-form-7.min.js', array('jquery'), '0.0.1', true );
//Load scripts only on Request Info Form
if (is_page (array ('request-information', 'rif-thanks')) ) {
wp_enqueue_script( 'form-scripts', get_template_directory_uri() . '/js/form-scripts.js', array('jquery'), '0.0.1', true );
};
//Load scripts only on Nursing Applications
if (is_page (array ('16776', '17285', '17302', '17331')) ) {
wp_enqueue_script( 'nursing-app-scripts', get_template_directory_uri() . '/js/nursing-app-scripts.js', array('jquery'), '0.0.1', true );
};
}
//Loads scripts on page
add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
//Moves unnecessary css and js files into footer for quicker loading
function prefix_add_footer_styles() {
wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/css/animate.min.css');
wp_enqueue_style( 'print', get_template_directory_uri() . '/css/print.min.css', null, null, 'print');
wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
//Loads style only on Request Information Form
if ( is_page(array ('request-information', 'rif-thanks')) ){
wp_enqueue_style( 'request-info', get_stylesheet_directory_uri() . '/css/request-info.css');
wp_enqueue_style( 'testimonial-slider', get_stylesheet_directory_uri() . '/css/testimonial-slider.css');
};
//Loads style only on Nursing Application Form
if ( is_page(array ('16776', '17285', '17302', '17331')) ){
wp_enqueue_style( 'nursing-app', get_stylesheet_directory_uri() . '/css/nursing-app.css');
};
};
add_action( 'get_footer', 'prefix_add_footer_styles' );
?>