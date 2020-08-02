<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Theme
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2020 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/navbar.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Maybe Display Extra Navbar Wrap Based On Location.
 *
 * @param string $open_or_close    open|close valid locations.
 * @param string $display_location above|below navbar locations.
 *
 * @since 2.1.0
 */
function secretum_navbar_wrap(
	string $open_or_close = '',
	string $display_location = ''
) {
	$html  = '';
	$class = '';

	if ( ( 'above' === $display_location || 'below' === $display_location ) ) {
		$alignment = secretum_mod( 'primary_nav_toggler_alignment', 'raw' );

		if ( 'mr-auto' === $alignment ) {
			$class = ' text-left';
		}

		if ( 'ml-auto' === $alignment ) {
			$class = ' text-right';
		}

		if ( 'mx-auto' === $alignment ) {
			$class = ' text-center';
		}
	}

	if ( 'open' === $open_or_close ) {
		$html = '<div class="wrap' . $class . '">';
	}

	if ( 'close' === $open_or_close ) {
		$html = '</div>';
	}

	/**
	 * Sanitizes content for allowed HTML tags for post content.
	 *
	 * @source https://developer.wordpress.org/reference/functions/wp_kses_post/
	 */
	echo wp_kses_post( $html );
}


/**
 * Remove Navbar Class if Dipslay Location Above/Below.
 *
 * @since 2.1.0
 */
function secretum_navbar_class() {
	$navbar_class = 'navbar';

	if ( true === secretum_navbar_display_location( 'above' ) ||
		true === secretum_navbar_display_location( 'below' ) ) {
		$navbar_class = '';
	}

	/**
	 * Sanitizes a string key.
	 *
	 * @source https://developer.wordpress.org/reference/functions/sanitize_key/
	 */
	echo sanitize_key( $navbar_class ) . ' ';
}


/**
 * Primary Navbar Display Location
 *
 * @deprecated 2.1.0 Extra navbar locations no longer exist.
 *
 * @since 1.6.0
 */
function secretum_navbar_primary_nav_location() {
	$location = 'secretum-navbar-primary';

	/**
	 * Determines whether a registered nav menu location has a menu assigned to it.
	 *
	 * @source https://developer.wordpress.org/reference/functions/has_nav_menu/
	 */
	if ( true !== has_nav_menu( 'secretum-navbar-primary' ) ) {
		if ( true === has_nav_menu( 'secretum-navbar-primary-above' ) ) {
			$location = 'secretum-navbar-primary-above';
		}

		if ( true === has_nav_menu( 'secretum-navbar-primary-left' ) ) {
			$location = 'secretum-navbar-primary-left';
		}

		if ( true === has_nav_menu( 'secretum-navbar-primary-right' ) ) {
			$location = 'secretum-navbar-primary-right';
		}

		if ( true === has_nav_menu( 'secretum-navbar-primary-below' ) ) {
			$location = 'secretum-navbar-primary-below';
		}
	}

	return $location;
}


/**
 * Custom Toggler Text
 *
 * @since 1.6.0
 */
function secretum_nav_toggler_text() {
	$secretum_nav_toggler_text = secretum_text( 'primary_nav_toggler_text' );

	if ( true === empty( $secretum_nav_toggler_text ) ) {
		return;
	}

	/**
	 * Sanitizes content for allowed HTML tags for post content.
	 *
	 * @source https://developer.wordpress.org/reference/functions/wp_kses_post/
	 */
	echo wp_kses_post( '<span class="px-2 text-12 text-light">' . $secretum_nav_toggler_text . '</span>' );
}


/**
 * Display Navbar Location
 *
 * @param string $location Navbar Display Location (below|above|right|left).
 *
 * @since 1.6.0
 */
function secretum_navbar_display_location( $location ) {
	$secretum_primary_nav_location = secretum_mod( 'primary_nav_location', 'raw' );

	// Default.
	if ( 'below' === $location && (
		/**
		 * Determines whether a registered nav menu location has a menu assigned to it.
		 *
		 * @source https://developer.wordpress.org/reference/functions/has_nav_menu/
		 */
		false === has_nav_menu( 'secretum-navbar-primary' ) || false === has_nav_menu( 'secretum-navbar-primary-below' )
	) && (
		empty( $secretum_primary_nav_location ) || false === $secretum_primary_nav_location )
	) {
		return true;
	}

	if ( $location === $secretum_primary_nav_location ) {
		return true;
	}

	return false;
}


/**
 * Add or Remove Navbar Collapse ID
 *
 * @param string $type size|class.
 *
 * @since 1.0.0
 */
function secretum_navbar_toggler_display( $type ) {
	$secretum_toggler_status = secretum_mod( 'primary_nav_toggler_status' );

	if ( 'size' === $type ) {
		if ( false === $secretum_toggler_status ) {
			echo 'navbar-expand';
		} else {
			echo 'navbar-expand-lg';
		}
	}

	if ( 'class' === $type ) {
		if ( false === $secretum_toggler_status ) {
			return '';
		} else {
			return 'collapse navbar-collapse';
		}
	}
}
