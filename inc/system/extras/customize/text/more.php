<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


// Setting :: Archive Continue Reading Text
$wp_customize->add_setting('secretum[continue_reading_text]', array(
	'default' 			=> htmlentities(secretum_text('continue_reading_text')),
	'sanitize_callback' => 'secretum_sanitize_all',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Archive Continue Reading Text
$wp_customize->add_control('secretum[continue_reading_text]', array(
	'label' 			=> __('Archive Continue Reading Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Entry Read More <!--more--> Text
$wp_customize->add_setting('secretum[read_more_text]', array(
	'default' 			=> htmlentities(secretum_text('read_more_text')),
	'sanitize_callback' => 'secretum_sanitize_all',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Entry Read More <!--more--> Text
$wp_customize->add_control('secretum[read_more_text]', array(
	'label' 			=> __('Entry Read More <!--more--> Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));
