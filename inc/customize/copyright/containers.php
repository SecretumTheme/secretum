<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Container Settings
 */
$wp_customize->add_section('secretum_copyright_area', array(
	'panel' 	=> 'secretum_copyright',
    'title' 	=> __('Container Settings', 'secretum'),
    'priority' 	=> 10,
));


// Setting :: Copyright Container Type
$wp_customize->add_setting('secretum[copyright_container]', array(
	'default' 			=> $default['copyright_container'],
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Copyright Container Type
$wp_customize->add_control('secretum[copyright_container]', array(
	'label' 		=> __('Copyright Container Type', 'secretum'),
	'description' 	=> __('The primary container within the wrapper.', 'secretum'),
	'section' 		=> 'secretum_copyright_area',
	'type' 			=> 'radio',
	'choices' 		=> array(
		'' 				=> __('Responsive, fixed-width (default)', 'secretum'),
		'fluid' 		=> __('Fluid, full-width', 'secretum')
	)
));


// Setting :: Copyright Wrapper Padding
$wp_customize->add_setting('secretum[copyright_wrapper_padding]', array(
	'default' 			=> $default['copyright_wrapper_padding'],
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Copyright Wrapper Padding
$wp_customize->add_control('secretum[copyright_wrapper_padding]', array(
	'label' 		=> __('Copyright Wrapper Padding', 'secretum'),
	'description' 	=> __('Controls TOP & BOTTOM padding within the wrapper.', 'secretum'),
	'section' 		=> 'secretum_copyright_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('Theme Default', 'secretum'),
		'py-0' 			=> __('No Padding', 'secretum'),
		'py-1' 			=> __('4px or .25em Padding', 'secretum'),
		'py-2' 			=> __('8px or .5em Padding', 'secretum'),
		'py-3' 			=> __('16px or 1em Padding', 'secretum'),
		'py-4' 			=> __('24px or 1.5em Padding', 'secretum'),
		'py-5' 			=> __('48px or 3em Padding', 'secretum'),
	)
));


// Setting :: Copyright Container Padding
$wp_customize->add_setting('secretum[copyright_container_padding]', array(
	'default' 			=> $default['copyright_container_padding'],
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Copyright Container Padding
$wp_customize->add_control('secretum[copyright_container_padding]', array(
	'label' 		=> __('Copyright Container Padding', 'secretum'),
	'description' 	=> __('Controls RIGHT & LEFT padding within container.', 'secretum'),
	'section' 		=> 'secretum_copyright_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('Theme Default', 'secretum'),
		'px-0' 			=> __('No Padding', 'secretum'),
		'px-1' 			=> __('4px or .25em Padding', 'secretum'),
		'px-2' 			=> __('8px or .5em Padding', 'secretum'),
		'px-3' 			=> __('16px or 1em Padding', 'secretum'),
		'px-4' 			=> __('24px or 1.5em Padding', 'secretum'),
		'px-5' 			=> __('48px or 3em Padding', 'secretum'),
	)
));


// Setting :: Copyright Top Margin
$wp_customize->add_setting('secretum[copyright_wrapper_margin]', array(
	'default' 			=> $default['copyright_wrapper_margin'],
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Copyright Top Margin
$wp_customize->add_control('secretum[copyright_wrapper_margin]', array(
	'label' 		=> __('Copyright Top Margin', 'secretum'),
	'description' 	=> __('Increases the spacing between the copyright and footer areas.', 'secretum'),
	'section' 		=> 'secretum_copyright_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('Theme Default', 'secretum'),
		'mt-0' 			=> __('0px or 0em Top Margin', 'secretum'),
		'mt-1' 			=> __('4px or .25em Top Margin', 'secretum'),
		'mt-2' 			=> __('8px or .5em Top Margin', 'secretum'),
		'mt-3' 			=> __('16px or 0em Top Margin', 'secretum'),
		'mt-4' 			=> __('24px or 1.5em Topm Margin', 'secretum'),
		'mt-5' 			=> __('48px or 3em Top Margin', 'secretum'),
	)
));