<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Font Control
 */
$wp_customize->add_section('secretum_site_identity_desc', array(
	'panel' 				=> 'secretum_site_identity',
    'title' 				=> __('Description Font Control', 'secretum'),
    'priority' 				=> 10,
));


// Setting :: Font Family
$wp_customize->add_setting('secretum[site_identity_desc_font_family]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Family
$wp_customize->add_control('secretum[site_identity_desc_font_family]', array(
	'label' 				=> __('Font Family', 'secretum'),
	'section' 				=> 'secretum_site_identity_desc_section',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_families()
));


// Setting :: Font Size
$wp_customize->add_setting('secretum[site_identity_desc_font_size]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Size
$wp_customize->add_control('secretum[site_identity_desc_font_size]', array(
	'label' 				=> __('Font Size', 'secretum'),
	'section' 				=> 'secretum_site_identity_desc_section',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_sizes()
));


// Setting :: Font Style
$wp_customize->add_setting('secretum[site_identity_desc_font_style]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Style
$wp_customize->add_control('secretum[site_identity_desc_font_style]', array(
	'label' 				=> __('Font Style', 'secretum'),
	'section' 				=> 'secretum_site_identity_desc_section',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_styles()
));


// Setting :: Text Transform
$wp_customize->add_setting('secretum[site_identity_desc_text_transform]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Text Transform
$wp_customize->add_control('secretum[site_identity_desc_text_transform]', array(
	'label' 				=> __('Text Transform', 'secretum'),
	'section' 				=> 'secretum_site_identity_desc_section',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_text_transform()
));


// Setting :: Text Color
$wp_customize->add_setting('secretum[site_identity_desc_text_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Text Color
$wp_customize->add_control('secretum[site_identity_desc_text_color]', array(
	'label' 				=> __('Text Color', 'secretum'),
	'section' 				=> 'secretum_site_identity_desc_section',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_text_colors()
));
