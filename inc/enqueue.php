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


/**
 * Enqueue Customizer Control Scripts
 */
add_action( 'customize_controls_enqueue_scripts', function() {
	wp_enqueue_script( 'secretum-customizer-controls', SECRETUM_THEME_URL . '/js/customizer/custom-sections.js', [ 'customize-controls' ] );
	wp_enqueue_style( 'secretum-customizer-controls', SECRETUM_THEME_URL . '/css/customizer/custom-sections.css' );
} );


<<<<<<< HEAD
/**
 * Initialize Theme Settings
 */
add_action( 'init', function() {
	// @about Inject Analytics Code Within WordPress Header or Footer
	$analytics = secretum_mod( 'analytics_code' );
	$location = secretum_mod( 'analytics_location', 'attr' );

	if ( 'header' === $location && ! empty( $analytics ) ) {
		add_action( 'wp_head', function() {
			echo esc_js( secretum_mod( 'analytics_code', 'script' ) );
		} );

	} elseif ( empty( $location ) && ! empty( $analytics ) ) {
		add_action( 'wp_footer', function() {
			echo esc_js( secretum_mod( 'analytics_code', 'script' ) );
		} );
	}
} );


=======
>>>>>>> feature-export-import
/**
 * WordPress Enqueue Action
 */
add_action( 'wp_enqueue_scripts', function() {
	// Get Theme Object.
	$theme = wp_get_theme();

	// Customizer Preview Styles.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'secretum-customizer-css', SECRETUM_THEME_URL . '/css/customizer/customizer.css' );
	}

	// Selected Style.
	if ( secretum_mod( 'enqueue_theme_colors' ) ) {
		wp_enqueue_style(
			'secretum',
			SECRETUM_STYLE_URL . '/css/' . esc_attr( secretum_mod( 'enqueue_theme_colors', 'raw' ) ) . '/theme.min.css',
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
	if ( ! secretum_mod( 'enqueue_primary_javascript_status' ) ) {
		wp_enqueue_script(
			'secretum',
			SECRETUM_STYLE_URL . '/js/theme.min.js',
			[ 'jquery' ],
			$theme->get( 'Version' ),
			true
		);
	} elseif ( secretum_mod( 'enqueue_bootstrap_bundle_javascript_status' ) ) {
		// Primary JS Disabled.
		// Bootstrap Bundle Script.
		if ( secretum_mod( 'enqueue_bootstrap_bundle_js_status' ) ) {
			wp_enqueue_script(
				'secretum-bootstrap-bundle',
				SECRETUM_STYLE_URL . '/js/bootstrap.bundle.min.js',
				[ 'jquery' ],
				'4.2.1',
				true
			);
		}

		// Secretum Theme Script.
		if ( secretum_mod( 'enqueue_secretum_javascript_status' ) ) {
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
	if ( secretum_mod( 'enqueue_ekko_lightbox_status' ) && ( ! secretum_mod( 'enqueue_primary_javascript_status' ) || secretum_mod( 'enqueue_bootstrap_bundle_javascript_status' ) ) ) {
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
	if ( class_exists( 'woocommerce' ) && ! secretum_mod( 'enqueue_woocommerce_status' ) ) {
		wp_enqueue_style(
			'secretum-woocommerce',
			SECRETUM_STYLE_URL . '/css/woocommerce.min.css',
			[],
			$theme->get( 'Version' ),
			'all'
		);
	}

	// WooCommerce Bookings.
	if ( class_exists( 'WC_Bookings' ) && ! secretum_mod( 'enqueue_woocommerce_bookings_status' ) ) {
		wp_enqueue_style(
			'secretum-woocommerce-bookings',
			SECRETUM_STYLE_URL . '/css/woocommerce-bookings.min.css',
			[],
			$theme->get( 'Version' ),
			'all'
		);
	}

	// Comments Form Scripts.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) && ! secretum_mod( 'enqueue_jquery_status' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// If Contact Page IDs Set.
	if ( secretum_mod( 'enqueue_contact_pageids' ) && ! secretum_mod( 'enqueue_jquery_status' ) ) {
		// Get Mod.
		$pageids_mod = secretum_mod( 'enqueue_contact_pageids', 'raw' );

		// No whitespace, no starting or trailing comma.
		$strip_page_ids = preg_replace( '/\s+/', '', trim( $pageids_mod, ',' ) );

		// Convert to array and filter to digits only.
		$array_page_ids = array_filter( explode( ',', $strip_page_ids ), 'ctype_digit' );

		// Dequeue on all other than allowed pages.
		if ( isset( $array_page_ids ) && is_array( $array_page_ids ) && ! is_page( $array_page_ids ) ) {
			wp_dequeue_style( 'contact-form-7' );
			wp_dequeue_script( 'contact-form-7' );
		}
	}
} );
