<?php
/**
 * Secretum Customizer Settings Interface
 *
 * @package    Secretum
 * @subpackage Core\Classes\Customizer\Dropdown
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-dropdown.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Customizer Dropdown Menu Grouping
 *
 * @since 1.0.0
 *
 * @param object $customizer Secretum Customizer Object.
 * @param array  $defaults   Default Settings Array.
 */
class Dropdown {
	/**
	 * Secretum Customizer Object
	 *
	 * @since 1.0.0
	 * @var object $_customizer
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
	 * @param array $args [section (required)] Settings.
	 */
	final public function settings( array $args ) {
		// Build Args.
		$args = wp_parse_args( $args, [
			'section' => '',
		] );

		// Required.
		if ( empty( $args['section'] ) ) {
			wp_die( esc_html__( 'Section name is required in Dropdown $args array.', 'secretum' ) );
		}

		// Section.
		$this->_customizer->section(
			$args['section'] . '_dropdown',
			$args['section'],
			__( 'Dropdown Container', 'secretum' ),
			__( 'Customize the properties of menus dropdown.', 'secretum' )
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_dropdown',
			$args['section'] . '_dropdown_background_color',
			__( 'Background Color', 'secretum' ),
			'',
			$this->_default[ $args['section'] . '_dropdown_background_color' ],
			secretum_customizer_background_colors()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_dropdown',
			$args['section'] . '_dropdown_background_hover_color',
			__( 'Background Hover Color', 'secretum' ),
			'',
			$this->_default[ $args['section'] . '_dropdown_background_hover_color' ],
			secretum_customizer_background_hover_colors()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_dropdown',
			$args['section'] . '_dropdown_margin_y',
			__( 'Margin - Top & Bottom', 'secretum' ),
			__( 'Spacing outside/around the container.', 'secretum' ),
			$this->_default[ $args['section'] . '_dropdown_margin_y' ],
			secretum_customizer_margin_top_bottom()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_dropdown',
			$args['section'] . '_dropdown_margin_x',
			__( 'Margin - Left & Right', 'secretum' ),
			__( 'Spacing outside/around the container.', 'secretum' ),
			$this->_default[ $args['section'] . '_dropdown_margin_x' ],
			secretum_customizer_margin_left_right()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_dropdown',
			$args['section'] . '_dropdown_padding_y',
			__( 'Padding - Top & Bottom', 'secretum' ),
			__( 'Spacing inside the container.', 'secretum' ),
			$this->_default[ $args['section'] . '_dropdown_padding_y' ],
			secretum_customizer_padding_top_bottom()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_dropdown',
			$args['section'] . '_dropdown_padding_x',
			__( 'Padding - Left & Right', 'secretum' ),
			__( 'Spacing inside the container.', 'secretum' ),
			$this->_default[ $args['section'] . '_dropdown_padding_x' ],
			secretum_customizer_padding_left_right()
		);

	}//end settings()

}//end class
