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
$wp_customize->add_section('secretum_entry_colors' , array(
	'panel' 		=> 'secretum_entry',
    'title' 		=> __('Color Settings', 'secretum'),
    'description' 	=> __('Colors are based on the themes color palette.', 'secretum'),
    'priority' 		=> 10,
));


// Setting :: Entry Background Color
$wp_customize->add_setting('secretum[entry_background_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Entry Background Color
$wp_customize->add_control('secretum[entry_background_color]', array(
	'label' 	=> __('Entry Background Color', 'secretum'),
	'section' 	=> 'secretum_entry_colors',
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
