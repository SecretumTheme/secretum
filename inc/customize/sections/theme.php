<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Core\Customize\Sections\Theme
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/sections/theme.php
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
	__( 'Select the default color palette (stylesheet) for the website. No customizer theme settings will change, be updated, or settings added.', 'secretum' )
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
