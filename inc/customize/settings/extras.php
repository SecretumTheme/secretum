<?php
/**
 * Panels, Sections, & Settings
 *
 * @package Secretum
 */

namespace Secretum;

// @about Panel
$customizer->panel(
	'extras',
	__( 'Extras', 'secretum' )
);

// @about Section
$customizer->section(
	'analytics',
	'extras',
	__( 'Google Analytics', 'secretum' ),
	''
);

// @about Radio
$customizer->radio(
	'analytics',
	'analytics_location',
	__( 'Analytics Code Location', 'secretum' ),
	'',
	$default['analytics_location'],
	array(
		'' 			=> __( 'Footer (best performance)', 'secretum' ),
		'header' 	=> __( 'Header (best tracking)', 'secretum' ),
	)
);

// @about Textarea Script
$customizer->textarea_script(
	'analytics',
	'analytics_code',
	__( 'Analytics Tracking Code', 'secretum' ),
	__( 'Include all opening and closing script tags.', 'secretum' )
);

// @about Section
$customizer->section(
	'scrolltop_icon',
	'extras',
	__( 'Scroll To Top Icon', 'secretum' ),
	''
);

// @about Checkbox
$customizer->checkbox(
	'scrolltop_icon',
	'scrolltop',
	__( 'Hide Scroll To Top Icon', 'secretum' ),
	__( 'Select to disable the scroll to top icon.', 'secretum' ),
	$default['scrolltop']
);

// @about Select
$customizer->select(
	'scrolltop_icon',
	'scrolltop_text_color',
	__( 'Icon Color', 'secretum' ),
	'',
	$default['scrolltop_text_color'],
	secretum_customizer_text_colors()
);

// @about Select
$customizer->select(
	'scrolltop_icon',
	'scrolltop_icon_size',
	__( 'Icon Size', 'secretum' ),
	'',
	$default['scrolltop_icon_size'],
	secretum_customizer_font_sizes()
);

// @about Select
$customizer->select(
	'scrolltop_icon',
	'scrolltop_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['scrolltop_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'scrolltop_icon',
	'scrolltop_background_hover_color',
	__( 'Background Hover Color', 'secretum' ),
	'',
	$default['scrolltop_background_hover_color'],
	secretum_customizer_background_hover_colors()
);

// @about Select
$customizer->select(
	'scrolltop_icon',
	'scrolltop_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['scrolltop_border_type'],
	secretum_customizer_border_types()
);

// @about Select
$customizer->select(
	'scrolltop_icon',
	'scrolltop_border_radius',
	__( 'Border Radius', 'secretum' ),
	'',
	$default['scrolltop_border_radius'],
	secretum_customizer_border_radius()
);

// @about Select
$customizer->select(
	'scrolltop_icon',
	'scrolltop_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['scrolltop_border_color'],
	secretum_customizer_border_colors()
);

// @about Select
$customizer->select(
	'scrolltop_icon',
	'scrolltop_margin_bottom',
	__( 'Bottom Margin', 'secretum' ),
	__( 'Spacing around the container.', 'secretum' ),
	$default['scrolltop_margin_bottom'],
	secretum_customizer_margin_bottom()
);

// @about Select
$customizer->select(
	'scrolltop_icon',
	'scrolltop_margin_right',
	__( 'Right Margin', 'secretum' ),
	__( 'Spacing around the container.', 'secretum' ),
	$default['scrolltop_margin_right'],
	secretum_customizer_margin_right()
);

// @about Select
$customizer->select(
	'scrolltop_icon',
	'scrolltop_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	__( 'Spacing within the container.', 'secretum' ),
	$default['scrolltop_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'scrolltop_icon',
	'scrolltop_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	__( 'Spacing within the container.', 'secretum' ),
	$default['scrolltop_padding_y'],
	secretum_customizer_padding_top_bottom()
);
