<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Setting :: Type The Word: reset
$wp_customize->add_setting('secretum[reset]', array(
	'sanitize_callback' => 'secretum_customizer_reset',
	'type' 				=> 'option',
	'transport' 		=> 'refresh',
));

// Control :: Type The Word: reset
$wp_customize->add_control('secretum[reset]', array(
	'label' 			=> __('Type the uppercase word: RESET', 'secretum'),
	'section' 			=> 'secretum_reset_section',
	'type' 				=> 'text'
));
