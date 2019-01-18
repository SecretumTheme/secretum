<?php
/**
 * Hook Scripts and Styles
 *
 * @package    Secretum
 * @subpackage Secretum\enqueue.php
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/enqueue.php
 */

namespace Secretum;


// Enqueue Customizer Control Scripts.
//add_action( 'customize_controls_enqueue_scripts', function() {
//	wp_enqueue_script( 'secretum-customizer-controls', SECRETUM_THEME_URL . '/js/customizer/custom-sections.js', [ 'customize-controls' ] );
//	wp_enqueue_style( 'secretum-customizer-controls', SECRETUM_THEME_URL . '/css/customizer/custom-sections.css' );
//} );


// WordPress Enqueue Action.
add_action( 'wp_enqueue_scripts', function() {
	// Get Theme Object.
	$theme = wp_get_theme();

	// Customizer Preview Styles.
	//if ( is_customize_preview() === true ) {
	//	wp_enqueue_style( 'secretum-customizer-css', SECRETUM_THEME_URL . '/css/customizer/customizer.css' );
	//}

	// Selected Style.
	if ( secretum_mod( 'theme_color_palette' ) === true ) {
		wp_enqueue_style(
			'secretum',
			SECRETUM_STYLE_URL . '/css/themes/' . esc_attr( secretum_mod( 'theme_color_palette', 'raw' ) ) . '/theme.min.css',
			[],
			$theme->get( 'Version' ),
			'all'
		);
	} else {
		// Default Style.
		wp_enqueue_style(
			'secretum',
			SECRETUM_STYLE_URL . '/css/theme.min.css',
			[],
			$theme->get( 'Version' ),
			'all'
		);
	}

	// Primary Theme Script.
	if ( secretum_mod( 'enqueue_primary_javascript_status' ) === false ) {
		wp_enqueue_script(
			'secretum',
			SECRETUM_STYLE_URL . '/js/theme.min.js',
			[ 'jquery' ],
			$theme->get( 'Version' ),
			true
		);
	} elseif ( secretum_mod( 'enqueue_bootstrap_bundle_javascript_status' ) === true ) {
		// Primary JS Disabled.
		// Bootstrap Bundle Script.
		if ( secretum_mod( 'enqueue_bootstrap_bundle_js_status' ) === true ) {
			wp_enqueue_script(
				'secretum-bootstrap-bundle',
				SECRETUM_STYLE_URL . '/js/bootstrap.bundle.min.js',
				[ 'jquery' ],
				'4.2.1',
				true
			);
		}

		// Secretum Theme Script.
		if ( secretum_mod( 'enqueue_secretum_javascript_status' ) === true ) {
			wp_enqueue_script(
				'secretum',
				SECRETUM_STYLE_URL . '/js/secretum.min.js',
				[ 'jquery' ],
				$theme->get( 'Version' ),
				true
			);
		}
	}

	// Ekko Lightbox.
	if ( secretum_mod( 'enqueue_ekko_lightbox_status' ) === true && ( secretum_mod( 'enqueue_primary_javascript_status' ) === false || secretum_mod( 'enqueue_bootstrap_bundle_javascript_status' ) === true ) ) {
		wp_enqueue_style(
			'secretum-ekko-lightbox',
			SECRETUM_STYLE_URL . '/css/ekko-lightbox.min.css',
			[],
			'5.3.0',
			'all'
		);

		wp_enqueue_script(
			'secretum-ekko-lightbox',
			SECRETUM_STYLE_URL . '/js/ekko-lightbox.min.js',
			[ 'jquery' ],
			'5.3.0',
			true
		);
	}

	// WooCommerce.
	if ( class_exists( 'woocommerce' ) === true && secretum_mod( 'enqueue_woocommerce_status' ) === false ) {
		wp_enqueue_style(
			'secretum-woocommerce',
			SECRETUM_STYLE_URL . '/css/woocommerce.min.css',
			[],
			$theme->get( 'Version' ),
			'all'
		);
	}

	// WooCommerce Bookings.
	if ( class_exists( 'WC_Bookings' ) === true && secretum_mod( 'enqueue_woocommerce_bookings_status' ) === false ) {
		wp_enqueue_style(
			'secretum-woocommerce-bookings',
			SECRETUM_STYLE_URL . '/css/woocommerce-bookings.min.css',
			[],
			$theme->get( 'Version' ),
			'all'
		);
	}

	// Comments Form Scripts.
	if ( is_singular() === true && comments_open() === true && get_option( 'thread_comments' ) === true ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// If Contact Page IDs Set.
	if ( secretum_mod( 'enqueue_contact_pageids' ) === true ) {
		// Get Mod.
		$pageids_mod = secretum_mod( 'enqueue_contact_pageids', 'raw' );

		// No whitespace, no starting or trailing comma.
		$strip_page_ids = preg_replace( '/\s+/', '', trim( $pageids_mod, ',' ) );

		// Convert to array and filter to digits only.
		$array_page_ids = array_filter( explode( ',', $strip_page_ids ), 'ctype_digit' );

		// Dequeue on all other than allowed pages.
		if ( isset( $array_page_ids ) === true && is_array( $array_page_ids ) === true && is_page( $array_page_ids ) === false ) {
			wp_dequeue_style( 'contact-form-7' );
			wp_dequeue_script( 'contact-form-7' );
		}
	}
} );
