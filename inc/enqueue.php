<?php
/**
 * Hook Scripts and Styles
 *
 * @package    Secretum
 * @subpackage Core\Enqueue
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/enqueue.php
 * @since      1.0.0
 */

namespace Secretum;


/**
 * Preview Script For Post Message Transport Types
 *
 * @since 1.0.0
 */
add_action( 'customize_preview_init', function() {
	wp_enqueue_script( 'secretum-customizer-preview', SECRETUM_THEME_URL . '/js/customizer/customize-preview.js', [ 'jquery', 'customize-preview' ], null, true );
} );


/**
 * Extend Customizer Controls and Sections
 *
 * @since 1.0.0
add_action( 'customize_controls_enqueue_scripts', function() {
	// Currently Empty.
	wp_enqueue_script( 'secretum-customizer-controls', SECRETUM_THEME_URL . '/js/customizer/customize-controls.js', [ 'jquery', 'customize-controls' ], null, true );
	// Extend Custom Sections.
	// Temp wp_enqueue_script( 'secretum-customizer-controls', SECRETUM_THEME_URL . '/js/customizer/custom-sections.js', [ 'jquery', 'customize-controls' ], null, true );.
	// Temp wp_enqueue_style( 'secretum-customizer-controls', SECRETUM_THEME_URL . '/css/customizer/custom-sections.css' );.
} );
 */


/**
 * Inject Analytics Code Into Website Header or Footer
 *
 * @since 1.0.0
 */
add_action('init', function() {
	// Get Theme Mods.
	$location = secretum_mod( 'analytics_location', 'attr' );
	$analytics = secretum_mod( 'analytics_code' );

	if ( true === isset( $location ) && 'header' === $location && false === empty( $analytics ) ) {
		// Add To Header.
		add_action( 'wp_head', function() {
			echo wp_kses(
				json_decode( secretum_mod( 'analytics_code', 'raw' ) ),
				[
					'script' => [
						'async' 	=> true,
						'src' 		=> true,
					],
				]
			);
		} );
	} elseif ( true === empty( $location ) && false === empty( $analytics ) ) {
		// Add To Footer.
		add_action( 'wp_footer', function() {
			echo wp_kses(
				json_decode( secretum_mod( 'analytics_code', 'raw' ) ),
				[
					'script' => [
						'async' 	=> true,
						'src' 		=> true,
					],
				]
			);
		} );
	}
} );


/**
 * WordPress Enqueue Action
 *
 * @since 1.0.0
 */
add_action( 'wp_enqueue_scripts', function() {
	// Get Theme Object.
	$theme = wp_get_theme();

	// Customizer Preview Styles.
	if ( true === is_customize_preview() ) {
		wp_enqueue_style( 'secretum-customizer-css', SECRETUM_THEME_URL . '/css/customizer/customizer.css' );
	}

	// Selected Style.
	if ( true === secretum_mod( 'theme_color_palette' ) ) {
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
	if ( false === secretum_mod( 'enqueue_primary_javascript_status' ) ) {
		wp_enqueue_script(
			'secretum',
			SECRETUM_STYLE_URL . '/js/theme.min.js',
			[ 'jquery' ],
			$theme->get( 'Version' ),
			true
		);
	} elseif ( true === secretum_mod( 'enqueue_bootstrap_bundle_javascript_status' ) ) {
		// Primary JS Disabled.
		// Bootstrap Bundle Script.
		if ( true === secretum_mod( 'enqueue_bootstrap_bundle_js_status' ) ) {
			wp_enqueue_script(
				'secretum-bootstrap-bundle',
				SECRETUM_STYLE_URL . '/js/bootstrap.bundle.min.js',
				[ 'jquery' ],
				'4.2.1',
				true
			);
		}

		// Secretum Theme Script.
		if ( true === secretum_mod( 'enqueue_secretum_javascript_status' ) ) {
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
	if ( true === secretum_mod( 'enqueue_ekko_lightbox_status' ) && ( false === secretum_mod( 'enqueue_primary_javascript_status' ) || true === secretum_mod( 'enqueue_bootstrap_bundle_javascript_status' ) ) ) {
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
	if ( true === secretum_is_woocomerce() && false === secretum_mod( 'enqueue_woocommerce_status' ) ) {
		wp_enqueue_style(
			'secretum-woocommerce',
			SECRETUM_STYLE_URL . '/css/woocommerce.min.css',
			[],
			$theme->get( 'Version' ),
			'all'
		);
	}

	// WooCommerce Bookings.
	if ( false === secretum_is_woobookings() && false === secretum_mod( 'enqueue_woocommerce_bookings_status' ) ) {
		wp_enqueue_style(
			'secretum-woocommerce-bookings',
			SECRETUM_STYLE_URL . '/css/woocommerce-bookings.min.css',
			[],
			$theme->get( 'Version' ),
			'all'
		);
	}

	// Comments Form Scripts.
	if ( true === is_singular() && true === comments_open() && true === get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// If Contact Page IDs Set.
	if ( true === secretum_mod( 'enqueue_contact_pageids' ) ) {
		// Get Mod.
		$pageids_mod = secretum_mod( 'enqueue_contact_pageids', 'raw' );

		// No whitespace, no starting or trailing comma.
		$strip_page_ids = preg_replace( '/\s+/', '', trim( $pageids_mod, ',' ) );

		// Convert to array and filter to digits only.
		$array_page_ids = array_filter( explode( ',', $strip_page_ids ), 'ctype_digit' );

		// Dequeue on all other than allowed pages.
		if ( true === isset( $array_page_ids ) && true === is_array( $array_page_ids ) && false === is_page( $array_page_ids ) ) {
			wp_dequeue_style( 'contact-form-7' );
			wp_dequeue_script( 'contact-form-7' );
		}
	}
} );
