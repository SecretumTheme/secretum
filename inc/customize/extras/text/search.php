<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Setting :: Search Button Placeholder Text
$wp_customize->add_setting('secretum[search_button_placeholder]', array(
	'default' 			=> htmlentities(secretum_text('search_button_placeholder')),
	'sanitize_callback' => 'secretum_sanitize_all',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Search Button Placeholder Text
$wp_customize->add_control('secretum[search_button_placeholder]', array(
	'label' 			=> __('Search Button Placeholder Text', 'secretum'),
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));


// Setting :: Search Button Text
$wp_customize->add_setting('secretum[search_button_text]', array(
	'default' 			=> htmlentities(secretum_text('search_button_text')),
	'sanitize_callback' => 'secretum_sanitize_all',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Search Button Text
$wp_customize->add_control('secretum[search_button_text]', array(
	'label' 			=> __('Search Button Text', 'secretum'),
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));


// Setting :: Search Results Text
$wp_customize->add_setting('secretum[search_results_text]', array(
	'default' 			=> htmlentities(secretum_text('search_results_text')),
	'sanitize_callback' => 'secretum_sanitize_html',
	'transport' 		=> 'refresh',
	'type' 				=> 'option'
));

// Control :: Search Results Text
$wp_customize->add_control('secretum[search_results_text]', array(
	'label' 			=> __('Search Results Text', 'secretum'),
	'description' 		=> 'HTML Allowed.',
	'section' 			=> 'secretum_theme_text_section',
	'type' 				=> 'text'
));
