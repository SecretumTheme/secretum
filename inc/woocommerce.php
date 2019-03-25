<?php
/**
 * Secretum Theme: WooCommerce Settings
 *
 * @package    Secretum
 * @subpackage Core\WooCommerce
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/woocommerce.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * WooCommerce
 *
 * @since 1.0.0
 */
function secretum_after_setup_theme() {
	// Theme Support.
	add_theme_support(
		'woocommerce',
		[
			'thumbnail_image_width' => 250,
			'single_image_width'    => 700,
			'product_grid'          => [
				'default_rows'    => 3,
				'min_rows'        => 2,
				'max_rows'        => 8,
				'default_columns' => 3,
				'min_columns'     => 2,
				'max_columns'     => 5,
			],
		]
	);

	// Product Images.
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

}//end secretum_after_setup_theme()

add_action( 'after_setup_theme', 'Secretum\secretum_after_setup_theme' );


/**
 * Bootstrap WooCommerce Product Search Form
 *
 * @since 1.0.0
 */
function secretum_get_product_search_form() {
	return '<form method="get" id="searchform" action="' . SECRETUM_BASE_URL . '/" role="search">
	<div class="input-group">
		<label class="screen-reader-text" for="s">' . esc_html__( 'Search for', 'secretum' ) . '</label>
		<input class="field form-control" type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . esc_html__( 'Search products...', 'secretum' ) . '" />
		<span class="input-group-append">
			<input class="submit btn btn-primary search" type="submit" id="searchsubmit" value="' . esc_html__( 'Search Us! ', 'secretum' ) . '" />
		</span>
		<input type="hidden" name="post_type" value="product" />
	</div>
	</form>';

}//end secretum_get_product_search_form()

add_filter( 'get_product_search_form', 'Secretum\secretum_get_product_search_form' );


/**
 * Modify Password Strengh & Default Message
 *
 * @since 1.0.0
 *
 * @param array  $params Passed in Params.
 * @param string $handle Data handle.
 */
function secretum_woocommerce_get_script_data( $params, $handle ) {
	switch ( $handle ) {
		case 'wc-password-strength-meter':
			$params = [
				'min_password_strength' => apply_filters( 'woocommerce_min_password_strength', 1 ),
				'i18n_password_error'   => apply_filters( 'secretum_password_error_text', esc_html__( 'Create a Secure Password You Will Remember.', 'secretum' ) ),
				'i18n_password_hint'    => apply_filters( 'secretum_password_hint_text', esc_html__( 'Passwords should be at least five characters long or longer. We recommend using a mixture of upper and lower case letters, numbers and symbols like ! " ? $ % ^ & ).', 'secretum' ) ),
			];
	}

	return $params;

}//end secretum_woocommerce_get_script_data()

add_filter( 'woocommerce_get_script_data', 'Secretum\secretum_woocommerce_get_script_data', 9999, 2 );


/**
 * Modify Password Strength Messages
 *
 * @since 1.0.0
 */
function secretum_woo_enqueue_scripts() {
	wp_localize_script(
		'wc-password-strength-meter',
		'pwsL10n',
		[
			'short'    => apply_filters( 'secretum_password_strength_short_text', esc_html__( 'Keep Going! ', 'secretum' ) ),
			'bad'      => apply_filters( 'secretum_password_strength_bad_text', esc_html__( 'Nice! An Easy To Remember Password! ', 'secretum' ) ),
			'good'     => apply_filters( 'secretum_password_strength_good_text', esc_html__( 'Wow! The World Needs More Passwords Like That! ', 'secretum' ) ),
			'strong'   => apply_filters( 'secretum_password_strength_strong_text', esc_html__( 'That Some Mighty Fine Security You Have! ', 'secretum' ) ),
			'mismatch' => apply_filters( 'secretum_password_mismatch_text', esc_html__( 'Passwords Do Not Match! ', 'secretum' ) ),
		]
	);

}//end secretum_woo_enqueue_scripts()

add_action( 'wp_enqueue_scripts', 'Secretum\secretum_woo_enqueue_scripts', 9999 );


/**
 * WooCommerce Filter Hook - Add Bootstrap Classes To Place Order Button
 *
 * @since 1.0.0
 *
 * @param array $args Args array.
 */
function secretum_woocommerce_order_button_html( $args ) {
	return str_replace( 'button alt', 'btn btn-primary w-100', $args );

}//end secretum_woocommerce_order_button_html()

add_filter( 'woocommerce_order_button_html', 'Secretum\secretum_woocommerce_order_button_html', 10, 1 );


/**
 * WooCommerce Filter Hook - Add Cart Icon To Primary Menu
 *
 * @since 1.0.0
 *
 * @param array $items Items array.
 * @param array $args Args array.
 * @param bool  $ajax Flag.
 */
