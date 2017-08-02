<?php 

//Deregister Google Search Styles

add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_styles() {

	wp_deregister_style( 'wgs' );
	wp_deregister_style( 'wgs2' );
	wp_deregister_style( 'wgs3' );
	wp_deregister_style( 'fb_data_style' );
	wp_deregister_style( 'contact-form-7' );

}

?>