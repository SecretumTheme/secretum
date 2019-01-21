<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Secretum\Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/site-identity.php
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'site_identity',
	__( 'Site Identity', 'secretum' )
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
	__( 'Hide Brand Logo / Tagline Area', 'secretum' ),
	'',
	$default['site_identity_branding_status']
);

// Checkbox.
$customizer->checkbox(
	'site_identity_display',
	'site_identity_logo_status',
	__( 'Hide Logo / Title', 'secretum' ),
	'',
	$default['site_identity_logo_status']
);

// Checkbox.
$customizer->checkbox(
	'site_identity_display',
	'site_identity_tagline_status',
	__( 'Hide Tagline / Desc Text', 'secretum' ),
	'',
	$default['site_identity_tagline_status']
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
	$default['site_identity_alignment'],
	secretum_customizer_text_alignments()
);

// Setting :: Site Title.
$wp_customize->add_setting( 'blogname', array(
	'default'		   	=> get_option( 'blogname' ),
	'sanitize_callback' => 'secretum_customizer_sanitize_html',
	'capability'		=> 'manage_options',
	'transport'		 	=> 'postMessage',
	'type'			  	=> 'option',
) );

// Control :: Site Title.
$wp_customize->add_control( 'blogname', array(
	'label'	 	=> __( 'Site Title', 'secretum' ),
	'section'   => 'secretum_site_identity_branding_section',
	'priority'  => 10,
) );

// Refresh :: Site Title.
$wp_customize->selective_refresh->add_partial( 'blogname', array(
	'settings'				=> array( 'blogname' ),
	'selector'				=> '.navbar-brand',
	'render_callback' 		=> false,
	'container_inclusive' 	=> false,
) );


// Setting :: Tagline.
$wp_customize->add_setting( 'blogdescription', array(
	'default'		   	=> get_option( 'blogdescription' ),
	'type'			  	=> 'option',
	'capability'		=> 'manage_options',
	'sanitize_callback' => 'secretum_customizer_sanitize_html',
) );

// Control :: Tagline.
$wp_customize->add_control( 'blogdescription', array(
	'label'	 	=> __( 'Tagline', 'secretum' ),
	'section'   => 'secretum_site_identity_branding_section',
	'priority'  => 10,
) );

// Refresh :: Tagline.
$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
	'settings' 				=> array( 'blogdescription' ),
	'selector' 				=> '.site-description',
	'render_callback' 		=> false,
	'container_inclusive' 	=> false,
) );


// Setting :: Upload/Select Logo.
$wp_customize->add_setting( 'custom_logo', array(
	'theme_supports'	=> array( 'custom-logo' ),
	'transport'		 => 'postMessage',
	'sanitize_callback' => 'absint',
) );

// Custom Logo Args Array.
$custom_logo_args = get_theme_support( 'custom-logo' );

// Control :: Upload/Crop Image.
$wp_customize->add_control(new \WP_Customize_Cropped_Image_Control($wp_customize, 'custom_logo', array(
	'label' 		=> __( 'Website Logo', 'secretum' ),
	'section'	   	=> 'secretum_site_identity_branding_section',
	'height'		=> $custom_logo_args[0]['height'],
	'width'		 	=> $custom_logo_args[0]['width'],
	'flex_height'   => $custom_logo_args[0]['flex-height'],
	'flex_width'	=> $custom_logo_args[0]['flex-width'],
	'priority'	  	=> 10,
	'button_labels' => array(
		'select' 		=> __( 'Select logo', 'secretum' ),
		'change'	   	=> __( 'Change logo', 'secretum' ),
		'remove'	   	=> __( 'Remove', 'secretum' ),
		'default'	  	=> __( 'Default', 'secretum' ),
		'placeholder'  	=> __( 'No logo selected', 'secretum' ),
		'frame_title'  	=> __( 'Select logo', 'secretum' ),
		'frame_button' 	=> __( 'Choose logo', 'secretum' ),
	),
) ) );

// Refresh :: Display Logo.
$wp_customize->selective_refresh->add_partial( 'custom_logo', array(
	'settings' 				=> array( 'custom_logo' ),
	'selector' 				=> '.navbar-brand.custom-logo-link',
	'render_callback' 		=> get_custom_logo(),
	'container_inclusive' 	=> true,
) );

// Select.
$customizer->number(
	'site_identity_branding',
	'custom_logo_maxwidth',
	__( 'Logo Max-Width In Pixels', 'secretum' ),
	__( 'If defined, inline CSS will set a max-width and auto height for the logo.', 'secretum' ),
	array(
		'min' => 0,
	),
	(int) $default['custom_logo_maxwidth']
);

