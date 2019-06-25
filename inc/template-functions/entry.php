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
function secretum_before_content() {
	// Display Featured Image If No Location Set or Forced.
	if ( false === secretum_mod( 'featured_image_display_location' ) || 'before_content' === secretum_mod( 'featured_image_display_location', 'raw' ) ) {
		get_template_part( 'template-parts/header/featured-image' );
	}
}//end secretum_before_content()

add_action( 'secretum_before_content', 'Secretum\secretum_before_content' );


/**
 * Inject Entry Content Before Entry Content
 *
 * @since 1.0.0
 */
function secretum_before_entry_content() {
	// Display Featured Image If allowed.
	if ( 'before_entry' === secretum_mod( 'featured_image_display_location', 'raw' ) ) {
		get_template_part( 'template-parts/header/featured-image' );
	}
}//end secretum_before_entry_content()

add_action( 'secretum_before_entry_content', 'Secretum\secretum_before_entry_content' );


/**
 * Columns Based On Sidebar Location
 *
 * @since 1.0.0
 */
function secretum_entry_columns() {
	$sidebar_location = secretum_meta( 'meta_sidebars', '', 'attr' );

	// Build Sidebar Location.
	if ( true === empty( $sidebar_location ) ) {
		// Global Sidebar Location.
		$global_location = secretum_mod( 'sidebar_location', 'attr' );

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
 * Failsafe: Display Date Linked To Post If Missing Title
 *
 * @param string $title Post Title.
 *
 * @since 1.2.2
 */
function secretum_post_date_linked_to_post( $title = '' ) {
	if ( true === empty( $title ) && ( true === is_front_page() || true === is_home() ) ) {
		secretum_icon(
			[
				'fi' => 'clock',
				'fa' => 'fa-clock-o',
			]
		); ?> <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><time class="entry-date published" datetime="<?php echo esc_html( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></a>
		<?php
	}
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
					'href' => true,
					'rel'  => true,
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
					'href' => true,
					'rel'  => true,
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
			'form'  => [
				'action' => true,
				'class'  => true,
				'method' => true,
			],
			'label' => [
				'for' => true,
			],
			'input' => [
				'name'  => true,
				'id'    => true,
				'type'  => true,
				'size'  => true,
				'value' => true,
			],
			'p'     => true,
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
	$icon = secretum_icon(
		[
			'fi'   => 'pencil',
			'fa'   => 'fa-pencil',
			'echo' => false,
		]
	);

	edit_post_link(
		sprintf(
			wp_kses(
				/* translators: 1. Icon 2. Only visible to screen readers. 3: Name of current post. Only visible to screen readers. */
				'%1$s <span class="screen-reader-text">%2$s %3$s</span>',
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			$icon,
			__( 'Edit Entry', 'secretum' ),
			get_the_title()
		),
		'<span class="edit-link">',
		'</span>'
	);

}//end secretum_edit_link()
