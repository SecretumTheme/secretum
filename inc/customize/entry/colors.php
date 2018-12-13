<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Color Settings
 */
$wp_customize->add_section('secretum_entry_colors' , array(
	'panel' 		=> 'secretum_entry',
    'title' 		=> __('Color Settings', 'secretum'),
    'description' 	=> __('Colors are based on the themes color palette.', 'secretum'),
    'priority' 		=> 10,
));


// Setting :: Entry Background Color
$wp_customize->add_setting('secretum[entry_background_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Entry Background Color
$wp_customize->add_control('secretum[entry_background_color]', array(
	'label' 	=> __('Entry Background Color', 'secretum'),
	'section' 	=> 'secretum_entry_colors',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_background_colors()
));



// Setting :: Text Color
$wp_customize->add_setting('secretum[entry_text_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Text Color
$wp_customize->add_control('secretum[entry_text_color]', array(
	'label' 	=> __('Text Color', 'secretum'),
	'section' 	=> 'secretum_entry_colors',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_text_colors()
));


// Setting :: Text Hover Color
$wp_customize->add_setting('secretum[entry_link_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Text Hover Color
$wp_customize->add_control('secretum[entry_link_color]', array(
	'label' 	=> __('Link Color', 'secretum'),
	'section' 	=> 'secretum_entry_colors',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_link_colors()
));


// Setting :: Text Hover Color
$wp_customize->add_setting('secretum[entry_link_color_hover]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Text Hover Color
$wp_customize->add_control('secretum[entry_link_color_hover]', array(
	'label' 	=> __('Link Hover Color', 'secretum'),
	'section' 	=> 'secretum_entry_colors',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_link_hover_colors()
));

