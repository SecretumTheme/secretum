<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Display Settings
 */
$wp_customize->add_section('secretum_footer_display' , array(
	'panel' 		=> 'secretum_footer',
    'title' 		=> __('Display Settings', 'secretum'),
    'description' 	=> __('Enable/show or Disable/hide features.', 'secretum'),
    'priority' 		=> 10,
));


// Setting :: Enable Custom Footer Feature
$wp_customize->add_setting('secretum[custom_footers]' , array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Enable Custom Footer Feature
$wp_customize->add_control('secretum[custom_footers]', array(
	'label' 		=> __('Enable Custom Footer Feature', 'secretum'),
	'description' 	=> __('Enables custom post type "Footers" available under the Appearances menu, overrides default footer area. Hand create any footer layout, then publish and schedule footers. A footer must be published before this feature will override the default footer settings.', 'secretum'),
	'section' 		=> 'secretum_footer_display',
	'type' 			=> 'checkbox'
));


// Setting :: Disable Footer Area
$wp_customize->add_setting('secretum[footer_status]' , array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Disable Footer Area
$wp_customize->add_control('secretum[footer_status]', array(
	'label' 	=> __('Disable Footer Area', 'secretum'),
	'section' 	=> 'secretum_footer_display',
	'type' 		=> 'checkbox'
));
