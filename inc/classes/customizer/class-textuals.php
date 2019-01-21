<?php
/**
 * Secretum Customizer Settings Interface
 *
 * @package    Secretum
 * @subpackage Secretum\Customizer\Textuals
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/customizer/class-textuals.php
 */

namespace Secretum;

/**
 * Customizer Textuals Grouping
 *
 * @example \Secretum\Textuals::instance( $customizer, $default )->settings( [
 *				'panel' 	=> 'site_identity',
 *				'section' 	=> 'site_identity_title',
 *				'title' 	=> __( 'Title Textuals', 'secretum' ),
 *		 	] );
 * @example $textuals = \Secretum\Textuals::classes( 'site_identity_title' );
 */
class Textuals {
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
	 * @param array  $this->defaults Customizer Default Settings Array.
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
			wp_die( esc_html__( 'Section name is required in Textuals $args array.', 'secretum' ) );
		}

		// Section.
		$this->_customizer->section(
			$args['section'] . '_textuals',
			$this->_panel( $args['section'], $args['panel'] ),
			$this->_title( $args['title'] ),
			__( 'Customize fonts, text and link colors.', 'secretum' )
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_font_family',
			__( 'Font Family', 'secretum' ),
			'',
			$this->_default[$args['section'] . '_textual_font_family'],
			secretum_customizer_font_families()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_font_size',
			__( 'Font Size', 'secretum' ),
			'',
			$this->_default[$args['section'] . '_textual_font_size'],
			secretum_customizer_font_sizes()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_font_style',
			__( 'Font Style', 'secretum' ),
			'',
			$this->_default[$args['section'] . '_textual_font_style'],
			secretum_customizer_font_styles()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_text_transform',
			__( 'Text Transform', 'secretum' ),
			'',
			$this->_default[$args['section'] . '_textual_text_transform'],
			secretum_customizer_text_transform()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_text_color',
			__( 'Text Color', 'secretum' ),
			'',
			$this->_default[$args['section'] . '_textual_text_color'],
			secretum_customizer_text_colors()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_link_color',
			__( 'Link Color', 'secretum' ),
			'',
			$this->_default[$args['section'] . '_textual_link_color'],
			secretum_customizer_link_colors()
		);

		// Select.
		$this->_customizer->select(
			$args['section'] . '_textuals',
			$args['section'] . '_textual_link_hover_color',
			__( 'Link Hover Color', 'secretum' ),
			'',
			$this->_default[$args['section'] . '_textual_link_hover_color'],
			secretum_customizer_link_hover_colors()
		);

	}//end settings()


	/**
	 * Build Unfiltered Class(es) String
	 *
	 * @param string $section Section Shortname.
	 */
	final public static function classes( $section ) {
		$font_family 		= secretum_mod( $section . '_textual_font_family', 'attr', true );
		$font_size 			= secretum_mod( $section . '_textual_font_size', 'attr', true );
		$font_style 		= secretum_mod( $section . '_textual_font_style', 'attr', true );
		$text_color 		= secretum_mod( $section . '_textual_text_color', 'attr', true );
		$link_color 		= secretum_mod( $section . '_textual_link_color', 'attr', true );
		$link_hover_color 	= secretum_mod( $section . '_textual_link_hover_color', 'attr', true );
		$text_transform 	= secretum_mod( $section . '_textual_text_transform', 'attr', true );
		return $font_family . $font_size . $font_style . $text_color . $link_color . $link_hover_color . $text_transform;

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
			$title = __( 'Textuals', 'secretum' );
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
	 * @param array  $this->defaults Customizer Default Settings Array.
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
