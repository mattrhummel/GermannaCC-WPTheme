<?php 

//Deregister Google Search Styles

function foundationpress_deregister_styles() {

	wp_deregister_style( 'wgs' );
	wp_deregister_style( 'wgs2' );
	wp_deregister_style( 'wgs3' );
	wp_deregister_style( 'fb_data_style' );
	wp_deregister_style( 'contact-form-7' );
	wp_deregister_style( 'foundation-icons' );
	wp_deregister_script( 'tota11y'  );

}

add_action( 'wp_print_styles', 'foundationpress_deregister_styles', 100 );


?>