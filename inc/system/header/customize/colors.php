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
$wp_customize->add_section('secretum_header_colors' , array(
	'panel' 			=> 'secretum_header',
    'title' 			=> __('Color Settings', 'secretum'),
    'description' 		=> __('Colors are based on the themes color palette.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Header Background Color
$wp_customize->add_setting('secretum[header_background_color]' , array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'sanitize_key'
));

// Control :: Header Background Color
$wp_customize->add_control('secretum[header_background_color]', array(
	'label' 			=> __('Header Background Color', 'secretum'),
	'section' 			=> 'secretum_header_colors',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_background_colors()
));


// Setting :: Header Bottom Border Color
$wp_customize->add_setting('secretum[header_border_color]' , array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'sanitize_key'
));

// Control :: Header Bottom Border Color
$wp_customize->add_control('secretum[header_border_color]', array(
	'label' 			=> __('Header Bottom Border Color', 'secretum'),
	'section' 			=> 'secretum_header_colors',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_border_colors()
));


// Setting :: Primary Menu Background Color
$wp_customize->add_setting('secretum[header_menu_background_color]' , array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'sanitize_key'
));

// Control :: Primary Menu Background Color
$wp_customize->add_control('secretum[header_menu_background_color]', array(
	'label' 			=> __('Primary Menu Background Color', 'secretum'),
	'section' 			=> 'secretum_header_colors',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_background_colors()
));


// Setting :: Primary Menu Border Color
$wp_customize->add_setting('secretum[header_menu_border_color]' , array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'sanitize_key'
));

// Control :: Primary Menu Border Color
$wp_customize->add_control('secretum[header_menu_border_color]', array(
	'label' 			=> __('Primary Menu Border Color', 'secretum'),
	'section' 			=> 'secretum_header_colors',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_border_colors()
));


// If Header Top Enabled, Include Header Top Template
if (secretum_mod('header_top_status')) {
	// Setting :: Header Top Background Color
	$wp_customize->add_setting('secretum[header_top_background_color]' , array(
		'default' 			=> '',
		'type'       		=> 'option',
		'transport' 		=> 'refresh',
		'sanitize_callback' => 'sanitize_key'
	));

	// Control :: Header Top Background Color
	$wp_customize->add_control('secretum[header_top_background_color]', array(
		'label' 			=> __('Header Top Background Color', 'secretum'),
		'section' 			=> 'secretum_header_colors',
		'type' 				=> 'select',
		'choices' 			=> secretum_customizer_background_colors()
	));


	// Setting :: Header Top Text Color
	$wp_customize->add_setting('secretum[header_top_text_color]' , array(
		'default' 			=> '',
		'type'       		=> 'option',
		'transport' 		=> 'refresh',
		'sanitize_callback' => 'sanitize_key'
	));

	// Control :: Header Top Text Color
	$wp_customize->add_control('secretum[header_top_text_color]', array(
		'label' 			=> __('Header Top Text Color', 'secretum'),
		'section' 			=> 'secretum_header_colors',
		'type' 				=> 'select',
		'choices' 			=> array(
			'' 					=> __('Default Color', 'secretum'),
			'navbar-light' 		=> __('Dark Text', 'secretum'),
			'navbar-dark' 		=> __('Light text', 'secretum')
		)
	));
}
