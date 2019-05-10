<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/sections/theme.php
 * @since      1.0.0
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'theme',
	__( 'Theme Design', 'secretum' )
);


// Section.
$customizer->section(
	'theme_color_palettes',
	'theme',
	__( 'Base Color Palette', 'secretum' ),
	__( 'Select the default color palette (stylesheet) for the website. This does not change previous set customizer settings and no css is added to the document head of the website. This is the recommended method to changing the websites color styling as it does not increase the size of the website pages.', 'secretum' )
);


// Select.
$customizer->select(
	'theme_color_palettes',
	'theme_color_palette',
	__( 'Select A Palette', 'secretum' ),
	__( 'More Color Palettes Coming!', 'secretum' ),
	'',
	secretum_customizer_stylesheets()
);


// Section.
$customizer->section(
	'theme_website_colors',
	'theme',
	__( 'Default Website Colors', 'secretum' ),
	__( 'Global website background, text and link colors.', 'secretum' )
);


// Select.
$customizer->select(
	'theme_website_colors',
	'theme_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$defaults['theme_background_color'],
	secretum_customizer_background_colors()
);


// Select.
$customizer->select(
	'theme_website_colors',
	'theme_text_color',
	__( 'Text Color', 'secretum' ),
	'',
	$defaults['theme_text_color'],
	secretum_customizer_text_colors()
);


// Select.
$customizer->select(
	'theme_website_colors',
	'theme_link_color',
	__( 'Link Color', 'secretum' ),
	'',
	$defaults['theme_link_color'],
	secretum_customizer_link_colors()
);


// Select.
$customizer->select(
	'theme_website_colors',
	'theme_link_hover_color',
	__( 'Link Hover Color', 'secretum' ),
	'',
	$defaults['theme_link_hover_color'],
	secretum_customizer_link_hover_colors()
);


// Section.
$customizer->section(
	'theme_website_fonts',
	'theme',
	__( 'Default Website Fonts', 'secretum' ),
	__( 'Global font family and size.', 'secretum' )
);


// Select.
$customizer->select(
	'theme_website_fonts',
	'theme_font_family',
	__( 'Font Family', 'secretum' ),
	'',
	$defaults['theme_font_family'],
	secretum_customizer_font_families()
);


// Select.
$customizer->select(
	'theme_website_fonts',
	'theme_font_size',
	__( 'Font Size', 'secretum' ),
	'',
	$defaults['theme_font_size'],
	secretum_customizer_font_sizes()
);




// New Colors Section.
$wp_customize->add_section(
	'secretum_colors_section',
	[
		'panel'       => 'secretum_theme_panel',
		'title'       => __( 'Custom Theme Colors', 'secretum' ),
		'description' => __( 'These settings inject css to the document head of your website, increasing the page size. It is recommended that you select and use a Base Color Palette instead of defining the colors below. Otherwise, only override the colors you need changed, limiting the amount of css injected into the head of the website.', 'secretum' ),
		'priority'    => 10,
	]
);


$wp_customize->add_setting(
	'secretum[website_background_color]',
	[
		'capabilities'      => 'manage_options',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
		'default'           => '',
	]
);

$wp_customize->add_control( 
	new \WP_Customize_Color_Control( 
		$wp_customize, 
		'website_background_color', 
		[
			'label'    => __( 'Website Background Color', 'secretum' ),
			'section'  => 'secretum_colors_section',
			'settings' => 'secretum[website_background_color]',
		]
	)
);


$wp_customize->add_setting(
	'secretum[inline_primary_color]',
	[
		'capabilities'      => 'manage_options',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
		'default'           => '',
	]
);

$wp_customize->add_control( 
	new \WP_Customize_Color_Control( 
		$wp_customize, 
		'inline_primary_color', 
		[
			'label'       => __( 'Primary Brand Color Classes', 'secretum' ),
			'description' => __( 'On fresh installs the primary nav & search button use the primary brand color.', 'secretum' ),
			'section'     => 'secretum_colors_section',
			'settings'    => 'secretum[inline_primary_color]',
		]
	)
);

$wp_customize->add_setting(
	'secretum[inline_primary_light_color]',
	[
		'capabilities'      => 'manage_options',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
		'default'           => '',
	]
);

