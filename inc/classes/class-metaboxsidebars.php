<?php
/**
 * WordPress Metaboxes
 *
 * @package    Secretum
 * @subpackage Core\Classes\MetaboxSidebars
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-metaboxsidebars.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Custom Metabox for Sidebar Location Selection
 *
 * @since 1.0.0
 */
class MetaboxSidebars {
	/**
	 * Admin Area
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		if ( is_admin() ) {
			add_action( 'load-post.php', [ $this, 'init_metabox' ] );
			add_action( 'load-post-new.php', [ $this, 'init_metabox' ] );
		}

	}//end __construct()


	/**
	 * Hook Add / Save Metabox
	 *
	 * @since 1.0.0
	 */
	public function init_metabox() {
		add_action( 'add_meta_boxes', [ $this, 'add_metabox' ] );
		add_action( 'save_post', [ $this, 'save_metabox' ], 10, 2 );

	}//end init_metabox()


	/**
	 * Add Metabox
	 *
	 * @since 1.0.0
	 */
	public function add_metabox() {
		add_meta_box(
			'secretum_meta_sidebars',
			__( 'Sidebar Locations', 'secretum' ),
			[
				$this,
				'render_metabox',
			],
			[
				'post',
				'page',
				'product',
			],
			'advanced',
			'default'
		);

	}//end add_metabox()


	/**
	 * Display Metabox
	 *
	 * @since 1.0.0
	 *
	 * @param object $post WordPress Post Data.
	 */
	public function render_metabox( $post ) {
		// Retrieve an existing value from the database.
		$meta_sidebars = get_post_meta( $post->ID, 'secretum_meta_sidebars', true );

		// Set default values.
		if ( empty( $meta_sidebars ) ) {
			$meta_sidebars = '';
		}

		// Add Nonce.
		wp_nonce_field( SECRETUM_THEME_BASE, 'secretum_meta_sidebars_nonce' );
	?>
		<table class="form-table"></table>
			<tr>
				<td>
					<select id="secretum_meta_sidebars" name="secretum_meta_sidebars" class="meta_sidebars_field">
					<option value="" <?php selected( $meta_sidebars, '', false ); ?>> <?php esc_html_e( 'Default / Template', 'secretum' ); ?>
					<option value="none" <?php selected( $meta_sidebars, 'none', false ); ?>> <?php esc_html_e( 'No Sidebars', 'secretum' ); ?>
					<option value="left" <?php selected( $meta_sidebars, 'left', false ); ?>> <?php esc_html_e( 'Left Sidebar', 'secretum' ); ?>
					<option value="right" <?php selected( $meta_sidebars, 'right', false ); ?>> <?php esc_html_e( 'Right Sidebar', 'secretum' ); ?>
					<option value="both" <?php selected( $meta_sidebars, 'both', false ); ?>> <?php esc_html_e( 'Both Sidebars', 'secretum' ); ?>
					</select>
				</td>
			</tr>
		</table>
	<?php

	}//end render_metabox()


	/**
	 * Save Metabox Data
	 *
	 * @since 1.0.0
	 *
	 * @param int    $post_id Current Post ID.
	 * @param object $post WordPress Post Data.
	 *
	 * @return int $post_id
	 */
	public function save_metabox( $post_id, $post ) {
		// Get Nonce Value.
		$nonce = filter_input( INPUT_POST, 'secretum_meta_sidebars_nonce', FILTER_SANITIZE_SPECIAL_CHARS );

		// Require & Verify Nonce.
		if ( false === isset( $nonce ) || false === wp_verify_nonce( $nonce, SECRETUM_THEME_BASE ) ) {
			return $post_id;
		}

		// User Level Check.
		if ( false === current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}

		// Ignore if Autosave or Revision.
		if ( true === wp_is_post_autosave( $post_id ) || true === wp_is_post_revision( $post_id ) ) {
			return $post_id;
		}

		// Get Post Data.
		$meta_sidebars = filter_input( INPUT_POST, 'secretum_meta_sidebars', FILTER_SANITIZE_SPECIAL_CHARS );

		// Update Database.
		update_post_meta(
			$post_id,
			'secretum_meta_sidebars',
			isset( $meta_sidebars ) ? sanitize_html_class( $meta_sidebars ) : ''
		);

	}//end save_metabox()

}//end class
