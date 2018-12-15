<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Menu Items
 */
$wp_customize->add_section('secretum_header_top_items', array(
	'panel' 				=> 'secretum_header_top',
    'title' 				=> __('Menu Items', 'secretum'),
    'description' 			=> __('Customize the properties of items within the menu.', 'secretum'),
    'priority' 				=> 10,
));


// Setting :: Background Color
$wp_customize->add_setting('secretum[header_top_item_background_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Background Color
$wp_customize->add_control('secretum[header_top_item_background_color]', array(
	'label' 				=> __('Background Color', 'secretum'),
	'section' 				=> 'secretum_header_top_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_background_colors()
));


// Setting :: Background Hover Color
$wp_customize->add_setting('secretum[header_top_item_background_hover_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Background Hover Color
$wp_customize->add_control('secretum[header_top_item_background_hover_color]', array(
	'label' 				=> __('Background Hover Color', 'secretum'),
	'section' 				=> 'secretum_header_top_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_background_hover_colors()
));


// Setting :: Margin - TOP & BOTTOM
$wp_customize->add_setting('secretum[header_top_item_margin_y]', array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Margin - TOP & BOTTOM
$wp_customize->add_control('secretum[header_top_item_margin_y]', array(
	'label' 				=> __('Margin - TOP & BOTTOM', 'secretum'),
	'section' 				=> 'secretum_header_top_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_margin_top_bottom()
));


// Setting :: Margin - RIGHT & LEFT
$wp_customize->add_setting('secretum[header_top_item_margin_x]', array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Margin - RIGHT & LEFT
$wp_customize->add_control('secretum[header_top_item_margin_x]', array(
	'label' 				=> __('Margin - LEFT & RIGHT', 'secretum'),
	'description' 			=> __('Controls margin within item area.', 'secretum'),
	'section' 				=> 'secretum_header_top_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_margin_left_right()
));


// Setting :: Padding - TOP & BOTTOM
$wp_customize->add_setting('secretum[header_top_item_padding_y]', array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Padding - TOP & BOTTOM
$wp_customize->add_control('secretum[header_top_item_padding_y]', array(
	'label' 				=> __('Padding - TOP & BOTTOM', 'secretum'),
	'section' 				=> 'secretum_header_top_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_padding_top_bottom()
));


// Setting :: Padding - RIGHT & LEFT
$wp_customize->add_setting('secretum[header_top_item_padding_x]', array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Padding - RIGHT & LEFT
$wp_customize->add_control('secretum[header_top_item_padding_x]', array(
	'label' 				=> __('Padding - LEFT & RIGHT', 'secretum'),
	'description' 			=> __('Controls padding within item area.', 'secretum'),
	'section' 				=> 'secretum_header_top_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_padding_left_right()
));


// Setting :: Item Border Type
$wp_customize->add_setting('secretum[header_top_item_border_type]', array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Item Border Type
$wp_customize->add_control('secretum[header_top_item_border_type]', array(
	'label' 				=> __('Border Type', 'secretum'),
	'section' 				=> 'secretum_header_top_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_border()
));


// Setting :: Border Color
$wp_customize->add_setting('secretum[header_top_item_border_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Border Color
$wp_customize->add_control('secretum[header_top_item_border_color]', array(
	'label' 				=> __('Border Color', 'secretum'),
	'section' 				=> 'secretum_header_top_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_border_colors()
));
