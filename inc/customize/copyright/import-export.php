<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: 
 */
$wp_customize->add_section('secretum_copyright_import_export', array(
	'panel' 			=> 'secretum_copyright',
    'title' 			=> __('Import & Export', 'secretum'),
    'description' 		=> __('Localized to this section only. Use the refresh icon in the bottom right corner to preview changes before & after publishing.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Local Export
$wp_customize->add_setting('secretum[copyright_export]' , array(
	'sanitize_callback' => '__return_false',
	'transport' 		=> 'refresh',
	'type'	  			=> 'none',
	'default' 			=> secretum_export('copyright')
));

// Control :: Local Export
$wp_customize->add_control('secretum[copyright_export]', array(
	'label' 		=> __('Local Export', 'secretum'),
	'description' 	=> __('', 'secretum'),
	'section' 		=> 'secretum_copyright_import_export',
	'type' 			=> 'text'
));


// Setting :: Local Import
$wp_customize->add_setting('secretum[copyright_import]' , array(
	'sanitize_callback' => 'secretum_import',
	'transport' 		=> 'refresh',
	'type'	  			=> 'none',
	'default' 			=> ''
));

// Control :: Local Import
$wp_customize->add_control('secretum[copyright_import]', array(
	'label' 		=> __('Local Import', 'secretum'),
	'description' 	=> __('', 'secretum'),
	'section' 		=> 'secretum_copyright_import_export',
	'type' 			=> 'text'
));
