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
$wp_customize->add_section('secretum_primary_nav_container', array(
	'panel' 			=> 'secretum_primary_nav',
    'title' 			=> __('Container Settings', 'secretum'),
    'description' 		=> __('Customize the inner container within the menu.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Container Type
$wp_customize->add_setting('secretum[primary_nav_container]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Container Type
$wp_customize->add_control('secretum[primary_nav_container]', array(
	'label' 			=> __('Container Type', 'secretum'),
	'section' 			=> 'secretum_primary_nav_container',
	'type' 				=> 'radio',
	'choices' 			=> array(
		'' 					=> __('Responsive, fixed-width (default)', 'secretum'),
		'fluid' 			=> __('Fluid, full-width', 'secretum')
	)
));


// Setting :: Container Background Color
$wp_customize->add_setting('secretum[primary_nav_container_background_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Container Background Color
$wp_customize->add_control('secretum[primary_nav_container_background_color]', array(
	'label' 	=> __('Container Background Color', 'secretum'),
	'section' 	=> 'secretum_primary_nav_container',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_background_colors()
));


// Setting :: Container Padding
$wp_customize->add_setting('secretum[primary_nav_container_padding]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Container Padding
$wp_customize->add_control('secretum[primary_nav_container_padding]', array(
	'label' 			=> __('Container Padding', 'secretum'),
	'description' 		=> __('Controls RIGHT & LEFT padding within container.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_container',
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



// Setting :: Container Border Type
$wp_customize->add_setting('secretum[primary_nav_container_border_type]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Container Border Type
$wp_customize->add_control('secretum[primary_nav_container_border_type]', array(
	'label' 		=> __('Container Border Type', 'secretum'),
	'description' 	=> __('Manage the border color under the Color Settings tab.', 'secretum'),
	'section' 		=> 'secretum_primary_nav_container',
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


// Setting :: Container Border Color
$wp_customize->add_setting('secretum[primary_nav_container_border_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Container Border Color
$wp_customize->add_control('secretum[primary_nav_container_border_color]', array(
	'label' 		=> __('Container Border Color', 'secretum'),
	'description' 	=> __('Manage border size and location under the Container Settings tab.', 'secretum'),
	'section' 		=> 'secretum_primary_nav_container',
	'type' 			=> 'select',
	'choices' 		=> secretum_customizer_border_colors()
));
