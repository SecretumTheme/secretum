<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Reset Settings
 */
$wp_customize->add_section('secretum_reset', array(
	'panel' 			=> 'secretum_extras',
    'title' 			=> __('Reset Settings', 'secretum'),
    'description' 		=> __('Delete all theme unique customizer settings. Enter the word reset below, publish your changes, then manually refresh the browser window.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Type The Word: reset
$wp_customize->add_setting('secretum[reset]', array(
	'sanitize_callback' => 'secretum_customizer_reset',
	'type' 				=> 'option',
	'transport' 		=> 'refresh',
));

// Control :: Type The Word: reset
$wp_customize->add_control('secretum[reset]', array(
	'label' 			=> __('Type The Word: reset', 'secretum'),
	'section' 			=> 'secretum_reset',
	'type' 				=> 'text'
));
