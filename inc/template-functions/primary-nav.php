<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package Secretum
 */

namespace Secretum;


/**
 * Default Menu Fallback
 */
function secretum_primary_nav_fallback() {
	$text = esc_html( apply_filters( 'secretum_create_menu_text', __( 'Create Menu', 'secretum' ) ) );
	$url = esc_url( admin_url( 'nav-menus.php' ) );

	echo wp_kses(
		"<ul id=\"main-menu\" class=\"navbar-nav ml-auto py-3\"><li class=\"menu-item\"><a href=\"{$url}\">{$text}</a></li></ul>",
		[
			'ul' => [
				'id' 	=> true,
				'class' => true,
			],
			'li' => [
				'class' => true,
			],
			'a' => [
				'href' => true,
			],
		]
	);
}


/**
 * Wrapper Classes
 */
function secretum_primary_nav_wrapper() {
	// @about Classes
	$background = secretum_mod( 'primary_nav_wrapper_background_color', 'attr', true );
	$border = secretum_mod( 'primary_nav_wrapper_border_type', 'attr', true ) . secretum_mod( 'primary_nav_wrapper_border_color', 'attr', true );
	$margin = secretum_mod( 'primary_nav_wrapper_margin_bottom', 'attr', true );
	$padding = secretum_mod( 'primary_nav_wrapper_padding_y', 'attr', true );

	echo esc_html( apply_filters( 'secretum_primary_nav_wrapper', $background . $border . $margin . $padding, 10, 1 ) );
}


/**
 * Container Classes
 */
function secretum_primary_nav_container() {
	// @about Classes
	$container = secretum_mod( 'primary_nav_container_type', 'attr', false );
	$background = secretum_mod( 'primary_nav_container_background_color', 'attr', true );
	$border = secretum_mod( 'primary_nav_container_border_type', 'attr', true ) . secretum_mod( 'primary_nav_container_border_color', 'attr', true );
	$margin = secretum_mod( 'primary_nav_container_margin_x', 'attr', true ) . secretum_mod( 'primary_nav_container_margin_y', 'attr', true );
	$padding = secretum_mod( 'primary_nav_container_padding_x', 'attr', true ) . secretum_mod( 'primary_nav_container_padding_y', 'attr', true );
	$textuals = secretum_mod( 'primary_nav_textual_text_transform', 'attr', true ) . secretum_mod( 'primary_nav_textual_font_family', 'attr', true ) . secretum_mod( 'primary_nav_textual_font_size', 'attr', true ) . secretum_mod( 'primary_nav_textual_font_style', 'attr', true );
	$text_color = secretum_mod( 'primary_nav_textual_text_color', 'attr', true );
	$link_colors = secretum_mod( 'primary_nav_textual_link_color', 'attr', true ) . secretum_mod( 'primary_nav_textual_link_hover_color', 'attr', true );

	echo esc_html( apply_filters( 'secretum_primary_nav_container', $container . $background . $border . $margin . $padding . $textuals . $text_color . $link_colors, 10, 1 ) );
}


/**
 * Navbar Base Color Theme: navbar-light navbar-dark
 */
function secretum_primary_nav_color_scheme() {
	echo esc_html( apply_filters( 'secretum_primary_nav_color_scheme', secretum_mod( 'primary_nav_color_theme', 'attr', true ), 10, 1 ) );
}


/**
 * Alignment
 *
 * @return string Pre-sanitized class name
 */
function secretum_primary_nav_alignment() {
	return apply_filters( 'secretum_primary_nav_alignment', secretum_mod( 'primary_nav_alignment', 'attr', true ), 10, 1 );
}