$wp_customize->add_control( 
	new \WP_Customize_Color_Control( 
		$wp_customize, 
		'inline_primary_light_color', 
		[
			'label'       => __( 'Primary "Light" Brand Color Classes', 'secretum' ),
			'description' => __( 'Often used for gradients of buttons and backgrounds. The selected color should only be slightly lighter than the primary color. If a new primary color has been defined, then this setting will default to the primary color until defined.', 'secretum' ),
			'section'     => 'secretum_colors_section',
			'settings'    => 'secretum[inline_primary_light_color]',
		]
	)
);


$wp_customize->add_setting(
	'secretum[inline_primary_dark_color]',
	[
		'capabilities'      => 'manage_options',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
		'default'           => '',
	]
);

$wp_customize->add_control( 
	new \WP_Customize_Color_Control( 
		$wp_customize, 
		'inline_primary_dark_color', 
		[
			'label'       => __( 'Primary "Dark" Brand Color Classes', 'secretum' ),
			'description' => __( 'Often used for mouseovers of buttons and backgrounds. The selected color should only be slightly darker than the primary color. If a new primary color has been defined, then this setting will default to the primary color until defined.', 'secretum' ),
			'section'     => 'secretum_colors_section',
			'settings'    => 'secretum[inline_primary_dark_color]',
		]
	)
);


$wp_customize->add_setting(
	'secretum[inline_secondary_color]',
	[
		'capabilities'      => 'manage_options',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
		'default'           => '',
	]
);

$wp_customize->add_control( 
	new \WP_Customize_Color_Control( 
		$wp_customize, 
		'inline_secondary_color', 
		[
			'label'       => __( 'Secondary Brand Color Classes', 'secretum' ),
			'description' => __( 'On fresh installs the sidebar and footer widget titles use the secondary brand color.', 'secretum' ),
			'section'     => 'secretum_colors_section',
			'settings'    => 'secretum[inline_secondary_color]',
		]
	)
);


$wp_customize->add_setting(
	'secretum[inline_background_color]',
	[
		'capabilities'      => 'manage_options',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
		'default'           => '',
	]
);

$wp_customize->add_control( 
	new \WP_Customize_Color_Control( 
		$wp_customize, 
		'inline_background_color', 
		[
			'label'    => __( 'Background Color Classes', 'secretum' ),
			'section'  => 'secretum_colors_section',
			'settings' => 'secretum[inline_background_color]',
		]
	)
);


$wp_customize->add_setting(
	'secretum[inline_text_color]',
	[
		'capabilities'      => 'manage_options',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
		'default'           => '',
	]
);

$wp_customize->add_control( 
	new \WP_Customize_Color_Control( 
		$wp_customize, 
		'inline_text_color', 
		[
			'label'    => __( 'Text Color Classes', 'secretum' ),
			'section'  => 'secretum_colors_section',
			'settings' => 'secretum[inline_text_color]',
		]
	)
);


$wp_customize->add_setting(
	'secretum[inline_text_alt_color]',
	[
		'capabilities'      => 'manage_options',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
		'default'           => '',
	]
);

$wp_customize->add_control( 
	new \WP_Customize_Color_Control( 
		$wp_customize, 
		'inline_text_alt_color', 
		[
			'label'    => __( 'Text Alt Color Classes', 'secretum' ),
			'section'  => 'secretum_colors_section',
			'settings' => 'secretum[inline_text_alt_color]',
		]
	)
);


$wp_customize->add_setting(
	'secretum[inline_link_color]',
	[
		'capabilities'      => 'manage_options',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
		'default'           => '',
	]
);

$wp_customize->add_control( 
	new \WP_Customize_Color_Control( 
		$wp_customize, 
		'inline_link_color', 
		[
			'label'    => __( 'Link Color Classes', 'secretum' ),
			'section'  => 'secretum_colors_section',
			'settings' => 'secretum[inline_link_color]',
		]
	)
);


$wp_customize->add_setting(
	'secretum[inline_link_hover_color]',
	[
		'capabilities'      => 'manage_options',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
		'default'           => '',
	]
);

$wp_customize->add_control( 
	new \WP_Customize_Color_Control( 
		$wp_customize, 
		'inline_link_hover_color', 
		[
			'label'    => __( 'Hover Link Color Classes', 'secretum' ),
			'section'  => 'secretum_colors_section',
			'settings' => 'secretum[inline_link_hover_color]',
		]
	)
);
