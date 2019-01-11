<?php
/**
 * Panels, Sections, & Settings
 *
 * @package Secretum
 */

namespace Secretum;

// @about Panel
$customizer->panel(
	'primary_nav',
	__( 'Primary Nav', 'secretum' )
);

// @about Section
$customizer->section(
	'primary_nav_display',
	'primary_nav',
	__( 'Display Settings', 'secretum' ),
	''
);

// @about Checkbox
$customizer->checkbox(
	'primary_nav_display',
	'primary_nav_status',
	__( 'Select To Hide Navigation Menu', 'secretum' ),
	'',
	$default['primary_nav_status']
);

// @about Checkbox
$customizer->checkbox(
	'primary_nav_display',
	'primary_nav_search_status',
	__( 'Show Search Form Within Navbar', 'secretum' ),
	'',
	$default['primary_nav_search_status']
);

// @about Wrapper
$customizer->section(
	'primary_nav_wrapper',
	'primary_nav',
	__( 'Wrapper', 'secretum' ),
	__( 'Customize the outter wrapper around navigation menu.', 'secretum' )
);

// @about Select
$customizer->select(
	'primary_nav_wrapper',
	'primary_nav_wrapper_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['primary_nav_wrapper_background_color'],
	secretum_customizer_background_colors()
);

// @about Partial
$customizer->partial(
	'primary_nav_wrapper_background_color',
	'.navbar-nav.primary'
);

