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
	'choices' 	=> array(
		'' 					=> __('No Background Color', 'secretum'),
		'bg-transparent' 	=> __('Transparent Background', 'secretum'),
		'content-bg' 		=> __('Content Background Color', 'secretum'),
		'body-bg' 			=> __('Website Background Color', 'secretum'),
		'bg-primary' 		=> __('Primary Color', 'secretum'),
		'bg-primary-dark' 	=> __('Primary Dark Color', 'secretum'),
		'bg-primary-light' 	=> __('Primary Light Color', 'secretum'),
		'bg-secondary' 		=> __('Secondary Color', 'secretum'),
		'bg-light' 			=> __('Light Color', 'secretum'),
		'bg-dark' 			=> __('Dark Color', 'secretum'),
		'bg-black' 			=> __('Black Color', 'secretum'),
		'bg-blackish' 		=> __('Blackish Color', 'secretum'),
		'bg-blue' 			=> __('Blue Color', 'secretum'),
		'bg-cyan' 			=> __('Cyan Color', 'secretum'),
		'bg-gray' 			=> __('Gray Color', 'secretum'),
		'bg-gray-dark' 		=> __('Gray Dark Color', 'secretum'),
		'bg-green' 			=> __('Green Color', 'secretum'),
		'bg-indigo' 		=> __('Indigo Color', 'secretum'),
		'bg-orange' 		=> __('Orange Color', 'secretum'),
		'bg-pink' 			=> __('Pink Color', 'secretum'),
		'bg-purple' 		=> __('Purple Color', 'secretum'),
		'bg-red' 			=> __('Red Color', 'secretum'),
		'bg-teal' 			=> __('Teal Color', 'secretum'),
		'bg-white' 			=> __('White Color', 'secretum'),
		'bg-whiteish' 		=> __('Whiteish Color', 'secretum'),
		'bg-yellow' 		=> __('Yellow Color', 'secretum')
	)
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
	'choices' 	=> array(
		'' 					=> __('No Color', 'secretum'),
		'border-primary' 	=> __('Primary', 'secretum'),
		'border-secondary' 	=> __('Secondary', 'secretum'),
		'border-light' 		=> __('Light', 'secretum'),
		'border-dark' 		=> __('Dark', 'secretum'),
		'border-black' 		=> __('Black', 'secretum'),
		'border-black-off' 	=> __('Black Off', 'secretum'),
		'border-blue' 		=> __('Blue', 'secretum'),
		'border-cyan' 		=> __('Cyan', 'secretum'),
		'border-gray' 		=> __('Gray', 'secretum'),
		'border-gray-dark' 	=> __('Gray Dark', 'secretum'),
		'border-green' 		=> __('Green', 'secretum'),
		'border-indigo' 	=> __('Indigo', 'secretum'),
		'border-orange' 	=> __('Orange', 'secretum'),
		'border-pink' 		=> __('Pink', 'secretum'),
		'border-purple' 	=> __('Purple', 'secretum'),
		'border-red' 		=> __('Red', 'secretum'),
		'border-teal' 		=> __('Teal', 'secretum'),
		'border-white' 		=> __('White', 'secretum'),
		'border-yellow' 	=> __('Yellow', 'secretum')
	)
));
