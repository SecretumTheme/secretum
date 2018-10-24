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
$wp_customize->add_section('secretum_body_area', array(
	'panel' 	=> 'secretum_body',
    'title' 	=> __('Container Settings', 'secretum'),
    'priority' 	=> 10,
));


// Setting :: Body Container Type
$wp_customize->add_setting('secretum[body_container]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Body Container Type
$wp_customize->add_control('secretum[body_container]', array(
	'label' 			=> __('Body Container Type', 'secretum'),
	'description' 		=> __('The primary container within the wrapper.', 'secretum'),
	'section' 			=> 'secretum_body_area',
	'type' 				=> 'radio',
	'choices' 			=> array(
		'' 				=> __('Responsive, fixed-width (default)', 'secretum'),
		'fluid' 		=> __('Fluid, full-width', 'secretum')
	)
));


// Setting :: Body Wrapper Paddin
$wp_customize->add_setting('secretum[body_wrapper_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Body Wrapper Paddin
$wp_customize->add_control('secretum[body_wrapper_padding]', array(
	'label' 		=> __('Body Wrapper Padding', 'secretum'),
	'description' 	=> __('Controls TOP & BOTTOM padding within the wrapper.', 'secretum'),
	'section' 		=> 'secretum_body_area',
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


// Setting :: Body Container Padding
$wp_customize->add_setting('secretum[body_container_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Body Container Padding
$wp_customize->add_control('secretum[body_container_padding]', array(
	'label' 		=> __('Body Container Padding', 'secretum'),
	'description' 	=> __('Controls RIGHT & LEFT padding within container.', 'secretum'),
	'section' 		=> 'secretum_body_area',
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


// Setting :: Body Top Margin
$wp_customize->add_setting('secretum[body_wrapper_margin_top]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Body Top Margin
$wp_customize->add_control('secretum[body_wrapper_margin_top]', array(
	'label' 		=> __('Body Top Margin', 'secretum'),
	'description' 	=> __('Increases the spacing before the body wrapper.', 'secretum'),
	'section' 		=> 'secretum_body_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('No Top Margin (default)', 'secretum'),
		'mt-1' 			=> __('4px or .25em Top Margin', 'secretum'),
		'mt-2' 			=> __('8px or .5em Top Margin', 'secretum'),
		'mt-3' 			=> __('16px or 0em Top Margin', 'secretum'),
		'mt-4' 			=> __('24px or 1.5em Top Margin', 'secretum'),
		'mt-5' 			=> __('48px or 3em Top Margin', 'secretum'),
	)
));


// Setting :: Body Bottom Margi
$wp_customize->add_setting('secretum[body_wrapper_margin_bottom]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Body Bottom Margi
$wp_customize->add_control('secretum[body_wrapper_margin_bottom]', array(
	'label' 		=> __('Body Bottom Margin', 'secretum'),
	'description' 	=> __('Increases the spacing after the body wrapper.', 'secretum'),
	'section' 		=> 'secretum_body_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('No Bottom Margin (default)', 'secretum'),
		'mb-1' 			=> __('4px or .25em Bottom Margin', 'secretum'),
		'mb-2' 			=> __('8px or .5em Bottom Margin', 'secretum'),
		'mb-3' 			=> __('16px or 0em Bottom Margin', 'secretum'),
		'mb-4' 			=> __('24px or 1.5em Bottom Margin', 'secretum'),
		'mb-5' 			=> __('48px or 3em Bottom Margin', 'secretum'),
	)
));
