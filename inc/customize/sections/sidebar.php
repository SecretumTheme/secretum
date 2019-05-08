<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/sections/sidebar.php
 * @since      1.0.0
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
	__( 'A widget must be assigned to a sidebar location before the widget will display.', 'secretum' )
);


// Radio.
$customizer->radio(
	'sidebar_display',
	'sidebar_location',
	__( 'Sidebar Display Location', 'secretum' ),
	__( 'Set the global sidebar location. This setting can be overridden at the post/page/post_type level.', 'secretum' ),
	$defaults['sidebar_location'],
	[
		''      => __( 'Stylesheet Default', 'secretum' ),
		'right' => __( 'Right Sidebar', 'secretum' ),
		'left'  => __( 'Left Sidebar', 'secretum' ),
		'both'  => __( 'Both Sidebars', 'secretum' ),
		'none'  => __( 'No Sidebars', 'secretum' ),
	]
);


// Wrapper.
$wrapper->settings(
	[
		'section' => 'sidebar',
	]
);

// Wrapper Borders.
$borders->settings(
	[
		'section' => 'sidebar_wrapper',
	]
);


// Container.
$container->settings(
	[
		'section' => 'sidebar',
		'type'    => false,
	]
);

$wp_customize->get_setting( 'secretum[sidebar_container_background_color]' )->transport = 'postMessage';
$wp_customize->get_setting( 'secretum[sidebar_container_margin_top]' )->transport       = 'postMessage';
$wp_customize->get_setting( 'secretum[sidebar_container_margin_bottom]' )->transport    = 'postMessage';
$wp_customize->get_setting( 'secretum[sidebar_container_padding_x]' )->transport        = 'postMessage';
$wp_customize->get_setting( 'secretum[sidebar_container_padding_y]' )->transport        = 'postMessage';

// Container Borders.
$borders->settings(
	[
		'section' => 'sidebar_container',
	]
);

$wp_customize->get_setting( 'secretum[sidebar_container_border_type]' )->transport   = 'postMessage';
$wp_customize->get_setting( 'secretum[sidebar_container_border_radius]' )->transport = 'postMessage';
$wp_customize->get_setting( 'secretum[sidebar_container_border_color]' )->transport  = 'postMessage';

// Typography.
$textuals->settings(
	[
		'section'   => 'sidebar',
		'alignment' => true,
	]
);

$wp_customize->get_setting( 'secretum[sidebar_textual_alignment]' )->transport        = 'postMessage';
$wp_customize->get_setting( 'secretum[sidebar_textual_font_family]' )->transport      = 'postMessage';
$wp_customize->get_setting( 'secretum[sidebar_textual_font_size]' )->transport        = 'postMessage';
$wp_customize->get_setting( 'secretum[sidebar_textual_font_style]' )->transport       = 'postMessage';
$wp_customize->get_setting( 'secretum[sidebar_textual_text_transform]' )->transport   = 'postMessage';
$wp_customize->get_setting( 'secretum[sidebar_textual_text_color]' )->transport       = 'postMessage';
$wp_customize->get_setting( 'secretum[sidebar_textual_link_color]' )->transport       = 'postMessage';
$wp_customize->get_setting( 'secretum[sidebar_textual_link_hover_color]' )->transport = 'postMessage';
