<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: General Settings
 */
$wp_customize->add_section('secretum_header_settings', array(
	'panel' 			=> 'secretum_header',
    'title' 			=> __('General Settings', 'secretum'),
    'description' 		=> __('Other unique settings and features', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Sticky Header
$wp_customize->add_setting('secretum[header_sticky]', array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'sanitize_key'
));

// Control :: Sticky Header
$wp_customize->add_control('secretum[header_sticky]', array(
	'label' 			=> __('Sticky Header', 'secretum'),
	'section' 			=> 'secretum_header_settings',
	'type' 				=> 'radio',
	'choices' 			=> array(
		'y' 			=> __('Enable', 'secretum'),
		'' 				=> __('Disable', 'secretum')
	)
));
