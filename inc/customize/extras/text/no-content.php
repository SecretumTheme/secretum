<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Setting :: Default No Content Title
$wp_customize->add_setting('secretum[nothing_found_title_text]', array(
	'default' 			=> htmlentities(secretum_text('nothing_found_title_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Default No Content Title
$wp_customize->add_control('secretum[nothing_found_title_text]', array(
	'label' 			=> __('Default No Content Title', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));


// Setting :: Default No Content Found
$wp_customize->add_setting('secretum[nothing_found_text]', array(
	'default' 			=> htmlentities(secretum_text('nothing_found_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Default No Content Found
$wp_customize->add_control('secretum[nothing_found_text]', array(
	'label' 			=> __('Default No Content Found', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));
