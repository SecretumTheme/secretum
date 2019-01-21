<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Secretum\Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/header-top.php
 */

namespace Secretum;

// @about Panel
$customizer->panel(
	'header_top',
	__( 'Header Top', 'secretum' )
);

// @about Section
$customizer->section(
	'header_top_display',
	'header_top',
	__( 'Display Settings', 'secretum' ),
	''
);

// @about Checkbox
$customizer->checkbox(
	'header_top_display',
	'header_top_status',
	__( 'Select To Display Top Header Area', 'secretum' ),
	__( 'Create and assign custom menus to "Top Navbar Left" and/or "Top Navbar Right" to activate menus =OR= use the "Top Header Widget Area" widget for unlimited HTML control over the content area. A menu or widget must be defined for the top header area to display.', 'secretum' ),
	$default['header_top_status']
);


// Wrapper.
\Secretum\Wrapper::instance( $customizer, $default )->settings( [
	'section' => 'header_top',
] );


// Borders.
\Secretum\Borders::instance( $customizer, $defaults )->settings( [
	'section' => 'header_top_wrapper',
] );

/**
// @about Wrapper
$customizer->section(
	'header_top_wrapper',
	'header_top',
	__( 'Wrapper', 'secretum' ),
	__( 'Customize the outter wrapper around header top area.', 'secretum' )
);

// @about Select
$customizer->select(
	'header_top_wrapper',
	'header_top_wrapper_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['header_top_wrapper_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'header_top_wrapper',
	'header_top_wrapper_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['header_top_wrapper_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// @about Select
$customizer->select(
	'header_top_wrapper',
	'header_top_wrapper_margin_bottom',
	__( 'Margin - Bottom', 'secretum' ),
	__( 'Increases spacing after section.', 'secretum' ),
	$default['header_top_wrapper_margin_bottom'],
	secretum_customizer_margin_bottom()
);

// @about Select
$customizer->select(
	'header_top_wrapper',
	'header_top_wrapper_margin_top',
	__( 'Margin - Top', 'secretum' ),
	__( 'Increases spacing before section.', 'secretum' ),
	$default['header_top_wrapper_margin_top'],
	secretum_customizer_margin_top()
);

// @about Select
$customizer->select(
	'header_top_wrapper',
	'header_top_wrapper_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['header_top_wrapper_border_type'],
	secretum_customizer_border_types()
);

// @about Select
$customizer->select(
	'header_top_wrapper',
	'header_top_wrapper_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['header_top_wrapper_border_color'],
	secretum_customizer_border_colors()
);
*/


// Container.
\Secretum\Container::instance( $customizer, $default )->settings( [
	'section' => 'header_top',
] );


// Borders.
\Secretum\Borders::instance( $customizer, $defaults )->settings( [
	'section' => 'header_top_container',
] );

/**
// @about Container
$customizer->section(
	'header_top_container',
	'header_top',
	__( 'Container', 'secretum' ),
	__( 'Customize the container within the header top wrapper.', 'secretum' )
);

// @about Radio
$customizer->radio(
	'header_top_container',
	'header_top_container_type',
	__( 'Container Type', 'secretum' ),
	'',
	$default['header_top_container_type'],
	secretum_customizer_container_types()
);

// @about Select
$customizer->select(
	'header_top_container',
	'header_top_container_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['header_top_container_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'header_top_container',
	'header_top_container_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$default['header_top_container_margin_x'],
	secretum_customizer_margin_left_right()
);

// @about Select
$customizer->select(
	'header_top_container',
	'header_top_container_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$default['header_top_container_margin_y'],
	secretum_customizer_margin_top_bottom()
);

// @about Select
$customizer->select(
	'header_top_container',
	'header_top_container_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['header_top_container_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'header_top_container',
	'header_top_container_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['header_top_container_padding_y'],
	secretum_customizer_padding_top_bottom()
);
*/

// Textuals.
\Secretum\Textuals::instance( $customizer, $default )->settings( [
	'section' => 'header_top',
] );

/*
// @about Textuals
$customizer->section(
	'header_top_textuals',
	'header_top',
	__( 'Textuals', 'secretum' ),
	__( 'Customize fonts, text and link colors.', 'secretum' )
);

// @about Select
$customizer->select(
	'header_top',
	'header_top_text_alignment',
	__( 'Text Alignment', 'secretum' ),
	'',
	$default['header_top_text_alignment'],
	secretum_customizer_text_alignments()
);

// @about Select
$customizer->select(
	'header_top_textuals',
	'header_top_textual_font_family',
	__( 'Font Family', 'secretum' ),
	'',
	$default['header_top_textual_font_family'],
	secretum_customizer_font_families()
);

// @about Select
$customizer->select(
	'header_top_textuals',
	'header_top_textual_font_size',
	__( 'Font Size', 'secretum' ),
	'',
	$default['header_top_textual_font_size'],
	secretum_customizer_font_sizes()
);

// @about Select
$customizer->select(
	'header_top_textuals',
	'header_top_textual_font_style',
	__( 'Font Style', 'secretum' ),
	'',
	$default['header_top_textual_font_style'],
	secretum_customizer_font_styles()
);

// @about Select
$customizer->select(
	'header_top_textuals',
	'header_top_textual_text_transform',
	__( 'Text Transform', 'secretum' ),
	'',
	$default['header_top_textual_text_transform'],
	secretum_customizer_text_transform()
);

// @about Select
$customizer->select(
	'header_top_textuals',
	'header_top_textual_text_color',
	__( 'Text Color', 'secretum' ),
	'',
	$default['header_top_textual_text_color'],
	secretum_customizer_text_colors()
);

// @about Select
$customizer->select(
	'header_top_textuals',
	'header_top_textual_link_color',
	__( 'Link Color', 'secretum' ),
	'',
	$default['header_top_textual_link_color'],
	secretum_customizer_link_colors()
);

// @about Select
$customizer->select(
	'header_top_textuals',
	'header_top_textual_link_hover_color',
	__( 'Link Hover Color', 'secretum' ),
	'',
	$default['header_top_textual_link_hover_color'],
	secretum_customizer_link_hover_colors()
);
*/

// @about Menu Items
$customizer->section(
	'header_top_items',
	'header_top',
	__( 'Menu Items', 'secretum' ),
	__( 'Customize the properties of items within the menu.', 'secretum' )
);

// @about Select
$customizer->select(
	'header_top_items',
	'header_top_items_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['header_top_items_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'header_top_items',
	'header_top_items_background_hover_color',
	__( 'Background Hover Color', 'secretum' ),
	'',
	$default['header_top_items_background_hover_color'],
	secretum_customizer_background_hover_colors()
);

// @about Select
$customizer->select(
	'header_top_items',
	'header_top_items_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$default['header_top_items_margin_x'],
	secretum_customizer_margin_left_right()
);

// @about Select
$customizer->select(
	'header_top_items',
	'header_top_items_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$default['header_top_items_margin_y'],
	secretum_customizer_margin_top_bottom()
);

// @about Select
$customizer->select(
	'header_top_items',
	'header_top_items_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['header_top_items_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'header_top_items',
	'header_top_items_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['header_top_items_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// @about Select
$customizer->select(
	'header_top_items',
	'header_top_items_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['header_top_items_border_type'],
	secretum_customizer_border_types()
);

// @about Select
$customizer->select(
	'header_top_items',
	'header_top_items_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['header_top_items_border_color'],
	secretum_customizer_border_colors()
);
