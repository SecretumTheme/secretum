<?php
/**
 * WordPress Customizer: Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Section: Site Identity
 */
$wp_customize->add_section('secretum_header_site_identity', array(
	'panel' 	=> 'secretum_header',
    'title' 	=> __('Site Identity', 'secretum'),
    'priority' 	=> 10
));


// Setting :: Site Title
$wp_customize->add_setting('blogname', array(
	'default'    => get_option('blogname'),
	'type'       => 'option',
	'capability' => 'manage_options',
));

// Control :: Site Title
$wp_customize->add_control('blogname', array(
	'label' 	=> __('Site Title', 'secretum'),
	'section'   => 'secretum_header_site_identity',
    'priority' 	=> 10,
));


// Setting :: Tagline
$wp_customize->add_setting('blogdescription', array(
	'default'    => get_option('blogdescription'),
	'type'       => 'option',
	'capability' => 'manage_options',
));

// Control :: Tagline
$wp_customize->add_control('blogdescription', array(
	'label' 	=> __('Tagline', 'secretum'),
	'section' 	=> 'secretum_header_site_identity',
    'priority' 	=> 10,
));


// Setting :: Display Site Title and Tagline
$wp_customize->add_setting('header_text', array(
	'theme_supports'    => array('custom-logo', 'header-text'),
	'default'           => 1,
	'sanitize_callback' => 'absint',
));

// Control :: Display Site Title and Tagline
$wp_customize->add_control('header_text', array(
	'label' 		=> __('Display Site Title and Tagline', 'secretum'),
	'description' 	=> __('Setting ignored if graphic logo used.', 'secretum'),
	'section' 		=> 'secretum_header_site_identity',
	'type' 			=> 'checkbox',
    'priority' 		=> 10,
));


// Setting :: Upload/Select Logo
$wp_customize->add_setting('custom_logo', array(
	'theme_supports' => array('custom-logo'),
	'transport'      => 'postMessage'
));

// Custom Logo Args Array
$custom_logo_args = get_theme_support('custom-logo');

// Control :: Upload/Crop Image
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'custom_logo', array(
	'label'         => __('Website Logo', 'secretum'),
	'section'       => 'secretum_header_site_identity',
	'height'        => $custom_logo_args[0]['height'],
	'width'         => $custom_logo_args[0]['width'],
	'flex_height'   => $custom_logo_args[0]['flex-height'],
	'flex_width'    => $custom_logo_args[0]['flex-width'],
    'priority' 		=> 10,
	'button_labels' => array(
		'select'       => __('Select logo', 'secretum'),
		'change'       => __('Change logo', 'secretum'),
		'remove'       => __('Remove', 'secretum'),
		'default'      => __('Default', 'secretum'),
		'placeholder'  => __('No logo selected', 'secretum'),
		'frame_title'  => __('Select logo', 'secretum'),
		'frame_button' => __('Choose logo', 'secretum')
	)
)));

// Refresh :: Display Logo
$wp_customize->selective_refresh->add_partial('custom_logo', array(
	'settings'            => array('custom_logo'),
	'selector'            => '.custom-logo-link',
	'render_callback'     => get_custom_logo(),
	'container_inclusive' => true
));


// Setting :: Logo Location
$wp_customize->add_setting('secretum[header_logo_location]', array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'sanitize_key'
));

// Control :: Logo Location
$wp_customize->add_control('ssecretum[header_logo_location]', array(
	'label' 			=> __('Logo Location', 'secretum'),
	'description' 		=> __('Select the display location of the website logo/tagline. Logo location will override menu location.', 'secretum'),
	'section' 			=> 'secretum_header_site_identity',
	'type' 				=> 'radio',
    'priority' 			=> 20,
	'choices' 			=> array(
		'' 			=> __('Theme Default', 'secretum'),
		'left' 		=> __('Left logo', 'secretum'),
		'right' 	=> __('Right logo', 'secretum'),
		'center' 	=> __('Center logo', 'secretum')
	)
));


// Setting :: Custom Logo Max Width In Pixels
$wp_customize->add_setting('secretum[custom_logo_maxwidth]' , array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'absint'
));

// Control :: Custom Logo Max Width In Pixels
$wp_customize->add_control('secretum[custom_logo_maxwidth]', array(
	'label' 		=> __('Logo Max-Width In Pixels', 'secretum'),
	'description' 	=> __('If defined, inline CSS will set a max-width and auto height for the logo.', 'secretum'),
	'section' 		=> 'secretum_header_site_identity',
	'settings' 		=> 'secretum[custom_logo_maxwidth]',
    'priority' 			=> 20,
	'type' 			=> 'number',
	'input_attrs' 	=> array('min' => 0)
));


// Setting :: Custom Logo Crop Height In Pixels
$wp_customize->add_setting('secretum[custom_logo_height]' , array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'absint'
));

// Control :: Custom Logo Crop Height In Pixels
$wp_customize->add_control('secretum[custom_logo_height]', array(
	'label' 		=> __('Logo Crop Height In Pixels', 'secretum'),
	'description' 	=> __('Default: 75px - After publishing, refresh the customizer, then reselect logo to crop.', 'secretum'),
	'section' 		=> 'secretum_header_site_identity',
    'priority' 			=> 20,
	'type' 			=> 'number',
	'input_attrs' 	=> array('min' => 0)
));


// Setting :: Custom Logo Crop Width In Pixels
$wp_customize->add_setting('secretum[custom_logo_width]' , array(
	'default' 			=> '',
	'type'       		=> 'option',
	'transport' 		=> 'refresh',
	'sanitize_callback' => 'absint'
));

// Control :: Custom Logo Crop Width In Pixels
$wp_customize->add_control('secretum[custom_logo_width]', array(
	'label' 		=> __('Logo Crop Width In Pixels', 'secretum'),
	'description' 	=> __('Default: 300px - After publishing, refresh the customizer, then reselect logo to crop.', 'secretum'),
	'section' 		=> 'secretum_header_site_identity',
    'priority' 			=> 20,
	'type' 			=> 'number',
	'input_attrs' 	=> array('min' => 0)
));


// Setting :: Website Site Icon
$wp_customize->add_setting('site_icon', array(
	'type'       => 'option',
	'capability' => 'manage_options',
	'transport'  => 'postMessage'
));

// Control :: Site Icon Upload/Select
$wp_customize->add_control(new WP_Customize_Site_Icon_Control($wp_customize, 'site_icon', array(
	'label' 		=> __('Site Icon', 'secretum'),
	'description' 	=> __('Site Icons are what you see in browser tabs, bookmark bars, and within the WordPress mobile apps. Site Icons should be square and at least 512 &times; 512 pixels.', 'secretum'),
	'section' 		=> 'secretum_header_site_identity',
    'priority' 			=> 20,
	'priority' 		=> 60,
	'height' 		=> 512,
	'width' 		=> 512
)));
