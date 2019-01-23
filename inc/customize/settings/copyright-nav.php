<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customize\Settings\Copyright-Nav
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/copyright-nav.php
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'copyright_nav',
	__( 'Copyright Nav', 'secretum' )
);


// Section.
$customizer->section(
	'copyright_nav_display',
	'copyright_nav',
	__( 'Display Settings', 'secretum' ),
	''
);


// Checkbox.
$customizer->checkbox(
	'copyright_nav_display',
	'copyright_nav_status',
	__( 'Select To Hide Navigation Menu', 'secretum' ),
	'',
	$default['copyright_nav_status']
);


// Wrapper.
$wrapper->settings( [
	'section' => 'copyright_nav',
] );


// Wrapper Borders.
$borders->settings( [
	'section' => 'copyright_nav_wrapper',
] );


// Textuals.
$textuals->settings( [
	'section' => 'copyright_nav',
] );


// Nav Items.
$navitems->settings( [
	'section' => 'copyright_nav',
] );


// Nav Items Borders.
$borders->settings( [
	'section' => 'copyright_nav_items',
] );
