<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Wrapper
 */
$wp_customize->add_section('secretum_header_top_wrapper', array(
	'panel' 			=> 'secretum_header_top',
    'title' 			=> __('Wrapper', 'secretum'),
    'description' 		=> __('Customize the outter wrapper around the top header area.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Background Color
$wp_customize->add_setting('secretum[header_top_wrapper_background_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Background Color
$wp_customize->add_control('secretum[header_top_wrapper_background_color]', array(
	'label' 			=> __('Background Color', 'secretum'),
	'section' 			=> 'secretum_header_top_wrapper',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_background_colors()
));


// Setting :: Padding - TOP & BOTTOM
$wp_customize->add_setting('secretum[header_top_wrapper_padding_y]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Padding - TOP & BOTTOM
$wp_customize->add_control('secretum[header_top_wrapper_padding_y]', array(
	'label' 			=> __('Padding - TOP & BOTTOM', 'secretum'),
	'section' 			=> 'secretum_header_top_wrapper',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_padding_top_bottom()
));


// Setting :: Bottom Margin
$wp_customize->add_setting('secretum[header_top_wrapper_margin_bottom]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Bottom Margin
$wp_customize->add_control('secretum[header_top_wrapper_margin_bottom]', array(
	'label' 			=> __('Bottom Margin', 'secretum'),
	'description' 		=> __('Increases the spacing after the wrapper, pushing the header down.', 'secretum'),
	'section' 			=> 'secretum_header_top_wrapper',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_margin_bottom()
));


// Setting :: Border Type
$wp_customize->add_setting('secretum[header_top_wrapper_border_type]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Border Type
$wp_customize->add_control('secretum[header_top_wrapper_border_type]', array(
	'label' 			=> __('Border Type', 'secretum'),
	'section' 			=> 'secretum_header_top_wrapper',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_border()
));


// Setting :: Border Color
$wp_customize->add_setting('secretum[header_top_wrapper_border_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Border Color
$wp_customize->add_control('secretum[header_top_wrapper_border_color]', array(
	'label' 			=> __('Border Color', 'secretum'),
	'section' 			=> 'secretum_header_top_wrapper',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_border_colors()
));
