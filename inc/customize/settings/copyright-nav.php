<?php
/**
 * Panels, Sections, & Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */

// Header Top Panel
$customizer->panel(
    'copyright_nav',
    __('Copyright Nav', 'secretum')
);

// Display
$customizer->section(
    'copyright_nav_display',
    'copyright_nav',
    __('Display Settings', 'secretum')
);

// Checkbox
$customizer->checkbox(
    'copyright_nav_display',
    'copyright_nav_status',
    __('Select To Hide Navigation Menu', 'secretum'),
    '',
    $default['copyright_nav_status']
);

// Wrapper
$customizer->section(
    'copyright_nav_wrapper',
    'copyright_nav',
    __('Wrapper', 'secretum'),
    __('Customize the outter wrapper around navigation menu.', 'secretum')
);

// Select
$customizer->select(
    'copyright_nav_wrapper',
    'copyright_nav_wrapper_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['copyright_nav_wrapper_background_color'],
    secretum_customizer_background_colors()
);

// Partial
$customizer->partial(
    'copyright_nav_wrapper_background_color',
    '.navbar-nav.primary'
);

// Select
$customizer->select(
    'copyright_nav_wrapper',
    'copyright_nav_wrapper_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['copyright_nav_wrapper_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'copyright_nav_wrapper',
    'copyright_nav_wrapper_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['copyright_nav_wrapper_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Select
$customizer->select(
    'copyright_nav_wrapper',
    'copyright_nav_wrapper_margin_bottom',
    __('Margin - Bottom', 'secretum'),
    __('Increases spacing after section.', 'secretum'),
    $default['copyright_nav_wrapper_margin_bottom'],
    secretum_customizer_margin_bottom()
);

// Select
$customizer->select(
    'copyright_nav_wrapper',
    'copyright_nav_wrapper_margin_top',
    __('Margin - Top', 'secretum'),
    __('Increases spacing before section.', 'secretum'),
    $default['copyright_nav_wrapper_margin_top'],
    secretum_customizer_margin_top()
);

// Select
$customizer->select(
    'copyright_nav_wrapper',
    'copyright_nav_wrapper_border_type',
    __('Border Type', 'secretum'),
    '',
    $default['copyright_nav_wrapper_border_type'],
    secretum_customizer_border_types()
);

// Select
$customizer->select(
    'copyright_nav_wrapper',
    'copyright_nav_wrapper_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['copyright_nav_wrapper_border_color'],
    secretum_customizer_border_colors()
);

// Textuals
$customizer->section(
    'copyright_nav',
    'copyright_nav',
    __('Textuals', 'secretum'),
    __('Customize fonts, text and link colors.', 'secretum')
);

// Select
$customizer->select(
    'copyright_nav',
    'copyright_nav_text_alignment',
    __('Text Alignment', 'secretum'),
    '',
    $default['copyright_nav_text_alignment'],
    secretum_customizer_text_alignments()
);

// Select
$customizer->select(
    'copyright_nav',
    'copyright_nav_font_family',
    __('Font Family', 'secretum'),
    '',
    $default['copyright_nav_font_family'],
    secretum_customizer_font_families()
);

// Select
$customizer->select(
    'copyright_nav',
    'copyright_nav_font_size',
    __('Font Size', 'secretum'),
    '',
    $default['copyright_nav_font_size'],
    secretum_customizer_font_sizes()
);

// Select
$customizer->select(
    'copyright_nav',
    'copyright_nav_font_style',
    __('Font Style', 'secretum'),
    '',
    $default['copyright_nav_font_style'],
    secretum_customizer_font_styles()
);

// Select
$customizer->select(
    'copyright_nav',
    'copyright_nav_text_transform',
    __('Text Transform', 'secretum'),
    '',
    $default['copyright_nav_text_transform'],
    secretum_customizer_text_transform()
);

// Select
$customizer->select(
    'copyright_nav',
    'copyright_nav_text_color',
    __('Text Color', 'secretum'),
    '',
    $default['copyright_nav_text_color'],
    secretum_customizer_text_colors()
);

// Select
$customizer->select(
    'copyright_nav',
    'copyright_nav_link_color',
    __('Link Color', 'secretum'),
    '',
    $default['copyright_nav_link_color'],
    secretum_customizer_link_colors()
);

// Select
$customizer->select(
    'copyright_nav',
    'copyright_nav_link_hover_color',
    __('Link Hover Color', 'secretum'),
    '',
    $default['copyright_nav_link_hover_color'],
    secretum_customizer_link_hover_colors()
);

// Menu Items
$customizer->section(
    'copyright_nav_items',
    'copyright_nav',
    __('Menu Items', 'secretum'),
    __('Customize the properties of items within the menu.', 'secretum')
);

// Select
$customizer->select(
    'copyright_nav_items',
    'copyright_nav_items_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['copyright_nav_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'copyright_nav_items',
    'copyright_nav_items_background_hover_color',
    __('Background Hover Color', 'secretum'),
    '',
    $default['copyright_nav_background_hover_color'],
    secretum_customizer_background_hover_colors()
);

// Select
$customizer->select(
    'copyright_nav_items',
    'copyright_nav_items_margin_x',
    __('Margin - Left & Right', 'secretum'),
    '',
    $default['copyright_nav_margin_x'],
    secretum_customizer_margin_left_right()
);

// Select
$customizer->select(
    'copyright_nav_items',
    'copyright_nav_items_margin_y',
    __('Margin - Top & Bottom', 'secretum'),
    '',
    $default['copyright_nav_margin_y'],
    secretum_customizer_margin_top_bottom()
);

// Select
$customizer->select(
    'copyright_nav_items',
    'copyright_nav_items_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['copyright_nav_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'copyright_nav_items',
    'copyright_nav_items_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['copyright_nav_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Select
$customizer->select(
    'copyright_nav_items',
    'copyright_nav_items_border_type',
    __('Border Type', 'secretum'),
    '',
    $default['copyright_nav_items_border_type'],
    secretum_customizer_border_types()
);

// Select
$customizer->select(
    'copyright_nav_items',
    'copyright_nav_items_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['copyright_nav_items_border_color'],
    secretum_customizer_border_colors()
);

// Menu Items
$customizer->section(
    'copyright_nav_toggler',
    'copyright_nav',
    __('Toggler Icon', 'secretum'),
    __('Customize the properties of the primary menu toggler icon.', 'secretum')
);

// Select
$customizer->select(
    'copyright_nav_toggler',
    'copyright_nav_toggler_icon',
    __('Alignment', 'secretum'),
    '',
    $default['copyright_nav_toggler_icon'],
    secretum_customizer_margin_alignments()
);

// Partial
$customizer->partial(
    'copyright_nav_toggler_icon',
    '.navbar-toggler-icon'
);

// Select
$customizer->select(
    'copyright_nav_toggler',
    'copyright_nav_toggler_font_size',
    __('Font Size', 'secretum'),
    '',
    $default['copyright_nav_toggler_font_size'],
    secretum_customizer_font_sizes()
);

// Select
$customizer->select(
    'copyright_nav_toggler',
    'copyright_nav_toggler_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['copyright_nav_toggler_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'copyright_nav_toggler',
    'copyright_nav_toggler_margin_x',
    __('Margin - Left & Right', 'secretum'),
    '',
    $default['copyright_nav_toggler_margin_x'],
    secretum_customizer_margin_left_right()
);

// Select
$customizer->select(
    'copyright_nav_toggler',
    'copyright_nav_toggler_margin_y',
    __('Margin - Top & Bottom', 'secretum'),
    '',
    $default['copyright_nav_toggler_margin_y'],
    secretum_customizer_margin_top_bottom()
);

// Select
$customizer->select(
    'copyright_nav_toggler',
    'copyright_nav_toggler_border_radius',
    __('Border Radius', 'secretum'),
    '',
    $default['copyright_nav_toggler_border_radius'],
    secretum_customizer_border_radius()
);

// Select
$customizer->select(
    'copyright_nav_toggler',
    'copyright_nav_toggler_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['copyright_nav_toggler_border_color'],
    secretum_customizer_border_colors()
);
