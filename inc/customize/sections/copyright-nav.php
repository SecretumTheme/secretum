<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/copyright-nav.php
 * @since      1.0.0
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
	__( 'A menu must be assigned to a copyright menu location for the navigation menu to display.', 'secretum' )
);

// Checkbox.
$customizer->checkbox(
	'copyright_nav_display',
	'copyright_nav_status',
	__( 'Copyright Textual Menu Area', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup. A menu must be assigned to the Copyright Textual Menu location for the menu to display.', 'secretum' ),
	$defaults['copyright_nav_status']
);

// Select.
$customizer->select(
	'copyright_nav_display',
	'copyright_nav_alignment',
	__( 'Alignment', 'secretum' ),
	'',
	$defaults['copyright_nav_alignment'],
	secretum_customizer_margin_alignments()
);


// Wrapper.
$wrapper->settings(
	[
		'section' => 'copyright_nav',
	]
);


// Wrapper Borders.
$borders->settings(
	[
		'section' => 'copyright_nav_wrapper',
	]
);


// Typography.
$textuals->settings(
	[
		'section' => 'copyright_nav',
	]
);


// Nav Items.
$navitems->settings(
	[
		'section' => 'copyright_nav',
	]
);


// Nav Items Borders.
$borders->settings(
	[
		'section' => 'copyright_nav_items',
	]
);
