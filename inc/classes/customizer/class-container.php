<?php
/**
 * Secretum Customizer Settings Interface
 *
 * @package    Secretum
 * @subpackage Secretum\Customizer\Container
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-container.php
 */

namespace Secretum;

/**
 * Customizer Container Grouping
 *
 * @example \Secretum\Container::instance( $customizer, $default )->settings( [
 *				'panel' 	=> 'site_identity',
 *				'section' 	=> 'site_identity_title',
 *				'title' 	=> __( 'Title Container', 'secretum' ),
 *			] );
 * @example echo esc_html( \Secretum\Container::classes( 'site_identity_title' ) );
 */
class Container {
	/**
	 * Instance Object
	 *
	 * @var object
	 */
	protected static $instance = null;

	/**
	 * Class Object
	 *
	 * @var array
	 */
	private $_customizer;

	/**
	 * Customizer Default Settings
	 *
	 * @var array
	 */
	private $_default;


	/**
	 * Set Class Vars
	 *
	 * @param object $customizer Secretum Customize Instance.
	 * @param array  $defaults Customizer Default Settings Array.
	 */
	final public function init( $customizer, $defaults ) {
		$this->_default 	= $defaults;
		$this->_customizer 	= $customizer;

	}//end init()


	/**
	 * Display Secretum Cusomizer Section & Settings
	 *
	 * @param array $args [section (required), panel, title] Settings.
	 */
	final public function settings( $args = [] ) {
		// Build Args.
		$args = wp_parse_args( $args, [
			'section' 	=> '',
			'panel' 	=> '',
			'title' 	=> '',
			'type' 		=> true,
		] );

		// Required.
		if ( empty( $args['section'] ) ) {
			wp_die( esc_html__( 'Section name is required in Container $args array.', 'secretum' ) );
		}

		// Section.
		$this->_customizer->section(
			$args['section'] . '_container',
			$this->_panel( $args['section'], $args['panel'] ),
			$this->_title( $args['title'] ),
			__( 'A container that holds other related elements, features, content, etc. (Wrapper > Container > Other Stuff)', 'secretum' )
		);

		if ( true === $args['type'] ) {
			// Radio.
			$this->_customizer->radio(
				$args['section'] . '_container',
				$args['section'] . '_container_type',
				__( 'Container Type', 'secretum' ),
				'',
				$this->_default[$args['section'] . '_container_type'],
				secretum_customizer_container_types()
			);
		}

		// Select.
		$this->_customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_background_color',
			__( 'Background Color', 'secretum' ),
			'',
			$this->_default[$args['section'] . '_container_background_color'],
			secretum_customizer_background_colors()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_margin_top',
			__( 'Margin - Top & Bottom', 'secretum' ),
			__( 'Spacing around the container.', 'secretum' ),
			$this->_default[$args['section'] . '_container_margin_top'],
			secretum_customizer_margin_top_bottom()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_margin_bottom',
			__( 'Margin - Left & Right', 'secretum' ),
			__( 'Spacing around the container.', 'secretum' ),
			$this->_default[$args['section'] . '_container_margin_bottom'],
			secretum_customizer_margin_left_right()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_padding_y',
			__( 'Padding - Top & Bottom', 'secretum' ),
			__( 'Spacing inside the container.', 'secretum' ),
			$this->_default[$args['section'] . '_container_padding_y'],
			secretum_customizer_padding_top_bottom()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_padding_x',
			__( 'Padding - Left & Right', 'secretum' ),
			__( 'Spacing inside the container.', 'secretum' ),
			$this->_default[$args['section'] . '_container_padding_x'],
			secretum_customizer_padding_left_right()
		);

	}//end settings()


	/**
	 * Build Unfiltered Class(es) String
	 *
	 * @param string $section Section Shortname.
	 *
	 * @return string Classes.
	 */
	final public static function classes( $section ) {
		$background = secretum_mod( $section . '_container_background_color', 'attr', true );
		$margin_y 	= secretum_mod( $section . '_container_margin_y', 'attr', true );
		$margin_x 	= secretum_mod( $section . '_container_margin_x', 'attr', true );
		$padding_y 	= secretum_mod( $section . '_container_padding_y', 'attr', true );
		$padding_x 	= secretum_mod( $section . '_container_padding_x', 'attr', true );
		return $background . $margin_y . $margin_x . $padding_y . $padding_x;

	}//end classes()


	/**
	 * Build Section Title
	 *
	 * @param string $title Alt Section Title.
	 *
	 * @return string Alt Section Title.
	 */
	final private function _title( $title = '' ) {
		if ( empty( $title ) ) {
			$title = __( 'Container', 'secretum' );
		}

		return $title;

	}//end _title()


	/**
	 * Build Panel Name
	 *
	 * @param string $section Section Name.
	 * @param string $panel Panel Name.
	 *
	 * @return string Alt Section Title.
	 */
	final private function _panel( $section, $panel = '' ) {
		if ( empty( $panel ) ) {
			$panel = $section;
		} else {
			$panel = $panel;
		}

		return $panel;

	}//end _panel()


	/**
	 * Create Instance
	 *
	 * @param object $customizer Secretum Customize Instance.
	 * @param array  $defaults Customizer Default Settings Array.
	 *
	 * @return object $instance Instance Object.
	 */
	public static function instance( $customizer, $defaults ) {
		if ( ! self::$instance ) {
			self::$instance = new self();
			self::$instance->init( $customizer, $defaults );
		}

		return self::$instance;

	}//end instance()


}//end class
