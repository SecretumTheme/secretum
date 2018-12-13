<?php
/**
 * WordPress Customizer Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Section :: Toggler Icon
 */
$wp_customize->add_section('secretum_primary_nav_toggler_icon', array(
	'panel' 			=> 'secretum_primary_nav',
    'title' 			=> __('Toggler Icon', 'secretum'),
    'description' 		=> __('Customize the properties of the primary menu toggler icon.', 'secretum'),
    'priority' 			=> 10,
));


// Setting :: Toggler Alignment
$wp_customize->add_setting('secretum[primary_nav_toggler_icon_alignment]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'postMessage',
	'type' 				=> 'option'
));

// Control :: Toggler Alignment
$wp_customize->add_control('secretum[primary_nav_toggler_icon_alignment]', array(
	'label' 	=> __('Toggler Alignment', 'secretum'),
	'section' 	=> 'secretum_primary_nav_toggler_icon',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_margin_alignments()
));

// Refresh Partial :: Toggler Alignment
$wp_customize->selective_refresh->add_partial('secretum_primary_nav_toggler_icon_alignment_partial', array(
	'settings'            => array('secretum[primary_nav_toggler_icon_alignment]'),
	'selector'            => '.navbar-toggler-icon',
	'render_callback'     => false,
	'container_inclusive' => false
));


// Setting :: Toggler Size
$wp_customize->add_setting('secretum[primary_nav_toggler_icon_size]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Toggler Size
$wp_customize->add_control('secretum[primary_nav_toggler_icon_size]', array(
	'label' 		=> __('Toggler Size', 'secretum'),
	'description' 	=> __('Some features may not display particular sizes correctly. Choose wisely.', 'secretum'),
	'section' 		=> 'secretum_primary_nav_toggler_icon',
	'type' 			=> 'select',
	'choices' 		=> secretum_customizer_font_sizes()
));


// Setting :: Background Color
$wp_customize->add_setting('secretum[primary_nav_toggler_icon_background_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Background Color
$wp_customize->add_control('secretum[primary_nav_toggler_icon_background_color]', array(
	'label' 	=> __('Background Color', 'secretum'),
	'section' 	=> 'secretum_primary_nav_toggler_icon',
	'type' 		=> 'select',
	'choices' 	=> secretum_customizer_background_colors()
));


// Setting :: Spacing - Top & Bottom
$wp_customize->add_setting('secretum[primary_nav_toggler_icon_margin_y]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Spacing - Top & Bottom
$wp_customize->add_control('secretum[primary_nav_toggler_icon_margin_y]', array(
	'label' 			=> __('Margin - TOP & BOTTOM', 'secretum'),
	'description' 		=> __('Controls spacing around toggler.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_toggler_icon',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_margin_top_bottom()
));


// Setting :: Spacing - Left & Right
$wp_customize->add_setting('secretum[primary_nav_toggler_icon_margin_x]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Spacing - Left & Right
$wp_customize->add_control('secretum[primary_nav_toggler_icon_margin_x]', array(
	'label' 			=> __('Margin - RIGHT & LEFT', 'secretum'),
	'description' 		=> __('Controls spacing around toggler.', 'secretum'),
	'section' 			=> 'secretum_primary_nav_toggler_icon',
	'type' 				=> 'select',
	'choices' 			=> secretum_customizer_margin_left_right()
));


// Setting :: Border Radius
$wp_customize->add_setting('secretum[primary_nav_toggler_icon_border_radius]', array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Border Radius
$wp_customize->add_control('secretum[primary_nav_toggler_icon_border_radius]', array(
	'label' 		=> __('Border Radius', 'secretum'),
	'section' 		=> 'secretum_primary_nav_toggler_icon',
	'type' 			=> 'select',
	'choices' 		=> secretum_customizer_border_radius()
));


// Setting :: Border Color
$wp_customize->add_setting('secretum[primary_nav_toggler_icon_border_color]' , array(
	'sanitize_callback' => 'sanitize_key',
	'transport' 		=> 'refresh',
	'type' 				=> 'option',
	'default' 			=> ''
));

// Control :: Border Color
$wp_customize->add_control('secretum[primary_nav_toggler_icon_border_color]', array(
	'label' 		=> __('Border Color', 'secretum'),
	'section' 		=> 'secretum_primary_nav_toggler_icon',
	'type' 			=> 'select',
	'choices' 		=> secretum_customizer_border_colors()
));
