<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Container
 */
$wp_customize->add_section('secretum_site_identity_desc_container', array(
	'panel' 			=> 'secretum_site_identity',
    'title' 			=> __('Description Container', 'secretum'),
    'description' 		=> __('Header Container > <b>Description Container</b>', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Background Color
$wp_customize->add_setting('secretum[site_identity_desc_container_background_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Background Color
$wp_customize->add_control('secretum[site_identity_desc_container_background_color]', array(
	'label' 			=> __('Background Color', 'secretum'),
	'section' 			=> 'secretum_site_identity_desc_container',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_background_colors()
));


// Setting :: Margin - LEFT & RIGHT
$wp_customize->add_setting('secretum[site_identity_desc_container_margin_x]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Margin - LEFT & RIGHT
$wp_customize->add_control('secretum[site_identity_desc_container_margin_x]', array(
	'label' 			=> __('Margin - LEFT & RIGHT', 'secretum'),
	'section' 			=> 'secretum_site_identity_desc_container',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_margin_left_right()
));


// Setting :: Margin - TOP & BOTTOM
$wp_customize->add_setting('secretum[site_identity_desc_container_margin_y]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Margin - TOP & BOTTOM
$wp_customize->add_control('secretum[site_identity_desc_container_margin_y]', array(
	'label' 			=> __('Margin - TOP & BOTTOM', 'secretum'),
	'section' 			=> 'secretum_site_identity_desc_container',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_margin_top_bottom()
));


// Setting :: Padding - LEFT & RIGHT
$wp_customize->add_setting('secretum[site_identity_desc_container_padding_x]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Padding - LEFT & RIGHT
$wp_customize->add_control('secretum[site_identity_desc_container_padding_x]', array(
	'label' 			=> __('Padding - LEFT & RIGHT', 'secretum'),
	'section' 			=> 'secretum_site_identity_desc_container',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_padding_left_right()
));


// Setting :: Padding - TOP & BOTTOM
$wp_customize->add_setting('secretum[site_identity_desc_container_padding_y]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Padding - TOP & BOTTOM
$wp_customize->add_control('secretum[site_identity_desc_container_padding_y]', array(
	'label' 			=> __('Padding - TOP & BOTTOM', 'secretum'),
	'section' 			=> 'secretum_site_identity_desc_container',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_padding_top_bottom()
));


// Setting :: Border Type
$wp_customize->add_setting('secretum[site_identity_desc_container_border_type]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Border Type
$wp_customize->add_control('secretum[site_identity_desc_container_border_type]', array(
	'label' 			=> __('Border Type', 'secretum'),
	'section' 			=> 'secretum_site_identity_desc_container',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_border()
));


// Setting :: Border Color
$wp_customize->add_setting('secretum[site_identity_desc_container_border_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Border Color
$wp_customize->add_control('secretum[site_identity_desc_container_border_color]', array(
	'label' 			=> __('Border Color', 'secretum'),
	'section' 			=> 'secretum_site_identity_desc_container',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_border_colors()
));
