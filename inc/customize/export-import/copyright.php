<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Copyright
 */
$wp_customize->add_section('secretum_export_import_copyright', array(
	'panel' 			=> 'secretum_export_import',
    'title' 			=> __('- Copyright', 'secretum'),
    'description' 		=> __('Data is localized to this section only. If you are re-visiting this section after making local adjustments you will need to refresh the browser window to make sure the export reflects your changes.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Local Export
$wp_customize->add_setting('secretum[export_copyright]' , array(
	'sanitize_callback' => '__return_false',
	'transport' 		=> 'refresh',
	'type'	  			=> 'none',
	'default' 			=> \Secretum\Customizer\export('copyright')
));

// Control :: Local Export
$wp_customize->add_control('secretum[export_copyright]', array(
	'label' 		=> __('Local Export', 'secretum'),
	'description' 	=> __('The json encoded export string only includes customized settings for this section.', 'secretum'),
	'section' 		=> 'secretum_export_import_copyright',
	'type' 			=> 'text'
));


// Setting :: Local Import
$wp_customize->add_setting('secretum[import_copyright]' , array(
	'sanitize_callback' => '\Secretum\Customizer\import',
	'transport' 		=> 'refresh',
	'type'	  			=> 'none',
	'default' 			=> ''
));

// Control :: Local Import
$wp_customize->add_control('secretum[import_copyright]', array(
	'label' 		=> __('Local Import', 'secretum'),
	'description' 	=> __('Use the reload icon located at the bottom right corner of the preview window to refresh the local view before publishing your changes.', 'secretum'),
	'section' 		=> 'secretum_export_import_copyright',
	'type' 			=> 'text'
));
