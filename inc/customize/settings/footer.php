<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customize\Settings\Footer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/footer.php
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'footer',
	__( 'Footer', 'secretum' )
);


// Section.
$customizer->section(
	'footer_display',
	'footer',
	__( 'Display Settings', 'secretum' ),
	''
);
/**
// Checkbox.
$customizer->checkbox(
	'footer_display',
	'custom_footers',
	__( 'Enable Custom Footers Feature', 'secretum' ),
	__( 'Before enabling set all default footer settings. A custom footer must be published before it will display.', 'secretum' ),
	$default['custom_footers']
);
*/
// Checkbox.
$customizer->checkbox(
	'footer_display',
	'footer_status',
	__( 'Hide Footer Area', 'secretum' ),
	__( 'Select to disable the entire footer area.', 'secretum' ),
	$default['footer_status']
);


// Wrapper.
$wrapper->settings( [
	'section' => 'footer',
] );


// Wrapper Borders.
$borders->settings( [
	'section' => 'footer_wrapper',
] );


// Container.
$container->settings( [
	'section' => 'footer',
] );


// Container Borders.
$borders->settings( [
	'section' => 'footer_container',
] );


// Textuals.
$textuals->settings( [
	'section' => 'footer',
] );
