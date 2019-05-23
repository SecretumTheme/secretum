<?php
/**
 * WordPress Metaboxes
 *
 * @package   Secretum
 * @author    SecretumTheme <author@secretumtheme.com>
 * @copyright 2018-2019 Secretum
 * @license   https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link      https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-metaboxes.php
 * @since     1.7.0
 */

namespace Secretum;

/**
 * Custom Metabox for Sidebar Location Selection
 *
 * @since 1.7.0
 */
class Metaboxes {
	/**
	 * Admin Area
	 *
	 * @since 1.7.0
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
	 * @since 1.7.0
	 */
	public function init_metabox() {
		add_action( 'add_meta_boxes', [ $this, 'add_metabox' ] );
		add_action( 'save_post', [ $this, 'save_metabox' ], 10, 2 );
	}//end init_metabox()


	/**
	 * Add Metabox
	 *
	 * @since 1.7.0
	 */
	public function add_metabox() {
		add_meta_box(
			'secretum_metaboxes',
			__( ':: Local Theme Settings', 'secretum' ),
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
	 * Get The Post Meta Setting
	 *
	 * @param int    $post_id      Current Post ID.
	 * @param string $setting_name Post Meta Setting Name Within Secretum Array.
	 * @param string $section_name Section Array Key.
	 *
	 * @since 1.7.0
	 */
	private function post_meta_setting( $post_id, $setting_name = '', $section_name = '' ) {
		$get_post_meta = get_post_meta( $post_id, 'secretum', true );

		if ( true !== empty( $get_post_meta[ $section_name ][ $setting_name ] ) ) {
			return $get_post_meta[ $section_name ][ $setting_name ];
		}

		if ( true !== empty( $get_post_meta[ $setting_name ] ) ) {
			return $get_post_meta[ $setting_name ];
		}

		return '';
	}


	/**
	 * Display Metabox
	 *
	 * @since 1.7.0
	 *
	 * @param object $post WordPress Post Data.
	 */
	public function render_metabox( $post ) {
		$frontpage_id  = get_option( 'page_on_front' );
		$meta_sidebars = $this->post_meta_setting( $post->ID, 'meta_sidebars' );
		wp_nonce_field( SECRETUM_THEME_BASE, 'secretum_meta_nonce' );
		?>
		<table class="form-table">
			<tr>
				<td>
					<select id="secretum_meta_sidebars" name="secretum[meta_sidebars]" class="meta_sidebars_field">
					<option value="" <?php selected( $meta_sidebars, '' ); ?>> <?php esc_html_e( ':: Sidebars', 'secretum' ); ?>
					<option value="none" <?php selected( $meta_sidebars, 'none' ); ?>> - <?php esc_html_e( 'No Sidebars', 'secretum' ); ?>
					<option value="left" <?php selected( $meta_sidebars, 'left' ); ?>> - <?php esc_html_e( 'Left Sidebar', 'secretum' ); ?>
					<option value="right" <?php selected( $meta_sidebars, 'right' ); ?>> - <?php esc_html_e( 'Right Sidebar', 'secretum' ); ?>
					<option value="both" <?php selected( $meta_sidebars, 'both' ); ?>> - <?php esc_html_e( 'Both Sidebars', 'secretum' ); ?>
					</select>
				<?php
				if ( $frontpage_id === $post->ID ) {
					$meta_container_frontpage = $this->post_meta_setting( $post->ID, 'meta_container_type', 'frontpage' );
					?>
					<select id="secretum_meta_container_type" name="secretum[frontpage][meta_container_type]" class="meta_container_type_field">
					<option value="" <?php selected( $meta_container_frontpage, '' ); ?>> <?php esc_html_e( ':: Body Container Type', 'secretum' ); ?>
					<option value="fixed" <?php selected( $meta_container_frontpage, 'fixed' ); ?>> - <?php esc_html_e( 'Responsive, fixed-width', 'secretum' ); ?>
					<option value="fluid" <?php selected( $meta_container_frontpage, 'fluid' ); ?>> - <?php esc_html_e( 'Fluid, full-width', 'secretum' ); ?>
					</select>
					<?php
				} else {
					$meta_container_body = $this->post_meta_setting( $post->ID, 'meta_container_type', 'body' );
					?>
					<select id="secretum_meta_container_type" name="secretum[body][meta_container_type]" class="meta_container_type_field">
					<option value="" <?php selected( $meta_container_body, '' ); ?>> <?php esc_html_e( ':: Body Container Type', 'secretum' ); ?>
					<option value="fixed" <?php selected( $meta_container_body, 'fixed' ); ?>> <?php esc_html_e( 'Responsive, fixed-width', 'secretum' ); ?>
					<option value="fluid" <?php selected( $meta_container_body, 'fluid' ); ?>> <?php esc_html_e( 'Fluid, full-width', 'secretum' ); ?>
					</select>
				</td>
				<?php } ?>
			</tr>
		</table>
		<?php
	}//end render_metabox()


	/**
	 * Save Metabox Data
	 *
	 * @since 1.7.0
	 *
	 * @param int    $post_id Current Post ID.
	 * @param object $post WordPress Post Data.
	 *
	 * @return int $post_id
	 */
	public function save_metabox( $post_id, $post ) {
		// Get Nonce Value.
		$nonce = filter_input( INPUT_POST, 'secretum_meta_nonce', FILTER_SANITIZE_SPECIAL_CHARS );

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

		$post_object_array = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );

		$secretum_object = $post_object_array['secretum'];

		update_post_meta(
			$post_id,
			'secretum',
			$secretum_object
		);
	}//end save_metabox()

}//end class
