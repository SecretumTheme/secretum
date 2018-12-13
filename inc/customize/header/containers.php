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
$wp_customize->add_section('secretum_header_area', array(
	'panel' 			=> 'secretum_header',
    'title' 			=> __('Container Settings', 'secretum'),
    'description' 		=> __('Set the container type and adjust the margins and paddings.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Header Container Type
$wp_customize->add_setting('secretum[header_container]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Header Container Type
$wp_customize->add_control('secretum[header_container]', array(
	'label' 			=> __('Header Container Type', 'secretum'),
	'description' 		=> __('The primary container within the wrapper.', 'secretum'),
	'section' 			=> 'secretum_header_area',
	'type' 				=> 'radio',
	'choices' 			=> array(
		'' 					=> __('Responsive, fixed-width (default)', 'secretum'),
		'fluid' 			=> __('Fluid, full-width', 'secretum')
	)
));


// Setting :: Header Wrapper Padding
$wp_customize->add_setting('secretum[header_wrapper_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Header Wrapper Padding
$wp_customize->add_control('secretum[header_wrapper_padding]', array(
	'label' 			=> __('Header Wrapper Padding', 'secretum'),
	'description' 		=> __('Controls TOP & BOTTOM padding within the wrapper.', 'secretum'),
	'section' 			=> 'secretum_header_area',
	'type' 				=> 'select',
	'choices' 			=> array(
		'py-0' 				=> __('No Padding', 'secretum'),
		'py-1' 				=> __('4px or .25em Padding', 'secretum'),
		'py-2' 				=> __('8px or .5em Padding', 'secretum'),
		'' 					=> __('16px or 1em Padding (default)', 'secretum'),
		'py-4' 				=> __('24px or 1.5em Padding', 'secretum'),
		'py-5' 				=> __('48px or 3em Padding', 'secretum'),
	)
));


// Setting :: Header Container Padding
$wp_customize->add_setting('secretum[header_container_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Header Container Padding
$wp_customize->add_control('secretum[header_container_padding]', array(
	'label' 			=> __('Header Container Padding', 'secretum'),
	'description' 		=> __('Controls RIGHT & LEFT padding within container.', 'secretum'),
	'section' 			=> 'secretum_header_area',
	'type' 				=> 'select',
	'choices' 			=> array(
		'' 					=> __('15px Padding (default)', 'secretum'),
		'px-0' 				=> __('No Padding', 'secretum'),
		'px-1' 				=> __('4px or .25em Padding', 'secretum'),
		'px-2' 				=> __('8px or .5em Padding', 'secretum'),
		'px-3' 				=> __('16px or 1em Padding', 'secretum'),
		'px-4' 				=> __('24px or 1.5em Padding', 'secretum'),
		'px-5' 				=> __('48px or 3em Padding', 'secretum'),
	)
));


// Setting :: Header Wrapper Bottom Margin
$wp_customize->add_setting('secretum[header_wrapper_margin]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Header Wrapper Bottom Margin
$wp_customize->add_control('secretum[header_wrapper_margin]', array(
	'label' 			=> __('Header Bottom Margin', 'secretum'),
	'description' 		=> __('Increases the spacing after the header, pushing the body down.', 'secretum'),
	'section' 			=> 'secretum_header_area',
	'type' 				=> 'select',
	'choices' 			=> array(
		'' 					=> __('No Bottom Margin (default)', 'secretum'),
		'mb-1' 				=> __('4px or .25em Bottom Margin', 'secretum'),
		'mb-2' 				=> __('8px or .5em Bottom Margin', 'secretum'),
		'mb-3' 				=> __('16px or 0em Bottom Margin', 'secretum'),
		'mb-4' 				=> __('24px or 1.5em Bottom Margin', 'secretum'),
		'mb-5' 				=> __('48px or 3em Bottom Margin', 'secretum'),
	)
));


// If Header Top Enabled, Include Header Top Template
if (secretum_mod('header_top_status')) {
	// Setting :: Header Container Type
	$wp_customize->add_setting('secretum[header_top_container]', array(
		'sanitize_callback' => 'sanitize_key',
		'transport' 		=> 'refresh',
		'type' 				=> 'option',
		'default' 			=> ''
	));

	// Control :: Header Container Type
	$wp_customize->add_control('secretum[header_top_container]', array(
		'label' 			=> __('Header Top Container Type', 'secretum'),
		'description' 		=> __('The primary container within the wrapper.', 'secretum'),
		'section' 			=> 'secretum_header_area',
		'type' 				=> 'radio',
		'choices' 			=> array(
			'' 				=> __('Responsive, fixed-width (default)', 'secretum'),
			'fluid' 		=> __('Fluid, full-width', 'secretum')
		)
	));


	// Setting :: Header Wrapper Padding
	$wp_customize->add_setting('secretum[header_top_wrapper_padding]', array(
		'sanitize_callback' => 'sanitize_key',
		'transport' 		=> 'refresh',
		'type' 				=> 'option',
		'default' 			=> ''
	));

	// Control :: Header Wrapper Padding
	$wp_customize->add_control('secretum[header_top_wrapper_padding]', array(
		'label' 			=> __('Header Top Wrapper Padding', 'secretum'),
		'description' 		=> __('Controls TOP & BOTTOM padding within the wrapper.', 'secretum'),
		'section' 			=> 'secretum_header_area',
		'type' 				=> 'select',
		'choices' 			=> array(
			'' 					=> __('No Padding (default)', 'secretum'),
			'py-1' 				=> __('4px or .25em Padding', 'secretum'),
			'py-2' 				=> __('8px or .5em Padding', 'secretum'),
			'py-3' 				=> __('16px or 1em Padding', 'secretum'),
			'py-4' 				=> __('24px or 1.5em Padding', 'secretum'),
			'py-5' 				=> __('48px or 3em Padding', 'secretum'),
		)
	));


	// Setting :: Header Container Padding
	$wp_customize->add_setting('secretum[header_top_container_padding]', array(
		'sanitize_callback' => 'sanitize_key',
		'transport' 		=> 'refresh',
		'type' 				=> 'option',
		'default' 			=> ''
	));

	// Control :: Header Container Padding
	$wp_customize->add_control('secretum[header_top_container_padding]', array(
		'label' 			=> __('Header Top Container Padding', 'secretum'),
		'description' 		=> __('Controls RIGHT & LEFT padding within container.', 'secretum'),
		'section' 			=> 'secretum_header_area',
		'type' 				=> 'select',
		'choices' 			=> array(
			'' 					=> __('No Padding (default)', 'secretum'),
			'px-1' 				=> __('4px or .25em Padding', 'secretum'),
			'px-2' 				=> __('8px or .5em Padding', 'secretum'),
			'px-3' 				=> __('16px or 1em Padding', 'secretum'),
			'px-4' 				=> __('24px or 1.5em Padding', 'secretum'),
			'px-5' 				=> __('48px or 3em Padding', 'secretum'),
		)
	));
}
