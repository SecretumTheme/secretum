<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Container
 */
$wp_customize->add_section('secretum_header_top_container', array(
	'panel' 			=> 'secretum_header_top',
    'title' 			=> __('Container', 'secretum'),
    'description' 		=> __('Customize the container within the wrapper and around the top header area.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Container Type
$wp_customize->add_setting('secretum[header_top_container]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Container Type
$wp_customize->add_control('secretum[header_top_container]', array(
	'label' 			=> __('Container Type', 'secretum'),
	'section' 			=> 'secretum_header_top_container',
	'type' 				=> 'radio',
	'choices' 			=> secretum_customizer_container_types()
));


// Setting :: Background Color
$wp_customize->add_setting('secretum[header_top_container_background_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Background Color
$wp_customize->add_control('secretum[header_top_container_background_color]', array(
	'label' 			=> __('Background Color', 'secretum'),
	'section' 			=> 'secretum_header_top_container',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_background_colors()
));


// Setting :: Padding - LEFT & RIGHT
$wp_customize->add_setting('secretum[header_top_container_padding_x]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Padding - LEFT & RIGHT
$wp_customize->add_control('secretum[header_top_container_padding_x]', array(
	'label' 			=> __('Padding - LEFT & RIGHT', 'secretum'),
	'section' 			=> 'secretum_header_top_container',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_padding_left_right()
));


// Setting :: Padding - TOP & BOTTOM
$wp_customize->add_setting('secretum[header_top_container_padding_y]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Padding - TOP & BOTTOM
$wp_customize->add_control('secretum[header_top_container_padding_y]', array(
	'label' 			=> __('Padding - TOP & BOTTOM', 'secretum'),
	'section' 			=> 'secretum_header_top_container',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_padding_top_bottom()
));



// Setting :: Border Type
$wp_customize->add_setting('secretum[header_top_container_border_type]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Border Type
$wp_customize->add_control('secretum[header_top_container_border_type]', array(
	'label' 			=> __('Border Type', 'secretum'),
	'section' 			=> 'secretum_header_top_container',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_border()
));


// Setting :: Border Color
$wp_customize->add_setting('secretum[header_top_container_border_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Border Color
$wp_customize->add_control('secretum[header_top_container_border_color]', array(
	'label' 			=> __('Border Color', 'secretum'),
	'section' 			=> 'secretum_header_top_container',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_border_colors()
));
