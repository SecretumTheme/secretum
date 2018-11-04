<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Color Settings
 */
$wp_customize->add_section('secretum_footer_colors' , array(
	'panel' 		=> 'secretum_footer',
    'title' 		=> __('Color Settings', 'secretum'),
    'description' 	=> __('Colors are based on the themes color palette.', 'secretum'),
    'priority' 		=> 10,
));


// Setting :: Footer Background Color
$wp_customize->add_setting('secretum[footer_background_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Footer Background Color
$wp_customize->add_control('secretum[footer_background_color]', array(
	'label' 	=> __('Footer Background Color', 'secretum'),
	'section' 	=> 'secretum_footer_colors',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_background_colors()
));


// Setting :: Footer Top Border Color
$wp_customize->add_setting('secretum[footer_border_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Footer Top Border Color
$wp_customize->add_control('secretum[footer_border_color]', array(
	'label' 	=> __('Footer Top Border Color', 'secretum'),
	'section' 	=> 'secretum_footer_colors',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_border_colors()
));
