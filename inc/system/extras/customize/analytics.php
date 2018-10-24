<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Analytics Tracking Code
 */
$wp_customize->add_section('secretum_analytics', array(
	'panel' 			=> 'secretum_extras',
    'title' 			=> __('Analytics Tracking Code', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Analytics Code Location
$wp_customize->add_setting('secretum[analytics_location]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Analytics Code Location
$wp_customize->add_control('secretum[analytics_location]', array(
	'label' 			=> __('Analytics Code Location', 'secretum'),
	'section' 			=> 'secretum_analytics',
	'type' 				=> 'radio',
	'choices' 			=> array(
		'' 				=> __('Footer (best performance)', 'secretum'),
		'header' 		=> __('Header (best tracking)', 'secretum')
	)
));


// Setting :: Analytics Tracking Code
$wp_customize->add_setting('secretum[analytics_code]', array(
	'sanitize_js_callback' 	=> 'secretum_escape_script',
	'sanitize_callback' 	=> 'secretum_sanitize_script',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Analytics Tracking Code
$wp_customize->add_control('secretum[analytics_code]', array(
	'label' 			=> __('Analytics Tracking Code', 'secretum'),
	'description' 		=> __('Include all opening and closing script tags.', 'secretum'),
	'section' 			=> 'secretum_analytics',
	'type' 				=> 'textarea'
));
