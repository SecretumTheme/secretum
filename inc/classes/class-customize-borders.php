<?php
/**
 * Secretum Customizer Settings Interface
 *
 * @package    Secretum
 * @subpackage Core\Classes\Customize_Borders
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-customize-borders.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Customizer Borders Grouping
 *
 * @param object $customizer Secretum Customizer Object.
 * @param array  $defaults   Default Settings Array.
 *
 * @see     functions.php
 * @example $borders = new \Secretum\Customize_Borders( $customizer, $defaults );
 *
 * @since 1.0.0
 */
class Customize_Borders {
	/**
	 * Secretum Customizer Object
	 *
	 * @since 1.0.0
	 * @var array $customizer
	 */
	private $customizer;


	/**
	 * Customizer Default Settings
	 *
	 * @since 1.0.0
	 * @var array $default
	 */
	private $default;


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
			$this->customizer = $customizer;
			$this->default    = $defaults;
		}

	}//end __construct()


	/**
	 * Display Secretum Cusomizer Settings
	 *
	 * @since 1.0.0
	 *
	 * @param array $args [section (required)] Settings.
	 */
	final public function settings( $args = [] ) {
		// Build Args.
		$args = wp_parse_args(
			$args,
			[
				'section' => '',
			]
		);

		// Required.
		if ( empty( $args['section'] ) ) {
			wp_die( esc_html__( 'Section name is required in Borders $args array.', 'secretum' ) );
		}

		// Select.
		$this->customizer->select(
			$args['section'],
			$args['section'] . '_border_type',
			__( 'Border Type', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_border_type' ],
			secretum_customizer_border_types()
		);

		// Select.
		$this->customizer->select(
			$args['section'],
			$args['section'] . '_border_radius',
			__( 'Border Radius', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_border_radius' ],
			secretum_customizer_border_radius()
		);

		// Select.
		$this->customizer->select(
			$args['section'],
			$args['section'] . '_border_color',
			__( 'Border Color', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_border_color' ],
			secretum_customizer_border_colors()
		);

	}//end settings()

}//end class
