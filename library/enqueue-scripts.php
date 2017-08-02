<?php
if ( ! function_exists( 'foundationpress_scripts' ) ) :
function foundationpress_scripts() {
// Enqueue Main Stylesheet
wp_enqueue_style( 'Main Stylesheet', get_stylesheet_directory_uri() . '/css/foundation.min.css');
wp_enqueue_style( 'Print Stylesheet', get_template_directory_uri() . '/css/print.min.css', null, null, 'print');
// Enqueue Main Stylesheet
wp_enqueue_style( 'Font Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
// Enqueue Request Info Stylesheet
if (is_page('request-information')) {
wp_enqueue_style( 'RequestInfo', get_stylesheet_directory_uri() . '/css/request-info.css');
wp_enqueue_style( 'TestimonialSlider', get_stylesheet_directory_uri() . '/css/testimonial-slider.css');
};
// Deregister the jquery version bundled with wordpress
wp_deregister_script( 'jquery' );
// Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required)
wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.8.3', false );
	// Fastclick removes the 300ms delay on click events in mobile environments. Must be placed in header. (Not required)
	//wp_register_script( 'fastclick', get_template_directory_uri() . '/js/vendor/fastclick.js', array(), '1.0.0', false );
	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true);
wp_register_script( 'slider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '0.0.1', true );
wp_register_script( 'gcc-scripts', get_template_directory_uri() . '/js/gcc-scripts.min.js', array('jquery'), '0.0.1', true );
// Enqueue Request Info Stylesheet
if (is_page('request-information')) {
	wp_register_script( 'form-scripts', get_template_directory_uri() . '/js/form-scripts.js', array('jquery'), '0.0.1', true ); };
if (is_page('request-information')) {
wp_register_script( 'form-scripts', get_template_directory_uri() . '/js/form-scripts.js', array('jquery'), '0.0.1', true ); };
// Self hosted jQuery placed in the footer. (Comment the script above and uncomment the script below if you want to switch).
	//wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '2.1.3', true );
	// If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88
	// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.js', array('jquery'), '5.5.2', true );
// Enqueue all registered scripts
wp_enqueue_script( 'modernizr' );
wp_enqueue_script( 'fastclick' );
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'slider' );
wp_enqueue_script( 'gcc-scripts' );
wp_enqueue_script( 'form-scripts' );
wp_enqueue_script( 'sharethis-switch');
wp_enqueue_script( 'sharethis-buttons');
wp_enqueue_script( 'sharethis-lt-options');
wp_enqueue_script( 'foundation' );
}
add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;
?>