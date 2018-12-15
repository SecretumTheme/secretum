<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Display Status
 */
$wp_customize->add_section('secretum_site_identity_display' , array(
	'panel' 			=> 'secretum_site_identity',
    'title' 			=> __('Display Status', 'secretum'),
    'priority' 			=> 10,
));

// Setting :: Display Text Title and Tagline
$wp_customize->add_setting('header_text', array(
	'theme_supports'    => array('custom-logo', 'header-text'),
	'default'           => 1,
	'sanitize_callback' => 'absint',
));

// Control :: Display Text Title and Tagline
$wp_customize->add_control('header_text', array(
	'label' 		=> __('Display Text Title and Tagline', 'secretum'),
	'description' 	=> __('Setting ignored if graphic logo used.', 'secretum'),
	'section' 		=> 'secretum_site_identity_display',
	'type' 			=> 'checkbox',
    'priority' 		=> 10,
));
