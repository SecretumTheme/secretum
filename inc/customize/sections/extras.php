<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Core\Customize\Sections\Extras
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/extras.php
 * @since      1.0.0
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'extras',
	__( 'Extras', 'secretum' )
);


// Section.
$customizer->section(
	'analytics',
	'extras',
	__( 'Google Analytics', 'secretum' ),
	''
);


// Radio.
$customizer->select(
	'analytics',
	'analytics_location',
	__( 'Analytics Code Location', 'secretum' ),
	'',
	$defaults['analytics_location'],
	[
		'' 			=> __( 'Footer (best performance)', 'secretum' ),
		'header' 	=> __( 'Header (best tracking)', 'secretum' ),
	]
);


// Textarea Script.
$customizer->textarea_script(
	'analytics',
	'analytics_code',
	__( 'Analytics Tracking Code', 'secretum' ),
	__( 'Include all opening and closing script tags.', 'secretum' )
);


// Section.
$customizer->section(
	'scrolltop_icon',
	'extras',
	__( 'Scroll To Top Icon', 'secretum' ),
	''
);


// Checkbox.
$customizer->checkbox(
	'scrolltop_icon',
	'scrolltop',
	__( 'Hide Scroll To Top Icon', 'secretum' ),
	__( 'Select to disable the scroll to top icon.', 'secretum' ),
	$defaults['scrolltop']
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_text_color',
	__( 'Icon Color', 'secretum' ),
	'',
	$defaults['scrolltop_text_color'],
	secretum_customizer_text_colors()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_icon_size',
	__( 'Icon Size', 'secretum' ),
	'',
	$defaults['scrolltop_icon_size'],
	secretum_customizer_font_sizes()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$defaults['scrolltop_background_color'],
	secretum_customizer_background_colors()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_background_hover_color',
	__( 'Background Hover Color', 'secretum' ),
	'',
	$defaults['scrolltop_background_hover_color'],
	secretum_customizer_background_hover_colors()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$defaults['scrolltop_border_type'],
	secretum_customizer_border_types()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_border_radius',
	__( 'Border Radius', 'secretum' ),
	'',
	$defaults['scrolltop_border_radius'],
	secretum_customizer_border_radius()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$defaults['scrolltop_border_color'],
	secretum_customizer_border_colors()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_margin_bottom',
	__( 'Bottom Margin', 'secretum' ),
	__( 'Spacing around the container.', 'secretum' ),
	$defaults['scrolltop_margin_bottom'],
	secretum_customizer_margin_bottom()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_margin_right',
	__( 'Right Margin', 'secretum' ),
	__( 'Spacing around the container.', 'secretum' ),
	$defaults['scrolltop_margin_right'],
	secretum_customizer_margin_right()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	__( 'Spacing within the container.', 'secretum' ),
	$defaults['scrolltop_padding_x'],
	secretum_customizer_padding_left_right()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	__( 'Spacing within the container.', 'secretum' ),
	$defaults['scrolltop_padding_y'],
	secretum_customizer_padding_top_bottom()
);


// Section.
$customizer->section(
	'enqueue',
	'extras',
	__( 'Enqueue Management', 'secretum' ),
	''
);


// Checkbox.
$customizer->checkbox(
	'enqueue',
	'enqueue_primary_javascript_status',
	__( 'Disable Primary JavaScript File', 'secretum' ),
	__( 'This is the primary theme related JavaScript files for all scripts (ie: all Bootstrap, Secretum, etc. scripts)', 'secretum' ),
	$defaults['enqueue_primary_javascript_status']
);


// Checkbox.
$customizer->checkbox(
	'enqueue',
	'enqueue_bootstrap_bundle_javascript_status',
	__( 'Enable Bootstrap JavaScript File', 'secretum' ),
	__( 'The primary (all features) Bootstrap Bundle file. The primary JavaScript must be disabled to enable this feature.', 'secretum' ),
	$defaults['enqueue_bootstrap_bundle_javascript_status']
);


// Checkbox.
$customizer->checkbox(
	'enqueue',
	'enqueue_secretum_javascript_status',
	__( 'Enable Secretum JavaScript File', 'secretum' ),
	__( 'Secretum uses a very small jQuery file (less than 900 bytes), which requires either the Primary or Bootstrap JavaScripts to be enabled. This allows for dropdown menus, sticky headers & menus, menu togglers, and the scroll to top icon to function correctly. If disabled these features will either disappear or reduce in functionality.', 'secretum' ),
	$defaults['enqueue_secretum_javascript_status']
);


// Checkbox.
$customizer->checkbox(
	'enqueue',
	'enqueue_ekko_lightbox_status',
	__( 'Enable Ekko Lightbox', 'secretum' ),
	__( 'Ekko Lightbox (built around Bootstrap Modal plugin) is not bundled with the theme assets as most websites will not use a lightbox. Enable to use one of the simplest to use, fastest, lightweight lightboxes around.', 'secretum' ),
	$defaults['enqueue_ekko_lightbox_status']
);


if ( class_exists( 'woocommerce' ) === true ) {
	// Checkbox.
	$customizer->checkbox(
		'enqueue',
		'enqueue_woocommerce_status',
		__( 'Disable Secretum-WooCommerce Styles', 'secretum' ),
		'',
		$defaults['enqueue_woocommerce_status']
	);

	if ( class_exists( 'WC_Bookings' ) === true ) {
		// Checkbox.
		$customizer->checkbox(
			'enqueue',
			'enqueue_woocommerce_bookings_status',
			__( 'Disable Secretum-WooCommerce Bookings Styles', 'secretum' ),
			'',
			$defaults['enqueue_woocommerce_bookings_status']
		);
	}
}


if ( class_exists( 'WPCF7' ) === true ) {
	// Input Text.
	$customizer->input_text(
		'enqueue',
		'enqueue_contact_pageids',
		__( 'Contact Form Page IDs', 'secretum' ),
		__( 'Make adapted contact form plugins load scripts and styles on set page ids, rather than the entire website. Enter a comma separated list of page IDs. Example: 90,1001', 'secretum' ),
		$defaults['enqueue_contact_pageids']
	);
}


// Section.
$customizer->section(
	'content_width',
	'extras',
	__( 'Content Width', 'secretum' ),
	''
);


// Number.
$customizer->number(
	'content_width',
	'content_width',
	__( 'Default Content Width In Pixels', 'secretum' ),
	__( 'Sets width limits on embeds and other plugable content.', 'secretum' ),
	array(),
	$defaults['content_width']
);


// Section.
$customizer->section(
	'reset',
	'extras',
	__( 'Reset Settings', 'secretum' ),
	__( 'THIS CAN NOT BE UNDONE! Deletes all theme unique customizer settings. Enter the word RESET below, publish your changes, then manually refresh the browser window.', 'secretum' )
);


// Reset Section.
$customizer->reset();
