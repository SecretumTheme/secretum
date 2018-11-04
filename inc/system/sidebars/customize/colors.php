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
$wp_customize->add_section('secretum_sidebar_colors', array(
	'panel' 			=> 'secretum_sidebars',
    'title' 			=> __('Color Settings', 'secretum'),
    'description' 		=> __('Colors are based on the themes color palette.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Sidebar Background Color
$wp_customize->add_setting('secretum[sidebar_background_color]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Sidebar Background Color
$wp_customize->add_control('secretum[sidebar_background_color]', array(
	'label' 			=> __('Sidebar Background Color', 'secretum'),
	'section' 			=> 'secretum_sidebar_colors',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_background_colors()
));
