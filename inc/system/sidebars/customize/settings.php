<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Sidebar Settings
 */
$wp_customize->add_section('secretum_sidebar_settings', array(
	'panel' 	=> 'secretum_sidebars',
    'title' 	=> __('Sidebar Settings', 'secretum'),
    'priority' 	=> 10,
));


// Setting :: Sidebar Display Location
$wp_customize->add_setting('secretum[sidebar_location]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Sidebar Display Location
$wp_customize->add_control('secretum[sidebar_location]', array(
	'label' 		=> __('Sidebar Display Location', 'secretum'),
	'description' 	=> __('Set the global sidebar location. This setting can be overridden at the post/page/post_type level.', 'secretum'),
	'section' 		=> 'secretum_sidebar_settings',
	'type' 			=> 'radio',
	'choices' 		=> array(
    	''          	=> __( 'Based on Theme', 'secretum' ),
    	'right'     	=> __( 'Right Sidebar', 'secretum' ),
    	'left'      	=> __( 'Left Sidebar', 'secretum' ),
    	'both'      	=> __( 'Both Sidebars', 'secretum' ),
    	'none'      	=> __( 'No Sidebars', 'secretum' )
	)
));
