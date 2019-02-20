<?php
/**
 * Global Template Styling Functions
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Translation Text Display
 *
 * @param string $key Array Key To Get Value Of.
 * @param bool   $echo True to return.
 *
 * @see class/customizer/class-translate.php
 * @see class/customizer/class-translations.php
 * @see class/customizer/class-trait-translations.php
 *
 * @example (echo) secretum_text( 'read_more_text', true );
 * @example (return) secretum_text( 'read_more_text' );
 *
 * @return string Text String
 *
 * @since 1.0.0
 */
function secretum_text( $key = '', $echo = false ) {
	$translate = \Secretum\Translate::instance();

	// Required.
	if ( false === empty( $key ) ) {
		if ( false === $echo ) {
			// Return Text.
			return $translate->get( $key, false );
		} else {
			// Echo Text.
			$translate->get( $key, true );
		}
	}

}//end secretum_text()


/**
 * Check if WooCommerce is Active
 *
 * @since 1.0.0
 *
 * @return bool
 */
function secretum_is_woocomerce() {
	if ( true === class_exists( 'woocommerce' ) ) {
		return true;
	} else {
		return false;
	}

}//end secretum_is_woocomerce()


/**
 * Check if WooCommerce Product Exists
 *
 * @since 1.0.0
 *
 * @return bool
 */
function secretum_is_wooproduct() {
	if ( true === class_exists( 'woocommerce' ) && true === function_exists( 'is_product' ) ) {
		return true;
	} else {
		return false;
	}

}//end secretum_is_wooproduct()


/**
 * Check if Woo Bookings is Active
 *
 * @since 1.0.0
 *
 * @return bool
 */
function secretum_is_woobookings() {
	if ( true === class_exists( 'WC_Bookings' ) ) {
		return true;
	} else {
		return false;
	}

}//end secretum_is_woobookings()


/**
 * Render Breadcrumbs
 *
 * @since 1.0.0
 *
 * @param string $taxonomy The taxonomy term.
 * @param bool 	 $top_link True to enable top return link.
 * @param bool 	 $icons True to enable Font Awesome icons.
 * @param string $seperator Text only, icons will override, defaults to ' > '.
 * @return string Breadcrumbs HTML
 */
function secretum_breadcrumbs( $taxonomy = '', $top_link = false, $icons = false, $seperator = false ) {
	// Required.
	if ( empty( $taxonomy ) ) { return; }

	global $post;

	// Get Terms Array.
	$terms = get_the_terms( $post->ID, sanitize_html_class( $taxonomy ) );

	// If Items Set.
	if ( isset( $terms[0]->name ) && isset( $terms[0]->slug ) ) {
		// Get Home URL.
		$home_url = esc_url( home_url() );

		// Get Category Name.
		$category_name = sanitize_text_field( $terms[0]->name );

		// Get Category Slug.
		$category_slug = sanitize_html_class( $terms[0]->slug );

		// Build Category URL.
		$category_url = xget_term_link( $category_slug, sanitize_html_class( $taxonomy ) );

		// Home Icon.
		$home = ( $icons ) ? '<i class="fa fa-home" aria-hidden="true"></i> ' : '';

		// Home Text.
		$home_text = __( 'Home', 'secretum' );

		// Build Seperator.
		if ( true === $seperator && true === $icons ) {
			$sep = '<i class="fa fa-angle-right" aria-hidden="true"></i>';

		} elseif ( true === $seperator && false === $icons ) {
			$sep = wp_filter_nohtml_kses( $seperator );

		} else {
			$sep = ' > ';

		}

		// Build Top Return Link.
		if ( true === $top_link && true === $icons ) {
			$title = secretum_text( 'return_to_top_title' ) ;
			$top = '<a href="#top" class="ml-2 p-2"><i class="fa fa-caret-up" aria-hidden="true" title="' . $title . '"></i></a>';

		} elseif ( true === $top_link && false === $icons ) {
			$title = secretum_text( 'return_to_top_default' ) ;
			$top = ' | <a href="#top">' . $title . '</a>';

		} else {
			$top = '';

		}

		// Return HTML.
		return '<div class="breadcrumbs">' . $home . '<a href="' . $home_url . '">' . $home_text . '</a> ' . $sep . ' <a href="' . $category_url . '">' . $category_name . '</a>' . $top . '</div>';
	}// End if().

}//end secretum_breadcrumbs()
