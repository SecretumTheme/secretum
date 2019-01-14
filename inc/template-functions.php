<?php
/**
 * Global Template Styling Functions
 *
 * @package Secretum
 */

namespace Secretum;


/**
 * Add SVG Definitions To Website Footer If No Font Awesome
 */
if ( ! class_exists( 'Better_Font_Awesome_Plugin' ) ) {
	add_action( 'wp_footer', function() {
		// @about Define SVG sprite file.
		// @source Twenty Seventeen By WordPress.org
		$svg_icons = get_parent_theme_file_path( '/images/svg-icons.svg' );

		// If it exists, include it.
		if ( file_exists( $svg_icons ) ) {
			require_once( $svg_icons );
		}
	}, 9999 );
}


/**
 * Render Breadcrumbs
 *
 * @param string $taxonomy The taxonomy term.
 * @param bool 	 $top_link True to enable top return link.
 * @param bool 	 $icons True to enable Font Awesome icons.
 * @param string $seperator Text only, icons will override, defaults to ' > '.
 * @return string Breadcrumbs HTML
 */
function secretum_breadcrumbs( $taxonomy = '', $top_link = false, $icons = false, $seperator = false ) {
	// @about Required
	if ( empty( $taxonomy ) ) { return; }

	global $post;

	// @about Get Terms Array
	$terms = get_the_terms( $post->ID, sanitize_html_class( $taxonomy ) );

	// @about If Items Set
	if ( isset( $terms[0]->name ) && isset( $terms[0]->slug ) ) {
		// @about Get Home URL
		$home_url = esc_url( home_url() );

		// @about Get Category Name
		$category_name = sanitize_text_field( $terms[0]->name );

		// @about Get Category Slug
		$category_slug = sanitize_html_class( $terms[0]->slug );

		// @about Build Category URL
		// @about Testing Dont Use $category_url = xget_term_link( $category_slug, sanitize_html_class( $taxonomy ) );
		$category_url = '#';

		// @about Home Icon
		$home = ( $icons ) ? '<i class="fa fa-home" aria-hidden="true"></i> ' : '';

		// @about Home Text
		$home_text = __( 'Home', 'secretum' );

		// @about Build Seperator
		if ( $seperator && $icons ) {
			$sep = '<i class="fa fa-angle-right" aria-hidden="true"></i>';

		} elseif ( $seperator && ! $icons ) {
			$sep = wp_filter_nohtml_kses( $seperator );

		} else {
			$sep = ' > ';

		}

		// @about Build Top Return Link
		if ( $top_link && $icons ) {
			$top = '<a href="#top" class="ml-2 p-2"><i class="fa fa-caret-up" aria-hidden="true" title="Return to Top"></i></a>';

		} elseif ( $top_link && ! $icons ) {
			$top = ' | <a href="#top">top ^</a>';

		} else {
			$top = '';

		}

		// @about Return HTML
		return '<div class="breadcrumbs">' . $home . '<a href="' . $home_url . '">' . $home_text . '</a> ' . $sep . ' <a href="' . $category_url . '">' . $category_name . '</a>' . $top . '</div>';
	}// End if().
}
