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
    __('Website Colors', 'secretum'),
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

// Section
$customizer->section(
    'enqueue',
    'globals',
    __('Enqueue Management', 'secretum'),
    ''
);

// Select
$customizer->select(
    'enqueue',
    'enqueue_theme_colors',
    __('Theme Color', 'secretum'),
    __('Select a theme color below (a stylesheet) to use as your primary style, changing the base colors of the theme.', 'secretum'),
    $default['enqueue_theme_colors'],
    secretum_theme_colors()
);

// Input Text
$customizer->inputText(
    'enqueue',
    'enqueue_contact_pageids',
    __('Contact Form Page IDs', 'secretum'),
    __('Make contact form plugins load scripts and styles on set pages, rather than the entire website. Enter a comma separated list of page IDs to load popular contact form styles and scripts. Example: 90,1001', 'secretum'),
    $default['enqueue_contact_pageids']
);

// Section
$customizer->section(
    'content_width',
    'globals',
    __('Content Width', 'secretum'),
    ''
);

// Number
$customizer->number(
    'content_width',
    'content_width',
    __('Default Content Width In Pixels', 'secretum'),
    __('Sets width limits on embeds and other plugable content.', 'secretum'),
    array(),
    $default['content_width']
);

// Section
$customizer->section(
    'reset',
    'globals',
    __('Reset Settings', 'secretum'),
    __('THIS CAN NOT BE UNDONE! Deletes all theme unique customizer settings. Enter the word RESET below, publish your changes, then manually refresh the browser window.', 'secretum')
);

$customizer->reset();
