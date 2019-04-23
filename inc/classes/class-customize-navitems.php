<?php
/**
 * Secretum Customizer Settings Interface
 *
 * @package    Secretum
 * @subpackage Core\Classes\Customize_NavItems
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-customize-navitems.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Customizer NavItems Grouping
 *
 * @param object $customizer Secretum Customizer Object.
 * @param array  $defaults   Default Settings Array.
 *
 * @see     functions.php
 * @example $navitems = new \Secretum\Customize_NavItems( $customizer, $defaults );
 *
 * @since 1.0.0
 */
class Customize_NavItems {
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
	 * Display Secretum Cusomizer Section & Settings
	 *
	 * @since 1.0.0
	 *
	 * @param array $args [section (required)] Settings.
	 */
	final public function settings( array $args ) {
		// Build Args.
		$args = wp_parse_args(
			$args,
			[
				'section' => '',
			]
		);

		// Required.
		if ( empty( $args['section'] ) ) {
			wp_die( esc_html__( 'Section name is required in NavItems $args array.', 'secretum' ) );
		}

		// Section.
		$this->customizer->section(
			$args['section'] . '_items',
			$args['section'],
			__( 'Menu Items', 'secretum' ),
			__( 'Customize the properties of items within the menu.', 'secretum' )
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_text_alignment',
			__( 'Text Alignment', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_items_text_alignment' ],
			secretum_customizer_text_alignments()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_background_color',
			__( 'Background Color', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_items_background_color' ],
			secretum_customizer_background_colors()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_background_hover_color',
			__( 'Background Hover Color', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_items_background_hover_color' ],
			secretum_customizer_background_hover_colors()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_margin_y',
			__( 'Margin - Top & Bottom', 'secretum' ),
			__( 'Spacing outside/around the container.', 'secretum' ),
			$this->default[ $args['section'] . '_items_margin_y' ],
			secretum_customizer_margin_top_bottom()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_margin_x',
			__( 'Margin - Left & Right', 'secretum' ),
			__( 'Spacing outside/around the container.', 'secretum' ),
			$this->default[ $args['section'] . '_items_margin_x' ],
			secretum_customizer_margin_left_right()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_padding_y',
			__( 'Padding - Top & Bottom', 'secretum' ),
			__( 'Spacing inside the container.', 'secretum' ),
			$this->default[ $args['section'] . '_items_padding_y' ],
			secretum_customizer_padding_top_bottom()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_padding_x',
			__( 'Padding - Left & Right', 'secretum' ),
			__( 'Spacing inside the container.', 'secretum' ),
			$this->default[ $args['section'] . '_items_padding_x' ],
			secretum_customizer_padding_left_right()
		);

	}//end settings()

}//end class
