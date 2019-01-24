<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Core\Customize\Sections\Sidebar
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/sections/sidebar.php
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'sidebar',
	__( 'Sidebars', 'secretum' )
);


// Section.
$customizer->section(
	'sidebar_display',
	'sidebar',
	__( 'Sidebar Display', 'secretum' ),
	__( 'A widget must be assigned to a sidebar location before the sidebar will display.', 'secretum' )
);


// Radio.
$customizer->radio(
	'sidebar_display',
	'sidebar_location',
	__( 'Sidebar Display Location', 'secretum' ),
	__( 'Set the global sidebar location. This setting can be overridden at the post/page/post_type level.', 'secretum' ),
	$defaults['sidebar_location'],
	[
		'' 		=> __( 'Based on Theme', 'secretum' ),
		'right' => __( 'Right Sidebar', 'secretum' ),
		'left' 	=> __( 'Left Sidebar', 'secretum' ),
		'both' 	=> __( 'Both Sidebars', 'secretum' ),
		'none' 	=> __( 'No Sidebars', 'secretum' ),
	]
);


// Wrapper.
$wrapper->settings( [
	'section' => 'sidebar',
] );


// Wrapper Borders.
$borders->settings( [
	'section' => 'sidebar_wrapper',
] );


// Container.
$container->settings( [
	'section' => 'sidebar',
] );


// Container Borders.
$borders->settings( [
	'section' => 'sidebar_container',
] );


// Textuals.
$textuals->settings( [
	'section' => 'sidebar',
] );