// Select.
$customizer->number(
	'site_identity_branding',
	'custom_logo_height',
	__( 'Logo Crop Height In Pixels', 'secretum' ),
	__( 'After publishing, refresh the customizer, then reselect logo to crop.', 'secretum' ),
	array(
		'min' => 0,
	),
	(int) $default['custom_logo_height']
);

// Select.
$customizer->number(
	'site_identity_branding',
	'custom_logo_width',
	__( 'Logo Crop Width In Pixels', 'secretum' ),
	__( 'After publishing, refresh the customizer, then reselect logo to crop.', 'secretum' ),
	array(
		'min' => 0,
	),
	(int) $default['custom_logo_width']
);

// Setting :: Website Site Icon.
$wp_customize->add_setting( 'site_icon', array(
	'type'			  	=> 'option',
	'capability'		=> 'manage_options',
	'transport' 		=> 'postMessage',
	'sanitize_callback' => 'absint',
) );

// Control :: Site Icon Upload/Select.
$wp_customize->add_control( new \WP_Customize_Site_Icon_Control( $wp_customize, 'site_icon', array(
	'label'		 	=> __( 'Site Icon', 'secretum' ),
	'description'   => __( 'Site Icons are what you see in browser tabs, bookmark bars, and within the WordPress mobile apps. Site Icons should be square and at least 512 &times; 512 pixels.', 'secretum' ),
	'section'	   	=> 'secretum_site_identity_branding_section',
	'priority'	  	=> 60,
	'height'		=> 512,
	'width'		 	=> 512,
) ) );


// Container.
\Secretum\Container::instance( $customizer, $defaults )->settings( [
	'panel' 	=> 'site_identity',
	'section' 	=> 'site_identity_title',
	'title' 	=> __( 'Title Container', 'secretum' ),
	'type' 		=> false,
] );


// Borders.
\Secretum\Borders::instance( $customizer, $defaults )->settings( [
	'section' => 'site_identity_title_container',
] );

/**
// Title Container.
$customizer->section(
	'site_identity_title_container',
	'site_identity',
	__( 'Title Container', 'secretum' ),
	''
);

// Select.
$customizer->select(
	'site_identity_title_container',
	'site_identity_title_container_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['site_identity_title_container_background_color'],
	secretum_customizer_background_colors()
);

// Select.
$customizer->select(
	'site_identity_title_container',
	'site_identity_title_container_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$default['site_identity_title_container_margin_x'],
	secretum_customizer_margin_left_right()
);

// Select.
$customizer->select(
	'site_identity_title_container',
	'site_identity_title_container_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$default['site_identity_title_container_margin_y'],
	secretum_customizer_margin_top_bottom()
);

// Select.
$customizer->select(
	'site_identity_title_container',
	'site_identity_title_container_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['site_identity_title_container_padding_x'],
	secretum_customizer_padding_left_right()
);

// Select.
$customizer->select(
	'site_identity_title_container',
	'site_identity_title_container_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['site_identity_title_container_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// Select.
$customizer->select(
	'site_identity_title_container',
	'site_identity_title_container_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['site_identity_title_container_border_type'],
	secretum_customizer_border_types()
);

// Select.
$customizer->select(
	'site_identity_title_container',
	'site_identity_title_container_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['site_identity_title_container_border_color'],
	secretum_customizer_border_colors()
);
*/

// Textuals.
\Secretum\Textuals::instance( $customizer, $default )->settings( [
	'panel' 	=> 'site_identity',
	'section' 	=> 'site_identity_title',
	'title' 	=> __( 'Title Textuals', 'secretum' ),
] );

/**
// Textuals.
$customizer->section(
	'site_identity_title_textuals',
	'site_identity',
	__( 'Title Textuals', 'secretum' ),
	__( 'Customize fonts, text and link colors.', 'secretum' )
);

// Select.
$customizer->select(
	'site_identity_title_textuals',
	'site_identity_title_textual_font_family',
	__( 'Font Family', 'secretum' ),
	'',
	$default['site_identity_title_textual_font_family'],
	secretum_customizer_font_families()
);

// Select.
$customizer->select(
	'site_identity_title_textuals',
	'site_identity_title_textual_font_size',
	__( 'Font Size', 'secretum' ),
	'',
	$default['site_identity_title_textual_font_size'],
	secretum_customizer_font_sizes()
);

// Select.
$customizer->select(
	'site_identity_title_textuals',
	'site_identity_title_textual_font_style',
	__( 'Font Style', 'secretum' ),
	'',
	$default['site_identity_title_textual_font_style'],
	secretum_customizer_font_styles()
);

// Select.
$customizer->select(
	'site_identity_title_textuals',
	'site_identity_title_textual_text_transform',
	__( 'Text Transform', 'secretum' ),
	'',
	$default['site_identity_title_textual_text_transform'],
	secretum_customizer_text_transform()
);

// Select.
$customizer->select(
	'site_identity_title_textuals',
	'site_identity_title_textual_link_color',
	__( 'Link Color', 'secretum' ),
	'',
	$default['site_identity_title_textual_link_color'],
	secretum_customizer_link_colors()
);

// Select.
$customizer->select(
	'site_identity_title_textuals',
	'site_identity_title_textual_link_hover_color',
	__( 'Link Hover Color', 'secretum' ),
	'',
	$default['site_identity_title_textual_link_hover_color'],
	secretum_customizer_link_hover_colors()
);
*/

