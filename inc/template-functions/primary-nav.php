<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Secretum\TemplateFunctions
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/primary-nav.php
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

}//end secretum_primary_nav_fallback()


/**
 * Wrapper Classes
 */
function secretum_primary_nav_wrapper() {
	$wrapper = \Secretum\Wrapper::classes( 'primary_nav' );
	$borders = \Secretum\Borders::classes( 'primary_nav_wrapper' );

	echo esc_html( $wrapper . $borders );

}//end secretum_primary_nav_wrapper()


/**
 * Container Classes
 */
function secretum_primary_nav_container() {
	//$border = secretum_mod( 'primary_nav_container_border_type', 'attr', true ) . secretum_mod( 'primary_nav_container_border_color', 'attr', true );
	$container 	= \Secretum\Container::classes( 'primary_nav' );
	$borders 	= \Secretum\Borders::classes( 'primary_nav_container' );
	$textuals 	= \Secretum\Textuals::classes( 'primary_nav' );

	echo esc_html( $container . $borders . $textuals );

}//end secretum_primary_nav_container()


/**
 * Navbar Base Color Theme: navbar-light navbar-dark
 */
function secretum_primary_nav_color_scheme() {
	echo esc_html( apply_filters( 'secretum_primary_nav_color_scheme', secretum_mod( 'primary_nav_color_theme', 'attr', true ), 10, 1 ) );

}//end secretum_primary_nav_color_scheme()


/**
 * Alignment
 *
 * @return string Classes.
 */
function secretum_primary_nav_alignment() {
	return apply_filters( 'secretum_primary_nav_alignment', secretum_mod( 'primary_nav_alignment', 'attr', true ), 10, 1 );

}//end secretum_primary_nav_alignment()


/**
 * Primary Menu Item Classes
 *
 * @return string Classes.
 */
function secretum_primary_nav_divider_classes() {
	$background = secretum_mod( 'primary_nav_items_background_color', 'attr', true ) . secretum_mod( 'primary_nav_items_background_hover_color', 'attr', true );
	$border = secretum_mod( 'primary_nav_items_border_type', 'attr', true ) . secretum_mod( 'primary_nav_items_border_color', 'attr', true );
	$margin = secretum_mod( 'primary_nav_items_margin_y', 'attr', true ) . secretum_mod( 'primary_nav_items_margin_x', 'attr', true );
	$padding = secretum_mod( 'primary_nav_items_padding_y', 'attr', true ) . secretum_mod( 'primary_nav_items_padding_x', 'attr', true );

	return apply_filters( 'secretum_primary_nav_divider_classes', $background . $border . $margin . $padding, 10, 1 );

}//end secretum_primary_nav_divider_classes()


/**
 * Primary Menu Dropdown Classes
 *
 * @return string Classes.
 */
function secretum_primary_nav_dropdown_classes() {
	$background = secretum_mod( 'primary_nav_dropdown_background_color', 'attr', true );
	$border = secretum_mod( 'primary_nav_dropdown_border_type', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_border_color', 'attr', true );
	$margin = secretum_mod( 'primary_nav_dropdown_margin_y', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_margin_x', 'attr', true );
	$padding = secretum_mod( 'primary_nav_dropdown_padding_y', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_padding_x', 'attr', true );

	return apply_filters( 'secretum_primary_nav_dropdown_classes', $background . $border . $margin . $padding, 10, 1 );

}//end secretum_primary_nav_dropdown_classes()


/**
 * Primary Menu Dropdown Classes
 *
 * @return string Classes.
 */
function secretum_primary_nav_dropdown_textual_classes() {
	$align = secretum_mod( 'primary_nav_dropdown_text_alignment', 'attr', true );
	$font = secretum_mod( 'primary_nav_dropdown_textual_font_family', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_textual_font_size', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_textual_font_style', 'attr', true );
	$text = secretum_mod( 'primary_nav_dropdown_textual_text_transform', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_textual_text_color', 'attr', true );
	$links = secretum_mod( 'primary_nav_dropdown_textual_link_color', 'attr', true ) . secretum_mod( 'primary_nav_dropdown_textual_link_hover_color', 'attr', true );

	return apply_filters( 'secretum_primary_nav_dropdown_textual_classes', $align . $font . $text . $links, 10, 1 );

}//end secretum_primary_nav_dropdown_textual_classes()


/**
 * Toggler Icon Wrapper
 */
function secretum_primary_nav_toggler_wrapper() {
	$borders 	= \Secretum\Borders::classes( 'primary_nav_toggler' );
	$background = secretum_mod( 'primary_nav_toggler_background_color', 'attr', true );
	$margin 	= secretum_mod( 'primary_nav_toggler_margin_y', 'attr', true ) . secretum_mod( 'primary_nav_toggler_margin_x', 'attr', true );
	$alignment 	= secretum_mod( 'primary_nav_toggler_alignment', 'attr', true );

	echo esc_html( apply_filters( 'secretum_primary_nav_toggler_wrapper', $background . $borders . $margin . $alignment, 10, 1 ) );

}//end secretum_primary_nav_toggler_wrapper()


/**
 * Toggler Icon
 */
function secretum_primary_nav_toggler_icon() {
	$background = secretum_mod( 'primary_nav_toggler_background_color', 'attr', true );
	$size = secretum_mod( 'primary_nav_toggler_font_size', 'attr', true );

	echo esc_html( apply_filters( 'secretum_primary_nav_toggler_icon', $background . $size, 10, 1 ) );

}//end secretum_primary_nav_toggler_icon()


/**
 * Primary Menu  Woo Cart Link Icon Classes
 *
 * @return string Classes.
 */
function secretum_primary_nav_cart_link_classes() {
	$borders = \Secretum\Borders::classes( 'primary_nav_items' );
	$padding = secretum_mod( 'primary_nav_cart_link_padding_t', 'attr', true ) . secretum_mod( 'primary_nav_items_padding_x', 'attr', true );

	return apply_filters( 'secretum_primary_nav_cart_link_classes', $borders . $padding, 10, 1 );

}//end secretum_primary_nav_cart_link_classes()


/**
 * Primary Menu Woo Cart Icon Classes
 *
 * @return string Classes.
 */
function secretum_primary_nav_cart_icon_classes() {
	$color = secretum_mod( 'primary_nav_cart_icon_color', 'attr', true );
	$size = secretum_mod( 'primary_nav_cart_icon_size', 'attr', true );

	return apply_filters( 'secretum_primary_nav_cart_icon_classes', $color . $size, 10, 1 );

}//end secretum_primary_nav_cart_icon_classes()


/**
 * Primary Menu Items In Woo Cart Count Classes
 *
 * @return string Classes.
 */
function secretum_primary_nav_cart_count_classes() {
	$color = secretum_mod( 'primary_nav_cart_count_color', 'attr', true );
	$size = secretum_mod( 'primary_nav_cart_count_size', 'attr', true );

	return apply_filters( 'secretum_primary_nav_cart_count_classes', $color . $size, 10, 1 );

}//end secretum_primary_nav_cart_count_classes()
