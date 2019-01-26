<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Entry
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/entry.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Inject Entry Content Before Post Content
 *
 * @since 1.0.0
 */
add_action( 'secretum_before_content', function() {
	// Display Featured Image If No Location Set or Forced.
	if ( ! secretum_mod( 'featured_image_display_location' ) || 'before_content' === secretum_mod( 'featured_image_display_location', 'raw' ) ) {
		get_template_part( 'template-parts/header/featured-image' );
	}
} );

/**
 * Inject Entry Content Before Entry Content
 *
 * @since 1.0.0
 */
add_action( 'secretum_before_entry_content', function() {
	// Display Featured Image If allowed.
	if ( 'before_entry' === secretum_mod( 'featured_image_display_location', 'raw' ) ) {
		get_template_part( 'template-parts/header/featured-image' );
	}
} );


/**
 * Entry Wrapper Classes
 *
 * @since 1.0.0
 */
function secretum_entry_wrapper() {
	$columns = secretum_entry_columns();
	$wrapper = \Secretum\Wrapper::classes( 'entry' );
	$borders = \Secretum\Borders::classes( 'entry_wrapper' );

	echo esc_html( $columns . $wrapper . $borders );
}


/**
 * Columns Based On Sidebar Location
 *
 * @since 1.0.0
 *
 * @return string Columns value
 */
function secretum_entry_columns() {
	// Global Sidebar Location.
	$global_location = secretum_mod( 'sidebar_location', 'attr' );

	// Local Sidebar Location.
	$local_location = get_post_meta( get_the_ID(), 'secretum_meta_sidebars' );

	// Build Sidebar Location.
	$sidebar_location = ! empty( $local_location[0] ) ? $local_location[0] : $global_location;

	// Default Width.
	$columns = '-12';

	// Half Width.
	if ( ! empty( $sidebar_location ) && 'both' === $sidebar_location ) {
		$columns = '-6';
	}

	// Normal Width.
	if ( ! empty( $sidebar_location ) && ( 'left' === $sidebar_location || 'right' === $sidebar_location ) ) {
		$columns = '-8';
	}

	// Full Width.
	if ( ! empty( $sidebar_location ) && 'none' === $sidebar_location ) {
		$columns = '-12';
	}

	// Full Width.
	if ( ! is_active_sidebar( 'sidebar-1' ) && ! is_active_sidebar( 'sidebar-right' ) && ! is_active_sidebar( 'sidebar-left' ) ) {
		$columns = '-12';
	}

	if ( class_exists( 'woocommerce' ) && function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
		$columns = '-12';

		if ( ( is_active_sidebar( 'sidebar-woo-product' ) || is_active_sidebar( 'sidebar-woo-default' ) ) ) {
			$columns = '-9';
		} elseif ( class_exists( 'WC_Bookings' ) ) {
			$columns = '';
		}
	}

	return $columns;
}




/**
 * Check if the content has been modified
 *
 * @since 1.0.0
 */
function secretum_modified_date_check() {
	return (get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) ? true : false;
}


/**
 * Get Post Category Listing
 *
 * @since 1.0.0
 */
function secretum_categories_list() {
	$get_the_category_list = get_the_category_list( ', ' );

	if ( $get_the_category_list ) {
		echo wp_kses(
			$get_the_category_list,
			[
				'a' => [
					'href' 	=> true,
					'rel' 	=> true,
				],
			]
		);
	}
}


/**
 * Post Tags Listing
 *
 * @since 1.0.0
 */
function secretum_tags_list() {
	$get_the_tag_list = get_the_tag_list( '', ', ' );

	if ( $get_the_tag_list ) {
		echo wp_kses(
			$get_the_tag_list,
			[
				'a' => [
					'href' 	=> true,
					'rel' 	=> true,
				],
			]
		);
	}
}


/**
 * Custom Edit Post Link
 *
 * @since 1.0.0
 *
 * @param int $post_id Current Post ID.
 */
function secretum_edit_link( $post_id ) {
	edit_post_link(
		__( 'Edit', 'secretum' ),
		'<span class="screen-reader-text">' . __( 'Edit', 'secretum' ) . '</span><span class="edit-link">',
		'</span>',
		(int) $post_id
	);
}


/**
 * Password Protected Posts/Pages/Products Form
 *
 * @since 1.0.0
 */
function secretum_post_password_form() {
	echo wp_kses(
		get_the_password_form(),
		[
			'form' 	=> [
				'action' 	=> true,
				'class' 	=> true,
				'method' 	=> true,
			],
			'label' => [
				'for' 		=> true,
			],
			'input' => [
				'name' 		=> true,
				'id' 		=> true,
				'type' 		=> true,
				'size' 		=> true,
				'value' 	=> true,
			],
			'p' 	=> true,
		]
	);
}
