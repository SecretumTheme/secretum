<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Core\Customize\Sections\Header-Top
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
	''
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

// Partial.
$customizer->partial(
	'header_top_alignment',
	'#navTopMenuId'
);


// Checkbox.
$customizer->checkbox(
	'header_top_display',
	'header_top_status',
	__( 'Select To Hide Top Header Area', 'secretum' ),
	'',
	$defaults['header_top_status']
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
