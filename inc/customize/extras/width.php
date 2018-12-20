<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Setting :: Default Content Width In Pixels
$wp_customize->add_setting('secretum[content_width]', array(
	'sanitize_callback' => 'absint',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Default Content Width In Pixels
$wp_customize->add_control('secretum[content_width]', array(
	'label' 		=> __('Default Content Width In Pixels', 'secretum'),
	'description' 	=> __('Sets width limits on embeds and other plugable content. Default: 640', 'secretum'),
	'section' 		=> 'secretum_theme_settings_section',
	'type' 			=> 'number'
));
