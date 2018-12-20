<?php
/**
 * Panels, Sections, & Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */

// Header Top Panel
$customizer->panel(
    'body',
    __('Body', 'secretum')
);

// Wrapper
$customizer->section(
    'body_wrapper',
    'body',
    __('Wrapper', 'secretum'),
    __('Customize the outter wrapper around the content entry+sidebar area.', 'secretum')
);

// Select
$customizer->select(
    'body_wrapper',
    'body_wrapper_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['body_wrapper_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'body_wrapper',
    'body_wrapper_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['body_wrapper_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'body_wrapper',
    'body_wrapper_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['body_wrapper_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Select
$customizer->select(
    'body_wrapper',
    'body_wrapper_margin_bottom',
    __('Margin - Bottom', 'secretum'),
    __('Increases spacing after section.', 'secretum'),
    $default['body_wrapper_margin_bottom'],
    secretum_customizer_margin_bottom()
);

// Select
$customizer->select(
    'body_wrapper',
    'body_wrapper_margin_top',
    __('Margin - Top', 'secretum'),
    __('Increases spacing before section.', 'secretum'),
    $default['body_wrapper_margin_top'],
    secretum_customizer_margin_top()
);

// Select
$customizer->select(
    'body_wrapper',
    'body_wrapper_border_type',
    __('Border Type', 'secretum'),
    '',
    $default['body_wrapper_border_type'],
    secretum_customizer_border_types()
);

// Select
$customizer->select(
    'body_wrapper',
    'body_wrapper_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['body_wrapper_border_color'],
    secretum_customizer_border_colors()
);

// Container
$customizer->section(
    'body_container',
    'body',
    __('Container', 'secretum'),
    __('Customize the container within the body top wrapper.', 'secretum')
);

// Radio
$customizer->radio(
    'body_container',
    'body_container_type',
    __('Container Type', 'secretum'),
    '',
    $default['body_container_type'],
    secretum_customizer_container_types()
);

// Select
$customizer->select(
    'body_container',
    'body_container_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['body_container_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'body_container',
    'body_container_margin_x',
    __('Margin - Left & Right', 'secretum'),
    '',
    $default['body_container_margin_x'],
    secretum_customizer_margin_left_right()
);

// Select
$customizer->select(
    'body_container',
    'body_container_margin_y',
    __('Margin - Top & Bottom', 'secretum'),
    '',
    $default['body_container_margin_y'],
    secretum_customizer_margin_top_bottom()
);

// Select
$customizer->select(
    'body_container',
    'body_container_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['body_container_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'body_container',
    'body_container_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['body_container_padding_y'],
    secretum_customizer_padding_top_bottom()
);
