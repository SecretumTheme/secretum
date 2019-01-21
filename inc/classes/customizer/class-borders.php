<?php
/**
 * Secretum Customizer Settings Interface
 *
 * @package    Secretum
 * @subpackage Secretum\Customizer\Borders
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-container.php
 */

namespace Secretum;

/**
 * Customizer Borders Grouping
 *
 * @example \Secretum\Borders::instance( $customizer, $default )->settings( [
 *				'section' 	=> 'header_wrapper',
 *			] );
 * @example echo esc_html( \Secretum\Borders::classes( 'header_wrapper' ) );
 */
class Borders {
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
	 * Display Secretum Cusomizer Settings
	 *
	 * @param array $args [section (required)] Settings.
	 */
	final public function settings( $args = [] ) {
		// Build Args.
		$args = wp_parse_args( $args, [
			'section' 	=> '',
			'selector' 	=> false,
			'callback' 	=> false,
		] );

		// Required.
		if ( empty( $args['section'] ) ) {
			wp_die( esc_html__( 'Section name is required in Borders $args array.', 'secretum' ) );
		}

		// Select.
		$this->_customizer->select(
			$args['section'],
			$args['section'] . '_border_type',
			__( 'Border Type', 'secretum' ),
			'',
			$this->_default[$args['section'] . '_border_type'],
			secretum_customizer_border_types()
		);

		// Select.
		$this->_customizer->select(
			$args['section'],
			$args['section'] . '_border_radius',
			__( 'Border Radius', 'secretum' ),
			'',
			$this->_default[$args['section'] . '_border_radius'],
			secretum_customizer_border_radius()
		);

		// Select.
		$this->_customizer->select(
			$args['section'],
			$args['section'] . '_border_color',
			__( 'Border Color', 'secretum' ),
			'',
			$this->_default[$args['section'] . '_border_color'],
			secretum_customizer_border_colors()
		);

		// Partial.
		if ( false !== $args['selector'] && false !== $args['callback'] ) {
			$this->_customizer->add_partial(
				$args['section'],
				$args['selector'],
				$args['callback']
			);
		}

	}//end settings()


	/**
	 * Build Unfiltered Class(es) String
	 *
	 * @param string $section Section Shortname.
	 *
	 * @return string Classes.
	 */
	final public static function classes( $section ) {
		$type 	= secretum_mod( $section . '_border_type', 'attr', true );
		$color 	= secretum_mod( $section . '_border_color', 'attr', true );
		$radius = secretum_mod( $section . '_border_radius', 'attr', true );
		return $type . $color . $radius;

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
			$title = __( 'Borders', 'secretum' );
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
