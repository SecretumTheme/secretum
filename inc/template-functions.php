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
 * @since 1.0.0
 *
 * @see class/customizer/class-trans.php
 * @see class/customizer/class-transcustomizer.php
 * @see class/customizer/class-transtrait.php
 *
 * @example (echo) secretum_text( 'read_more_text', true );
 * @example (return) secretum_text( 'read_more_text' );
 *
 * @param string $key Array Key To Get Value Of.
 * @param bool   $echo True to return.
 *
 * @return string Text String
 */
function secretum_text( $key = '', $echo = false ) {
	$translate = \Secretum\Trans::instance();

	// Required.
	if ( false === ( empty( $key ) ) ) {
		if ( false === $echo ) {
			// Return Text.
			return $translate->get( $key, false );
		} else {
			// Echo Text.
			$translate->get( $key, true );
		}
	}
}


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
		// Testing Dont Use $category_url = xget_term_link( $category_slug, sanitize_html_class( $taxonomy ) );.
		$category_url = '#';

		// Home Icon.
		$home = ( $icons ) ? '<i class="fa fa-home" aria-hidden="true"></i> ' : '';

		// Home Text.
		$home_text = __( 'Home', 'secretum' );

		// Build Seperator.
		if ( $seperator && $icons ) {
			$sep = '<i class="fa fa-angle-right" aria-hidden="true"></i>';

		} elseif ( $seperator && ! $icons ) {
			$sep = wp_filter_nohtml_kses( $seperator );

		} else {
			$sep = ' > ';

		}

		// Build Top Return Link.
		if ( $top_link && $icons ) {
			$top = '<a href="#top" class="ml-2 p-2"><i class="fa fa-caret-up" aria-hidden="true" title="Return to Top"></i></a>';

		} elseif ( $top_link && ! $icons ) {
			$top = ' | <a href="#top">top ^</a>';

		} else {
			$top = '';

		}

		// Return HTML.
		return '<div class="breadcrumbs">' . $home . '<a href="' . $home_url . '">' . $home_text . '</a> ' . $sep . ' <a href="' . $category_url . '">' . $category_name . '</a>' . $top . '</div>';
	}// End if().
}
