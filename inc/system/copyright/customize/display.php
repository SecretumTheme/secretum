<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Display Settings
 */
$wp_customize->add_section('secretum_copyright_display' , array(
	'panel' 		=> 'secretum_copyright',
    'title' 		=> __('Display Settings', 'secretum'),
    'priority' 		=> 10,
));

// Setting :: Copyright Area
$wp_customize->add_setting('secretum[copyright_status]' , array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> false
));

// Control :: Copyright Area
$wp_customize->add_control('secretum[copyright_status]', array(
	'label' 		=> __('Hide Copyright Area', 'secretum'),
    'description' 	=> __('Select to disable the entire copyright area and related features.', 'secretum'),
	'section' 		=> 'secretum_copyright_display',
	'type' 			=> 'checkbox'
));


// Setting :: Scroll To Top Icon
$wp_customize->add_setting('secretum[scrolltop]' , array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> false
));

// Control :: Scroll To Top Icon
$wp_customize->add_control('secretum[scrolltop]', array(
	'label' 		=> __('Hide Scroll To Top Icon', 'secretum'),
    'description' 	=> __('Select to disable the scroll to top icon.', 'secretum'),
	'section' 		=> 'secretum_copyright_display',
	'type' 			=> 'checkbox'
));
