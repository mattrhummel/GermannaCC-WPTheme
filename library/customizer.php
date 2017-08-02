<?php
function foundation_germanna_customize_register( $wp_customize ) {
	
//Default Section and adds settings for social media, and company contacts
$wp_customize->add_section( 'contact-details' , array(
    'title' => __( 'Rock The River Extras', '_s' ),
    'priority' => 30,
    'description' => __( 'Default Settings for Theme', '_s' )
) );
// Add Number Setting
$wp_customize->add_setting( 'number');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'number', array(
    'label' => __( 'Rock The River Contact Number', '_s' ),
    'section' => 'contact-details',
    'settings' => 'number',
    'transport' => 'refresh'
) ) );
// Add Facebook Setting
$wp_customize->add_setting( 'facebook' , array( 'default',  '=&gt;' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
    'label' => __( 'Facebook', '_s' ),
    'section' => 'contact-details',
    'settings' => 'facebook',
) ) );
//Add Twitter Setting
$wp_customize->add_setting( 'twitter' , array( 'default',  '=&gt;' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
    'label' => __( 'Twitter', '_s' ),
    'section' => 'contact-details',
    'settings' => 'twitter',
) ) );
// Add Instagram Setting
$wp_customize->add_setting( 'instagram' , array( 'default',  '=&gt;' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array(
    'label' => __( 'Instagram', '_s' ),
    'section' => 'contact-details',
    'settings' => 'instagram',
) ) );
// Add Pinterest Setting
$wp_customize->add_setting( 'youtube' , array( 'default',  '=&gt;' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube', array(
    'label' => __( 'Youtube', '_s' ),
    'section' => 'contact-details',
    'settings' => 'youtube',
) ) );
//Default Section and adds settings for social media, and company contacts
$wp_customize->add_section( 'logos' , array(
    'title' => __( 'Site Logos', '_s' ),
    'priority' => 30,
    'description' => __( 'Logos for Theme', '_s' )
) );
// Add Banner Logo
$wp_customize->add_setting( 'big logo' , array( 'default',  '=&gt;' ));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'big-logo', array(
    'label' => __( 'Select Site Logo', '_s' ),
    'section' => 'logos',
    'settings' => 'big logo',
) ) );


}
add_action( 'customize_register', 'foundation_germanna_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function foundation_germanna_customize_preview_js() {
	wp_enqueue_script( 'foundation_germanna_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'foundation_germanna_customize_preview_js' );
