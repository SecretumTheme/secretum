<?php
/**
 * Secretum Customizer Settings Interface
 *
 * @package    Secretum
 * @subpackage Core\Classes\Customize_Container
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-customize-container.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Customizer Container Grouping
 *
 * @param object $customizer Secretum Customizer Object.
 * @param array  $defaults   Default Settings Array.
 *
 * @see     functions.php
 * @example $container = new \Secretum\Customize_Container( $customizer, $defaults );
 *
 * @since 1.0.0
 */
class Customize_Container {

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
	 * @param array $args [section (required), panel, title] Settings.
	 */
	final public function settings( array $args ) {
		// Build Args.
		$args = wp_parse_args(
			$args,
			[
				'section'     => '',
				'panel'       => '',
				'title'       => '',
				'description' => '',
				'type'        => true,
			]
		);

		// Section Description.
		$description = __( 'A container that holds other related elements, features, content, etc. for this section. (Wrapper > Container > Other Stuff)', 'secretum' );
		if ( true !== empty( $args['description'] ) ) {
			$description = $args['description'] . ' ' . $description;
		}

		// Required.
		if ( empty( $args['section'] ) ) {
			wp_die( esc_html__( 'Section name is required in Container $args array.', 'secretum' ) );
		}

		// Section.
		$this->customizer->section(
			$args['section'] . '_container',
			$this->panels( $args['section'], $args['panel'] ),
			$this->title( $args['title'] ),
			$description
		);

		if ( true === $args['type'] ) {
			// Radio.
			$this->customizer->radio(
				$args['section'] . '_container',
				$args['section'] . '_container_type',
				__( 'Container Type', 'secretum' ),
				'',
				$this->default[ $args['section'] . '_container_type' ],
				secretum_customizer_container_types()
			);
		}

		// Select.
		$this->customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_background_color',
			__( 'Background Color', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_container_background_color' ],
			secretum_customizer_background_colors()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_margin_top',
			__( 'Margin - Top', 'secretum' ),
			__( 'Spacing outside/above the container.', 'secretum' ),
			$this->default[ $args['section'] . '_container_margin_top' ],
			secretum_customizer_margin_top()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_margin_bottom',
			__( 'Margin - Bottom', 'secretum' ),
			__( 'Spacing outside/below the container.', 'secretum' ),
			$this->default[ $args['section'] . '_container_margin_bottom' ],
			secretum_customizer_margin_bottom()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_padding_y',
			__( 'Padding - Top & Bottom', 'secretum' ),
			__( 'Spacing inside the container.', 'secretum' ),
			$this->default[ $args['section'] . '_container_padding_y' ],
			secretum_customizer_padding_top_bottom()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_container',
			$args['section'] . '_container_padding_x',
			__( 'Padding - Left & Right', 'secretum' ),
			__( 'Spacing inside the container.', 'secretum' ),
			$this->default[ $args['section'] . '_container_padding_x' ],
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
	final private function title( $title = '' ) {
		if ( empty( $title ) ) {
			$title = __( 'Container', 'secretum' );
		}

		return $title;

	}//end title()


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
	final private function panels( $section, $panel = '' ) {
		if ( empty( $panel ) ) {
			$panel = $section;
		} else {
			$panel = $panel;
		}

		return $panel;

	}//end panels()

}//end class
