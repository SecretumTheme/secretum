<?php
/**
 * Hook Scripts and Styles
 *
 * @package    Secretum
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
function secretum_enqueue_preview() {
	wp_enqueue_script(
		'secretum-customizer-preview',
		SECRETUM_THEME_URL . '/js/customizer/customize-preview.min.js',
		[
			'jquery',
			'customize-preview',
		],
		SECRETUM_THEME_VERSION,
		true
	);

}//end secretum_enqueue_preview()

add_action( 'customize_preview_init', 'Secretum\secretum_enqueue_preview' );


/**
 * Extend Custom Customizer Controls and Sections
 *
 * @since 1.0.0
 */
function secretum_enqueue_customize_controls() {
	wp_enqueue_script(
		'secretum-customizer-controls',
		SECRETUM_THEME_URL . '/js/customizer/customize-controls.min.js',
		[
			'jquery',
			'customize-controls',
		],
		SECRETUM_THEME_VERSION,
		true
	);

	wp_enqueue_script(
		'secretum-customizer-controls',
		SECRETUM_THEME_URL . '/js/customizer/custom-sections.min.js',
		[
			'jquery',
			'customize-controls',
		],
		SECRETUM_THEME_VERSION,
		true
	);

	wp_enqueue_style(
		'secretum-customizer-controls',
		SECRETUM_THEME_URL . '/css/customizer/custom-sections.min.css',
		[],
		SECRETUM_THEME_VERSION,
		'all'
	);

}//end secretum_enqueue_customize_controls()

add_action( 'customize_controls_enqueue_scripts', 'Secretum\secretum_enqueue_customize_controls' );


/**
 * WordPress Enqueue Action
 *
 * @since 1.0.0
 */
function secretum_enqueue_scripts() {
	// Customizer Preview Styles.
	if ( true === is_customize_preview() ) {
		wp_enqueue_style(
			'secretum-customizer-css',
			SECRETUM_THEME_URL . '/css/customizer/customizer.css',
			[],
			SECRETUM_THEME_VERSION,
			'all'
		);
	}

	// Selected Style.
	if ( true === secretum_mod( 'theme_color_palette' ) ) {
		wp_enqueue_style(
			'secretum',
			SECRETUM_THEME_URL . '/css/themes/' . secretum_mod( 'theme_color_palette', 'attr', false ) . '/theme.min.css',
			[],
			SECRETUM_THEME_VERSION,
			'all'
		);
	} else {
		// Default Style.
		wp_enqueue_style(
			'secretum',
			SECRETUM_THEME_URL . '/css/theme.min.css',
			[],
			SECRETUM_THEME_VERSION,
			'all'
		);
	}

	// Customizer Color Settings.
	$secretum_inline_css = new \Secretum\Inline_Styles();
	wp_add_inline_style( 'secretum', $secretum_inline_css->styles() );

	// Foundation Icons.
	wp_enqueue_style(
		'foundation',
		SECRETUM_THEME_URL . '/css/foundation-icons.min.css',
		[],
		'3.0',
		'all'
	);

	// Primary Theme Script.
	if ( false !== secretum_mod( 'enqueue_primary_javascript_status' ) ) {
		wp_enqueue_script(
			'secretum',
			SECRETUM_THEME_URL . '/js/theme.min.js',
			[ 'jquery' ],
			SECRETUM_THEME_VERSION,
			true
		);
	} elseif ( true === secretum_mod( 'enqueue_bootstrap_bundle_javascript_status' ) ) {
		// Primary JS Disabled.
		// Bootstrap Bundle Script.
		if ( true === secretum_mod( 'enqueue_bootstrap_bundle_js_status' ) ) {
			wp_enqueue_script(
				'bootstrap-bundle',
				SECRETUM_THEME_URL . '/js/bootstrap.bundle.min.js',
				[ 'jquery' ],
				'4.2.1',
				true
			);
		}

		// Secretum Theme Script.
		if ( true === secretum_mod( 'enqueue_secretum_javascript_status' ) ) {
			wp_enqueue_script(
				'secretum',
				SECRETUM_THEME_URL . '/js/secretum.min.js',
				[ 'jquery' ],
				SECRETUM_THEME_VERSION,
				true
			);
		}
	}

	// Ekko Lightbox.
	if ( true === secretum_mod( 'enqueue_ekko_lightbox_status' ) && ( false === secretum_mod( 'enqueue_primary_javascript_status' ) || true === secretum_mod( 'enqueue_bootstrap_bundle_javascript_status' ) ) ) {
		wp_enqueue_style(
			'secretum-ekko-lightbox',
			SECRETUM_THEME_URL . '/css/ekko-lightbox.min.css',
			[],
			'5.3.0',
			'all'
		);

		wp_enqueue_script(
			'ekko-lightbox',
			SECRETUM_THEME_URL . '/js/ekko-lightbox.min.js',
			[ 'jquery' ],
			'5.3.0',
			true
		);
	}

	// WooCommerce.
	if ( true === secretum_is_woocomerce() && false !== secretum_mod( 'enqueue_woocommerce_status' ) ) {
		wp_enqueue_style(
			'secretum-woocommerce',
			SECRETUM_THEME_URL . '/css/woocommerce.min.css',
			[],
			SECRETUM_THEME_VERSION,
			'all'
		);
	}

	// WooCommerce Bookings.
	if ( true === secretum_is_woobookings() && false !== secretum_mod( 'enqueue_woocommerce_bookings_status' ) ) {
		wp_enqueue_style(
			'secretum-woocommerce-bookings',
			SECRETUM_THEME_URL . '/css/woocommerce-bookings.min.css',
			[],
			SECRETUM_THEME_VERSION,
			'all'
		);
	}

	// Comments Form Scripts.
	if ( true === is_singular() && true === comments_open() && true === get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Custom Contact Form 7 Styles.
	if ( true === defined( 'WPCF7_PLUGIN' ) ) {
		wp_dequeue_style( 'contact-form-7' );
		wp_dequeue_script( 'google-recaptcha' );
		wp_dequeue_script( 'wpcf7_recaptcha_enqueue_scripts' );

		wp_enqueue_style(
			'secretum-contact-form-7',
			SECRETUM_THEME_URL . '/css/contact-form-7.min.css',
			[],
			SECRETUM_THEME_VERSION,
			'all'
		);
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
			wp_dequeue_style( 'secretum-contact-form-7' );
			wp_dequeue_script( 'contact-form-7' );
		}
	}

}//end secretum_enqueue_scripts()

add_action( 'wp_enqueue_scripts', 'Secretum\secretum_enqueue_scripts' );
