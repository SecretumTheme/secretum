<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Enqueue Management
 */
$wp_customize->add_section('secretum_enqueue', array(
	'panel' 			=> 'secretum_extras',
    'title' 			=> __('Enqueue Management', 'secretum'),
	'description' 		=> __('Define where and when scripts and styles load.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Contact Form Page IDs
$wp_customize->add_setting('secretum[enqueue_contact_pageids]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Contact Form Page IDs
$wp_customize->add_control('secretum[enqueue_contact_pageids]', array(
	'label' 			=> __('Contact Form Page IDs', 'secretum'),
	'description' 		=> __('Make contact form plugins load scripts and styles on set pages, rather than the entire website. Enter a comma separated list of page IDs to load popular contact form styles and scripts. Example: 90,1001', 'secretum'),
	'section' 			=> 'secretum_enqueue',
	'type' 				=> 'text'
));