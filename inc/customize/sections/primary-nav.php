<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Core\Customize\Sections\Primary-Nav
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/sections/primary-nav.php
 * @since      1.0.0
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'primary_nav',
	__( 'Primary Nav', 'secretum' )
);


// Section.
$customizer->section(
	'primary_nav_display',
	'primary_nav',
	__( 'Display Settings', 'secretum' ),
	''
);

// Select.
$customizer->select(
	'primary_nav_display',
	'primary_nav_alignment',
	__( 'Alignment', 'secretum' ),
	'',
	$defaults['primary_nav_alignment'],
	secretum_customizer_margin_alignments()
);


// Checkbox.
$customizer->checkbox(
	'primary_nav_display',
	'primary_nav_status',
	__( 'Select To Hide Navigation Menu', 'secretum' ),
	'',
	$defaults['primary_nav_status']
);

// Checkbox.
$customizer->checkbox(
	'primary_nav_display',
	'primary_nav_search_status',
	__( 'Show Search Form Within Navbar', 'secretum' ),
	'',
	$defaults['primary_nav_search_status']
);


// Wrapper.
$wrapper->settings(
	[
		'section' => 'primary_nav',
	]
);


// Wrapper Borders.
$borders->settings(
	[
		'section' => 'primary_nav_wrapper',
	]
);


// Container.
$container->settings(
	[
		'section' => 'primary_nav',
	]
);


// Container Borders.
$borders->settings(
	[
		'section' => 'primary_nav_container',
	]
);


// Textuals.
$textuals->settings(
	[
		'section' => 'primary_nav',
	]
);


// Nav Items.
$navitems->settings(
	[
		'section' => 'primary_nav',
	]
);

// Nav Items Borders.
$borders->settings(
	[
		'section' => 'primary_nav_items',
	]
);


// Nav Dropdown.
$dropdown->settings(
	[
		'section' => 'primary_nav',
	]
);

// Nav Dropdown Borders.
$borders->settings(
	[
		'section' => 'primary_nav_dropdown',
	]
);

// Nav Dropdown Textuals.
$textuals->settings(
	[
		'title'     => __( 'Dropdown Textuals', 'secretum' ),
		'panel'     => 'primary_nav',
		'section'   => 'primary_nav_dropdown',
		'alignment' => true,
	]
);


// Toggler Icon.
$customizer->section(
	'primary_nav_toggler',
	'primary_nav',
	__( 'Toggler Icon', 'secretum' ),
	__( 'Customize the properties of the primary menu toggler icon.', 'secretum' )
);


// Select.
$customizer->select(
	'primary_nav_toggler',
	'primary_nav_toggler_alignment',
	__( 'Alignment', 'secretum' ),
	'',
	$defaults['primary_nav_toggler_alignment'],
	secretum_customizer_margin_alignments()
);


// Select.
$customizer->select(
	'primary_nav_toggler',
	'primary_nav_toggler_font_size',
	__( 'Font Size', 'secretum' ),
	'',
	$defaults['primary_nav_toggler_font_size'],
	secretum_customizer_font_sizes()
);


// Select.
$customizer->select(
	'primary_nav_toggler',
	'primary_nav_toggler_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$defaults['primary_nav_toggler_background_color'],
	secretum_customizer_background_colors()
);


// Select.
$customizer->select(
	'primary_nav_toggler',
	'primary_nav_toggler_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$defaults['primary_nav_toggler_margin_x'],
	secretum_customizer_margin_left_right()
);


// Select.
$customizer->select(
	'primary_nav_toggler',
	'primary_nav_toggler_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$defaults['primary_nav_toggler_margin_y'],
	secretum_customizer_margin_top_bottom()
);


// Toggler Borders.
$borders->settings(
	[
		'section' => 'primary_nav_toggler',
	]
);


if ( true === secretum_is_woocomerce() ) {
	// Menu Items.
	$customizer->section(
		'primary_nav_cart_icon',
		'primary_nav',
		__( 'WooCommerce Cart Icon', 'secretum' ),
		''
	);


	// Select.
	$customizer->select(
		'primary_nav_cart_icon',
		'primary_nav_cart_link_padding_t',
		__( 'Padding - Top (above icon)', 'secretum' ),
		'',
		$defaults['primary_nav_cart_link_padding_t'],
		secretum_customizer_padding_top()
	);


	// Select.
	$customizer->select(
		'primary_nav_cart_icon',
		'primary_nav_cart_icon_color',
		__( 'Cart Icon Color', 'secretum' ),
		'',
		$defaults['primary_nav_cart_icon_color'],
		secretum_customizer_text_colors()
	);


	// Select.
	$customizer->select(
		'primary_nav_cart_icon',
		'primary_nav_cart_icon_size',
		__( 'Cart Icon Size', 'secretum' ),
		'',
		$defaults['primary_nav_cart_icon_size'],
		secretum_customizer_font_sizes()
	);


	// Select.
	$customizer->select(
		'primary_nav_cart_icon',
		'primary_nav_cart_count_color',
		__( 'Cart Count Color', 'secretum' ),
		'',
		$defaults['primary_nav_cart_count_color'],
		secretum_customizer_text_colors()
	);


	// Select.
	$customizer->select(
		'primary_nav_cart_icon',
		'primary_nav_cart_count_size',
		__( 'Cart Count Size', 'secretum' ),
		'',
		$defaults['primary_nav_cart_count_size'],
		secretum_customizer_font_sizes()
	);
}
