<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/sections/site-identity.php
 * @since      1.0.0
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'site_identity',
	__( 'Site Identity', 'secretum' )
);

// Display Title/Tag Lines.
$wp_customize->add_section(
	'colors',
	[
		'panel'    => 'site_identity',
		'title'    => __( 'Display Site Title and Tagline', 'secretum' ),
		'priority' => 40,
	]
);

$wp_customize->add_control(
	'display_header_text',
	[
		'settings' => 'header_textcolor',
		'label'    => __( 'Display Site Title and Tagline', 'secretum' ),
		'section'  => 'colors',
		'type'     => 'checkbox',
		'priority' => 40,
	]
);

$wp_customize->add_setting(
	'header_textcolor',
	[
		'theme_supports'       => array( 'custom-header', 'header-text' ),
		'default'              => get_theme_support( 'custom-header', 'default-text-color' ),
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'maybe_hash_hex_color',
	]
);


// Section.
$customizer->section(
	'site_identity_display',
	'site_identity',
	__( 'Display Settings', 'secretum' ),
	''
);


// Checkbox.
$customizer->checkbox(
	'site_identity_display',
	'site_identity_branding_status',
	__( 'Brand Logo / Tagline Area', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['site_identity_branding_status']
);


// Checkbox.
$customizer->checkbox(
	'site_identity_display',
	'site_identity_logo_status',
	__( 'Logo / Website Title', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['site_identity_logo_status']
);


// Checkbox.
$customizer->checkbox(
	'site_identity_display',
	'site_identity_tagline_status',
	__( 'Tagline / Description Text', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['site_identity_tagline_status']
);


// Branding.
$customizer->section(
	'site_identity_branding',
	'site_identity',
	__( 'Branding', 'secretum' ),
	''
);


// Select.
$customizer->select(
	'site_identity_branding',
	'site_identity_alignment',
	__( 'Alignment', 'secretum' ),
	'',
	$defaults['site_identity_alignment'],
	secretum_customizer_text_alignments()
);


// Setting :: Site Title.
$wp_customize->add_setting(
	'blogname',
	[
		'default'           => get_option( 'blogname' ),
		'sanitize_callback' => '\Secretum\secretum_customizer_sanitize_html',
		'capability'        => 'manage_options',
		'transport'         => 'postMessage',
	]
);


// Control :: Site Title.
$wp_customize->add_control(
	'blogname',
	[
		'label'    => __( 'Site Title', 'secretum' ),
		'section'  => 'secretum_site_identity_branding_section',
		'priority' => 10,
	]
);


// Setting :: Tagline.
$wp_customize->add_setting(
	'blogdescription',
	[
		'default'           => get_option( 'blogdescription' ),
		'sanitize_callback' => '\Secretum\secretum_customizer_sanitize_html',
		'capability'        => 'manage_options',
		'transport'         => 'postMessage',
	]
);


// Control :: Tagline.
$wp_customize->add_control(
	'blogdescription',
	[
		'label'    => __( 'Tagline', 'secretum' ),
		'section'  => 'secretum_site_identity_branding_section',
		'priority' => 10,
	]
);


// Setting :: Upload/Select Logo.
$wp_customize->add_setting(
	'custom_logo',
	[
		'theme_supports'    => [
			'custom-logo',
		],
		'sanitize_callback' => 'absint',
	]
);


// Custom Logo Args Array.
$secretum_custom_logo_args = get_theme_support( 'custom-logo' );


// Control :: Upload/Crop Image.
$wp_customize->add_control(
	new \WP_Customize_Cropped_Image_Control(
		$wp_customize,
		'custom_logo',
		[
			'label'         => __( 'Website Logo', 'secretum' ),
			'section'       => 'secretum_site_identity_branding_section',
			'height'        => $secretum_custom_logo_args[0]['height'],
			'width'         => $secretum_custom_logo_args[0]['width'],
			'flex_height'   => $secretum_custom_logo_args[0]['flex-height'],
			'flex_width'    => $secretum_custom_logo_args[0]['flex-width'],
			'priority'      => 10,
			'button_labels' => [
				'select'       => __( 'Select logo', 'secretum' ),
				'change'       => __( 'Change logo', 'secretum' ),
				'remove'       => __( 'Remove', 'secretum' ),
				'default'      => __( 'Default', 'secretum' ),
				'placeholder'  => __( 'No logo selected', 'secretum' ),
				'frame_title'  => __( 'Select logo', 'secretum' ),
				'frame_button' => __( 'Choose logo', 'secretum' ),
			],
		]
	)
);


// Select.
$customizer->number(
	'site_identity_branding',
	'custom_logo_maxwidth',
	__( 'Logo Max-Width In Pixels', 'secretum' ),
	__( 'If defined, inline CSS will set a max-width and auto height for the logo.', 'secretum' ),
	[
		'min' => 0,
	],
	(int) $defaults['custom_logo_maxwidth']
);


// Select.
$customizer->number(
	'site_identity_branding',
	'custom_logo_height',
	__( 'Logo Crop Height In Pixels', 'secretum' ),
	__( 'After publishing, refresh the customizer, then reselect logo to crop.', 'secretum' ),
	[
		'min' => 0,
	],
	(int) $defaults['custom_logo_height']
);


// Select.
$customizer->number(
	'site_identity_branding',
	'custom_logo_width',
	__( 'Logo Crop Width In Pixels', 'secretum' ),
	__( 'After publishing, refresh the customizer, then reselect logo to crop.', 'secretum' ),
	[
		'min' => 0,
	],
	(int) $defaults['custom_logo_width']
);


// Setting :: Website Site Icon.
$wp_customize->add_setting(
	'site_icon',
	[
		'capability'        => 'manage_options',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	]
);


// Control :: Site Icon Upload/Select.
$wp_customize->add_control(
	new \WP_Customize_Site_Icon_Control(
		$wp_customize,
		'site_icon',
		[
			'label'       => __( 'Site Icon', 'secretum' ),
			'description' => __( 'Site Icons are what you see in browser tabs, bookmark bars, and within the WordPress mobile apps. Site Icons should be square and at least 512 &times; 512 pixels.', 'secretum' ),
			'section'     => 'secretum_site_identity_branding_section',
			'priority'    => 60,
			'height'      => 512,
			'width'       => 512,
		]
	)
);

// Container.
$container->settings(
	[
		'panel'   => 'site_identity',
		'section' => 'site_identity_title',
		'title'   => __( 'Title Container', 'secretum' ),
		'type'    => false,
	]
);


// Container Borders.
$borders->settings(
	[
		'section' => 'site_identity_title_container',
	]
);


// Typography.
$textuals->settings(
	[
		'panel'     => 'site_identity',
		'section'   => 'site_identity_title',
		'title'     => __( 'Title Typography', 'secretum' ),
		'alignment' => true,
	]
);


// Container.
$container->settings(
	[
		'panel'   => 'site_identity',
		'section' => 'site_identity_desc',
		'title'   => __( 'Tagline Container', 'secretum' ),
		'type'    => false,
	]
);


// Container Borders.
$borders->settings(
	[
		'section' => 'site_identity_desc_container',
	]
);


// Typography.
$textuals->settings(
	[
		'panel'     => 'site_identity',
		'section'   => 'site_identity_desc',
		'title'     => __( 'Tagline Typography', 'secretum' ),
		'alignment' => true,
	]
);
