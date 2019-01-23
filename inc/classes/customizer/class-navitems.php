<?php
/**
 * Secretum Customizer Settings Interface
 *
 * @package    Secretum
 * @subpackage Classes\Customizer\NavItems
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-navitems.php
 */

namespace Secretum;

/**
 * Customizer NavItems Grouping
 */
class NavItems {
	/**
	 * Secretum Customizer Object
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
	 * Start Class
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
	 * @param array $args [section (required)] Settings.
	 */
	final public function settings( array $args ) {
		// Build Args.
		$args = wp_parse_args( $args, [
			'section' 	=> '',
		] );

		// Required.
		if ( empty( $args['section'] ) ) {
			wp_die( esc_html__( 'Section name is required in NavItems $args array.', 'secretum' ) );
		}

		// Section.
		$this->_customizer->section(
			$args['section'] . '_items',
			$args['section'],
			__( 'Menu Items', 'secretum' ),
			__( 'Customize the properties of items within the menu.', 'secretum' )
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_alignment',
			__( 'Alignment', 'secretum' ),
			'',
			$this->_default[ $args['section'] . '_items_alignment' ],
			secretum_customizer_margin_alignments()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_background_color',
			__( 'Background Color', 'secretum' ),
			'',
			$this->_default[ $args['section'] . '_items_background_color' ],
			secretum_customizer_background_colors()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_background_hover_color',
			__( 'Background Hover Color', 'secretum' ),
			'',
			$this->_default[ $args['section'] . '_items_background_hover_color' ],
			secretum_customizer_background_hover_colors()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_margin_y',
			__( 'Margin - Top & Bottom', 'secretum' ),
			__( 'Spacing outside/around the container.', 'secretum' ),
			$this->_default[ $args['section'] . '_items_margin_y' ],
			secretum_customizer_margin_top_bottom()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_margin_x',
			__( 'Margin - Left & Right', 'secretum' ),
			__( 'Spacing outside/around the container.', 'secretum' ),
			$this->_default[ $args['section'] . '_items_margin_x' ],
			secretum_customizer_margin_left_right()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_padding_y',
			__( 'Padding - Top & Bottom', 'secretum' ),
			__( 'Spacing inside the container.', 'secretum' ),
			$this->_default[ $args['section'] . '_items_padding_y' ],
			secretum_customizer_padding_top_bottom()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_items',
			$args['section'] . '_items_padding_x',
			__( 'Padding - Left & Right', 'secretum' ),
			__( 'Spacing inside the container.', 'secretum' ),
			$this->_default[ $args['section'] . '_items_padding_x' ],
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
		$background 		= secretum_mod( $section . '_background_color', 'attr', true );
		$background_hover 	= secretum_mod( $section . '_background_hover_color', 'attr', true );
		$margin_y 			= secretum_mod( $section . '_margin_y', 'attr', true );
		$margin_x 			= secretum_mod( $section . '_margin_x', 'attr', true );
		$padding_y 			= secretum_mod( $section . '_padding_y', 'attr', true );
		$padding_x 			= secretum_mod( $section . '_padding_x', 'attr', true );
		return $background . $background_hover . $margin_y . $margin_x . $padding_y . $padding_x;

	}//end classes()


}//end class