// Container.
\Secretum\Container::instance( $customizer, $defaults )->settings( [
	'panel' 	=> 'site_identity',
	'section' 	=> 'site_identity_desc',
	'title' 	=> __( 'Tagline Container', 'secretum' ),
	'type' 		=> false,
] );


// Borders.
\Secretum\Borders::instance( $customizer, $defaults )->settings( [
	'section' => 'site_identity_desc_container',
] );

/**
// Tagline Container.
$customizer->section(
	'site_identity_desc_container',
	'site_identity',
	__( 'Tagline Container', 'secretum' ),
	''
);

// Select.
$customizer->select(
	'site_identity_desc_container',
	'site_identity_desc_container_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['site_identity_desc_container_background_color'],
	secretum_customizer_background_colors()
);

// Select.
$customizer->select(
	'site_identity_desc_container',
	'site_identity_desc_container_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$default['site_identity_desc_container_margin_x'],
	secretum_customizer_margin_left_right()
);

// Select.
$customizer->select(
	'site_identity_desc_container',
	'site_identity_desc_container_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$default['site_identity_desc_container_margin_y'],
	secretum_customizer_margin_top_bottom()
);

// Select.
$customizer->select(
	'site_identity_desc_container',
	'site_identity_desc_container_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['site_identity_desc_container_padding_x'],
	secretum_customizer_padding_left_right()
);

// Select.
$customizer->select(
	'site_identity_desc_container',
	'site_identity_desc_container_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['site_identity_desc_container_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// Select.
$customizer->select(
	'site_identity_desc_container',
	'site_identity_desc_container_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['site_identity_desc_container_border_type'],
	secretum_customizer_border_types()
);

// Select.
$customizer->select(
	'site_identity_desc_container',
	'site_identity_desc_container_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['site_identity_desc_container_border_color'],
	secretum_customizer_border_colors()
);
*/

// Textuals.
\Secretum\Textuals::instance( $customizer, $default )->settings( [
	'panel' 	=> 'site_identity',
	'section' 	=> 'site_identity_desc',
	'title' 	=> __( 'Tagline Textuals', 'secretum' ),
] );

/**
// Textuals.
$customizer->section(
	'site_identity_desc_textuals',
	'site_identity',
	__( 'Tagline Textuals', 'secretum' ),
	__( 'Customize fonts, text and link colors.', 'secretum' )
);

// Select.
$customizer->select(
	'site_identity_desc_textuals',
	'site_identity_desc_textual_font_family',
	__( 'Font Family', 'secretum' ),
	'',
	$default['site_identity_desc_textual_font_family'],
	secretum_customizer_font_families()
);

// Select.
$customizer->select(
	'site_identity_desc_textuals',
	'site_identity_desc_textual_font_size',
	__( 'Font Size', 'secretum' ),
	'',
	$default['site_identity_desc_textual_font_size'],
	secretum_customizer_font_sizes()
);

// Select.
$customizer->select(
	'site_identity_desc_textuals',
	'site_identity_desc_textual_font_style',
	__( 'Font Style', 'secretum' ),
	'',
	$default['site_identity_desc_textual_font_style'],
	secretum_customizer_font_styles()
);

// Select.
$customizer->select(
	'site_identity_desc_textuals',
	'site_identity_desc_textual_text_transform',
	__( 'Text Transform', 'secretum' ),
	'',
	$default['site_identity_desc_textual_text_transform'],
	secretum_customizer_text_transform()
);

// Select.
$customizer->select(
	'site_identity_desc_textuals',
	'site_identity_desc_textual_text_color',
	__( 'Text Color', 'secretum' ),
	'',
	$default['site_identity_desc_textual_text_color'],
	secretum_customizer_text_colors()
);
*/
