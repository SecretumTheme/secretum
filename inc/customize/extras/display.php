<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Setting :: Scroll To Top Icon
$wp_customize->add_setting('secretum[scrolltop]' , array(
	'sanitize_callback' => 'secretum_sanitize_bool',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Scroll To Top Icon
$wp_customize->add_control('secretum[scrolltop]', array(
	'label' 			=> __('Scroll To Top Icon', 'secretum'),
	'section' 			=> 'secretum_extras_display_section',
	'type' 				=> 'checkbox'
));