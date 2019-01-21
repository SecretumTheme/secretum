<?php
/**
 * Panels, Sections, & Settings
 *
 * @package Secretum
 */

namespace Secretum;

// @about Panel
$customizer->panel(
	'featured_image',
	__( 'Featured Image', 'secretum' )
);

// @about Section
$customizer->section(
	'featured_image_display',
	'featured_image',
	__( 'Display Settings', 'secretum' ),
	''
);

// @about Checkbox
$customizer->checkbox(
	'featured_image_display',
	'featured_image_status',
	__( 'Disable Featured Images', 'secretum' ),
	'',
	$default['featured_image_status']
);

// @about Partial
$customizer->partial(
	'featured_image_status',
	'.featured-image-header'
);

// @about Select
$customizer->select(
	'featured_image_display',
	'featured_image_display_location',
	__( 'Featured Image Display Location', 'secretum' ),
	'',
	$default['featured_image_display_location'],
	[
		'' 					=> __( 'Theme Default', 'secretum' ),
		'before_content' 	=> __( 'Before Post Title', 'secretum' ),
		'before_entry' 		=> __( 'Before Post Content', 'secretum' ),
		'after_header' 		=> __( 'After Theme Header Area', 'secretum' ),
	]
);


// Wrapper.
\Secretum\Wrapper::instance( $customizer, $default )->settings( [
	'section' => 'featured_image',
] );


// Borders.
\Secretum\Borders::instance( $customizer, $defaults )->settings( [
	'section' => 'featured_image_wrapper',
] );

/**
// @about Wrapper
$customizer->section(
	'featured_image_wrapper',
	'featured_image',
	__( 'Wrapper', 'secretum' ),
	__( 'Customize the outter wrapper around Featured Image area.', 'secretum' )
);

// @about Select
$customizer->select(
	'featured_image_wrapper',
	'featured_image_wrapper_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['featured_image_wrapper_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'featured_image_wrapper',
	'featured_image_wrapper_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['featured_image_wrapper_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'featured_image_wrapper',
	'featured_image_wrapper_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['featured_image_wrapper_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// @about Select
$customizer->select(
	'featured_image_wrapper',
	'featured_image_wrapper_margin_bottom',
	__( 'Margin - Bottom', 'secretum' ),
	__( 'Increases spacing after section.', 'secretum' ),
	$default['featured_image_wrapper_margin_bottom'],
	secretum_customizer_margin_bottom()
);

// @about Select
$customizer->select(
	'featured_image_wrapper',
	'featured_image_wrapper_margin_top',
	__( 'Margin - Top', 'secretum' ),
	__( 'Increases spacing before section.', 'secretum' ),
	$default['featured_image_wrapper_margin_top'],
	secretum_customizer_margin_top()
);

// @about Select
$customizer->select(
	'featured_image_wrapper',
	'featured_image_wrapper_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['featured_image_wrapper_border_type'],
	secretum_customizer_border_types()
);

// @about Select
$customizer->select(
	'featured_image_wrapper',
	'featured_image_wrapper_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['featured_image_wrapper_border_color'],
	secretum_customizer_border_colors()
);
*/




// Container.
\Secretum\Container::instance( $customizer, $defaults )->settings( [
	'section' => 'featured_image',
] );


// Borders.
\Secretum\Borders::instance( $customizer, $defaults )->settings( [
	'section' => 'featured_image_container',
] );

/*
// @about Container
$customizer->section(
	'featured_image_container',
	'featured_image',
	__( 'Container', 'secretum' ),
	__( 'Customize the container within the header top wrapper.', 'secretum' )
);

// @about Radio
$customizer->radio(
	'featured_image_container',
	'featured_image_container_type',
	__( 'Container Type', 'secretum' ),
	'',
	$default['featured_image_container_type'],
	secretum_customizer_container_types()
);

// @about Select
$customizer->select(
	'featured_image_container',
	'featured_image_container_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['featured_image_container_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'featured_image_container',
	'featured_image_container_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$default['featured_image_container_margin_x'],
	secretum_customizer_margin_left_right()
);

// @about Select
$customizer->select(
	'featured_image_container',
	'featured_image_container_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$default['featured_image_container_margin_y'],
	secretum_customizer_margin_top_bottom()
);

// @about Select
$customizer->select(
	'featured_image_container',
	'featured_image_container_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['featured_image_container_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'featured_image_container',
	'featured_image_container_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['featured_image_container_padding_y'],
	secretum_customizer_padding_top_bottom()
);
*/