/**
 * Primary Menu Item Classes
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_primary_nav_divider_classes() {
	// @about Classes
	$background = secretum_mod( 'primary_nav_items_background_color', 'attr', true ) . secretum_mod( 'primary_nav_items_background_hover_color', 'attr', true );
	$border = secretum_mod( 'primary_nav_items_border_type', 'attr', true ) . secretum_mod( 'primary_nav_items_border_color', 'attr', true );
	$margin = secretum_mod( 'primary_nav_items_margin_y', 'attr', true ) . secretum_mod( 'primary_nav_items_margin_x', 'attr', true );
	$padding = secretum_mod( 'primary_nav_items_padding_y', 'attr', true ) . secretum_mod( 'primary_nav_items_padding_x', 'attr', true );

	return apply_filters( 'secretum_primary_nav_divider_classes', $background . $border . $margin . $padding, 10, 1 );
}


/**
 * Primary Menu Dropdown Classes
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_primary_nav_dropdown_classes() {
	// @about Classes
	$background = secretum_mod( 'primary_nav_dropdown_background_color', 'attr', true );
	$border = secretum_mod( 'primary_nav_dropdown_border_type', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_border_color', 'attr', true );
	$margin = secretum_mod( 'primary_nav_dropdown_margin_y', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_margin_x', 'attr', true );
	$padding = secretum_mod( 'primary_nav_dropdown_padding_y', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_padding_x', 'attr', true );

	return apply_filters( 'secretum_primary_nav_dropdown_classes', $background . $border . $margin . $padding, 10, 1 );
}


/**
 * Primary Menu Dropdown Classes
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_primary_nav_dropdown_textual_classes() {
	// @about Classes
	$align = secretum_mod( 'primary_nav_dropdown_text_alignment', 'attr', true );
	$font = secretum_mod( 'primary_nav_dropdown_textual_font_family', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_textual_font_size', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_textual_font_style', 'attr', true );
	$text = secretum_mod( 'primary_nav_dropdown_textual_text_transform', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_textual_text_color', 'attr', true );
	$links = secretum_mod( 'primary_nav_dropdown_textual_link_color', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_textual_link_hover_color', 'attr', true );

	return apply_filters( 'secretum_primary_nav_dropdown_textual_classes', $align . $font . $text . $links, 10, 1 );
}


/**
 * Toggler Icon Wrapper
 */
function secretum_primary_nav_toggler_wrapper() {
	// @about Classes
	$background = secretum_mod( 'primary_nav_toggler_background_color', 'attr', true );
	$border = secretum_mod( 'primary_nav_toggler_border_radius', 'attr', true ) . secretum_mod( 'primary_nav_toggler_border_color', 'attr', true );
	$margin = secretum_mod( 'primary_nav_toggler_margin_y', 'attr', true ) . secretum_mod( 'primary_nav_toggler_margin_x', 'attr', true );
	$alignment = secretum_mod( 'primary_nav_toggler_alignment', 'attr', true );

	echo esc_html( apply_filters( 'secretum_primary_nav_toggler_wrapper', $background . $border . $margin . $alignment, 10, 1 ) );
}


/**
 * Toggler Icon
 */
function secretum_primary_nav_toggler_icon() {
	// @about Classes
	$background = secretum_mod( 'primary_nav_toggler_background_color', 'attr', true );
	$size = secretum_mod( 'primary_nav_toggler_font_size', 'attr', true );

	echo esc_html( apply_filters( 'secretum_primary_nav_toggler_icon', $background . $size, 10, 1 ) );
}


/**
 * Primary Menu  Woo Cart Link Icon Classes
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_primary_nav_cart_link_classes() {
	// @about Classes
	$border = secretum_mod( 'primary_nav_items_border_type', 'attr', true ) . secretum_mod( 'primary_nav_items_border_color', 'attr', true );
	$padding = secretum_mod( 'primary_nav_cart_link_padding_t', 'attr', true ) . secretum_mod( 'primary_nav_items_padding_x', 'attr', true );

	return apply_filters( 'secretum_primary_nav_cart_link_classes', $border . $padding, 10, 1 );
}


/**
 * Primary Menu Woo Cart Icon Classes
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_primary_nav_cart_icon_classes() {
	// @about Classes
	$color = secretum_mod( 'primary_nav_cart_icon_color', 'attr', true );
	$size = secretum_mod( 'primary_nav_cart_icon_size', 'attr', true );

	return apply_filters( 'secretum_primary_nav_cart_icon_classes', $color . $size, 10, 1 );
}


/**
 * Primary Menu Items In Woo Cart Count Classes
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_primary_nav_cart_count_classes() {
	// @about Classes
	$color = secretum_mod( 'primary_nav_cart_count_color', 'attr', true );
	$size = secretum_mod( 'primary_nav_cart_count_size', 'attr', true );

	return apply_filters( 'secretum_primary_nav_cart_count_classes', $color . $size, 10, 1 );
}
