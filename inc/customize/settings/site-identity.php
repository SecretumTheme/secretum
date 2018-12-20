<?php
/**
 * Panels, Sections, & Settings
 *
 * @package WordPress
 * @subpackage Secretum
 */

// Site Identity Panel
$customizer->panel(
    'site_identity',
    __('Site Identity', 'secretum')
);

// Display
$customizer->section(
    'site_identity_display',
    'site_identity',
    __('Display Settings', 'secretum')
);

// Checkbox
$customizer->checkbox(
    'site_identity_display',
    'site_identity_branding_status',
    __('Hide Brand Logo / Tagline Area', 'secretum'),
    '',
    $default['site_identity_branding_status']
);

// Checkbox
$customizer->checkbox(
    'site_identity_display',
    'site_identity_logo_status',
    __('Hide Tagline / Desc Text', 'secretum'),
    '',
    $default['site_identity_logo_status']
);

// Checkbox
$customizer->checkbox(
    'site_identity_display',
    'site_identity_tagline_status',
    __('Hide Tagline / Desc Text', 'secretum'),
    '',
    $default['site_identity_tagline_status']
);

// Branding
$customizer->section(
    'site_identity_branding',
    'site_identity',
    __('Branding', 'secretum')
);

// Select
$customizer->select(
    'site_identity_branding',
    'site_identity_alignment',
    __('Alignment', 'secretum'),
    '',
    $default['site_identity_alignment'],
    secretum_customizer_text_alignments()
);

// Setting :: Site Title
$wp_customize->add_setting('blogname', array(
    'default'           => get_option('blogname'),
    'sanitize_callback' => 'secretum_sanitize_all',
    'capability'        => 'manage_options',
    'transport'         => 'postMessage',
    'type'              => 'option'
));

// Control :: Site Title
$wp_customize->add_control('blogname', array(
    'label'     => __('Site Title', 'secretum'),
    'section'   => 'secretum_site_identity_branding_section',
    'priority'  => 10,
));

// Refresh :: Site Title
$wp_customize->selective_refresh->add_partial('blogname', array(
    'settings'            => array('blogname'),
    'selector'            => '.navbar-brand',
    'render_callback'     => false,
    'container_inclusive' => false
));


// Setting :: Tagline
$wp_customize->add_setting('blogdescription', array(
    'default'           => get_option('blogdescription'),
    'type'              => 'option',
    'capability'        => 'manage_options',
    'sanitize_callback' => 'secretum_sanitize_html'
));

// Control :: Tagline
$wp_customize->add_control('blogdescription', array(
    'label'     => __('Tagline', 'secretum'),
    'section'   => 'secretum_site_identity_branding_section',
    'priority'  => 10,
));

// Refresh :: Tagline
$wp_customize->selective_refresh->add_partial('blogdescription', array(
    'settings'            => array('blogdescription'),
    'selector'            => '.site-description',
    'render_callback'     => false,
    'container_inclusive' => false
));


// Setting :: Upload/Select Logo
$wp_customize->add_setting('custom_logo', array(
    'theme_supports'    => array('custom-logo'),
    'transport'         => 'postMessage',
    'sanitize_callback' => 'absint',
));

// Custom Logo Args Array
$custom_logo_args = get_theme_support('custom-logo');

// Control :: Upload/Crop Image
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'custom_logo', array(
    'label'         => __('Website Logo', 'secretum'),
    'section'       => 'secretum_site_identity_branding_section',
    'height'        => $custom_logo_args[0]['height'],
    'width'         => $custom_logo_args[0]['width'],
    'flex_height'   => $custom_logo_args[0]['flex-height'],
    'flex_width'    => $custom_logo_args[0]['flex-width'],
    'priority'      => 10,
    'button_labels' => array(
        'select'       => __('Select logo', 'secretum'),
        'change'       => __('Change logo', 'secretum'),
        'remove'       => __('Remove', 'secretum'),
        'default'      => __('Default', 'secretum'),
        'placeholder'  => __('No logo selected', 'secretum'),
        'frame_title'  => __('Select logo', 'secretum'),
        'frame_button' => __('Choose logo', 'secretum')
    )
)));

