<?php
/**
 * Panels, Sections, & Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Panel
$customizer->panel(
    'primary_nav',
    __('Primary Nav', 'secretum')
);

// Section
$customizer->section(
    'primary_nav_display',
    'primary_nav',
    __('Display Settings', 'secretum'),
    ''
);

// Checkbox
$customizer->checkbox(
    'primary_nav_display',
    'primary_nav_status',
    __('Select To Hide Navigation Menu', 'secretum'),
    '',
    $default['primary_nav_status']
);

// Wrapper
$customizer->section(
    'primary_nav_wrapper',
    'primary_nav',
    __('Wrapper', 'secretum'),
    __('Customize the outter wrapper around navigation menu.', 'secretum')
);

// Select
$customizer->select(
    'primary_nav_wrapper',
    'primary_nav_wrapper_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['primary_nav_wrapper_background_color'],
    secretum_customizer_background_colors()
);

// Partial
$customizer->partial(
    'primary_nav_wrapper_background_color',
    '.navbar-nav.primary'
);

// Select
$customizer->select(
    'primary_nav_wrapper',
    'primary_nav_wrapper_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['primary_nav_wrapper_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'primary_nav_wrapper',
    'primary_nav_wrapper_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['primary_nav_wrapper_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Select
$customizer->select(
    'primary_nav_wrapper',
    'primary_nav_wrapper_margin_bottom',
    __('Margin - Bottom', 'secretum'),
    __('Increases spacing after section.', 'secretum'),
    $default['primary_nav_wrapper_margin_bottom'],
    secretum_customizer_margin_bottom()
);

// Select
$customizer->select(
    'primary_nav_wrapper',
    'primary_nav_wrapper_margin_top',
    __('Margin - Top', 'secretum'),
    __('Increases spacing before section.', 'secretum'),
    $default['primary_nav_wrapper_margin_top'],
    secretum_customizer_margin_top()
);

// Select
$customizer->select(
    'primary_nav_wrapper',
    'primary_nav_wrapper_border_type',
    __('Border Type', 'secretum'),
    '',
    $default['primary_nav_wrapper_border_type'],
    secretum_customizer_border_types()
);

// Select
$customizer->select(
    'primary_nav_wrapper',
    'primary_nav_wrapper_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['primary_nav_wrapper_border_color'],
    secretum_customizer_border_colors()
);

// Container
$customizer->section(
    'primary_nav_container',
    'primary_nav',
    __('Container', 'secretum'),
    __('Customize the container within the header top wrapper.', 'secretum')
);

// Radio
$customizer->radio(
    'primary_nav_container',
    'primary_nav_container_type',
    __('Container Type', 'secretum'),
    '',
    $default['primary_nav_container_type'],
    secretum_customizer_container_types()
);

// Select
$customizer->select(
    'primary_nav_container',
    'primary_nav_container_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['primary_nav_container_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'primary_nav_container',
    'primary_nav_container_margin_x',
    __('Margin - Left & Right', 'secretum'),
    '',
    $default['primary_nav_container_margin_x'],
    secretum_customizer_margin_left_right()
);

// Select
$customizer->select(
    'primary_nav_container',
    'primary_nav_container_margin_y',
    __('Margin - Top & Bottom', 'secretum'),
    '',
    $default['primary_nav_container_margin_y'],
    secretum_customizer_margin_top_bottom()
);

// Select
$customizer->select(
    'primary_nav_container',
    'primary_nav_container_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['primary_nav_container_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'primary_nav_container',
    'primary_nav_container_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['primary_nav_container_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Textuals
$customizer->section(
    'primary_nav_textuals',
    'primary_nav',
    __('Textuals', 'secretum'),
    __('Customize fonts, text and link colors.', 'secretum')
);

// Select
$customizer->select(
    'primary_nav_textuals',
    'primary_nav_textual_font_family',
    __('Font Family', 'secretum'),
    '',
    $default['primary_nav_textual_font_family'],
    secretum_customizer_font_families()
);

// Select
$customizer->select(
    'primary_nav_textuals',
    'primary_nav_textual_font_size',
    __('Font Size', 'secretum'),
    '',
    $default['primary_nav_textual_font_size'],
    secretum_customizer_font_sizes()
);

// Select
$customizer->select(
    'primary_nav_textuals',
    'primary_nav_textual_font_style',
    __('Font Style', 'secretum'),
    '',
    $default['primary_nav_textual_font_style'],
    secretum_customizer_font_styles()
);

// Select
$customizer->select(
    'primary_nav_textuals',
    'primary_nav_textual_text_transform',
    __('Text Transform', 'secretum'),
    '',
    $default['primary_nav_textual_text_transform'],
    secretum_customizer_text_transform()
);

// Select
$customizer->select(
    'primary_nav_textuals',
    'primary_nav_textual_text_color',
    __('Text Color', 'secretum'),
    '',
    $default['primary_nav_textual_text_color'],
    secretum_customizer_text_colors()
);

// Select
$customizer->select(
    'primary_nav_textuals',
    'primary_nav_textual_link_color',
    __('Link Color', 'secretum'),
    '',
    $default['primary_nav_textual_link_color'],
    secretum_customizer_link_colors()
);

// Select
$customizer->select(
    'primary_nav_textuals',
    'primary_nav_textual_link_hover_color',
    __('Link Hover Color', 'secretum'),
    '',
    $default['primary_nav_textual_link_hover_color'],
    secretum_customizer_link_hover_colors()
);

// Menu Items
$customizer->section(
    'primary_nav_items',
    'primary_nav',
    __('Menu Items', 'secretum'),
    __('Customize the properties of items within the menu.', 'secretum')
);

// Select
$customizer->select(
    'primary_nav_items',
    'primary_nav_alignment',
    __('Alignment', 'secretum'),
    '',
    $default['primary_nav_alignment'],
    secretum_customizer_margin_alignments()
);

// Select
$customizer->select(
    'primary_nav_items',
    'primary_nav_items_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['primary_nav_items_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'primary_nav_items',
    'primary_nav_items_background_hover_color',
    __('Background Hover Color', 'secretum'),
    '',
    $default['primary_nav_items_background_hover_color'],
    secretum_customizer_background_hover_colors()
);

// Select
$customizer->select(
    'primary_nav_items',
    'primary_nav_items_margin_x',
    __('Margin - Left & Right', 'secretum'),
    '',
    $default['primary_nav_items_margin_x'],
    secretum_customizer_margin_left_right()
);

// Select
$customizer->select(
    'primary_nav_items',
    'primary_nav_items_margin_y',
    __('Margin - Top & Bottom', 'secretum'),
    '',
    $default['primary_nav_items_margin_y'],
    secretum_customizer_margin_top_bottom()
);

// Select
$customizer->select(
    'primary_nav_items',
    'primary_nav_items_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['primary_nav_items_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'primary_nav_items',
    'primary_nav_items_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['primary_nav_items_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Select
$customizer->select(
    'primary_nav_items',
    'primary_nav_items_border_type',
    __('Border Type', 'secretum'),
    '',
    $default['primary_nav_items_border_type'],
    secretum_customizer_border_types()
);

// Select
$customizer->select(
    'primary_nav_items',
    'primary_nav_items_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['primary_nav_items_border_color'],
    secretum_customizer_border_colors()
);


// Menu Items
$customizer->section(
    'primary_nav_toggler',
    'primary_nav',
    __('Toggler Icon', 'secretum'),
    __('Customize the properties of the primary menu toggler icon.', 'secretum')
);

// Select
$customizer->select(
    'primary_nav_toggler',
    'primary_nav_toggler_icon_alignment',
    __('Alignment', 'secretum'),
    '',
    $default['primary_nav_toggler_icon_alignment'],
    secretum_customizer_margin_alignments()
);

// Partial
$customizer->partial(
    'primary_nav_toggler_icon',
    '.navbar-toggler-icon'
);

// Select
$customizer->select(
    'primary_nav_toggler',
    'primary_nav_toggler_font_size',
    __('Font Size', 'secretum'),
    '',
    $default['primary_nav_toggler_font_size'],
    secretum_customizer_font_sizes()
);

// Select
$customizer->select(
    'primary_nav_toggler',
    'primary_nav_toggler_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['primary_nav_toggler_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'primary_nav_toggler',
    'primary_nav_toggler_margin_x',
    __('Margin - Left & Right', 'secretum'),
    '',
    $default['primary_nav_toggler_margin_x'],
    secretum_customizer_margin_left_right()
);

// Select
$customizer->select(
    'primary_nav_toggler',
    'primary_nav_toggler_margin_y',
    __('Margin - Top & Bottom', 'secretum'),
    '',
    $default['primary_nav_toggler_margin_y'],
    secretum_customizer_margin_top_bottom()
);

// Select
$customizer->select(
    'primary_nav_toggler',
    'primary_nav_toggler_border_radius',
    __('Border Radius', 'secretum'),
    '',
    $default['primary_nav_toggler_border_radius'],
    secretum_customizer_border_radius()
);

// Select
$customizer->select(
    'primary_nav_toggler',
    'primary_nav_toggler_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['primary_nav_toggler_border_color'],
    secretum_customizer_border_colors()
);
