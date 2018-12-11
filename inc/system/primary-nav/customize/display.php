<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Display Status
 */
$wp_customize->add_section('secretum_primary_nav_display' , array(
	'panel' 			=> 'secretum_primary_nav',
    'title' 			=> __('Display Status', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Select To Hide Primary Navigation Menu
$wp_customize->add_setting('secretum[primary_nav_status]' , array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'type' 				=> 'option',
	'transport' 		=> 'refresh',
));

// Control :: Select To Hide Primary Navigation Menu
$wp_customize->add_control('secretum[primary_nav_status]', array(
	'label' 			=> __('Select To Hide Primary Navigation Menu', 'secretum'),
	'section' 			=> 'secretum_primary_nav_display',
	'type' 				=> 'checkbox'
));
