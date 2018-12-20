<?php
/**
 * Panels, Sections, & Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */

// Header Top Panel
$customizer->panel(
    'footer',
    __('Footer', 'secretum')
);

// Display
$customizer->section(
    'footer_display',
    'footer',
    __('Display Settings', 'secretum')
);

// Checkbox
$customizer->checkbox(
    'footer_display',
    'footer_status',
    __('Select To Hide Footer Area', 'secretum'),
    $default['footer_status']
);

// Wrapper
$customizer->section(
    'footer_wrapper',
    'footer',
    __('Wrapper', 'secretum'),
    __('Customize the outter wrapper around header top area.', 'secretum')
);

// Select
$customizer->select(
    'footer_wrapper',
    'footer_wrapper_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['footer_wrapper_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'footer_wrapper',
    'footer_wrapper_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['footer_wrapper_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'footer_wrapper',
    'footer_wrapper_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['footer_wrapper_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Select
$customizer->select(
    'footer_wrapper',
    'footer_wrapper_margin_bottom',
    __('Margin - Bottom', 'secretum'),
    __('Increases spacing after section.', 'secretum'),
    $default['footer_wrapper_margin_bottom'],
    secretum_customizer_margin_bottom()
);

// Select
$customizer->select(
    'footer_wrapper',
    'footer_wrapper_margin_top',
    __('Margin - Top', 'secretum'),
    __('Increases spacing before section.', 'secretum'),
    $default['footer_wrapper_margin_top'],
    secretum_customizer_margin_top()
);

// Select
$customizer->select(
    'footer_wrapper',
    'footer_wrapper_border_type',
    __('Border Type', 'secretum'),
    '',
    $default['footer_wrapper_border_type'],
    secretum_customizer_border_types()
);

// Select
$customizer->select(
    'footer_wrapper',
    'footer_wrapper_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['footer_wrapper_border_color'],
    secretum_customizer_border_colors()
);

// Container
$customizer->section(
    'footer_container',
    'footer',
    __('Container', 'secretum'),
    __('Customize the container within the header top wrapper.', 'secretum')
);

// Radio
$customizer->radio(
    'footer_container',
    'footer_container_type',
    __('Container Type', 'secretum'),
    '',
    $default['footer_container_type'],
    secretum_customizer_container_types()
);

// Select
$customizer->select(
    'footer_container',
    'footer_container_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['footer_container_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'footer_container',
    'footer_container_margin_x',
    __('Margin - Left & Right', 'secretum'),
    '',
    $default['footer_container_margin_x'],
    secretum_customizer_margin_left_right()
);

// Select
$customizer->select(
    'footer_container',
    'footer_container_margin_y',
    __('Margin - Top & Bottom', 'secretum'),
    '',
    $default['footer_container_margin_y'],
    secretum_customizer_margin_top_bottom()
);

// Select
$customizer->select(
    'footer_container',
    'footer_container_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['footer_container_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'footer_container',
    'footer_container_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['footer_container_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Textuals
$customizer->section(
    'footer',
    'footer',
    __('Textuals', 'secretum'),
    __('Customize fonts, text and link colors.', 'secretum')
);

// Select
$customizer->select(
    'footer',
    'footer_text_alignment',
    __('Text Alignment', 'secretum'),
    '',
    $default['footer_text_alignment'],
    secretum_customizer_text_alignments()
);

// Select
$customizer->select(
    'footer',
    'footer_font_family',
    __('Font Family', 'secretum'),
    '',
    $default['footer_font_family'],
    secretum_customizer_font_families()
);

// Select
$customizer->select(
    'footer',
    'footer_font_size',
    __('Font Size', 'secretum'),
    '',
    $default['footer_font_size'],
    secretum_customizer_font_sizes()
);

// Select
$customizer->select(
    'footer',
    'footer_font_style',
    __('Font Style', 'secretum'),
    '',
    $default['footer_font_style'],
    secretum_customizer_font_styles()
);

// Select
$customizer->select(
    'footer',
    'footer_text_transform',
    __('Text Transform', 'secretum'),
    '',
    $default['footer_text_transform'],
    secretum_customizer_text_transform()
);

// Select
$customizer->select(
    'footer',
    'footer_text_color',
    __('Text Color', 'secretum'),
    '',
    $default['footer_text_color'],
    secretum_customizer_text_colors()
);

// Select
$customizer->select(
    'footer',
    'footer_link_color',
    __('Link Color', 'secretum'),
    '',
    $default['footer_link_color'],
    secretum_customizer_link_colors()
);

// Select
$customizer->select(
    'footer',
    'footer_link_hover_color',
    __('Link Hover Color', 'secretum'),
    '',
    $default['footer_link_hover_color'],
    secretum_customizer_link_hover_colors()
);
