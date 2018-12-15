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
$wp_customize->add_section('secretum_copyright_font', array(
	'panel' 				=> 'secretum_copyright',
    'title' 				=> __('Font Control', 'secretum'),
    'priority' 				=> 10,
));


// Setting :: Text Alignment
$wp_customize->add_setting('secretum[copyright_text_alignment]', array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Text Alignment
$wp_customize->add_control('secretum[copyright_text_alignment]', array(
	'label' 				=> __('Text Alignment', 'secretum'),
	'section' 				=> 'secretum_copyright_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_text_alignments()
));


// Setting :: Font Family
$wp_customize->add_setting('secretum[copyright_text_font_family]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Family
$wp_customize->add_control('secretum[copyright_text_font_family]', array(
	'label' 				=> __('Font Family', 'secretum'),
	'section' 				=> 'secretum_copyright_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_families()
));


// Setting :: Font Size
$wp_customize->add_setting('secretum[copyright_text_font_size]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Size
$wp_customize->add_control('secretum[copyright_text_font_size]', array(
	'label' 				=> __('Font Size', 'secretum'),
	'section' 				=> 'secretum_copyright_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_sizes()
));


// Setting :: Font Style
$wp_customize->add_setting('secretum[copyright_text_font_style]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Style
$wp_customize->add_control('secretum[copyright_text_font_style]', array(
	'label' 				=> __('Font Style', 'secretum'),
	'section' 				=> 'secretum_copyright_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_styles()
));


// Setting :: Text Transform
$wp_customize->add_setting('secretum[copyright_text_transform]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Text Transform
$wp_customize->add_control('secretum[copyright_text_transform]', array(
	'label' 				=> __('Text Transform', 'secretum'),
	'section' 				=> 'secretum_copyright_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_text_transform()
));


// Setting :: Text Color
$wp_customize->add_setting('secretum[copyright_text_text_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Text Color
$wp_customize->add_control('secretum[copyright_text_text_color]', array(
	'label' 				=> __('Text Color', 'secretum'),
	'section' 				=> 'secretum_copyright_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_text_colors()
));


// Setting :: Link Color
$wp_customize->add_setting('secretum[copyright_text_link_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Link Color
$wp_customize->add_control('secretum[copyright_text_link_color]', array(
	'label' 				=> __('Link Color', 'secretum'),
	'section' 				=> 'secretum_copyright_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_link_colors()
));


// Setting :: Link Hover Color
$wp_customize->add_setting('secretum[copyright_text_link_hover_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Link Hover Color
$wp_customize->add_control('secretum[copyright_text_link_hover_color]', array(
	'label' 				=> __('Link Hover Color', 'secretum'),
	'section' 				=> 'secretum_copyright_font',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_link_hover_colors()
));