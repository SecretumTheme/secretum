<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Setting :: Error Document Title
$wp_customize->add_setting('secretum[error_document_title]', array(
	'default' 			=> htmlentities(secretum_text('error_document_title')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Error Document Title
$wp_customize->add_control('secretum[error_document_title]', array(
	'label' 			=> __('Error Document Title', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));


// Setting :: Error Document Notice Text
$wp_customize->add_setting('secretum[error_document_text]', array(
	'default' 			=> htmlentities(secretum_text('error_document_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Error Document Notice Text
$wp_customize->add_control('secretum[error_document_text]', array(
	'label' 			=> __('Error Document Notice Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));
