<?php
/**
 * Theme Admin Page Manager
 *
 * @package    Secretum
 * @subpackage Core\Classes\ThemePage
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-themepage.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Display Theme Admin Page
 *
 * @since 1.0.0
 */
class ThemePage {
	/**
	 * Instance Object
	 *
	 * @since 1.0.0
	 * @var object $instance
	 */
	protected static $instance = null;

	/**
	 * Tab Names
	 *
	 * @since 1.0.0
	 * @var array $_tabs
	 */
	private $_tabs;

	/**
	 * Menu & Page Title
	 *
	 * @since 1.0.0
	 * @var string $_title
	 */
	private $_title;

	/**
	 * Allowed Customizer Sections
	 *
	 * @since 1.0.0
	 * @var array $_sections
	 */
	private $_sections;

	/**
	 * Export Section Name
	 *
	 * @since 1.0.0
	 * @var string $_section
	 */
	private $_section;

	/**
	 * Export Import Class
	 *
	 * @since 1.0.0
	 * @var object $_ei
	 */
	private $_ei;


	/**
	 * Initize Class
	 *
	 * @since 1.0.0
	 */
	final public function init() {
		// Tabs.
		$this->_tabs = [
			'home' 	=> __( 'Home', 'secretum' ),
			'ei' 	=> __( 'Exports / Imports', 'secretum' ),
		];

		// Menu & Page Title.
		$this->_title = __( 'Secretum Theme', 'secretum' );

		// Allowed Customizer Sections.
		$this->_sections = [
			'all_settings' 		=> __( 'All Settings', 'secretum' ),
			'globals' 			=> __( 'Globals', 'secretum' ),
			'site_identity' 	=> __( 'Site Identity', 'secretum' ),
			'header_top' 		=> __( 'Header Top', 'secretum' ),
			'header' 			=> __( 'Header', 'secretum' ),
			'primary_nav' 		=> __( 'Primary Nav', 'secretum' ),
			'body' 				=> __( 'Body', 'secretum' ),
			'featured_image' 	=> __( 'Featured Image', 'secretum' ),
			'entry' 			=> __( 'Entry', 'secretum' ),
			'sidebar' 			=> __( 'Sidebar', 'secretum' ),
			'footer' 			=> __( 'Footer', 'secretum' ),
			'copyright' 		=> __( 'Copyright', 'secretum' ),
			'copyright_nav' 	=> __( 'Copyright Nav', 'secretum' ),
			'extras' 			=> __( 'Extras', 'secretum' ),
			'translations' 		=> __( 'Translations', 'secretum' ),
		];

		// Clear Setting.
		$this->_section = '';

		// If Theme Admin & Section Dropdown Post.
		if ( 'secretum' === $this->_query( 'page' ) && filter_input( INPUT_POST, 'section' ) === true ) {
			// Export / Import Manager.
			$this->_ei = new ExportImport;

			if ( in_array( filter_input( INPUT_POST, 'section' ), array_keys( $this->_sections ), true ) === true ) {
				// Nonce Validation.
				$this->_validate();

				// Set Section To Selection.
				$this->_section = filter_input( INPUT_POST, 'section' );

				// Import Data.
				$this->_import = filter_input( INPUT_POST, 'import' );

				if ( empty( $this->_import ) === false ) {
					$this->_ei->import( $this->_import );
				}
			}
		}

		// Add Menu Page.
		add_theme_page(
			'',
			$this->_title,
			'edit_theme_options',
			'secretum',
			[
				$this,
				'render_content',
			]
		);
	}//end init()


	/**
	 * Render Page Content
	 *
	 * @since 1.0.0
	 */
	final public function render_content() {
		echo '<div class="wrap">';
		echo '<h1 class="wp-heading-inline">' . esc_html( $this->_title ) . '</h1>';

		// Heading Buttons.
		$this->_display_heading_butons();

		// Section Tabs.
		echo wp_kses_post( $this->_display_tabs() );

		// Content.
		echo '<div id="poststuff">';
		echo '<div id="post-body" class="metabox-holder columns-2">';
		echo '<div id="post-body-content">';
		echo '<div class="postbox"><div class="inside">';

		// If Tab Query & Query Within Tabs Array.
		if ( $this->_query( 'tab' ) === true && isset( $this->_tabs[ $this->_query( 'tab' ) ] ) === true ) {
			// Build Method Name.
			$method_name = 'display_' . $this->_query( 'tab' ) . '_tab';

			// Display Content.
			$this->$method_name();
		} else {
			// Display Home Tab.
			$this->_display_home_tab();
		}

		echo '</div></div><!-- .inside .postbox -->';
		echo '</div><!-- #post-body-content -->';

		// Sidebar.
		$this->_display_sidebar();

		echo '<br class="clear" />';

		echo '</div><!-- .metabox-holder -->';
		echo '</div><!-- #poststuff -->';
		echo '</div><!-- .wrap -->';
	}//end render_content()


	/**
	 * Render Home Tab Display
	 *
	 * @since 1.0.0
	 */
	final private function _display_home_tab() {
	?>
		<p>content 1</p>
	<?php
	}//end _display_home_tab()


