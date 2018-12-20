<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Setting :: Hide Brand Logo / Tagline Area
$wp_customize->add_setting('secretum[site_identity_branding_status]', array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Hide Brand Logo / Tagline Area
$wp_customize->add_control('secretum[site_identity_branding_status]', array(
	'label' 		=> __('Hide Brand Logo / Tagline Area', 'secretum'),
	'section' 		=> 'secretum_site_identity_section',
	'type' 			=> 'checkbox',
    'priority' 		=> 10,
));


// Setting :: Hide Brand Text / Logo
$wp_customize->add_setting('secretum[site_identity_logo_status]', array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Hide Brand Text / Logo
$wp_customize->add_control('secretum[site_identity_logo_status]', array(
	'label' 		=> __('Hide Tagline / Desc Text', 'secretum'),
	'section' 		=> 'secretum_site_identity_section',
	'type' 			=> 'checkbox',
    'priority' 		=> 10,
));


// Setting :: Hide Tagline / Desc Text
$wp_customize->add_setting('secretum[site_identity_tagline_status]', array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Hide Tagline / Desc Text
$wp_customize->add_control('secretum[site_identity_tagline_status]', array(
	'label' 		=> __('Hide Tagline / Desc Text', 'secretum'),
	'section' 		=> 'secretum_site_identity_section',
	'type' 			=> 'checkbox',
    'priority' 		=> 10,
));
