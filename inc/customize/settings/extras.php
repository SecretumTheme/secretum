<?php
/**
 * Panels, Sections, & Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Panel
$customizer->panel(
    'extras',
    __('Extras', 'secretum')
);

// Section
$customizer->section(
    'analytics',
    'extras',
    __('Google Analytics', 'secretum'),
    ''
);

// Radio
$customizer->radio(
    'analytics',
    'analytics_location',
    __('Analytics Code Location', 'secretum'),
    '',
    $default['analytics_location'],
    array(
        ''              => __('Footer (best performance)', 'secretum'),
        'header'        => __('Header (best tracking)', 'secretum')
    )
);

// Textarea Script
$customizer->textareaScript(
    'analytics',
    'analytics_code',
    __('Analytics Tracking Code', 'secretum'),
    __('Include all opening and closing script tags.', 'secretum'),
    ''
);

// Section
$customizer->section(
    'enqueue',
    'extras',
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
    'scrolltop_icon',
    'extras',
    __('Scroll To Top Icon', 'secretum'),
    ''
);

// Checkbox
$customizer->checkbox(
    'scrolltop_icon',
    'scrolltop',
    __('Hide Scroll To Top Icon', 'secretum'),
    __('Select to disable the scroll to top icon.', 'secretum'),
    $default['scrolltop']
);

// Select
$customizer->select(
    'scrolltop_icon',
    'scrolltop_text_color',
    __('Icon Color', 'secretum'),
    '',
    $default['scrolltop_text_color'],
    secretum_customizer_text_colors()
);

// Select
$customizer->select(
    'scrolltop_icon',
    'scrolltop_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['scrolltop_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'scrolltop_icon',
    'scrolltop_background_hover_color',
    __('Background Hover Color', 'secretum'),
    '',
    $default['scrolltop_background_hover_color'],
    secretum_customizer_background_hover_colors()
);

// Select
$customizer->select(
    'scrolltop_icon',
    'scrolltop_border_type',
    __('Border Type', 'secretum'),
    '',
    $default['scrolltop_border_type'],
    secretum_customizer_border_types()
);

// Select
$customizer->select(
    'scrolltop_icon',
    'scrolltop_border_radius',
    __('Border Radius', 'secretum'),
    '',
    $default['scrolltop_border_radius'],
    secretum_customizer_border_radius()
);

// Select
$customizer->select(
    'scrolltop_icon',
    'scrolltop_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['scrolltop_border_color'],
    secretum_customizer_border_colors()
);

// Select
$customizer->select(
    'scrolltop_icon',
    'scrolltop_margin_bottom',
    __('Bottom Margin', 'secretum'),
    __('Spacing around the container.', 'secretum'),
    $default['scrolltop_margin_bottom'],
    secretum_customizer_margin_bottom()
);

// Select
$customizer->select(
    'scrolltop_icon',
    'scrolltop_margin_right',
    __('Right Margin', 'secretum'),
    __('Spacing around the container.', 'secretum'),
    $default['scrolltop_margin_right'],
    secretum_customizer_margin_right()
);

// Select
$customizer->select(
    'scrolltop_icon',
    'scrolltop_padding_x',
    __('Padding - Left & Right', 'secretum'),
    __('Spacing within the container.', 'secretum'),
    $default['scrolltop_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'scrolltop_icon',
    'scrolltop_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    __('Spacing within the container.', 'secretum'),
    $default['scrolltop_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Section
$customizer->section(
    'content_width',
    'extras',
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
    'extras',
    __('Reset Settings', 'secretum'),
    __('THIS CAN NOT BE UNDONE! Deletes all theme unique customizer settings. Enter the word RESET below, publish your changes, then manually refresh the browser window.', 'secretum')
);

$customizer->reset();
