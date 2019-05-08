<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/sections/header-top.php
 * @since      1.0.0
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
	__( 'A menu must be assigned to a header top location for the navigation menu to display.', 'secretum' )
);


// Select.
$customizer->select(
	'header_top_display',
	'header_top_alignment',
	__( 'Alignment', 'secretum' ),
	'',
	$defaults['header_top_alignment'],
	secretum_customizer_margin_alignments()
);


// Checkbox.
$customizer->checkbox(
	'header_top_display',
	'header_top_status',
	__( 'Header Top Area', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['header_top_status']
);


// Wrapper.
$wrapper->settings(
	[
		'section' => 'header_top',
	]
);


// Wrapper Borders.
$borders->settings(
	[
		'section' => 'header_top_wrapper',
	]
);


// Container.
$container->settings(
	[
		'section' => 'header_top',
	]
);


// Container Borders.
$borders->settings(
	[
		'section' => 'header_top_container',
	]
);


// Typography.
$textuals->settings(
	[
		'section' => 'header_top',
	]
);


// Nav Items.
$navitems->settings(
	[
		'section' => 'header_top',
	]
);


// Nav Items Borders.
$borders->settings(
	[
		'section' => 'header_top_items',
	]
);
