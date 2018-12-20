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
$wp_customize->add_section('secretum_site_identity_title', array(
	'panel' 				=> 'secretum_site_identity',
    'title' 				=> __('Title Font Control', 'secretum'),
    'priority' 				=> 10,
));


// Setting :: Font Family
$wp_customize->add_setting('secretum[site_identity_title_font_family]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Family
$wp_customize->add_control('secretum[site_identity_title_font_family]', array(
	'label' 				=> __('Font Family', 'secretum'),
	'section' 				=> 'secretum_site_identity_title_section',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_families()
));


// Setting :: Font Size
$wp_customize->add_setting('secretum[site_identity_title_font_size]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Size
$wp_customize->add_control('secretum[site_identity_title_font_size]', array(
	'label' 				=> __('Font Size', 'secretum'),
	'section' 				=> 'secretum_site_identity_title_section',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_sizes()
));


// Setting :: Font Style
$wp_customize->add_setting('secretum[site_identity_title_font_style]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Style
$wp_customize->add_control('secretum[site_identity_title_font_style]', array(
	'label' 				=> __('Font Style', 'secretum'),
	'section' 				=> 'secretum_site_identity_title_section',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_styles()
));


// Setting :: Text Transform
$wp_customize->add_setting('secretum[site_identity_title_text_transform]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Text Transform
$wp_customize->add_control('secretum[site_identity_title_text_transform]', array(
	'label' 				=> __('Text Transform', 'secretum'),
	'section' 				=> 'secretum_site_identity_title_section',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_text_transform()
));


// Setting :: Link Color
$wp_customize->add_setting('secretum[site_identity_title_link_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Link Color
$wp_customize->add_control('secretum[site_identity_title_link_color]', array(
	'label' 				=> __('Link Color', 'secretum'),
	'section' 				=> 'secretum_site_identity_title_section',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_link_colors()
));


// Setting :: Link Hover Color
$wp_customize->add_setting('secretum[site_identity_title_link_hover_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Link Hover Color
$wp_customize->add_control('secretum[site_identity_title_link_hover_color]', array(
	'label' 				=> __('Link Hover Color', 'secretum'),
	'section' 				=> 'secretum_site_identity_title_section',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_link_hover_colors()
));
