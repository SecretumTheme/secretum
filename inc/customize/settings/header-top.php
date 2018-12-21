<?php
/**
 * Panels, Sections, & Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Panel
$customizer->panel(
    'header_top',
    __('Header Top', 'secretum')
);

// Section
$customizer->section(
    'header_top_display',
    'header_top',
    __('Display Settings', 'secretum'),
    ''
);

// Checkbox
$customizer->checkbox(
    'header_top_display',
    'header_top_status',
    __('Select To Display Top Header Area', 'secretum'),
    __('Create and assign custom menus to "Top Navbar Left" and/or "Top Navbar Right" to activate menus =OR= use the "Top Header Widget Area" widget for unlimited HTML control over the content area. A menu or widget must be defined for the top header area to display.', 'secretum'),
    $default['header_top_status']
);

// Wrapper
$customizer->section(
    'header_top_wrapper',
    'header_top',
    __('Wrapper', 'secretum'),
    __('Customize the outter wrapper around header top area.', 'secretum')
);

// Select
$customizer->select(
    'header_top_wrapper',
    'header_top_wrapper_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['header_top_wrapper_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'header_top_wrapper',
    'header_top_wrapper_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['header_top_wrapper_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'header_top_wrapper',
    'header_top_wrapper_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['header_top_wrapper_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Select
$customizer->select(
    'header_top_wrapper',
    'header_top_wrapper_margin_bottom',
    __('Margin - Bottom', 'secretum'),
    __('Increases spacing after section.', 'secretum'),
    $default['header_top_wrapper_margin_bottom'],
    secretum_customizer_margin_bottom()
);

// Select
$customizer->select(
    'header_top_wrapper',
    'header_top_wrapper_margin_top',
    __('Margin - Top', 'secretum'),
    __('Increases spacing before section.', 'secretum'),
    $default['header_top_wrapper_margin_top'],
    secretum_customizer_margin_top()
);

// Select
$customizer->select(
    'header_top_wrapper',
    'header_top_wrapper_border_type',
    __('Border Type', 'secretum'),
    '',
    $default['header_top_wrapper_border_type'],
    secretum_customizer_border_types()
);

// Select
$customizer->select(
    'header_top_wrapper',
    'header_top_wrapper_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['header_top_wrapper_border_color'],
    secretum_customizer_border_colors()
);

// Container
$customizer->section(
    'header_top_container',
    'header_top',
    __('Container', 'secretum'),
    __('Customize the container within the header top wrapper.', 'secretum')
);

// Radio
$customizer->radio(
    'header_top_container',
    'header_top_container_type',
    __('Container Type', 'secretum'),
    '',
    $default['header_top_container_type'],
    secretum_customizer_container_types()
);

// Select
$customizer->select(
    'header_top_container',
    'header_top_container_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['header_top_container_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'header_top_container',
    'header_top_container_margin_x',
    __('Margin - Left & Right', 'secretum'),
    '',
    $default['header_top_container_margin_x'],
    secretum_customizer_margin_left_right()
);

// Select
$customizer->select(
    'header_top_container',
    'header_top_container_margin_y',
    __('Margin - Top & Bottom', 'secretum'),
    '',
    $default['header_top_container_margin_y'],
    secretum_customizer_margin_top_bottom()
);

// Select
$customizer->select(
    'header_top_container',
    'header_top_container_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['header_top_container_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'header_top_container',
    'header_top_container_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['header_top_container_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Textuals
$customizer->section(
    'header_top',
    'header_top',
    __('Textuals', 'secretum'),
    __('Customize fonts, text and link colors.', 'secretum')
);

// Select
$customizer->select(
    'header_top',
    'header_top_text_alignment',
    __('Text Alignment', 'secretum'),
    '',
    $default['header_top_text_alignment'],
    secretum_customizer_text_alignments()
);

// Select
$customizer->select(
    'header_top',
    'header_top_font_family',
    __('Font Family', 'secretum'),
    '',
    $default['header_top_font_family'],
    secretum_customizer_font_families()
);

// Select
$customizer->select(
    'header_top',
    'header_top_font_size',
    __('Font Size', 'secretum'),
    '',
    $default['header_top_font_size'],
    secretum_customizer_font_sizes()
);

// Select
$customizer->select(
    'header_top',
    'header_top_font_style',
    __('Font Style', 'secretum'),
    '',
    $default['header_top_font_style'],
    secretum_customizer_font_styles()
);

// Select
$customizer->select(
    'header_top',
    'header_top_text_transform',
    __('Text Transform', 'secretum'),
    '',
    $default['header_top_text_transform'],
    secretum_customizer_text_transform()
);

// Select
$customizer->select(
    'header_top',
    'header_top_text_color',
    __('Text Color', 'secretum'),
    '',
    $default['header_top_text_color'],
    secretum_customizer_text_colors()
);

// Select
$customizer->select(
    'header_top',
    'header_top_link_color',
    __('Link Color', 'secretum'),
    '',
    $default['header_top_link_color'],
    secretum_customizer_link_colors()
);

// Select
$customizer->select(
    'header_top',
    'header_top_link_hover_color',
    __('Link Hover Color', 'secretum'),
    '',
    $default['header_top_link_hover_color'],
    secretum_customizer_link_hover_colors()
);

// Menu Items
$customizer->section(
    'header_top_items',
    'header_top',
    __('Menu Items', 'secretum'),
    __('Customize the properties of items within the menu.', 'secretum')
);

// Select
$customizer->select(
    'header_top_items',
    'header_top_items_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['header_top_items_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'header_top_items',
    'header_top_items_background_hover_color',
    __('Background Hover Color', 'secretum'),
    '',
    $default['header_top_items_background_hover_color'],
    secretum_customizer_background_hover_colors()
);

// Select
$customizer->select(
    'header_top_items',
    'header_top_items_margin_x',
    __('Margin - Left & Right', 'secretum'),
    '',
    $default['header_top_items_margin_x'],
    secretum_customizer_margin_left_right()
);

// Select
$customizer->select(
    'header_top_items',
    'header_top_items_margin_y',
    __('Margin - Top & Bottom', 'secretum'),
    '',
    $default['header_top_items_margin_y'],
    secretum_customizer_margin_top_bottom()
);

// Select
$customizer->select(
    'header_top_items',
    'header_top_items_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['header_top_items_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'header_top_items',
    'header_top_items_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['header_top_items_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Select
$customizer->select(
    'header_top_items',
    'header_top_items_border_type',
    __('Border Type', 'secretum'),
    '',
    $default['header_top_items_border_type'],
    secretum_customizer_border_types()
);

// Select
$customizer->select(
    'header_top_items',
    'header_top_items_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['header_top_items_border_color'],
    secretum_customizer_border_colors()
);