// Refresh :: Display Logo
$wp_customize->selective_refresh->add_partial('custom_logo', array(
    'settings'            => array('custom_logo'),
    'selector'            => '.navbar-brand.custom-logo-link',
    'render_callback'     => get_custom_logo(),
    'container_inclusive' => true
));

// Select
$customizer->number(
    'site_identity_branding',
    'custom_logo_maxwidth',
    __('Logo Max-Width In Pixels', 'secretum'),
    __('If defined, inline CSS will set a max-width and auto height for the logo.', 'secretum'),
    array('min' => 0),
    $default['custom_logo_maxwidth']
);

// Select
$customizer->number(
    'site_identity_branding',
    'custom_logo_height',
    __('Logo Crop Height In Pixels', 'secretum'),
    __('Default: 75px - After publishing, refresh the customizer, then reselect logo to crop.', 'secretum'),
    array('min' => 0),
    $default['custom_logo_height']
);

// Setting :: Website Site Icon
$wp_customize->add_setting('site_icon', array(
    'type'              => 'option',
    'capability'        => 'manage_options',
    'transport'         => 'postMessage',
    'sanitize_callback' => 'absint'
));

// Control :: Site Icon Upload/Select
$wp_customize->add_control(new WP_Customize_Site_Icon_Control($wp_customize, 'site_icon', array(
    'label'         => __('Site Icon', 'secretum'),
    'description'   => __('Site Icons are what you see in browser tabs, bookmark bars, and within the WordPress mobile apps. Site Icons should be square and at least 512 &times; 512 pixels.', 'secretum'),
    'section'       => 'secretum_site_identity_branding_section',
    'priority'      => 60,
    'height'        => 512,
    'width'         => 512
)));

// Title Container
$customizer->section(
    'site_identity_title_container',
    'site_identity',
    __('Title Container', 'secretum')
);

// Select
$customizer->select(
    'site_identity_title_container',
    'site_identity_title_container_background_color',
    __('Background Color', 'secretum'),
    '',
    $default['site_identity_title_container_background_color'],
    secretum_customizer_background_colors()
);

// Select
$customizer->select(
    'site_identity_title_container',
    'site_identity_title_container_margin_x',
    __('Margin - Left & Right', 'secretum'),
    '',
    $default['site_identity_title_container_margin_x'],
    secretum_customizer_margin_left_right()
);

// Select
$customizer->select(
    'site_identity_title_container',
    'site_identity_title_container_margin_y',
    __('Margin - Top & Bottom', 'secretum'),
    '',
    $default['site_identity_title_container_margin_y'],
    secretum_customizer_margin_top_bottom()
);

// Select
$customizer->select(
    'site_identity_title_container',
    'site_identity_title_container_padding_x',
    __('Padding - Left & Right', 'secretum'),
    '',
    $default['site_identity_title_container_padding_x'],
    secretum_customizer_padding_left_right()
);

// Select
$customizer->select(
    'site_identity_title_container',
    'site_identity_title_container_padding_y',
    __('Padding - Top & Bottom', 'secretum'),
    '',
    $default['site_identity_title_container_padding_y'],
    secretum_customizer_padding_top_bottom()
);

// Select
$customizer->select(
    'site_identity_title_container',
    'site_identity_title_container_border_type',
    __('Border Type', 'secretum'),
    '',
    $default['site_identity_title_container_border_type'],
    secretum_customizer_border_types()
);

// Select
$customizer->select(
    'site_identity_title_container',
    'site_identity_title_container_border_color',
    __('Border Color', 'secretum'),
    '',
    $default['site_identity_title_container_border_color'],
    secretum_customizer_border_colors()
);
