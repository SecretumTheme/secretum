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
$wp_customize->add_section('secretum_copyright_nav_colors' , array(
	'panel' 			=> 'secretum_copyright_nav',
    'title' 			=> __('Color Settings', 'secretum'),
    'description' 		=> __('Colors are based on the themes color palette.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Menu Item Background Color
$wp_customize->add_setting('secretum[copyright_nav_item_background_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Menu Item Background Color
$wp_customize->add_control('secretum[copyright_nav_item_background_color]', array(
	'label' 			=> __('Menu Item Background Color', 'secretum'),
	'section' 			=> 'secretum_copyright_nav_colors',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_background_colors_array()
));


// Setting :: Menu Text Color
$wp_customize->add_setting('secretum[copyright_nav_item_text_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Menu Text Color
$wp_customize->add_control('secretum[copyright_nav_item_text_color]', array(
	'label' 			=> __('Menu Item Text Color', 'secretum'),
	'section' 			=> 'secretum_copyright_nav_colors',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_text_colors_array()
));


// Setting :: Menu Text Hover Color
$wp_customize->add_setting('secretum[copyright_nav_item_text_color_hover]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Menu Text Hover Color
$wp_customize->add_control('secretum[copyright_nav_item_text_color_hover]', array(
	'label' 			=> __('Menu Item Text Hover Color', 'secretum'),
	'section' 			=> 'secretum_copyright_nav_colors',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_text_hover_colors_array()
));


// Setting :: Menu Item Border Color
$wp_customize->add_setting('secretum[copyright_nav_item_border_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Menu Item Border Color
$wp_customize->add_control('secretum[copyright_nav_item_border_color]', array(
	'label' 			=> __('Menu Item Border Color', 'secretum'),
	'description' 		=> __('Manage border size and location under the Display Settings tab.', 'secretum'),
	'section' 			=> 'secretum_copyright_nav_colors',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_border_colors_array()
));
