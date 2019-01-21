<?php
/**
 * Secretum Customizer Settings Interface
 *
 * @package    Secretum
 * @subpackage Secretum\Customizer\Wrapper
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-wrapper.php
 */

namespace Secretum;

/**
 * Customizer Wrapper Grouping
 *
 * @example \Secretum\Wrapper::instance( $customizer, $default )->settings( [
 *				'section' => 'header',
 *			] );
 * @example echo esc_html( \Secretum\Wrapper::classes( 'header' ) );
 */
class Wrapper {
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
		] );

		// Required.
		if ( empty( $args['section'] ) ) {
			wp_die( esc_html__( 'Section name is required in Wrapper $args array.', 'secretum' ) );
		}

		// Section.
		$this->_customizer->section(
			$args['section'] . '_wrapper',
			$this->_panel( $args['section'], $args['panel'] ),
			$this->_title( $args['title'] ),
			__( 'Wraps around all other containers, elements, and features related to this section.', 'secretum' )
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_wrapper',
			$args['section'] . '_wrapper_background_color',
			__( 'Background Color', 'secretum' ),
			'',
			$this->_default[$args['section'] . '_wrapper_background_color'],
			secretum_customizer_background_colors()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_wrapper',
			$args['section'] . '_wrapper_margin_top',
			__( 'Margin - Top', 'secretum' ),
			__( 'Spacing outside/before section.', 'secretum' ),
			$this->_default[$args['section'] . '_wrapper_margin_top'],
			secretum_customizer_margin_top()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_wrapper',
			$args['section'] . '_wrapper_margin_bottom',
			__( 'Margin - Bottom', 'secretum' ),
			__( 'Spacing outside/after section.', 'secretum' ),
			$this->_default[$args['section'] . '_wrapper_margin_bottom'],
			secretum_customizer_margin_bottom()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_wrapper',
			$args['section'] . '_wrapper_padding_y',
			__( 'Padding - Top & Bottom', 'secretum' ),
			__( 'Spacing inside the wrapper.', 'secretum' ),
			$this->_default[$args['section'] . '_wrapper_padding_y'],
			secretum_customizer_padding_top_bottom()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_wrapper',
			$args['section'] . '_wrapper_padding_x',
			__( 'Padding - Left & Right', 'secretum' ),
			__( 'Spacing inside the wrapper.', 'secretum' ),
			$this->_default[$args['section'] . '_wrapper_padding_x'],
			secretum_customizer_padding_left_right()
		);

	}//end settings()


	/**
	 * Build Unfiltered Class(es) String
	 *
	 * @param string $section Section Shortname.
	 */
	final public static function classes( $section ) {
		$background 	= secretum_mod( $section . '_wrapper_background_color', 'attr', true );
		$margin_top 	= secretum_mod( $section . '_wrapper_margin_top', 'attr', true );
		$margin_bottom 	= secretum_mod( $section . '_wrapper_margin_bottom', 'attr', true );
		$padding_y 		= secretum_mod( $section . '_wrapper_padding_y', 'attr', true );
		$padding_x 		= secretum_mod( $section . '_wrapper_padding_x', 'attr', true );
		return $background . $margin_top . $margin_bottom . $padding_y . $padding_x;

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
			$title = __( 'Wrapper', 'secretum' );
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
