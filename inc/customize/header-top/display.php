<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Display Status
 */
$wp_customize->add_section('secretum_header_top_display' , array(
	'panel' 			=> 'secretum_header_top',
    'title' 			=> __('Display Status', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Select To Display Top Header Area
$wp_customize->add_setting('secretum[header_top_status]' , array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'type' 				=> 'option',
	'transport' 		=> 'refresh',
));

// Control :: Select To Display Top Header Area
$wp_customize->add_control('secretum[header_top_status]', array(
	'label' 			=> __('Select To Display Top Header Area', 'secretum'),
	'description' 		=> __('Create and assign custom menus to "Top Navbar Left" and/or "Top Navbar Right" to activate menus =OR= use the "Top Header Widget Area" widget for unlimited HTML control over the content area. A menu or widget must be defined for the top header area to display.', 'secretum'),
	'section' 			=> 'secretum_header_top_display',
	'type' 				=> 'checkbox'
));
