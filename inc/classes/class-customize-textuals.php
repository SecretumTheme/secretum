<?php
/**
 * Secretum Customizer Settings Interface
 *
 * @package    Secretum
 * @subpackage Core\Classes\aCustomize_Textuals
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-customize-textuals.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Customizer Textuals Grouping
 *
 * @param object $customizer Secretum Customizer Object.
 * @param array  $defaults   Default Settings Array.
 *
 * @see     functions.php
 * @example $textuals = new \Secretum\Customize_Textuals( $customizer, $defaults );
 *
 * @since 1.0.0
 */
class Customize_Textuals {
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
				'section'   => '',
				'panel'     => '',
				'title'     => '',
				'alignment' => false,
			]
		);

		// Required.
		if ( empty( $args['section'] ) ) {
			wp_die( esc_html__( 'Section name is required in Textuals $args array.', 'secretum' ) );
		}

		// Section.
		$this->customizer->section(
			$args['section'] . '_textuals',
			$this->panel( $args['section'], $args['panel'] ),
			$this->title( $args['title'] ),
			__( 'Customize fonts, text and link colors.', 'secretum' )
		);

		if ( true === $args['alignment'] ) {
			// Select.
			$this->customizer->select(
				$args['section'] . '_textuals',
				$args['section'] . '_textual_alignment',
				__( 'Text Alignment', 'secretum' ),
				'',
				$this->default[ $args['section'] . '_textual_alignment' ],
				secretum_customizer_text_alignments()
			);
		}

		// Select.
		$this->customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_font_family',
			__( 'Font Family', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_textual_font_family' ],
			secretum_customizer_font_families()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_font_size',
			__( 'Font Size', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_textual_font_size' ],
			secretum_customizer_font_sizes()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_font_style',
			__( 'Font Style', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_textual_font_style' ],
			secretum_customizer_font_styles()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_text_transform',
			__( 'Text Transform', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_textual_text_transform' ],
			secretum_customizer_text_transform()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_text_color',
			__( 'Text Color', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_textual_text_color' ],
			secretum_customizer_text_colors()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_link_color',
			__( 'Link Color', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_textual_link_color' ],
			secretum_customizer_link_colors()
		);

		// Select.
		$this->customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_link_hover_color',
			__( 'Link Hover Color', 'secretum' ),
			'',
			$this->default[ $args['section'] . '_textual_link_hover_color' ],
			secretum_customizer_link_hover_colors()
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
		if ( true === empty( $title ) ) {
			$title = __( 'Typography', 'secretum' );
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
	final private function panel( $section, $panel = '' ) {
		if ( true === empty( $panel ) ) {
			$panel = $section;
		} else {
			$panel = $panel;
		}

		return $panel;

	}//end panel()


}//end class
