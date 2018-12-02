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
$wp_customize->add_section('secretum_primary_nav_wrapper', array(
	'panel' 			=> 'secretum_primary_nav',
    'title' 			=> __('Wrapper Settings', 'secretum'),
    'description' 		=> __('Customize the outter wrapper within the menu.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Wrapper Background Color
$wp_customize->add_setting('secretum[primary_nav_wrapper_background_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Wrapper Background Color
$wp_customize->add_control('secretum[primary_nav_wrapper_background_color]', array(
	'label' 	=> __('Wrapper Background Color', 'secretum'),
	'section' 	=> 'secretum_primary_nav_wrapper',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_background_colors()
));


// Setting :: Wrapper Padding
$wp_customize->add_setting('secretum[primary_nav_wrapper_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Wrapper Padding
$wp_customize->add_control('secretum[primary_nav_wrapper_padding]', array(
	'label' 			=> __('Wrapper Padding', 'secretum'),
	'description' 		=> __('Controls TOP & BOTTOM padding within the wrapper.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_wrapper',
	'type' 				=> 'select',
	'choices' 			=> array(
		'' 					=> __('No Padding', 'secretum'),
		'py-1' 				=> __('4px or .25em Padding', 'secretum'),
		'py-2' 				=> __('8px or .5em Padding', 'secretum'),
		'py-3' 				=> __('16px or 1em Padding', 'secretum'),
		'py-4' 				=> __('24px or 1.5em Padding', 'secretum'),
		'py-5' 				=> __('48px or 3em Padding', 'secretum'),
	)
));


// Setting :: Wrapper Bottom Margin
$wp_customize->add_setting('secretum[primary_nav_wrapper_margin]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Wrapper Bottom Margin
$wp_customize->add_control('secretum[primary_nav_wrapper_margin]', array(
	'label' 			=> __('Wrapper Bottom Margin', 'secretum'),
	'description' 		=> __('Increases the spacing after the wrapper, pushing the body down.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_wrapper',
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


// Setting :: Wrapper Border Type
$wp_customize->add_setting('secretum[primary_nav_wrapper_border_type]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Wrapper Border Type
$wp_customize->add_control('secretum[primary_nav_wrapper_border_type]', array(
	'label' 		=> __('Wrapper Border Type', 'secretum'),
	'section' 		=> 'secretum_primary_nav_wrapper',
	'type' 			=> 'select',
	'choices' 		=> array(
		'' 				=> __('Theme Default', 'secretum'),
		'all' 			=> __('Solid Border', 'secretum'),
		'top' 			=> __('Top Border', 'secretum'),
		'right' 		=> __('Right Border', 'secretum'),
		'bottom' 		=> __('Bottom Border', 'secretum'),
		'left' 			=> __('Left Border', 'secretum'),
		'none' 			=> __('No Border', 'secretum')
	)
));


// Setting :: Wrapper Border Color
$wp_customize->add_setting('secretum[primary_nav_wrapper_border_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Wrapper Border Color
$wp_customize->add_control('secretum[primary_nav_wrapper_border_color]', array(
	'label' 		=> __('Wrapper Border Color', 'secretum'),
	'section' 		=> 'secretum_primary_nav_wrapper',
	'type' 			=> 'select',
	'choices' 		=> secretum_customizer_border_colors()
));
