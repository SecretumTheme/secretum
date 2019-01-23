<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customize\Settings\Theme
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/theme.php
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
