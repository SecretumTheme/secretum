<?php
/**
 * Panels, Sections, & Settings
 *
 * @package Secretum
 */

namespace Secretum;

// @about Panel
$customizer->panel(
	'globals',
	__( 'Globals', 'secretum' )
);

// @about Section
$customizer->section(
	'globals',
	'globals',
	__( 'Website Colors', 'secretum' ),
	__( 'Global website background, text and link colors.', 'secretum' )
);

// @about Select
$customizer->select(
	'globals',
	'globals_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['globals_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'globals',
	'globals_text_color',
	__( 'Text Color', 'secretum' ),
	'',
	$default['globals_text_color'],
	secretum_customizer_text_colors()
);

// @about Select
$customizer->select(
	'globals',
	'globals_link_color',
	__( 'Link Color', 'secretum' ),
	'',
	$default['globals_link_color'],
	secretum_customizer_link_colors()
);

// @about Select
$customizer->select(
	'globals',
	'globals_link_hover_color',
	__( 'Link Hover Color', 'secretum' ),
	'',
	$default['globals_link_hover_color'],
	secretum_customizer_link_hover_colors()
);

// @about Section
$customizer->section(
	'enqueue',
	'globals',
	__( 'Enqueue Management', 'secretum' ),
	__( 'Enqueue Management', 'secretum' )
);

// @about Select
$customizer->select(
	'enqueue',
	'enqueue_theme_colors',
	__( 'Color Scheme', 'secretum' ),
	__( 'Select a theme color scheme below (a stylesheet) to use as your primary style, changing the base colors of the theme.', 'secretum' ),
	$default['enqueue_theme_colors'],
	secretum_theme_colors()
);

// @about Checkbox
$customizer->checkbox(
	'enqueue',
	'enqueue_primary_javascript_status',
	__( 'Disable Primary JavaScript File', 'secretum' ),
	__( 'This is the primary JavaScript file for all JavaScript assets (ie: all Bootstrap, Secretum, etc. scripts)', 'secretum' ),
	$default['enqueue_primary_javascript_status']
);

// @about Checkbox
$customizer->checkbox(
	'enqueue',
	'enqueue_bootstrap_bundle_javascript_status',
	__( 'Enable Bootstrap JavaScript File', 'secretum' ),
	__( 'The primary (all features) Bootstrap Bundle file. The primary JavaScript must be disabled to enable this feature.', 'secretum' ),
	$default['enqueue_bootstrap_bundle_javascript_status']
);

// @about Checkbox
$customizer->checkbox(
	'enqueue',
	'enqueue_secretum_javascript_status',
	__( 'Enable Secretum JavaScript File', 'secretum' ),
	__( 'Secretum uses a very small jQuery file (less than 900 bytes). If the themes primary JavaScript is "disabled" then this script should be enabled, unless the features (dropdowns, sticky menus, menu togglers, scroll to top) are not needed, have been adapted or replaced. The primary JavaScript must be disabled to enable this feature.', 'secretum' ),
	$default['enqueue_secretum_javascript_status']
);

// @about Checkbox
$customizer->checkbox(
	'enqueue',
	'enqueue_ekko_lightbox_status',
	__( 'Enable Ekko Lightbox', 'secretum' ),
	__( 'Ekko Lightbox (built around Bootstrap Modal plugin) is not bundled with the theme assets as most websites will not use a lightbox.', 'secretum' ),
	$default['enqueue_ekko_lightbox_status']
);

if ( class_exists( 'woocommerce' ) ) {
	// @about Checkbox
	$customizer->checkbox(
		'enqueue',
		'enqueue_woocommerce_status',
		__( 'Disable WooCommerce Styles', 'secretum' ),
		'',
		$default['enqueue_woocommerce_status']
	);

	if ( class_exists( 'WC_Bookings' ) ) {
		// @about Checkbox
		$customizer->checkbox(
			'enqueue',
			'enqueue_woocommerce_bookings_status',
			__( 'Disable WooCommerce Bookings Styles', 'secretum' ),
			'',
			$default['enqueue_woocommerce_bookings_status']
		);
	}
}

if ( class_exists( 'WPCF7' ) ) {
	// @about Input Text
	$customizer->input_text(
		'enqueue',
		'enqueue_contact_pageids',
		__( 'Contact Form Page IDs', 'secretum' ),
		__( 'Make adapted contact form plugins load scripts and styles on set page ids, rather than the entire website. Enter a comma separated list of page IDs. Example: 90,1001', 'secretum' ),
		$default['enqueue_contact_pageids']
	);
}

// @about Section
$customizer->section(
	'content_width',
	'globals',
	__( 'Content Width', 'secretum' ),
	''
);

// @about Number
$customizer->number(
	'content_width',
	'content_width',
	__( 'Default Content Width In Pixels', 'secretum' ),
	__( 'Sets width limits on embeds and other plugable content.', 'secretum' ),
	array(),
	$default['content_width']
);

// @about Section
$customizer->section(
	'reset',
	'globals',
	__( 'Reset Settings', 'secretum' ),
	__( 'THIS CAN NOT BE UNDONE! Deletes all theme unique customizer settings. Enter the word RESET below, publish your changes, then manually refresh the browser window.', 'secretum' )
);

$customizer->reset();
