<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section :: Menu Items
 */
$wp_customize->add_section('secretum_primary_nav_items', array(
	'panel' 				=> 'secretum_primary_nav',
    'title' 				=> __('Menu Items', 'secretum'),
    'description' 			=> __('Customize the properties of items within the menu.', 'secretum'),
    'priority' 				=> 10,
));


// Setting :: Item Alignment
$wp_customize->add_setting('secretum[primary_nav_alignment]', array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'postMessage',
	'type' 					=> 'option'
));

// Control :: Item Alignment
$wp_customize->add_control('secretum[primary_nav_alignment]', array(
	'label' 				=> __('Item Alignment', 'secretum'),
	'section' 				=> 'secretum_primary_nav_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_margin_alignments()
));

// Refresh Partial :: Item Alignment
$wp_customize->selective_refresh->add_partial('primary_nav_alignment_partial', array(
	'settings'				=> array('secretum[primary_nav_alignment]'),
	'selector'            	=> '.navbar-nav.primary',
	'render_callback'     	=> false,
	'container_inclusive' 	=> false
));


// Setting :: Font Size
$wp_customize->add_setting('secretum[primary_nav_font_size]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Size
$wp_customize->add_control('secretum[primary_nav_font_size]', array(
	'label' 				=> __('Font Size', 'secretum'),
	'section' 				=> 'secretum_primary_nav_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_sizes()
));


// Setting :: Font Familiy
$wp_customize->add_setting('secretum[primary_nav_item_font_family]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Familiy
$wp_customize->add_control('secretum[primary_nav_item_font_family]', array(
	'label' 				=> __('Font Familiy', 'secretum'),
	'section' 				=> 'secretum_primary_nav_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_families()
));


// Setting :: Background Color
$wp_customize->add_setting('secretum[primary_nav_item_background_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Background Color
$wp_customize->add_control('secretum[primary_nav_item_background_color]', array(
	'label' 				=> __('Background Color', 'secretum'),
	'section' 				=> 'secretum_primary_nav_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_background_colors()
));


// Setting :: Background Hover Color
$wp_customize->add_setting('secretum[primary_nav_item_background_hover_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Background Hover Color
$wp_customize->add_control('secretum[primary_nav_item_background_hover_color]', array(
	'label' 				=> __('Background Hover Color', 'secretum'),
	'section' 				=> 'secretum_primary_nav_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_background_hover_colors()
));


// Setting :: Padding - TOP & BOTTOM
$wp_customize->add_setting('secretum[primary_nav_item_padding_y]', array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Padding - TOP & BOTTOM
$wp_customize->add_control('secretum[primary_nav_item_padding_y]', array(
	'label' 				=> __('Padding - TOP & BOTTOM', 'secretum'),
	'section' 				=> 'secretum_primary_nav_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_padding_top_bottom()
));


// Setting :: Padding - RIGHT & LEFT
$wp_customize->add_setting('secretum[primary_nav_item_padding_x]', array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Padding - RIGHT & LEFT
$wp_customize->add_control('secretum[primary_nav_item_padding_x]', array(
	'label' 				=> __('Padding - LEFT & RIGHT', 'secretum'),
	'description' 			=> __('Controls padding within item area.', 'secretum'),
	'section' 				=> 'secretum_primary_nav_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_padding_left_right()
));


// Setting :: Item Border Type
$wp_customize->add_setting('secretum[primary_nav_item_border_type]', array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Item Border Type
$wp_customize->add_control('secretum[primary_nav_item_border_type]', array(
	'label' 				=> __('Border Type', 'secretum'),
	'section' 				=> 'secretum_primary_nav_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_border()
));


// Setting :: Border Color
$wp_customize->add_setting('secretum[primary_nav_item_border_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Border Color
$wp_customize->add_control('secretum[primary_nav_item_border_color]', array(
	'label' 				=> __('Border Color', 'secretum'),
	'section' 				=> 'secretum_primary_nav_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_border_colors()
));


// Setting :: Text Color
$wp_customize->add_setting('secretum[primary_nav_item_text_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Text Color
$wp_customize->add_control('secretum[primary_nav_item_text_color]', array(
	'label' 				=> __('Text Color', 'secretum'),
	'section' 				=> 'secretum_primary_nav_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_text_colors()
));


// Setting :: Link Color
$wp_customize->add_setting('secretum[primary_nav_item_link_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Link Color
$wp_customize->add_control('secretum[primary_nav_item_link_color]', array(
	'label' 				=> __('Link Color', 'secretum'),
	'section' 				=> 'secretum_primary_nav_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_link_colors()
));


// Setting :: Link Hover Color
$wp_customize->add_setting('secretum[primary_nav_item_link_hover_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Link Hover Color
$wp_customize->add_control('secretum[primary_nav_item_link_hover_color]', array(
	'label' 				=> __('Link Hover Color', 'secretum'),
	'section' 				=> 'secretum_primary_nav_items',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_link_hover_colors()
));
