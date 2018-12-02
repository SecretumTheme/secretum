<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Display Setting
 */
$wp_customize->add_section('secretum_primary_nav_display' , array(
	'panel' 			=> 'secretum_primary_nav',
    'title' 			=> __('Display Status', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Primary Nav Menu
// @see inc/system/primary-nav/template-parts.php
$wp_customize->add_setting('secretum[primary_nav_status]' , array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'type' 				=> 'option',
	'transport' 		=> 'refresh',
));

// Control :: Primary Nav Menu
$wp_customize->add_control('secretum[primary_nav_status]', array(
	'label' 			=> __('Hide Primary Navigation Menu', 'secretum'),
	'section' 			=> 'secretum_primary_nav_display',
	'type' 				=> 'checkbox'
));