// @about Select
$customizer->select(
	'primary_nav_wrapper',
	'primary_nav_wrapper_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['primary_nav_wrapper_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'primary_nav_wrapper',
	'primary_nav_wrapper_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['primary_nav_wrapper_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// @about Select
$customizer->select(
	'primary_nav_wrapper',
	'primary_nav_wrapper_margin_bottom',
	__( 'Margin - Bottom', 'secretum' ),
	__( 'Increases spacing after section.', 'secretum' ),
	$default['primary_nav_wrapper_margin_bottom'],
	secretum_customizer_margin_bottom()
);

// @about Select
$customizer->select(
	'primary_nav_wrapper',
	'primary_nav_wrapper_margin_top',
	__( 'Margin - Top', 'secretum' ),
	__( 'Increases spacing before section.', 'secretum' ),
	$default['primary_nav_wrapper_margin_top'],
	secretum_customizer_margin_top()
);

// @about Select
$customizer->select(
	'primary_nav_wrapper',
	'primary_nav_wrapper_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['primary_nav_wrapper_border_type'],
	secretum_customizer_border_types()
);

// @about Select
$customizer->select(
	'primary_nav_wrapper',
	'primary_nav_wrapper_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['primary_nav_wrapper_border_color'],
	secretum_customizer_border_colors()
);

// @about Container
$customizer->section(
	'primary_nav_container',
	'primary_nav',
	__( 'Container', 'secretum' ),
	__( 'Customize the container within the header top wrapper.', 'secretum' )
);

// @about Radio
$customizer->radio(
	'primary_nav_container',
	'primary_nav_container_type',
	__( 'Container Type', 'secretum' ),
	'',
	$default['primary_nav_container_type'],
	secretum_customizer_container_types()
);

// @about Select
$customizer->select(
	'primary_nav_container',
	'primary_nav_container_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['primary_nav_container_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'primary_nav_container',
	'primary_nav_container_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$default['primary_nav_container_margin_x'],
	secretum_customizer_margin_left_right()
);

// @about Select
$customizer->select(
	'primary_nav_container',
	'primary_nav_container_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$default['primary_nav_container_margin_y'],
	secretum_customizer_margin_top_bottom()
);

// @about Select
$customizer->select(
	'primary_nav_container',
	'primary_nav_container_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['primary_nav_container_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'primary_nav_container',
	'primary_nav_container_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['primary_nav_container_padding_y'],
	secretum_customizer_padding_top_bottom()
);


// @about Textuals
$customizer->section(
	'primary_nav_textuals',
	'primary_nav',
	__( 'Textuals', 'secretum' ),
	__( 'Customize fonts, text and link colors.', 'secretum' )
);

// @about Select
$customizer->select(
	'primary_nav_textuals',
	'primary_nav_textual_font_family',
	__( 'Font Family', 'secretum' ),
	'',
	$default['primary_nav_textual_font_family'],
	secretum_customizer_font_families()
);

// @about Select
$customizer->select(
	'primary_nav_textuals',
	'primary_nav_textual_font_size',
	__( 'Font Size', 'secretum' ),
	'',
	$default['primary_nav_textual_font_size'],
	secretum_customizer_font_sizes()
);

// @about Select
$customizer->select(
	'primary_nav_textuals',
	'primary_nav_textual_font_style',
	__( 'Font Style', 'secretum' ),
	'',
	$default['primary_nav_textual_font_style'],
	secretum_customizer_font_styles()
);

// @about Select
$customizer->select(
	'primary_nav_textuals',
	'primary_nav_textual_text_transform',
	__( 'Text Transform', 'secretum' ),
	'',
	$default['primary_nav_textual_text_transform'],
	secretum_customizer_text_transform()
);

// @about Select
$customizer->select(
	'primary_nav_textuals',
	'primary_nav_textual_text_color',
	__( 'Text Color', 'secretum' ),
	'',
	$default['primary_nav_textual_text_color'],
	secretum_customizer_text_colors()
);

// @about Select
$customizer->select(
	'primary_nav_textuals',
	'primary_nav_textual_link_color',
	__( 'Link Color', 'secretum' ),
	'',
	$default['primary_nav_textual_link_color'],
	secretum_customizer_link_colors()
);

// @about Select
$customizer->select(
	'primary_nav_textuals',
	'primary_nav_textual_link_hover_color',
	__( 'Link Hover Color', 'secretum' ),
	'',
	$default['primary_nav_textual_link_hover_color'],
	secretum_customizer_link_hover_colors()
);


// @about Menu Items
$customizer->section(
	'primary_nav_items',
	'primary_nav',
	__( 'Menu Items', 'secretum' ),
	__( 'Customize the properties of items within the menu.', 'secretum' )
);

// @about Select
$customizer->select(
	'primary_nav_items',
	'primary_nav_alignment',
	__( 'Alignment', 'secretum' ),
	'',
	$default['primary_nav_alignment'],
	secretum_customizer_margin_alignments()
);

// @about Select
$customizer->select(
	'primary_nav_items',
	'primary_nav_items_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['primary_nav_items_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'primary_nav_items',
	'primary_nav_items_background_hover_color',
	__( 'Background Hover Color', 'secretum' ),
	'',
	$default['primary_nav_items_background_hover_color'],
	secretum_customizer_background_hover_colors()
);

// @about Select
$customizer->select(
	'primary_nav_items',
	'primary_nav_items_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$default['primary_nav_items_margin_x'],
	secretum_customizer_margin_left_right()
);

// @about Select
$customizer->select(
	'primary_nav_items',
	'primary_nav_items_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$default['primary_nav_items_margin_y'],
	secretum_customizer_margin_top_bottom()
);

// @about Select
$customizer->select(
	'primary_nav_items',
	'primary_nav_items_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['primary_nav_items_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'primary_nav_items',
	'primary_nav_items_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['primary_nav_items_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// @about Select
$customizer->select(
	'primary_nav_items',
	'primary_nav_items_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['primary_nav_items_border_type'],
	secretum_customizer_border_types()
);

// @about Select
$customizer->select(
	'primary_nav_items',
	'primary_nav_items_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['primary_nav_items_border_color'],
	secretum_customizer_border_colors()
);


// @about Dropdown Container
$customizer->section(
	'primary_nav_dropdown',
	'primary_nav',
	__( 'Dropdown Container', 'secretum' ),
	''
);

// @about Select
$customizer->select(
	'primary_nav_dropdown',
	'primary_nav_dropdown_text_alignment',
	__( 'Text Alignment', 'secretum' ),
	'',
	$default['primary_nav_dropdown_text_alignment'],
	secretum_customizer_text_alignments()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown',
	'primary_nav_dropdown_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['primary_nav_dropdown_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown',
	'primary_nav_dropdown_background_hover_color',
	__( 'Item Background Hover Color', 'secretum' ),
	'',
	$default['primary_nav_dropdown_background_hover_color'],
	secretum_customizer_background_hover_colors()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown',
	'primary_nav_dropdown_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$default['primary_nav_dropdown_margin_x'],
	secretum_customizer_margin_left_right()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown',
	'primary_nav_dropdown_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$default['primary_nav_dropdown_margin_y'],
	secretum_customizer_margin_top_bottom()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown',
	'primary_nav_dropdown_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['primary_nav_dropdown_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown',
	'primary_nav_dropdown_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['primary_nav_dropdown_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown',
	'primary_nav_dropdown_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['primary_nav_dropdown_border_type'],
	secretum_customizer_border_types()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown',
	'primary_nav_dropdown_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['primary_nav_dropdown_border_color'],
	secretum_customizer_border_colors()
);


// @about Textuals
$customizer->section(
	'primary_nav_dropdown_textuals',
	'primary_nav',
	__( 'Dropdown Textuals', 'secretum' ),
	__( 'Customize fonts, text and link colors.', 'secretum' )
);

// @about Select
$customizer->select(
	'primary_nav_dropdown_textuals',
	'primary_nav_dropdown_textual_font_family',
	__( 'Font Family', 'secretum' ),
	'',
	$default['primary_nav_dropdown_textual_font_family'],
	secretum_customizer_font_families()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown_textuals',
	'primary_nav_dropdown_textual_font_size',
	__( 'Font Size', 'secretum' ),
	'',
	$default['primary_nav_dropdown_textual_font_size'],
	secretum_customizer_font_sizes()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown_textuals',
	'primary_nav_dropdown_textual_font_style',
	__( 'Font Style', 'secretum' ),
	'',
	$default['primary_nav_dropdown_textual_font_style'],
	secretum_customizer_font_styles()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown_textuals',
	'primary_nav_dropdown_textual_text_transform',
	__( 'Text Transform', 'secretum' ),
	'',
	$default['primary_nav_dropdown_textual_text_transform'],
	secretum_customizer_text_transform()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown_textuals',
	'primary_nav_dropdown_textual_text_color',
	__( 'Text Color', 'secretum' ),
	'',
	$default['primary_nav_dropdown_textual_text_color'],
	secretum_customizer_text_colors()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown_textuals',
	'primary_nav_dropdown_textual_link_color',
	__( 'Link Color', 'secretum' ),
	'',
	$default['primary_nav_dropdown_textual_link_color'],
	secretum_customizer_link_colors()
);

// @about Select
$customizer->select(
	'primary_nav_dropdown_textuals',
	'primary_nav_dropdown_textual_link_hover_color',
	__( 'Link Hover Color', 'secretum' ),
	'',
	$default['primary_nav_dropdown_textual_link_hover_color'],
	secretum_customizer_link_hover_colors()
);


// @about Menu Items
$customizer->section(
	'primary_nav_toggler',
	'primary_nav',
	__( 'Toggler Icon', 'secretum' ),
	__( 'Customize the properties of the primary menu toggler icon.', 'secretum' )
);

// @about Select
$customizer->select(
	'primary_nav_toggler',
	'primary_nav_toggler_icon_alignment',
	__( 'Alignment', 'secretum' ),
	'',
	$default['primary_nav_toggler_icon_alignment'],
	secretum_customizer_margin_alignments()
);

// @about Partial
$customizer->partial(
	'primary_nav_toggler_icon',
	'.navbar-toggler-icon'
);

// @about Select
$customizer->select(
	'primary_nav_toggler',
	'primary_nav_toggler_font_size',
	__( 'Font Size', 'secretum' ),
	'',
	$default['primary_nav_toggler_font_size'],
	secretum_customizer_font_sizes()
);

// @about Select
$customizer->select(
	'primary_nav_toggler',
	'primary_nav_toggler_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['primary_nav_toggler_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'primary_nav_toggler',
	'primary_nav_toggler_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$default['primary_nav_toggler_margin_x'],
	secretum_customizer_margin_left_right()
);

// @about Select
$customizer->select(
	'primary_nav_toggler',
	'primary_nav_toggler_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$default['primary_nav_toggler_margin_y'],
	secretum_customizer_margin_top_bottom()
);

// @about Select
$customizer->select(
	'primary_nav_toggler',
	'primary_nav_toggler_border_radius',
	__( 'Border Radius', 'secretum' ),
	'',
	$default['primary_nav_toggler_border_radius'],
	secretum_customizer_border_radius()
);

// @about Select
$customizer->select(
	'primary_nav_toggler',
	'primary_nav_toggler_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['primary_nav_toggler_border_color'],
	secretum_customizer_border_colors()
);

if ( class_exists( 'woocommerce' ) ) {
	// @about Menu Items
	$customizer->section(
		'primary_nav_cart_icon',
		'primary_nav',
		__( 'WooCommerce Cart Icon', 'secretum' ),
		''
	);

	// @about Select
	$customizer->select(
		'primary_nav_cart_icon',
		'primary_nav_cart_link_padding_t',
		__( 'Padding - Top (above icon)', 'secretum' ),
		'',
		$default['primary_nav_cart_link_padding_t'],
		secretum_customizer_padding_top()
	);

	// @about Partial
	$customizer->partial(
		'primary_nav_cart_link_padding_t',
		'#woocommerce-cart-icon'
	);

	// @about Select
	$customizer->select(
		'primary_nav_cart_icon',
		'primary_nav_cart_icon_color',
		__( 'Cart Icon Color', 'secretum' ),
		'',
		$default['primary_nav_cart_icon_color'],
		secretum_customizer_text_colors()
	);

	// @about Select
	$customizer->select(
		'primary_nav_cart_icon',
		'primary_nav_cart_icon_size',
		__( 'Cart Icon Size', 'secretum' ),
		'',
		$default['primary_nav_cart_icon_size'],
		secretum_customizer_font_sizes()
	);

	// @about Select
	$customizer->select(
		'primary_nav_cart_icon',
		'primary_nav_cart_count_color',
		__( 'Cart Count Color', 'secretum' ),
		'',
		$default['primary_nav_cart_count_color'],
		secretum_customizer_text_colors()
	);

	// @about Select
	$customizer->select(
		'primary_nav_cart_icon',
		'primary_nav_cart_count_size',
		__( 'Cart Count Size', 'secretum' ),
		'',
		$default['primary_nav_cart_count_size'],
		secretum_customizer_font_sizes()
	);
}// End if().
