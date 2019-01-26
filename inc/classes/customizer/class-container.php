<?php
/**
 * Secretum Customizer Settings Interface
 *
 * @package    Secretum
 * @subpackage Core\Classes\Customizer\Container
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-container.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Customizer Container Grouping
 *
 * @since 1.0.0
 *
 * @param object $customizer Secretum Customizer Object.
 * @param array  $defaults   Default Settings Array.
 */
class Container {

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
			'type' 		=> true,
		] );

		// Required.
		if ( empty( $args['section'] ) ) {
			wp_die( esc_html__( 'Section name is required in Container $args array.', 'secretum' ) );
		}

		// Section.
		$this->_customizer->section(
			$args['section'] . '_container',
			$this->_panels( $args['section'], $args['panel'] ),
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
				$this->_default[ $args['section'] . '_container_type' ],
				secretum_customizer_container_types()
			);
		}

		// Select.
		$this->_customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_margin_top',
			__( 'Margin - Top', 'secretum' ),
			__( 'Spacing outside/above the container.', 'secretum' ),
			$this->_default[ $args['section'] . '_container_margin_top' ],
			secretum_customizer_margin_top()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_margin_bottom',
			__( 'Margin - Bottom', 'secretum' ),
			__( 'Spacing outside/below the container.', 'secretum' ),
			$this->_default[ $args['section'] . '_container_margin_bottom' ],
			secretum_customizer_margin_bottom()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_padding_y',
			__( 'Padding - Top & Bottom', 'secretum' ),
			__( 'Spacing inside the container.', 'secretum' ),
			$this->_default[ $args['section'] . '_container_padding_y' ],
			secretum_customizer_padding_top_bottom()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_padding_x',
			__( 'Padding - Left & Right', 'secretum' ),
			__( 'Spacing inside the container.', 'secretum' ),
			$this->_default[ $args['section'] . '_container_padding_x' ],
			secretum_customizer_padding_left_right()
		);

	}//end settings()


	/**
	 * Build Unfiltered Class(es) String
	 *
	 * @since 1.0.0
	 *
	 * @param string $section Section Shortname.
	 *
	 * @return string Classes.
	 */
	final public static function classes( $section ) {
		$type 			= secretum_mod( $section . '_container_type', 'attr' );
		$background 	= secretum_mod( $section . '_container_background_color', 'attr', true );
		$margin_top 	= secretum_mod( $section . '_container_margin_top', 'attr', true );
		$margin_bottom 	= secretum_mod( $section . '_container_margin_bottom', 'attr', true );
		$padding_y 		= secretum_mod( $section . '_container_padding_y', 'attr', true );
		$padding_x 		= secretum_mod( $section . '_container_padding_x', 'attr', true );
		return $type . $background . $margin_top . $margin_bottom . $padding_y . $padding_x;

	}//end classes()


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
			$title = __( 'Container', 'secretum' );
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
	final private function _panels( $section, $panel = '' ) {
		if ( empty( $panel ) ) {
			$panel = $section;
		} else {
			$panel = $panel;
		}

		return $panel;

	}//end _panels()


}//end class
