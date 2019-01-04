<?php
/**
 * Panels, Sections, & Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */


// Panel
$customizer->panel(
    'sidebar',
    __('Sidebars', 'secretum')
);

//Section
$customizer->section(
    'sidebar_display',
    'sidebar',
    __('Sidebar Display', 'secretum'),
    __('A widget must be assigned to a sidebar location before the sidebar will display.', 'secretum')
);

// Radio
$customizer->radio(
    'sidebar_display',
    'sidebar_location',
    __('Sidebar Display Location', 'secretum'),
    __('Set the global sidebar location. This setting can be overridden at the post/page/post_type level.', 'secretum'),
    $default['sidebar_location'],
    array(
        ''      => __( 'Based on Theme', 'secretum' ),
        'right' => __( 'Right Sidebar', 'secretum' ),
        'left'  => __( 'Left Sidebar', 'secretum' ),
        'both'  => __( 'Both Sidebars', 'secretum' ),
        'none'  => __( 'No Sidebars', 'secretum' )
    )
);

// Wrapper
$customizer->section(
    'sidebar_wrapper',
    'sidebar',
    __('Wrapper', 'secretum'),
    __('Outer div that wraps around all containers and elements for this area', 'secretum')
);

// Select
$customizer->select(
    'sidebar_wrapper',
    'sidebar_wrapper_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['sidebar_wrapper_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'sidebar_wrapper',
    'sidebar_wrapper_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['sidebar_wrapper_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'sidebar_wrapper',
    'sidebar_wrapper_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['sidebar_wrapper_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Select
$customizer->select(
    'sidebar_wrapper',
    'sidebar_wrapper_margin_top',
    __('Margin - Top', 'secretum'),
    __('Spacing around/outside the wrapper', 'secretum'),
    $default['sidebar_wrapper_margin_top'],
    secretum_customizer_margin_top()
);

// Select
$customizer->select(
    'sidebar_wrapper',
    'sidebar_wrapper_margin_right',
    __('Margin - Right', 'secretum'),
    __('Spacing around/outside the wrapper', 'secretum'),
    $default['sidebar_wrapper_margin_right'],
    secretum_customizer_margin_right()
);

// Select
$customizer->select(
    'sidebar_wrapper',
    'sidebar_wrapper_margin_bottom',
    __('Margin - Bottom', 'secretum'),
    __('Spacing around/outside the wrapper', 'secretum'),
    $default['sidebar_wrapper_margin_bottom'],
    secretum_customizer_margin_bottom()
);

// Select
$customizer->select(
    'sidebar_wrapper',
    'sidebar_wrapper_margin_left',
    __('Margin - Left', 'secretum'),
    __('Spacing around/outside the wrapper', 'secretum'),
    $default['sidebar_wrapper_margin_left'],
    secretum_customizer_margin_left()
);

// Select
$customizer->select(
    'sidebar_wrapper',
    'sidebar_wrapper_border_type',
    __('Border Type', 'secretum'),
    '',
    $default['sidebar_wrapper_border_type'],
    secretum_customizer_border_types()
);

// Select
$customizer->select(
    'sidebar_wrapper',
    'sidebar_wrapper_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['sidebar_wrapper_border_color'],
    secretum_customizer_border_colors()
);

// Container
$customizer->section(
    'sidebar_container',
    'sidebar',
    __('Container', 'secretum'),
    __('Inner div that contains other elments to display', 'secretum')
);

// Select
$customizer->select(
    'sidebar_container',
    'sidebar_container_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['sidebar_container_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'sidebar_container',
    'sidebar_container_margin_x',
    __('Margin - Left & Right', 'secretum'),
    '',
    $default['sidebar_container_margin_x'],
    secretum_customizer_margin_left_right()
);

// Select
$customizer->select(
    'sidebar_container',
    'sidebar_container_margin_y',
    __('Margin - Top & Bottom', 'secretum'),
    '',
    $default['sidebar_container_margin_y'],
    secretum_customizer_margin_top_bottom()
);

// Select
$customizer->select(
    'sidebar_container',
    'sidebar_container_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['sidebar_container_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'sidebar_container',
    'sidebar_container_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['sidebar_container_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Textuals
$customizer->section(
    'sidebar',
    'sidebar',
    __('Textuals', 'secretum'),
    __('Customize fonts, text and link colors.', 'secretum')
);

// Select
$customizer->select(
    'sidebar',
    'sidebar_text_alignment',
    __('Text Alignment', 'secretum'),
    '',
    $default['sidebar_text_alignment'],
    secretum_customizer_text_alignments()
);

// Select
$customizer->select(
    'sidebar',
    'sidebar_font_family',
    __('Font Family', 'secretum'),
    '',
    $default['sidebar_font_family'],
    secretum_customizer_font_families()
);

// Select
$customizer->select(
    'sidebar',
    'sidebar_font_size',
    __('Font Size', 'secretum'),
    '',
    $default['sidebar_font_size'],
    secretum_customizer_font_sizes()
);

// Select
$customizer->select(
    'sidebar',
    'sidebar_font_style',
    __('Font Style', 'secretum'),
    '',
    $default['sidebar_font_style'],
    secretum_customizer_font_styles()
);

// Select
$customizer->select(
    'sidebar',
    'sidebar_text_transform',
    __('Text Transform', 'secretum'),
    '',
    $default['sidebar_text_transform'],
    secretum_customizer_text_transform()
);

// Select
$customizer->select(
    'sidebar',
    'sidebar_text_color',
    __('Text Color', 'secretum'),
    '',
    $default['sidebar_text_color'],
    secretum_customizer_text_colors()
);

// Select
$customizer->select(
    'sidebar',
    'sidebar_link_color',
    __('Link Color', 'secretum'),
    '',
    $default['sidebar_link_color'],
    secretum_customizer_link_colors()
);

// Select
$customizer->select(
    'sidebar',
    'sidebar_link_hover_color',
    __('Link Hover Color', 'secretum'),
    '',
    $default['sidebar_link_hover_color'],
    secretum_customizer_link_hover_colors()
);
