<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Scroll To Top Icon
 */
$wp_customize->add_section('secretum_theme_scrolltop', array(
	'panel' 			=> 'secretum_extras',
    'title' 			=> __('Scroll To Top Icon', 'secretum'),
    'description' 		=> __('Displays at the bottom-right corner of the browsers viewing area.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Hide Scroll To Top Icon
$wp_customize->add_setting('secretum[scrolltop]' , array(
	'sanitize_callback' => 'secretum_sanitize_checkbox',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Hide Scroll To Top Icon
$wp_customize->add_control('secretum[scrolltop]', array(
	'label' 		=> __('Hide Scroll To Top Icon', 'secretum'),
    'description' 	=> __('Select to disable the scroll to top icon.', 'secretum'),
	'section' 		=> 'secretum_theme_scrolltop',
	'type' 			=> 'checkbox'
));


// Setting :: Background Color
$wp_customize->add_setting('secretum[scrolltop_background_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Background Color
$wp_customize->add_control('secretum[scrolltop_background_color]', array(
	'label' 			=> __('Background Color', 'secretum'),
	'section' 			=> 'secretum_theme_scrolltop',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_background_colors()
));


// Setting :: Background Hover Color
$wp_customize->add_setting('secretum[scrolltop_background_hover_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Background Hover Color
$wp_customize->add_control('secretum[scrolltop_background_hover_color]', array(
	'label' 			=> __('Background Hover Color', 'secretum'),
	'section' 			=> 'secretum_theme_scrolltop',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_background_hover_colors()
));


// Setting :: Border Type
$wp_customize->add_setting('secretum[scrolltop_border_type]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Border Type
$wp_customize->add_control('secretum[scrolltop_border_type]', array(
	'label' 			=> __('Border Type', 'secretum'),
	'section' 			=> 'secretum_theme_scrolltop',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_border()
));


// Setting :: Border Color
$wp_customize->add_setting('secretum[scrolltop_border_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Border Color
$wp_customize->add_control('secretum[scrolltop_border_color]', array(
	'label' 			=> __('Border Color', 'secretum'),
	'section' 			=> 'secretum_theme_scrolltop',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_border_colors()
));


// Setting :: Font Size
$wp_customize->add_setting('secretum[scrolltop_font_size]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Font Size
$wp_customize->add_control('secretum[scrolltop_font_size]', array(
	'label' 				=> __('Font Size', 'secretum'),
	'section' 				=> 'secretum_theme_scrolltop',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_font_sizes()
));


// Setting :: Text Color
$wp_customize->add_setting('secretum[scrolltop_text_color]' , array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Text Color
$wp_customize->add_control('secretum[scrolltop_text_color]', array(
	'label' 				=> __('Text Color', 'secretum'),
	'section' 				=> 'secretum_theme_scrolltop',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_text_colors()
));


// Setting :: Margin - RIGHT
$wp_customize->add_setting('secretum[scrolltop_margin_right]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Margin -  RIGHT
$wp_customize->add_control('secretum[scrolltop_margin_right]', array(
	'label' 			=> __('Margin - RIGHT', 'secretum'),
	'section' 			=> 'secretum_theme_scrolltop',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_margin_right()
));


// Setting :: Margin - BOTTOM
$wp_customize->add_setting('secretum[scrolltop_margin_bottom]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Margin - BOTTOM
$wp_customize->add_control('secretum[scrolltop_margin_bottom]', array(
	'label' 			=> __('Margin - BOTTOM', 'secretum'),
	'section' 			=> 'secretum_theme_scrolltop',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_margin_bottom()
));


// Setting :: Padding - LEFT & RIGHT
$wp_customize->add_setting('secretum[scrolltop_padding_x]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Padding - LEFT & RIGHT
$wp_customize->add_control('secretum[scrolltop_padding_x]', array(
	'label' 			=> __('Padding - LEFT & RIGHT', 'secretum'),
	'section' 			=> 'secretum_theme_scrolltop',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_padding_left_right()
));


// Setting :: Padding - TOP & BOTTOM
$wp_customize->add_setting('secretum[scrolltop_padding_y]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Padding - TOP & BOTTOM
$wp_customize->add_control('secretum[scrolltop_padding_y]', array(
	'label' 			=> __('Padding - TOP & BOTTOM', 'secretum'),
	'section' 			=> 'secretum_theme_scrolltop',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_padding_top_bottom()
));
