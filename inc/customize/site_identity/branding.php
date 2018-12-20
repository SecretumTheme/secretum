<?php
/**
 * WordPress Customizer: Section, Settings & Controls
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Setting :: Alignment
$wp_customize->add_setting('secretum[site_identity_alignment]', array(
	'sanitize_callback' 	=> 'sanitize_key',
	'transport' 			=> 'refresh',
	'type' 					=> 'option',
	'default' 				=> ''
));

// Control :: Alignment
$wp_customize->add_control('secretum[site_identity_alignment]', array(
	'label' 				=> __('Alignment', 'secretum'),
	'section' 				=> 'secretum_site_identity_branding_section',
	'type' 					=> 'select',
	'choices' 				=> secretum_customizer_text_alignments()
));


// Setting :: Site Title
$wp_customize->add_setting('blogname', array(
	'default'    		=> get_option('blogname'),
	'sanitize_callback' => 'secretum_sanitize_all',
	'capability' 		=> 'manage_options',
	'transport'      	=> 'postMessage',
	'type'       		=> 'option'
));

// Control :: Site Title
$wp_customize->add_control('blogname', array(
	'label' 	=> __('Site Title', 'secretum'),
	'section'   => 'secretum_site_identity_branding_section',
    'priority' 	=> 10,
));

// Refresh :: Site Title
$wp_customize->selective_refresh->add_partial('blogname', array(
	'settings'            => array('blogname'),
	'selector'            => '.navbar-brand',
	'render_callback'     => false,
	'container_inclusive' => false
));


// Setting :: Tagline
$wp_customize->add_setting('blogdescription', array(
	'default'    		=> get_option('blogdescription'),
	'type'       		=> 'option',
	'capability' 		=> 'manage_options',
	'sanitize_callback' => 'secretum_sanitize_html'
));

// Control :: Tagline
$wp_customize->add_control('blogdescription', array(
	'label' 	=> __('Tagline', 'secretum'),
	'section' 	=> 'secretum_site_identity_branding_section',
    'priority' 	=> 10,
));

// Refresh :: Tagline
$wp_customize->selective_refresh->add_partial('blogdescription', array(
	'settings'            => array('blogdescription'),
	'selector'            => '.site-description',
	'render_callback'     => false,
	'container_inclusive' => false
));


// Setting :: Upload/Select Logo
$wp_customize->add_setting('custom_logo', array(
	'theme_supports' 	=> array('custom-logo'),
	'transport'      	=> 'postMessage',
	'sanitize_callback' => 'absint',
));

// Custom Logo Args Array
$custom_logo_args = get_theme_support('custom-logo');

// Control :: Upload/Crop Image
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'custom_logo', array(
	'label'         => __('Website Logo', 'secretum'),
	'section'       => 'secretum_site_identity_branding_section',
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
	'selector'            => '.navbar-brand.custom-logo-link',
	'render_callback'     => get_custom_logo(),
	'container_inclusive' => true
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
	'section' 		=> 'secretum_site_identity_branding_section',
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
	'section' 		=> 'secretum_site_identity_branding_section',
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
	'section' 		=> 'secretum_site_identity_branding_section',
	'type' 			=> 'number',
	'input_attrs' 	=> array('min' => 0)
));


// Setting :: Website Site Icon
$wp_customize->add_setting('site_icon', array(
	'type'       		=> 'option',
	'capability' 		=> 'manage_options',
	'transport'  		=> 'postMessage',
	'sanitize_callback' => 'absint'
));

// Control :: Site Icon Upload/Select
$wp_customize->add_control(new WP_Customize_Site_Icon_Control($wp_customize, 'site_icon', array(
	'label' 		=> __('Site Icon', 'secretum'),
	'description' 	=> __('Site Icons are what you see in browser tabs, bookmark bars, and within the WordPress mobile apps. Site Icons should be square and at least 512 &times; 512 pixels.', 'secretum'),
	'section' 		=> 'secretum_site_identity_branding_section',
	'priority' 		=> 60,
	'height' 		=> 512,
	'width' 		=> 512
)));
