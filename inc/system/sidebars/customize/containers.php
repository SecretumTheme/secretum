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
$wp_customize->add_section('secretum_sidebars_area', array(
	'panel' 	=> 'secretum_sidebars',
    'title' 	=> __('Container Settings', 'secretum'),
    'priority' 	=> 10,
));


// Setting :: Sidebar Wrapper Padding
$wp_customize->add_setting('secretum[sidebar_wrapper_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Sidebar Wrapper Padding
$wp_customize->add_control('secretum[sidebar_wrapper_padding]', array(
	'label' 		=> __('Sidebar Wrapper Padding', 'secretum'),
	'description' 	=> __('Controls TOP & BOTTOM padding within the wrapper.', 'secretum'),
	'section' 		=> 'secretum_sidebars_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('No Padding', 'secretum'),
		'py-1' 			=> __('4px or .25em Padding', 'secretum'),
		'py-2' 			=> __('8px or .5em Padding', 'secretum'),
		'py-3' 			=> __('16px or 1em Padding', 'secretum'),
		'py-4' 			=> __('24px or 1.5em Padding', 'secretum'),
		'py-5' 			=> __('48px or 3em Padding', 'secretum'),
	)
));


// Setting :: Sidebar Wrapper Top Margin
$wp_customize->add_setting('secretum[sidebar_wrapper_margin_top]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Sidebar Wrapper Top Margin
$wp_customize->add_control('secretum[sidebar_wrapper_margin_top]', array(
	'label' 		=> __('Sidebar Wrapper Top Margin', 'secretum'),
	'description' 	=> __('Increases the spacing before the Sidebar wrapper.', 'secretum'),
	'section' 		=> 'secretum_sidebars_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('No Top Margin', 'secretum'),
		'mt-1' 			=> __('4px or .25em Top Margin', 'secretum'),
		'mt-2' 			=> __('8px or .5em Top Margin', 'secretum'),
		'mt-3' 			=> __('16px or 0em Top Margin', 'secretum'),
		'mt-4' 			=> __('24px or 1.5em Top Margin', 'secretum'),
		'mt-5' 			=> __('48px or 3em Top Margin', 'secretum'),
	)
));


// Setting :: Sidebar Wrapper Bottom Margin
$wp_customize->add_setting('secretum[sidebar_wrapper_margin_bottom]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Sidebar Wrapper Bottom Margin
$wp_customize->add_control('secretum[sidebar_wrapper_margin_bottom]', array(
	'label' 		=> __('Sidebar Wrapper Bottom Margin', 'secretum'),
	'description' 	=> __('Increases the spacing after the Sidebar wrapper.', 'secretum'),
	'section' 		=> 'secretum_sidebars_area',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('No Bottom Margin', 'secretum'),
		'mb-1' 			=> __('4px or .25em Bottom Margin', 'secretum'),
		'mb-2' 			=> __('8px or .5em Bottom Margin', 'secretum'),
		'mb-3' 			=> __('16px or 0em Bottom Margin', 'secretum'),
		'mb-4' 			=> __('32px or 1.5em Bottom Margin', 'secretum'),
		'mb-5' 			=> __('64px or 3em Bottom Margin', 'secretum'),
	)
));