function secretum_wp_nav_menu_items( $items, $args, $ajax = false ) {
	$icon = '';

	$theme_locations = [
		'secretum-navbar-primary-above',
		'secretum-navbar-primary-below',
		'secretum-navbar-primary-left',
		'secretum-navbar-primary-right',
	];

	// If Allowed To Display.
	if ( ( isset( $ajax ) && $ajax ) || ( property_exists( $args, 'theme_location' ) && in_array( $args->theme_location, $theme_locations, true ) ) ) {
		// Get Classes.
		$textual_icon = secretum_nav_cart_textual(
			'primary_nav',
			'return',
			[
				'type' => 'icon',
			]
		);

		// Get Classes.
		$textual_count = secretum_nav_cart_textual(
			'primary_nav',
			'return',
			[
				'type' => 'count',
			]
		);

		$active = ( is_cart() ) ? ' current-menu-item' : '';
		$icon  .= '<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="woocommerce-cart-icon" class="menu-item' . $active . '">';
		$icon  .= '<a href="' . esc_url( wc_get_cart_url() ) . '" class="nav-link' . secretum_nav_cart_link( 'primary_nav' ) . '">';
		$icon  .= '<span class="fi-shopping-cart' . $textual_icon . '"></span><span class="' . $textual_count . '">' . wp_kses_data( WC()->cart->get_cart_contents_count() ) . '</span>';
		$icon  .= '</a>';
		$icon  .= '</li>';
	}

	return ( WC()->cart->get_cart_contents_count() > 0 ) ? $items . $icon : $items;

}//end secretum_wp_nav_menu_items()

add_filter( 'wp_nav_menu_items', 'Secretum\secretum_wp_nav_menu_items', 10, 3 );


/**
 * WooCommerce Filter Hook - Add Bootstrap Classes To Checkout Form
 *
 * @param array  $args  Args array.
 * @param string $key   Key string.
 * @param string $value Value string.
 *
 * @since 1.0.0
 */
function secretum_woocommerce_form_field_args( $args, $key, $value ) {
	// Remove Woo Classes.
	foreach ( $args['class'] as $key => $class ) {
		if ( 'form-row-wide' === $class || 'form-row-first' === $class || 'form-row-last' === $class ) {
			unset( $args['class'][ $key ] );
		}
	}

	// Add Bootstrap 4 Classes.
	$args['class'][]     = 'form-group';
	$args['label_class'] = [ 'col-form-label-lg mt-1' ];
	$args['input_class'] = [ 'form-control', 'form-control-lg' ];

	return $args;

}//end secretum_woocommerce_form_field_args()

add_filter( 'woocommerce_form_field_args', 'Secretum\secretum_woocommerce_form_field_args', 10, 3 );


/**
 * WooCommerce Custom Variations Dropdown
 *
 * @since 1.0.0
 *
 * @source wp-content/plugins/woocommerce/includes/wc-template-functions.php
 *
 * @param array $args Args.
 */
function secretum_wc_dropdown_variation_attribute_options( $args = [] ) {
	$args = wp_parse_args(
		apply_filters( 'woocommerce_dropdown_variation_attribute_options_args', $args ),
		[
			'options'          => false,
			'attribute'        => false,
			'product'          => false,
			'selected'         => false,
			'name'             => '',
			'id'               => '',
			'class'            => '',
			'show_option_none' => esc_html__( 'Choose an option', 'secretum' ),
		]
	);

	$options               = $args['options'];
	$product               = $args['product'];
	$attribute             = $args['attribute'];
	$name                  = $args['name'] ? $args['name'] : 'attribute_' . sanitize_title( $attribute );
	$id                    = $args['id'] ? $args['id'] : sanitize_title( $attribute );
	$class                 = $args['class'];
	$show_option_none      = $args['show_option_none'] ? true : false;
	$show_option_none_text = $args['show_option_none'] ? $args['show_option_none'] : esc_html__( 'Choose an option', 'secretum' );

	if ( true === empty( $options ) && true !== empty( $product ) && true !== empty( $attribute ) ) {
		$attributes = $product->get_variation_attributes();
		$options    = $attributes[ $attribute ];
	}

	$html  = '<div class="form-group">';
	$html .= '<select id="' . esc_attr( $id ) . '" class="' . esc_attr( $class ) . ' form-control" name="' . esc_attr( $name ) . '" data-attribute_name="attribute_' . esc_attr( sanitize_title( $attribute ) ) . '" data-show_option_none="' . ( $show_option_none ? 'yes' : 'no' ) . '">';

	$html .= '<option value="">' . esc_html( $show_option_none_text ) . '</option>';

	if ( true !== empty( $options ) ) {
		if ( $product && taxonomy_exists( $attribute ) ) {
			$terms = wc_get_product_terms(
				$product->get_id(),
				$attribute,
				[
					'fields' => 'all',
				]
			);

			foreach ( $terms as $term ) {
				if ( in_array( $term->slug, $options, true ) ) {
					$html .= '<option value="' . esc_attr( $term->slug ) . '" ' . selected( sanitize_title( $args['selected'] ), $term->slug, false ) . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $term->name ) ) . '</option>';
				}
			}
		} else {
			foreach ( $options as $option ) {
				$selected = sanitize_title( $args['selected'] ) === $args['selected'] ? selected( $args['selected'], sanitize_title( $option ), false ) : selected( $args['selected'], $option, false );

				$html .= '<option value="' . esc_attr( $option ) . '" ' . $selected . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $option ) ) . '</option>';
			}
		}
	}

	$html .= '</select>';
	$html .= '</div>';

	echo wp_kses(
		$html,
		[
			'div'    => [
				'class' => true,
			],
			'select' => [
				'id'                    => true,
				'class'                 => true,
				'name'                  => true,
				'data-attribute_name'   => true,
				'data-show_option_none' => true,
			],
			'option' => [
				'value'    => true,
				'selected' => true,
			],
		]
	);

}//end secretum_wc_dropdown_variation_attribute_options()
