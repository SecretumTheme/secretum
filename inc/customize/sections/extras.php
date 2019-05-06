<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customizer
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
	'scrolltop_icon',
	'extras',
	__( 'Scroll To Top Icon', 'secretum' ),
	''
);


// Checkbox.
$customizer->checkbox(
	'scrolltop_icon',
	'scrolltop_status',
	__( 'Scroll To Top Icon', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['scrolltop_status']
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_textual_text_color',
	__( 'Icon Color', 'secretum' ),
	'',
	$defaults['scrolltop_textual_text_color'],
	secretum_customizer_text_colors()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_textual_font_size',
	__( 'Icon Size', 'secretum' ),
	'',
	$defaults['scrolltop_textual_font_size'],
	secretum_customizer_font_sizes()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_container_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$defaults['scrolltop_container_background_color'],
	secretum_customizer_background_colors()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_container_background_hover_color',
	__( 'Background Hover Color', 'secretum' ),
	'',
	$defaults['scrolltop_container_background_hover_color'],
	secretum_customizer_background_hover_colors()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_container_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$defaults['scrolltop_container_border_type'],
	secretum_customizer_border_types()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_container_border_radius',
	__( 'Border Radius', 'secretum' ),
	'',
	$defaults['scrolltop_container_border_radius'],
	secretum_customizer_border_radius()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_container_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$defaults['scrolltop_container_border_color'],
	secretum_customizer_border_colors()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_container_margin_bottom',
	__( 'Bottom Margin', 'secretum' ),
	__( 'Spacing around the container.', 'secretum' ),
	$defaults['scrolltop_container_margin_bottom'],
	secretum_customizer_margin_bottom()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_container_margin_right',
	__( 'Right Margin', 'secretum' ),
	__( 'Spacing around the container.', 'secretum' ),
	$defaults['scrolltop_container_margin_right'],
	secretum_customizer_margin_right()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_container_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	__( 'Spacing within the container.', 'secretum' ),
	$defaults['scrolltop_container_padding_x'],
	secretum_customizer_padding_left_right()
);


// Select.
$customizer->select(
	'scrolltop_icon',
	'scrolltop_container_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	__( 'Spacing within the container.', 'secretum' ),
	$defaults['scrolltop_container_padding_y'],
	secretum_customizer_padding_top_bottom()
);


// Section.
$customizer->section(
	'enqueue',
	'extras',
	__( 'Enqueue Management', 'secretum' ),
	__( 'Select a checkbox to enable / display / make the feature active. Unchecked items are not in use.', 'secretum' )
);


// Checkbox.
$customizer->checkbox(
	'enqueue',
	'enqueue_primary_javascript_status',
	__( 'Theme JavaScript Bundle File', 'secretum' ),
	__( 'Secretums primary JavaScript bundle file, includes the Bootstrap bundle and theme support scripts.', 'secretum' ),
	$defaults['enqueue_primary_javascript_status']
);


// Checkbox.
$customizer->checkbox(
	'enqueue',
	'enqueue_bootstrap_bundle_javascript_status',
	__( 'Bootstrap JavaScript Bundle File', 'secretum' ),
	__( 'All Bootstrap related JavaScript files bundled together. Note: The "Theme JavaScript Bundle File" setting above must be disabled/unchecked.', 'secretum' ),
	$defaults['enqueue_bootstrap_bundle_javascript_status']
);


// Checkbox.
$customizer->checkbox(
	'enqueue',
	'enqueue_secretum_javascript_status',
	__( 'Secretum JavaScript File', 'secretum' ),
	__( 'Theme support scripts that interact with the Bootstrap JavaScript bundle. Adds support for: clickable top-level dropdown menu items, sticky headers & menus, the menu toggler, and the scroll to top icon. If disabled/unchecked the listed features will reduce in functionality or be removed from use. Note: The "Theme JavaScript Bundle File" setting above must be disabled/unchecked.', 'secretum' ),
	$defaults['enqueue_secretum_javascript_status']
);


// Checkbox.
$customizer->checkbox(
	'enqueue',
	'enqueue_ekko_lightbox_status',
	__( 'Ekko Lightbox', 'secretum' ),
	__( 'Ekko is a very lightweight easy to use lightbox built around the Bootstrap Modal. This script is not bundled with the theme assets as most websites will not use a lightbox. Enable to use one of the simplest to use, fastest, lightweight lightboxes around.', 'secretum' ),
	$defaults['enqueue_ekko_lightbox_status']
);


if ( true === secretum_is_woocomerce() ) {
	// Checkbox.
	$customizer->checkbox(
		'enqueue',
		'enqueue_woocommerce_status',
		__( 'Disable Secretum-WooCommerce Styles', 'secretum' ),
		'',
		$defaults['enqueue_woocommerce_status']
	);

	if ( true === secretum_is_woobookings() ) {
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


if ( true === class_exists( 'WPCF7' ) ) {
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
