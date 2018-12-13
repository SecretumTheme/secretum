<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Setting :: Posts With Pages Text
$wp_customize->add_setting('secretum[content_pages_text]', array(
	'default' 			=> htmlentities(secretum_text('content_pages_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Posts With Pages Text
$wp_customize->add_control('secretum[content_pages_text]', array(
	'label' 			=> __('Posts With Pages Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Previous Post Text
$wp_customize->add_setting('secretum[prev_text]', array(
	'default' 			=> htmlentities(secretum_text('prev_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Previous Post Text
$wp_customize->add_control('secretum[prev_text]', array(
	'label' 			=> __('Previous Post Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));


// Setting :: Next Post Text
$wp_customize->add_setting('secretum[next_text]', array(
	'default' 			=> htmlentities(secretum_text('next_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Next Post Text
$wp_customize->add_control('secretum[next_text]', array(
	'label' 			=> __('Next Post Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text',
	'type' 				=> 'text'
));
