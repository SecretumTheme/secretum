<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Content Width
 */
$wp_customize->add_section('secretum_theme_settings', array(
	'panel' 			=> 'secretum_extras',
    'title' 			=> __('Content Width', 'secretum'),
    'description' 		=> __('Default pluginable content width.', 'secretum'),
    'priority' 			=> 10,
));


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
	'section' 		=> 'secretum_theme_settings',
	'type' 			=> 'number'
));
