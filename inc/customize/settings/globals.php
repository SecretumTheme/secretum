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
    __('Color Scheme', 'secretum'),
    __('Select a theme color scheme below (a stylesheet) to use as your primary style, changing the base colors of the theme.', 'secretum'),
    $default['enqueue_theme_colors'],
    secretum_theme_colors()
);

// Checkbox
$customizer->checkbox(
    'enqueue',
    'enqueue_theme_js_status', 
    __('Disable Primary JS File', 'secretum'),
    __('Disables "bundled" theme.min.js file. This is the primary .js file for the theme (ie: all Bootstrap, Secretum, Ekko, etc. scripts)', 'secretum'),
    $default['enqueue_theme_js_status']
);

// Checkbox
$customizer->checkbox(
    'enqueue',
    'enqueue_bootstrap_bundle_js_status', 
    __('Enable Bootstrap JS File', 'secretum'),
    __('The primary (all features) Bootstrap Bundle file. The Primary JS File must be disabled to use this feature.', 'secretum'),
    $default['enqueue_bootstrap_bundle_js_status']
);

// Checkbox
$customizer->checkbox(
    'enqueue',
    'enqueue_secretum_js_status', 
    __('Enable Theme JS File', 'secretum'),
    __('Very small theme dependent jQuery file (ie: Scroll to Top, Sticky Menu/Header, Menu Togglers, etc). The Primary JS File must be disabled to use this feature.', 'secretum'),
    $default['enqueue_secretum_js_status']
);

// Checkbox
$customizer->checkbox(
    'enqueue',
    'enqueue_ekko_lightbox_status', 
    __('Enable Ekko Lightbox', 'secretum'),
    '',
    $default['enqueue_ekko_lightbox_status']
);

// Checkbox
$customizer->checkbox(
    'enqueue',
    'enqueue_jquery_status', 
    __('Disable jQuery', 'secretum'),
    __('Automatically disables all WordPress & Theme based JavaScript files. ** Warning ** Some plugins require jQuery to function correctly.', 'secretum'),
    $default['enqueue_jquery_status']
);

if (class_exists('woocommerce')) {
    // Checkbox
    $customizer->checkbox(
        'enqueue',
        'enqueue_woocommerce_status', 
        __('Enable WooCommerce Styles', 'secretum'),
        '',
        $default['enqueue_woocommerce_status']
    );

    if (class_exists('WC_Bookings')) {
        // Checkbox
        $customizer->checkbox(
            'enqueue',
            'enqueue_woocommerce_bookings_status', 
            __('Enable WooCommerce Bookings Styles', 'secretum'),
            '',
            $default['enqueue_woocommerce_bookings_status']
        );
    }
}

if (class_exists('WPCF7')) {
    // Input Text
    $customizer->inputText(
        'enqueue',
        'enqueue_contact_pageids',
        __('Contact Form Page IDs', 'secretum'),
        __('Make adapted contact form plugins load scripts and styles on set page ids, rather than the entire website. Enter a comma separated list of page IDs. Example: 90,1001', 'secretum'),
        $default['enqueue_contact_pageids']
    );
}

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
