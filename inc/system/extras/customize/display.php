<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Theme Settings
 */
$wp_customize->add_section('secretum_extras_display' , array(
	'panel' 			=> 'secretum_extras',
    'title' 			=> __('Display Settings', 'secretum'),
    'description' 		=> __('Check the box to HIDE selected feature.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Scroll To Top Icon
$wp_customize->add_setting('secretum[scrolltop]' , array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Scroll To Top Icon
$wp_customize->add_control('secretum[scrolltop]', array(
	'label' 			=> __('Scroll To Top Icon', 'secretum'),
	'section' 			=> 'secretum_extras_display',
	'type' 				=> 'checkbox'
));