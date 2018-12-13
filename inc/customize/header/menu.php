<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Primary Menu
 */
$wp_customize->add_section('secretum_header_menu', array(
	'panel' 			=> 'secretum_header',
    'title' 			=> __('Primary Menu', 'secretum'),
    'description' 		=> __('Set the primary menu display location, container type, and adjust the margins &amp; paddings for containers.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Primary Menu Alignment
$wp_customize->add_setting('secretum[header_menu_alignment]', array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'sanitize_key'
));

// Control :: Primary Menu Alignment
$wp_customize->add_control('secretum[header_menu_alignment]', array(
	'label' 			=> __('Primary Menu Alignment', 'secretum'),
	'description' 		=> __('Align the menu within the container.', 'secretum'),
	'section' 			=> 'secretum_header_menu',
	'type' 				=> 'radio',
	'choices' 			=> array(
		'' 			=> __('Theme Default', 'secretum'),
		'left' 		=> __('Left alignment', 'secretum'),
		'right' 	=> __('Right alignment', 'secretum'),
		'center' 	=> __('Center alignment', 'secretum')
	)
));


// Setting :: Header Container Type
$wp_customize->add_setting('secretum[header_menu_container]', array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'sanitize_key'
));

// Control :: Header Container Type
$wp_customize->add_control('secretum[header_menu_container]', array(
	'label' 			=> __('Menu Container Type', 'secretum'),
	'description' 		=> __('The primary container within the wrapper.', 'secretum'),
	'section' 			=> 'secretum_header_menu',
	'type' 				=> 'radio',
	'choices' 			=> array(
		'' 				=> __('Responsive, fixed-width (default)', 'secretum'),
		'fluid' 		=> __('Fluid, full-width', 'secretum')
	)
));


// Setting :: Header Wrapper Bottom Margin
$wp_customize->add_setting('secretum[header_menu_wrapper_margin]', array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'sanitize_key'
));

// Control :: Header Wrapper Bottom Margin
$wp_customize->add_control('secretum[header_menu_wrapper_margin]', array(
	'label' 			=> __('Menu Bottom Margin', 'secretum'),
	'description' 		=> __('Increases the spacing after the menu, pushing the body down.', 'secretum'),
	'section' 			=> 'secretum_header_menu',
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


// Setting :: Header Wrapper Padding
$wp_customize->add_setting('secretum[header_menu_wrapper_padding]', array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'sanitize_key'
));

// Control :: Header Wrapper Padding
$wp_customize->add_control('secretum[header_menu_wrapper_padding]', array(
	'label' 			=> __('Menu Wrapper Padding', 'secretum'),
	'description' 		=> __('Controls TOP & BOTTOM spacing around the menu.', 'secretum'),
	'section' 			=> 'secretum_header_menu',
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
$wp_customize->add_setting('secretum[header_menu_container_padding]', array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'sanitize_key'
));

// Control :: Header Container Padding
$wp_customize->add_control('secretum[header_menu_container_padding]', array(
	'label' 			=> __('Menu Container Padding', 'secretum'),
	'description' 		=> __('Controls RIGHT & LEFT spacing around the menu.', 'secretum'),
	'section' 			=> 'secretum_header_menu',
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
