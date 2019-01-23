<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customize\Settings\Header-Top
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/header-top.php
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'header_top',
	__( 'Header Top', 'secretum' )
);


// Section.
$customizer->section(
	'header_top_display',
	'header_top',
	__( 'Display Settings', 'secretum' ),
	''
);


// Checkbox.
$customizer->checkbox(
	'header_top_display',
	'header_top_status',
	__( 'Select To Display Top Header Area', 'secretum' ),
	__( 'Create and assign custom menus to "Top Navbar Left" and/or "Top Navbar Right" to activate menus =OR= use the "Top Header Widget Area" widget for unlimited HTML control over the content area. A menu or widget must be defined for the top header area to display.', 'secretum' ),
	$default['header_top_status']
);


// Wrapper.
$wrapper->settings( [
	'section' => 'header_top',
] );


// Wrapper Borders.
$borders->settings( [
	'section' => 'header_top_wrapper',
] );


// Container.
$container->settings( [
	'section' => 'header_top',
] );


// Container Borders.
$borders->settings( [
	'section' => 'header_top_container',
] );


// Textuals.
$textuals->settings( [
	'section' => 'header_top',
] );


// Nav Items.
$navitems->settings( [
	'section' => 'header_top',
] );


// Nav Items Borders.
$borders->settings( [
	'section' => 'header_top_items',
] );
