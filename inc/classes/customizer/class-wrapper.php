<?php
/**
 * Secretum Customizer Settings Interface
 *
 * @package    Secretum
 * @subpackage Core\Classes\Customizer\Wrapper
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-wrapper.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Customizer Wrapper Grouping
 *
 * @since 1.0.0
 *
 * @param object $customizer Secretum Customizer Object.
 * @param array  $defaults   Default Settings Array.
 */
class Wrapper {
	/**
	 * Secretum Customizer Object
	 *
	 * @since 1.0.0
	 * @var array $_customizer
	 */
	private $_customizer;


	/**
	 * Customizer Default Settings
	 *
	 * @since 1.0.0
	 * @var array $_default
	 */
	private $_default;


	/**
	 * Start Class
	 *
	 * @since 1.0.0
	 *
	 * @param object $customizer Secretum Customizer Object.
	 * @param array  $defaults   Default Settings Array.
	 */
	public function __construct( $customizer, $defaults ) {
		if ( true === isset( $customizer ) && true === is_object( $customizer ) ) {
			$this->_customizer 	= $customizer;
			$this->_default 	= $defaults;
		}

	}//end __construct()


	/**
	 * Display Secretum Cusomizer Section & Settings
	 *
	 * @since 1.0.0
	 *
	 * @param array $args [section (required), panel, title] Settings.
	 */
	final public function settings( array $args ) {
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
			$this->_default[ $args['section'] . '_wrapper_background_color' ],
			secretum_customizer_background_colors()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_wrapper',
			$args['section'] . '_wrapper_margin_top',
			__( 'Margin - Top', 'secretum' ),
			__( 'Spacing outside/above the wrapper.', 'secretum' ),
			$this->_default[ $args['section'] . '_wrapper_margin_top' ],
			secretum_customizer_margin_top()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_wrapper',
			$args['section'] . '_wrapper_margin_bottom',
			__( 'Margin - Bottom', 'secretum' ),
			__( 'Spacing outside/below the wrapper.', 'secretum' ),
			$this->_default[ $args['section'] . '_wrapper_margin_bottom' ],
			secretum_customizer_margin_bottom()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_wrapper',
			$args['section'] . '_wrapper_padding_y',
			__( 'Padding - Top & Bottom', 'secretum' ),
			__( 'Spacing inside the wrapper.', 'secretum' ),
			$this->_default[ $args['section'] . '_wrapper_padding_y' ],
			secretum_customizer_padding_top_bottom()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_wrapper',
			$args['section'] . '_wrapper_padding_x',
			__( 'Padding - Left & Right', 'secretum' ),
			__( 'Spacing inside the wrapper.', 'secretum' ),
			$this->_default[ $args['section'] . '_wrapper_padding_x' ],
			secretum_customizer_padding_left_right()
		);

	}//end settings()


	/**
	 * Build Section Title
	 *
	 * @since 1.0.0
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
	 * @since 1.0.0
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


}//end class
