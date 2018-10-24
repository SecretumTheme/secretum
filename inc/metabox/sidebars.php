<?php
/**
 * Sidebars Metabox
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

class SecretumMetaboxSidebars
{

	public function __construct()
	{
		if (is_admin()) {
			add_action('load-post.php', array($this, 'init_metabox'));
			add_action('load-post-new.php', array($this, 'init_metabox'));
		}
	}

	public function init_metabox()
	{
		add_action('add_meta_boxes', array($this, 'add_metabox'));
		add_action('save_post', array($this, 'save_metabox'), 10, 2);
	}

	public function add_metabox()
	{
		add_meta_box(
			'secretum_meta_sidebars',
			__(':: Secretum Settings', 'secretum'),
			array($this, 'render_metabox'),
        	'post',
			'advanced',
			'default'
		);
	}

	public function render_metabox($post)
	{
		// Retrieve an existing value from the database.
		$meta_sidebars = get_post_meta($post->ID, 'secretum_meta_sidebars', true);

		// Set default values.
		if(empty($meta_sidebars)) $meta_sidebars = '';

		// Add nonce for security and authentication.
		wp_nonce_field(SECRETUM_THEME_BASE, 'secretum_meta_sidebars_nonce');

		// Form fields.
		echo '<table class="form-table">';
		echo '	<tr>';
		echo '		<th><label for="secretum_meta_sidebars" class="meta_sidebars_label">' . __('Sidebar Location', 'secretum') . '</label></th>';
		echo '		<td>';
		echo '			<select id="secretum_meta_sidebars" name="secretum_meta_sidebars" class="meta_sidebars_field">';
		echo '			<option value="" ' . selected($meta_sidebars, '', false) . '> ' . __('Default / Template', 'secretum');
		echo '			<option value="left" ' . selected($meta_sidebars, 'left', false) . '> ' . __('Left Side', 'secretum');
		echo '			<option value="right" ' . selected($meta_sidebars, 'right', false) . '> ' . __('Right Side', 'secretum');
		echo '			<option value="none" ' . selected($meta_sidebars, 'none', false) . '> ' . __('No Sidebars', 'secretum');
		echo '			</select>';
		echo '		</td>';
		echo '	</tr>';
		echo '</table>';
	}

	public function save_metabox($post_id, $post)
	{
		// Get Nonce Value
		$nonce = filter_input(INPUT_POST, 'secretum_meta_sidebars_nonce', FILTER_SANITIZE_SPECIAL_CHARS);

		// Require & Verify Nonce
		if (!isset($nonce) || !wp_verify_nonce($nonce, SECRETUM_THEME_BASE)) {
			return $post_id;
		}

		// User Level Check
		if (!current_user_can('edit_post', $post_id)) {
			return $post_id;
		}

		// Ignore if Autosave or Revision
		if (wp_is_post_autosave($post_id) || wp_is_post_revision($post_id)) {
			return $post_id;
		}

		// Get Post Data
		$meta_sidebars = filter_input(INPUT_POST, 'secretum_meta_sidebars', FILTER_SANITIZE_SPECIAL_CHARS);

		// Update Database
		update_post_meta(
			$post_id,
			'secretum_meta_sidebars',
			isset($meta_sidebars) ? sanitize_html_class($meta_sidebars) : ''
		);
	}

}

new SecretumMetaboxSidebars;
