<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Color Setting
 */
$wp_customize->add_section('secretum_body_colors', array(
	'panel' 		=> 'secretum_body',
    'title' 		=> __('Color Settings', 'secretum'),
    'description' 	=> __('Colors are based on the themes color palette.', 'secretum'),
    'priority' 		=> 10,
));


// Setting :: Body Background Color
$wp_customize->add_setting('secretum[body_background_color]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Body Background Color
$wp_customize->add_control('secretum[body_background_color]', array(
	'label' 	=> __('Body Background Color', 'secretum'),
	'section' 	=> 'secretum_body_colors',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_background_colors()
));
