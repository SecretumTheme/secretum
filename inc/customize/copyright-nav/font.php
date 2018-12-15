<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Menu Items
 */
$wp_customize->add_section('secretum_copyright_nav_font', array(
	'panel' 				=> 'secretum_copyright_nav',
    'title' 				=> __('Font Control', 'secretum'),
    'priority' 				=> 10,
));


// Setting :: Font Family
$wp_customize->add_setting('secretum[copyright_nav_font_family]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Family
$wp_customize->add_control('secretum[copyright_nav_font_family]', array(
	'label' 				=> __('Font Family', 'secretum'),
	'section' 				=> 'secretum_copyright_nav_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_families()
));


// Setting :: Font Size
$wp_customize->add_setting('secretum[copyright_nav_font_size]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Size
$wp_customize->add_control('secretum[copyright_nav_font_size]', array(
	'label' 				=> __('Font Size', 'secretum'),
	'section' 				=> 'secretum_copyright_nav_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_sizes()
));


// Setting :: Font Styling
$wp_customize->add_setting('secretum[copyright_nav_font_style]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Styling
$wp_customize->add_control('secretum[copyright_nav_font_style]', array(
	'label' 				=> __('Font Styling', 'secretum'),
	'section' 				=> 'secretum_copyright_nav_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_styles()
));


// Setting :: Text Transform
$wp_customize->add_setting('secretum[copyright_nav_text_transform]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Text Transform
$wp_customize->add_control('secretum[copyright_nav_text_transform]', array(
	'label' 				=> __('Text Transform', 'secretum'),
	'section' 				=> 'secretum_copyright_nav_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_text_transform()
));


// Setting :: Text Color
$wp_customize->add_setting('secretum[copyright_nav_item_text_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Text Color
$wp_customize->add_control('secretum[copyright_nav_item_text_color]', array(
	'label' 				=> __('Text Color', 'secretum'),
	'section' 				=> 'secretum_copyright_nav_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_text_colors()
));


// Setting :: Link Color
$wp_customize->add_setting('secretum[copyright_nav_item_link_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Link Color
$wp_customize->add_control('secretum[copyright_nav_item_link_color]', array(
	'label' 				=> __('Link Color', 'secretum'),
	'section' 				=> 'secretum_copyright_nav_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_link_colors()
));


// Setting :: Link Hover Color
$wp_customize->add_setting('secretum[copyright_nav_item_link_hover_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Link Hover Color
$wp_customize->add_control('secretum[copyright_nav_item_link_hover_color]', array(
	'label' 				=> __('Link Hover Color', 'secretum'),
	'section' 				=> 'secretum_copyright_nav_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_link_hover_colors()
));