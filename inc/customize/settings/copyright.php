<?php
/**
 * Panels, Sections, & Settings
 *
 * @package Secretum
 */

namespace Secretum;

// @about Panel
$customizer->panel(
	'copyright',
	__( 'Copyright', 'secretum' )
);

// @about Section
$customizer->section(
	'copyright_display',
	'copyright',
	__( 'Display Settings', 'secretum' ),
	''
);

// @about Checkbox
$customizer->checkbox(
	'copyright_display',
	'copyright_status',
	__( 'Select To Hide Copyright Area', 'secretum' ),
	'',
	$default['copyright_status']
);

// @about Wrapper
$customizer->section(
	'copyright_wrapper',
	'copyright',
	__( 'Wrapper', 'secretum' ),
	__( 'Customize the outter wrapper around copyright area.', 'secretum' )
);

// @about Select
$customizer->select(
	'copyright_wrapper',
	'copyright_wrapper_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['copyright_wrapper_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'copyright_wrapper',
	'copyright_wrapper_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['copyright_wrapper_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'copyright_wrapper',
	'copyright_wrapper_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['copyright_wrapper_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// @about Select
$customizer->select(
	'copyright_wrapper',
	'copyright_wrapper_margin_bottom',
	__( 'Margin - Bottom', 'secretum' ),
	__( 'Increases spacing after section.', 'secretum' ),
	$default['copyright_wrapper_margin_bottom'],
	secretum_customizer_margin_bottom()
);

// @about Select
$customizer->select(
	'copyright_wrapper',
	'copyright_wrapper_margin_top',
	__( 'Margin - Top', 'secretum' ),
	__( 'Increases spacing before section.', 'secretum' ),
	$default['copyright_wrapper_margin_top'],
	secretum_customizer_margin_top()
);

// @about Select
$customizer->select(
	'copyright_wrapper',
	'copyright_wrapper_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['copyright_wrapper_border_type'],
	secretum_customizer_border_types()
);

// @about Select
$customizer->select(
	'copyright_wrapper',
	'copyright_wrapper_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['copyright_wrapper_border_color'],
	secretum_customizer_border_colors()
);

// @about Container
$customizer->section(
	'copyright_container',
	'copyright',
	__( 'Container', 'secretum' ),
	__( 'Customize the container within the header top wrapper.', 'secretum' )
);

// @about Radio
$customizer->radio(
	'copyright_container',
	'copyright_container_type',
	__( 'Container Type', 'secretum' ),
	'',
	$default['copyright_container_type'],
	secretum_customizer_container_types()
);

// @about Select
$customizer->select(
	'copyright_container',
	'copyright_container_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['copyright_container_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'copyright_container',
	'copyright_container_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$default['copyright_container_margin_x'],
	secretum_customizer_margin_left_right()
);

// @about Select
$customizer->select(
	'copyright_container',
	'copyright_container_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$default['copyright_container_margin_y'],
	secretum_customizer_margin_top_bottom()
);

// @about Select
$customizer->select(
	'copyright_container',
	'copyright_container_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['copyright_container_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'copyright_container',
	'copyright_container_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['copyright_container_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// @about Textuals
$customizer->section(
	'copyright_textuals',
	'copyright',
	__( 'Textuals', 'secretum' ),
	__( 'Customize fonts, text and link colors.', 'secretum' )
);

// @about Select
$customizer->select(
	'copyright_textuals',
	'copyright_text_alignment',
	__( 'Text Alignment', 'secretum' ),
	'',
	$default['copyright_text_alignment'],
	secretum_customizer_text_alignments()
);

// @about Select
$customizer->select(
	'copyright_textuals',
	'copyright_textual_font_family',
	__( 'Font Family', 'secretum' ),
	'',
	$default['copyright_textual_font_family'],
	secretum_customizer_font_families()
);

// @about Select
$customizer->select(
	'copyright_textuals',
	'copyright_textual_font_size',
	__( 'Font Size', 'secretum' ),
	'',
	$default['copyright_textual_font_size'],
	secretum_customizer_font_sizes()
);

// @about Select
$customizer->select(
	'copyright_textuals',
	'copyright_textual_font_style',
	__( 'Font Style', 'secretum' ),
	'',
	$default['copyright_textual_font_style'],
	secretum_customizer_font_styles()
);

// @about Select
$customizer->select(
	'copyright_textuals',
	'copyright_textual_text_transform',
	__( 'Text Transform', 'secretum' ),
	'',
	$default['copyright_textual_text_transform'],
	secretum_customizer_text_transform()
);

// @about Select
$customizer->select(
	'copyright_textuals',
	'copyright_textual_text_color',
	__( 'Text Color', 'secretum' ),
	'',
	$default['copyright_textual_text_color'],
	secretum_customizer_text_colors()
);

// @about Select
$customizer->select(
	'copyright_textuals',
	'copyright_textual_link_color',
	__( 'Link Color', 'secretum' ),
	'',
	$default['copyright_textual_link_color'],
	secretum_customizer_link_colors()
);

// @about Select
$customizer->select(
	'copyright_textuals',
	'copyright_textual_link_hover_color',
	__( 'Link Hover Color', 'secretum' ),
	'',
	$default['copyright_textual_link_hover_color'],
	secretum_customizer_link_hover_colors()
);

// @about Display
$customizer->section(
	'copyright_statement',
	'copyright',
	__( 'Copyright Statement', 'secretum' ),
	''
);

// @about Textarea
$customizer->textarea(
	'copyright_statement',
	'copyright_text',
	__( 'Statement', 'secretum' ),
	/* Translators: Example html - 1) year 2) url 3) blog name */
	sprintf( __( 'HTML Allowed. Example: &#x3C;p&#x3E;Copyright %1$s &#x26;copy; &#x3C;a href=&#x22;%2$s&#x22; target=&#x22;_self&#x22;&#x3E;%3$s&#x3C;/a&#x3E; - All Rights Reserved.&#x3C;/p&#x3E;', 'secretum' ), date( 'Y', time() ), esc_url( get_home_url( '/' ) ), get_bloginfo( 'name' ) ),
	wp_kses_post( $default['copyright_text'] )
);

// @about Refresh Partial :: Copyright Statement
$wp_customize->selective_refresh->add_partial( 'copyright_text_partial', array(
	'settings'         => array( 'secretum[copyright_text]' ),
	'selector'         => '.site-info',
	'render_callback'  => function() {
		return wp_kses_post( $default['copyright_text'] );
	},
	'container_inclusive' => false,
) );
