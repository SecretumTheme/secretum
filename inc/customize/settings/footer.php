<?php
/**
 * Panels, Sections, & Settings
 *
 * @package Secretum
 */

namespace Secretum;

// @about Panel
$customizer->panel(
	'footer',
	__( 'Footer', 'secretum' )
);

// @about Section
$customizer->section(
	'footer_display',
	'footer',
	__( 'Display Settings', 'secretum' ),
	''
);
/**
// @about Checkbox
$customizer->checkbox(
	'footer_display',
	'custom_footers',
	__( 'Enable Custom Footers Feature', 'secretum' ),
	__( 'Before enabling set all default footer settings. A custom footer must be published before it will display.', 'secretum' ),
	$default['custom_footers']
);
*/
// @about Checkbox
$customizer->checkbox(
	'footer_display',
	'footer_status',
	__( 'Select To Hide Footer Area', 'secretum' ),
	'',
	$default['footer_status']
);


// Wrapper.
\Secretum\Wrapper::instance( $customizer, $default )->settings( [
	'section' => 'footer',
] );

/**
// @about Wrapper
$customizer->section(
	'footer_wrapper',
	'footer',
	__( 'Wrapper', 'secretum' ),
	__( 'Customize the outter wrapper around header top area.', 'secretum' )
);

// @about Select
$customizer->select(
	'footer_wrapper',
	'footer_wrapper_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['footer_wrapper_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'footer_wrapper',
	'footer_wrapper_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['footer_wrapper_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'footer_wrapper',
	'footer_wrapper_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['footer_wrapper_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// @about Select
$customizer->select(
	'footer_wrapper',
	'footer_wrapper_margin_bottom',
	__( 'Margin - Bottom', 'secretum' ),
	__( 'Increases spacing after section.', 'secretum' ),
	$default['footer_wrapper_margin_bottom'],
	secretum_customizer_margin_bottom()
);

// @about Select
$customizer->select(
	'footer_wrapper',
	'footer_wrapper_margin_top',
	__( 'Margin - Top', 'secretum' ),
	__( 'Increases spacing before section.', 'secretum' ),
	$default['footer_wrapper_margin_top'],
	secretum_customizer_margin_top()
);

// @about Select
$customizer->select(
	'footer_wrapper',
	'footer_wrapper_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['footer_wrapper_border_type'],
	secretum_customizer_border_types()
);

// @about Select
$customizer->select(
	'footer_wrapper',
	'footer_wrapper_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['footer_wrapper_border_color'],
	secretum_customizer_border_colors()
);
*/


// Container.
\Secretum\Container::instance( $customizer, $defaults )->settings( [
	'section' => 'footer',
] );

/*
// @about Container
$customizer->section(
	'footer_container',
	'footer',
	__( 'Container', 'secretum' ),
	__( 'Customize the container within the header top wrapper.', 'secretum' )
);

// @about Radio
$customizer->radio(
	'footer_container',
	'footer_container_type',
	__( 'Container Type', 'secretum' ),
	'',
	$default['footer_container_type'],
	secretum_customizer_container_types()
);

// @about Select
$customizer->select(
	'footer_container',
	'footer_container_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['footer_container_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'footer_container',
	'footer_container_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$default['footer_container_margin_x'],
	secretum_customizer_margin_left_right()
);

// @about Select
$customizer->select(
	'footer_container',
	'footer_container_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$default['footer_container_margin_y'],
	secretum_customizer_margin_top_bottom()
);

// @about Select
$customizer->select(
	'footer_container',
	'footer_container_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['footer_container_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'footer_container',
	'footer_container_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['footer_container_padding_y'],
	secretum_customizer_padding_top_bottom()
);
*/

\Secretum\Textuals::instance( $customizer, $default )->settings( [
	'section' => 'footer',
] );

/**
// @about Textuals
$customizer->section(
	'footer_textuals',
	'footer',
	__( 'Textuals', 'secretum' ),
	__( 'Customize fonts, text and link colors.', 'secretum' )
);

// @about Select
$customizer->select(
	'footer_textuals',
	'footer_text_alignment',
	__( 'Text Alignment', 'secretum' ),
	'',
	$default['footer_text_alignment'],
	secretum_customizer_text_alignments()
);

// @about Select
$customizer->select(
	'footer_textuals',
	'footer_textual_font_family',
	__( 'Font Family', 'secretum' ),
	'',
	$default['footer_textual_font_family'],
	secretum_customizer_font_families()
);

// @about Select
$customizer->select(
	'footer_textuals',
	'footer_textual_font_size',
	__( 'Font Size', 'secretum' ),
	'',
	$default['footer_textual_font_size'],
	secretum_customizer_font_sizes()
);

// @about Select
$customizer->select(
	'footer_textuals',
	'footer_textual_font_style',
	__( 'Font Style', 'secretum' ),
	'',
	$default['footer_textual_font_style'],
	secretum_customizer_font_styles()
);

// @about Select
$customizer->select(
	'footer_textuals',
	'footer_textual_text_transform',
	__( 'Text Transform', 'secretum' ),
	'',
	$default['footer_textual_text_transform'],
	secretum_customizer_text_transform()
);

// @about Select
$customizer->select(
	'footer_textuals',
	'footer_textual_text_color',
	__( 'Text Color', 'secretum' ),
	'',
	$default['footer_textual_text_color'],
	secretum_customizer_text_colors()
);

// @about Select
$customizer->select(
	'footer_textuals',
	'footer_textual_link_color',
	__( 'Link Color', 'secretum' ),
	'',
	$default['footer_textual_link_color'],
	secretum_customizer_link_colors()
);

// @about Select
$customizer->select(
	'footer_textuals',
	'footer_textual_link_hover_color',
	__( 'Link Hover Color', 'secretum' ),
	'',
	$default['footer_textual_link_hover_color'],
	secretum_customizer_link_hover_colors()
);
*/