	/**
	 * Render Export/ Import Tab Display
	 */
	final private function _display_ei_tab() {
	?>
	<h3><?php esc_html_e( 'Export and Import Secretum Settings', 'secretum' );?></h3>
	<p><?php esc_html_e( '...', 'secretum' );?></p>

	<form enctype="multipart/form-data" method="post" action="">
	<?php wp_nonce_field( 'secretum_ei_action', 'secretum_ei_nonce' ); ?>
	<table class="form-table">
	<tr>
		<td>
			<label for="section"><b><?php esc_html_e( 'Select A Customizer Section', 'secretum' )?></b></label><br />
			<select name="section" id="section" class="postform">
				<?php
				foreach ( $this->_sections as $value => $_title ) {
					echo '<option value="' . esc_attr( $value ) . '"' . selected( $this->_section, esc_attr( $value ) ) . '>' . esc_html( $_title ) . '</option>';
				}
				?>
			</select> <input type="submit" name="submit" id="submit" class="submit button button-primary" value="<?php esc_html_e( 'Manage', 'secretum' ); ?>">
		</td>
	</tr>
	</table>

	<?php if ( empty( $this->_section ) === false ) { ?>
		<hr />

		<h3><?php esc_html_e( 'Export for', 'secretum' ); ?>: <?php echo esc_html( ucwords( str_replace( '_', ' ', $this->_section ) ) ); ?></h3>
		<p class="description"><?php esc_html_e( 'Exported data includes Secretum Theme settings only.', 'secretum' ); ?></p>

		<table class="form-table">
		<tr>
			<td><textarea name="export" class="large-text code" id="export" rows="8" onclick="this.focus();this.select()"><?php echo wp_kses_post( $this->_ei->export( $this->_section ) ); ?></textarea></td>
		</tr>
		</table>

		<hr />

		<h3><?php esc_html_e( 'Import for', 'secretum' ); ?>: <?php echo esc_html( ucwords( str_replace( '_', ' ', $this->_section ) ) ); ?></h3>
		<p class="description"><?php esc_html_e( 'Imported data must match the selected section.', 'secretum' ); ?></p>

		<table class="form-table">
		<tr>
			<td><textarea name="import" class="large-text code" id="import" rows="8"></textarea></td>
		</tr>
		</table>

		<input type="submit" name="submit" id="submit" class="submit button button-primary" value="<?php esc_html_e( 'Import', 'secretum' ); ?>">
	<?php } ?>

	</form>
	<?php
	}//end _display_ei_tab()


	/**
	 * Render Sidebar Display
	 */
	final private function _display_sidebar() {
	?>
		<div id="postbox-container-1" class="postbox-container">
			<div class="postbox">
				<h3><span>sidebar area</span></h3>
				<div class="inside"><div class="para">

					sidebar area

				</div></div><!-- end inside-pad & inside -->
			</div><!-- end postbox -->
		</div><!-- .postbox-container-1 -->
	<?php
	}//end _display_sidebar()


	/**
	 * Render Export/ Import Tab Display
	 *
	 * @since 1.0.0
	 */
	final private function _display_heading_butons() {
	?>
		<a class="page-title-action hide-if-no-customize" href="/wp-admin/customize.php?return=%2Fwp-admin%2Fthemes.php%3Fpage%3Dsecretum"><?php esc_html_e( 'Customizer', 'secretum' ); ?></a> 
		<a class="page-title-action hide-if-no-customize" href="#"><?php esc_html_e( 'Documents', 'secretum' ); ?></a> 
		<a class="page-title-action hide-if-no-customize" href="#"><?php esc_html_e( 'Support', 'secretum' ); ?></a>

		<hr />
	<?php
	}//end _display_heading_butons()


	/**
	 * Display Admin Area Tabs
	 *
	 * @since 1.0.0
	 *
	 * @return string $html Tab Display
	 */
	final private function _display_tabs() {
		$html = '<h2 class="nav-tab-wrapper wp-clearfix">';

		// Set Current Tab.
		if ( $this->_query( 'tab' ) === true ) {
			$current = $this->_query( 'tab' );
		} else {
			$current = key( $this->_tabs );
		}

		foreach ( $this->_tabs as $tab => $name ) {
			// Current Tab Class.
			$class = ( $tab === $current ) ? ' nav-tab-active' : '';

			// Tab Links.
			$html .= '<a href="?page=' . $this->_query( 'page' ) . '&tab=' . $tab . '" class="nav-tab' . $class . '">' . $name . '</a>';
		}

		$html .= '</h2><br />';

		return $html;
	}//end _display_tabs()


	/**
	 * Get Query String Item
	 *
	 * @since 1.0.0
	 *
	 * @param string $get Query String Get Item.
	 *
	 * @return string Query String Item Sanitized
	 */
	final private function _query( $get ) {
		// Lowercase & Sanitize String.
		$filter = strtolower( filter_input( INPUT_GET, $get, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK ) );

		// Return No Spaces/Tabs, Stripped/Cleaned String.
		return sanitize_text_field( preg_replace( '/\s/', '', $filter ) );
	}//end _query()


	/**
	 * Validate Nonce
	 *
	 * @since 1.0.0
	 */
	final private function _validate() {
		if ( check_admin_referer( 'secretum_ei_action', 'secretum_ei_nonce' ) === false ) {
			wp_die( esc_html__( 'You are not authorized to perform this action.', 'secretum' ) );
		}
	}//end _validate()


	/**
	 * Create Instance
	 *
	 * @since 1.0.0
	 *
	 * @return object $instance Instance Object.
	 */
	public static function instance() {
		if ( false === self::$instance ) {
			self::$instance = new self();
			self::$instance->init();
		}

		return self::$instance;
	}//end instance()
}//end class
