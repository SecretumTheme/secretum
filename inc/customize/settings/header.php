<?php
/**
 * Panels, Sections, & Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */

// Header Top Panel
$customizer->panel(
    'header',
    __('Header', 'secretum')
);

// Display
$customizer->section(
    'header_display',
    'header',
    __('Display Settings', 'secretum')
);

// Checkbox
$customizer->checkbox(
    'header_display',
    'header_status',
    __('Hide Header Area', 'secretum'),
    __('Select to disable the entire header area.', 'secretum'),
    $default['header_status']
);

// Wrapper
$customizer->section(
    'header_wrapper',
    'header',
    __('Wrapper', 'secretum'),
    __('Customize the outter wrapper around header top area.', 'secretum')
);

// Select
$customizer->select(
    'header_wrapper',
    'header_wrapper_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['header_wrapper_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'header_wrapper',
    'header_wrapper_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['header_wrapper_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'header_wrapper',
    'header_wrapper_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['header_wrapper_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Select
$customizer->select(
    'header_wrapper',
    'header_wrapper_margin_bottom',
    __('Margin - Bottom', 'secretum'),
    __('Increases spacing after section.', 'secretum'),
    $default['header_wrapper_margin_bottom'],
    secretum_customizer_margin_bottom()
);

// Select
$customizer->select(
    'header_wrapper',
    'header_wrapper_margin_top',
    __('Margin - Top', 'secretum'),
    __('Increases spacing before section.', 'secretum'),
    $default['header_wrapper_margin_top'],
    secretum_customizer_margin_top()
);

// Select
$customizer->select(
    'header_wrapper',
    'header_wrapper_border_type',
    __('Border Type', 'secretum'),
    '',
    $default['header_wrapper_border_type'],
    secretum_customizer_border_types()
);

// Select
$customizer->select(
    'header_wrapper',
    'header_wrapper_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['header_wrapper_border_color'],
    secretum_customizer_border_colors()
);

// Container
$customizer->section(
    'header_container',
    'header',
    __('Container', 'secretum'),
    __('Customize the container within the header top wrapper.', 'secretum')
);

// Radio
$customizer->radio(
    'header_container',
    'header_container_type',
    __('Container Type', 'secretum'),
    '',
    $default['header_container_type'],
    secretum_customizer_container_types()
);

// Select
$customizer->select(
    'header_container',
    'header_container_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['header_container_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'header_container',
    'header_container_margin_x',
    __('Margin - Left & Right', 'secretum'),
    '',
    $default['header_container_margin_x'],
    secretum_customizer_margin_left_right()
);

// Select
$customizer->select(
    'header_container',
    'header_container_margin_y',
    __('Margin - Top & Bottom', 'secretum'),
    '',
    $default['header_container_margin_y'],
    secretum_customizer_margin_top_bottom()
);

// Select
$customizer->select(
    'header_container',
    'header_container_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['header_container_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'header_container',
    'header_container_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['header_container_padding_y'],
    secretum_customizer_padding_top_bottom()
);
