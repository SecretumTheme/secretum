<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Display Setting
 */
$wp_customize->add_section('secretum_header_display' , array(
	'panel' 			=> 'secretum_header',
    'title' 			=> __('Display Settings', 'secretum'),
    'description' 		=> __('Enable/show or Disable/hide features.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Custom Header Feature
// @see inc/system/header/actions.php
$wp_customize->add_setting('secretum[custom_headers]' , array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'type' 				=> 'option',
	'transport' 		=> 'refresh',
));

// Control :: Custom Header Feature
$wp_customize->add_control('secretum[custom_headers]', array(
	'label' 			=> __('Enable Custom Header Feature', 'secretum'),
	'description' 		=> __('Enables custom post type "Headers" available under the Appearances menu, overrides default header area. Hand create any header layout, then publish and schedule headers. A header must be published before this feature will override the default header settings.', 'secretum'),
	'section' 			=> 'secretum_header_display',
	'type' 				=> 'checkbox'
));


// Setting :: Top Header Area
// @see inc/system/header/actions.php
$wp_customize->add_setting('secretum[header_top_status]' , array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'type' 				=> 'option',
	'transport' 		=> 'refresh',
));

// Control :: Top Header Area
$wp_customize->add_control('secretum[header_top_status]', array(
	'label' 			=> __('Enable Top Header Area', 'secretum'),
	'description' 		=> __('Create and assign custom menus to "Top Navbar Left" and/or "Top Navbar Right" to activate menus OR use the "Top Header Widget Area" widget for unlimited HTML control over the content area.', 'secretum'),
	'section' 			=> 'secretum_header_display',
	'type' 				=> 'checkbox'
));


// Setting :: Header Area
// @see inc/system/header/actions.php
$wp_customize->add_setting('secretum[header_status]' , array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'type' 				=> 'option',
	'transport' 		=> 'refresh',
));

// Control :: Header Area
$wp_customize->add_control('secretum[header_status]', array(
	'label' 			=> __('Hide Header Area', 'secretum'),
	'section' 			=> 'secretum_header_display',
	'type' 				=> 'checkbox'
));


// Setting :: Header Logo / Identity
// @see template-parts/header/navbar-brand.php
$wp_customize->add_setting('secretum[logo_identity_status]' , array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'type' 				=> 'option',
	'transport' 		=> 'refresh',
));

// Control :: Header Logo / Identity
$wp_customize->add_control('secretum[logo_identity_status]', array(
	'label' 			=> __('Hide Header Logo / Identity', 'secretum'),
	'section' 			=> 'secretum_header_display',
	'type' 				=> 'checkbox'
));
