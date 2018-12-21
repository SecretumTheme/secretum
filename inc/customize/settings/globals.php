<?php
/**
 * Panels, Sections, & Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Panel
$customizer->panel(
    'globals',
    __('Globals', 'secretum')
);

// Section
$customizer->section(
    'globals',
    'globals',
    __('Colors', 'secretum'),
    __('Global website background, text and link colors.', 'secretum')
);

// Select
$customizer->select(
    'globals',
    'globals_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['globals_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'globals',
    'globals_text_color',
    __('Text Color', 'secretum'),
    '',
    $default['globals_text_color'],
    secretum_customizer_text_colors()
);

// Select
$customizer->select(
    'globals',
    'globals_link_color',
    __('Link Color', 'secretum'),
    '',
    $default['globals_link_color'],
    secretum_customizer_link_colors()
);

// Select
$customizer->select(
    'globals',
    'globals_link_hover_color',
    __('Link Hover Color', 'secretum'),
    '',
    $default['globals_link_hover_color'],
    secretum_customizer_link_hover_colors()
);
