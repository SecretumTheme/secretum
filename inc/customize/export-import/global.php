<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package Secretum
 */

namespace Secretum;

/**
 * Section :: Global
 */
$wp_customize->add_section( 'secretum_export_import_global', array(
	'panel' 			=> 'secretum_export_import',
	'title' 			=> __( '- Global', 'secretum' ),
	'description' 		=> __( 'All theme related customizer settings. If you are re-visiting this section after making theme adjustments you will need to refresh the browser window to make sure the export reflects your changes.', 'secretum' ),
	'priority' 			=> 10,
) );


// @about Setting :: Global Export
$wp_customize->add_setting( 'secretum[export_global]' , array(
	'sanitize_callback' => '__return_false',
	'transport' 		=> 'refresh',
	'type'	  			=> 'none',
	'default' 			=> secretum_customizer_export( 'default' ),
) );

// @about Control :: Global Export
$wp_customize->add_control( 'secretum[export_global]', array(
	'label' 		=> __( 'Global Export', 'secretum' ),
	'description' 	=> __( 'The json encoded export string only includes customized settings for this section.', 'secretum' ),
	'section' 		=> 'secretum_export_import_global',
	'type' 			=> 'text',
) );


// @about Setting :: Global Import
$wp_customize->add_setting( 'secretum[import_global]' , array(
	'sanitize_callback' => 'secretum_customizer_import',
	'transport' 		=> 'refresh',
	'type'	  			=> 'none',
	'default' 			=> '',
) );

// @about Control :: Global Import
$wp_customize->add_control( 'secretum[import_global]', array(
	'label' 		=> __( 'Global Import', 'secretum' ),
	'description' 	=> __( 'Use the reload icon located at the bottom right corner of the preview window to refresh the local view before publishing your changes.', 'secretum' ),
	'section' 		=> 'secretum_export_import_global',
	'type' 			=> 'text',
) );
