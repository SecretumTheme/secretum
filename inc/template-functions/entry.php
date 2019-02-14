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
	if ( false === secretum_mod( 'featured_image_display_location' ) || 'before_content' === secretum_mod( 'featured_image_display_location', 'raw' ) ) {
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
 * Columns Based On Sidebar Location
 *
 * @since 1.0.0
 */
function secretum_entry_columns() {
	// Global Sidebar Location.
	$global_location = secretum_mod( 'sidebar_location', 'attr' );

	// Local Sidebar Location.
	$local_location = get_post_meta( get_the_ID(), 'secretum_meta_sidebars' );

	// Build Sidebar Location.
	if ( true !== empty( $local_location[0] ) ) {
		$sidebar_location = $local_location[0];
	} else {
		$sidebar_location = $global_location;
	}

	// Default Width = 8.
	$columns = '-' . secretum_default_column_width( '8' );

	// Half Width.
	if ( true === isset( $sidebar_location ) && 'both' === $sidebar_location ) {
		$columns = '-7';
	}

	// Normal Width.
	if ( true === isset( $sidebar_location ) && ( 'left' === $sidebar_location || 'right' === $sidebar_location ) ) {
		$columns = '-8';
	}

	// Full Width.
	if ( true === isset( $sidebar_location ) && 'none' === $sidebar_location ) {
		$columns = '-12';
	}

	// Full Width.
	if ( true !== is_active_sidebar( 'sidebar-1' ) && true !== is_active_sidebar( 'sidebar-right' ) && true !== is_active_sidebar( 'sidebar-left' ) ) {
		$columns = '-12';
	}

	// WooCommerce.
	if ( true === secretum_is_woocomerce() && true === function_exists( 'is_woocommerce' ) && true === is_woocommerce() ) {
		$columns = '-12';

		if ( ( true === is_active_sidebar( 'sidebar-woo-product' ) || true === is_active_sidebar( 'sidebar-woo-default' ) ) ) {
			$columns = '-9';
		} elseif ( true === secretum_is_wooproduct() ) {
			$columns = '';
		}
	}

	echo esc_html( $columns );

}//end secretum_entry_columns()


/**
 * Filters Interger For Layout Column Width
 * Filter: secretum_default_column_width
 *
 * @param int $columns Column Number.
 *
 * @since 1.0.0
 */
function secretum_default_column_width( $columns ) {
	return apply_filters( 'secretum_default_column_width', (int) filter_var( $columns, FILTER_SANITIZE_NUMBER_INT ), 10, 1 );
}


/**
 * Check if the content has been modified
 *
 * @since 1.0.0
 */
function secretum_modified_date_check() {
	return ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) ? true : false;

}//end secretum_modified_date_check()


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

}//end secretum_categories_list()


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

}//end secretum_tags_list()


/**
 * Password Protected Posts/Pages/Products Form
 *
 * @since 1.0.0
 */
function secretum_post_password_form() {
	echo wp_kses(
		apply_filters( 'secretum_post_password_form', get_the_password_form(), 10, 1 ),
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

}//end secretum_post_password_form()


/**
 * Custom Edit Post Link
 *
 * @since 1.0.0
 *
 * @param int $post_id Current Post ID.
 */
function secretum_edit_link( $post_id ) {
	$edit  = __( 'Edit Entry', 'secretum' );
	$link  = get_edit_post_link( $post_id );
	$icon  = secretum_icon(
		[
			'fi' 	=> 'pencil',
			'fa' 	=> 'fa-pencil',
			'echo' 	=> false,
		]
	);
	$html  = "<span class=\"screen-reader-text\">{$edit}</span>";
	$html .= "&nbsp;&nbsp;&nbsp;<span class=\"edit-link\"><a class=\"post-edit-link\" href=\"{$link}\" title=\"{$edit}\">{$icon}</a></span>";

	echo wp_kses(
		apply_filters( 'secretum_edit_link', $html, 10, 1 ),
		[
			'a' => [
				'class' 		=> true,
				'href' 			=> true,
				'title' 		=> true,
			],
			'span' => [
				'class' 		=> true,
			],
			'i' => [
				'class' 		=> true,
				'aria-hidden' 	=> true,
			],
		]
	);

}//end secretum_edit_link()
