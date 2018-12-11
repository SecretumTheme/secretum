<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Wrapper
 */
$wp_customize->add_section('secretum_primary_nav_wrapper', array(
	'panel' 			=> 'secretum_primary_nav',
    'title' 			=> __('Wrapper', 'secretum'),
    'description' 		=> __('Customize the outter wrapper around the menu.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Background Color
$wp_customize->add_setting('secretum[primary_nav_wrapper_background_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Background Color
$wp_customize->add_control('secretum[primary_nav_wrapper_background_color]', array(
	'label' 			=> __('Background Color', 'secretum'),
	'section' 			=> 'secretum_primary_nav_wrapper',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_background_colors()
));


// Setting :: Padding
$wp_customize->add_setting('secretum[primary_nav_wrapper_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Padding
$wp_customize->add_control('secretum[primary_nav_wrapper_padding]', array(
	'label' 			=> __('Padding TOP & BOTTOM', 'secretum'),
	'section' 			=> 'secretum_primary_nav_wrapper',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_padding_top_bottom()
));


// Setting :: Bottom Margin
$wp_customize->add_setting('secretum[primary_nav_wrapper_margin]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Bottom Margin
$wp_customize->add_control('secretum[primary_nav_wrapper_margin]', array(
	'label' 			=> __('Bottom Margin', 'secretum'),
	'description' 		=> __('Increases the spacing after the wrapper, pushing the body down.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_wrapper',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_margin_bottom()
));


// Setting :: Border Type
$wp_customize->add_setting('secretum[primary_nav_wrapper_border_type]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Border Type
$wp_customize->add_control('secretum[primary_nav_wrapper_border_type]', array(
	'label' 			=> __('Border Type', 'secretum'),
	'section' 			=> 'secretum_primary_nav_wrapper',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_border()
));


// Setting :: Border Color
$wp_customize->add_setting('secretum[primary_nav_wrapper_border_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Border Color
$wp_customize->add_control('secretum[primary_nav_wrapper_border_color]', array(
	'label' 			=> __('Border Color', 'secretum'),
	'section' 			=> 'secretum_primary_nav_wrapper',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_border_colors()
));
