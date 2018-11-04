<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Container Settings
 */
$wp_customize->add_section('secretum_footer_area', array(
	'panel' 		=> 'secretum_footer',
    'title' 		=> __('Container Settings', 'secretum'),
    'description' 	=> __('Set the container type and adjust the margins and paddings.', 'secretum'),
    'priority' 		=> 10,
));


// Setting :: Footer Container Type
$wp_customize->add_setting('secretum[footer_container]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Footer Container Type
$wp_customize->add_control('secretum[footer_container]', array(
	'label' 		=> __('Footer Container Type', 'secretum'),
	'description' 	=> __('The primary container within the wrapper.', 'secretum'),
	'section' 		=> 'secretum_footer_area',
	'type' 			=> 'radio',
	'choices' 		=> array(
		'' 				=> __('Responsive, fixed-width (default)', 'secretum'),
		'fluid' 		=> __('Fluid, full-width', 'secretum')
	)
));


// Setting :: Footer Wrapper Padding
$wp_customize->add_setting('secretum[footer_wrapper_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Footer Wrapper Padding
$wp_customize->add_control('secretum[footer_wrapper_padding]', array(
	'label' 		=> __('Footer Wrapper Padding', 'secretum'),
	'description' 	=> __('Controls TOP & BOTTOM padding within the wrapper.', 'secretum'),
	'section' 		=> 'secretum_footer_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'py-0' 			=> __('No Padding', 'secretum'),
		'py-1' 			=> __('4px or .25em Padding', 'secretum'),
		'py-2' 			=> __('8px or .5em Padding', 'secretum'),
		'py-3' 			=> __('16px or 1em Padding', 'secretum'),
		'py-4' 			=> __('24px or 1.5em Padding', 'secretum'),
		'' 				=> __('48px or 3em Padding (default)', 'secretum'),
	)
));


// Setting :: Footer Container Padding
$wp_customize->add_setting('secretum[footer_container_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Footer Container Padding
$wp_customize->add_control('secretum[footer_container_padding]', array(
	'label' 		=> __('Footer Container Padding', 'secretum'),
	'description' 	=> __('Controls RIGHT & LEFT padding within container.', 'secretum'),
	'section' 		=> 'secretum_footer_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('15px Padding (default)', 'secretum'),
		'px-0' 			=> __('No Padding', 'secretum'),
		'px-1' 			=> __('4px or .25em Padding', 'secretum'),
		'px-2' 			=> __('8px or .5em Padding', 'secretum'),
		'px-3' 			=> __('16px or 1em Padding', 'secretum'),
		'px-4' 			=> __('24px or 1.5em Padding', 'secretum'),
		'px-5' 			=> __('48px or 3em Padding', 'secretum'),
	)
));


// Setting :: Footer Top Margin
$wp_customize->add_setting('secretum[footer_wrapper_margin]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Footer Top Margin
$wp_customize->add_control('secretum[footer_wrapper_margin]', array(
	'label' 		=> __('Footer Top Margin', 'secretum'),
	'description' 	=> __('Increases the spacing before the Footer, pushing the footer down.', 'secretum'),
	'section' 		=> 'secretum_footer_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('No Top Margin (default)', 'secretum'),
		'mt-1' 			=> __('4px or .25em Top Margin', 'secretum'),
		'mt-2' 			=> __('8px or .5em Top Margin', 'secretum'),
		'mt-3' 			=> __('16px or 0em Top Margin', 'secretum'),
		'mt-4' 			=> __('24px or 1.5em Topm Margin', 'secretum'),
		'mt-5' 			=> __('48px or 3em Top Margin', 'secretum'),
	)
));
