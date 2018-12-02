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
$wp_customize->add_section('secretum_copyright_colors' , array(
	'panel' 		=> 'secretum_copyright',
    'title' 		=> __('Color Settings', 'secretum'),
    'description' 	=> __('Colors are based on the themes color palette.', 'secretum'),
    'priority' 		=> 10,
));


// Setting :: Container Background Color
$wp_customize->add_setting('secretum[copyright_background_color]' , array(
	'default' 			=> $default['copyright_background_color'],
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Container Background Color
$wp_customize->add_control('secretum[copyright_background_color]', array(
	'label' 	=> __('Container Background Color', 'secretum'),
	'section' 	=> 'secretum_copyright_colors',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_background_colors()
));


// Setting :: Text Color
$wp_customize->add_setting('secretum[copyright_text_color]' , array(
	'default' 			=> $default['copyright_text_color'],
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Text Color
$wp_customize->add_control('secretum[copyright_text_color]', array(
	'label' 	=> __('Copyright Statement Text Color', 'secretum'),
	'section' 	=> 'secretum_copyright_colors',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_link_colors()
));


// Setting :: Text Hover Color
$wp_customize->add_setting('secretum[copyright_text_color_hover]' , array(
	'default' 			=> $default['copyright_text_color_hover'],
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Text Hover Color
$wp_customize->add_control('secretum[copyright_text_color_hover]', array(
	'label' 	=> __('Text Hover Color', 'secretum'),
	'section' 	=> 'secretum_copyright_colors',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_link_hover_colors()
));


// Setting :: Menu Item Background Color
$wp_customize->add_setting('secretum[copyright_menu_background_color]' , array(
	'default' 			=> $default['copyright_menu_background_color'],
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Menu Item Background Color
$wp_customize->add_control('secretum[copyright_menu_background_color]', array(
	'label' 	=> __('Menu Item Background Color', 'secretum'),
	'section' 	=> 'secretum_copyright_colors',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_background_colors()
));


// Setting :: Menu Text Color
$wp_customize->add_setting('secretum[copyright_menu_text_color]' , array(
	'default' 			=> $default['copyright_menu_text_color'],
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Menu Text Color
$wp_customize->add_control('secretum[copyright_menu_text_color]', array(
	'label' 	=> __('Menu Item Text Color', 'secretum'),
	'section' 	=> 'secretum_copyright_colors',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_link_colors()
));


// Setting :: Menu Text Hover Color
$wp_customize->add_setting('secretum[copyright_menu_text_color_hover]' , array(
	'default' 			=> $default['copyright_menu_text_color_hover'],
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Menu Text Hover Color
$wp_customize->add_control('secretum[copyright_menu_text_color_hover]', array(
	'label' 	=> __('Menu Item Text Hover Color', 'secretum'),
	'section' 	=> 'secretum_copyright_colors',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_link_hover_colors()
));


// Setting :: Menu Item Border Color
$wp_customize->add_setting('secretum[copyright_menu_border_color]' , array(
	'default' 			=> $default['copyright_menu_border_color'],
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Menu Item Border Color
$wp_customize->add_control('secretum[copyright_menu_border_color]', array(
	'label' 		=> __('Menu Item Border Color', 'secretum'),
	'description' 	=> __('Manage border size and location under the Display Settings tab.', 'secretum'),
	'section' 		=> 'secretum_copyright_colors',
	'type' 			=> 'select',
	'choices' 		=> secretum_customizer_border_colors()
));
