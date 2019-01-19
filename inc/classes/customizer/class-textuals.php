<?php
/**
 * Secretum Customizer Interface
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
 */
class Textuals {
	/**
	 * Display Secretum Cusomizer Section & Settings
	 *
	 * @param object $customizer WP_Customize_Manager Instance.
	 * @param array  $default Customizer Default Settings Array.
	 * @param string $section Section Shortname.
	 */
	final public static function settings( $customizer, $default, $section ) {
		// Section.
		$customizer->section(
			$section . '_textuals',
			$section,
			__( 'Textuals', 'secretum' ),
			__( 'Customize fonts, text and link colors.', 'secretum' )
		);

		// Select.
		$customizer->select(
			$section . '_textuals',
			$section . '_textual_font_family',
			__( 'Font Family', 'secretum' ),
			'',
			$default[$section . '_textual_font_family'],
			secretum_customizer_font_families()
		);

		// Select.
		$customizer->select(
			$section . '_textuals',
			$section . '_textual_font_size',
			__( 'Font Size', 'secretum' ),
			'',
			$default[$section . '_textual_font_size'],
			secretum_customizer_font_sizes()
		);

		// Select.
		$customizer->select(
			$section . '_textuals',
			$section . '_textual_font_style',
			__( 'Font Style', 'secretum' ),
			'',
			$default[$section . '_textual_font_style'],
			secretum_customizer_font_styles()
		);

		// Select.
		$customizer->select(
			$section . '_textuals',
			$section . '_textual_text_transform',
			__( 'Text Transform', 'secretum' ),
			'',
			$default[$section . '_textual_text_transform'],
			secretum_customizer_text_transform()
		);

		// Select.
		$customizer->select(
			$section . '_textuals',
			$section . '_textual_text_color',
			__( 'Text Color', 'secretum' ),
			'',
			$default[$section . '_textual_text_color'],
			secretum_customizer_text_colors()
		);

		// Select.
		$customizer->select(
			$section . '_textuals',
			$section . '_textual_link_color',
			__( 'Link Color', 'secretum' ),
			'',
			$default[$section . '_textual_link_color'],
			secretum_customizer_link_colors()
		);

		// Select.
		$customizer->select(
			$section . '_textuals',
			$section . '_textual_link_hover_color',
			__( 'Link Hover Color', 'secretum' ),
			'',
			$default[$section . '_textual_link_hover_color'],
			secretum_customizer_link_hover_colors()
		);

	}//end settings()


	/**
	 * Build Unfiltered Class(es) String
	 *
	 * @param string $section Section Shortname.
	 */
	final public static function classes( $section ) {
		$font_family = secretum_mod( $section . '_textual_font_family', 'attr', true );
		$font_size = secretum_mod( $section . '_textual_font_size', 'attr', true );
		$font_style = secretum_mod( $section . '_textual_font_style', 'attr', true );
		$text_color = secretum_mod( $section . '_textual_text_color', 'attr', true );
		$link_color = secretum_mod( $section . '_textual_link_color', 'attr', true );
		$link_hover_color = secretum_mod( $section . '_textual_link_hover_color', 'attr', true );
		$text_transform = secretum_mod( $section . '_textual_text_transform', 'attr', true );
		return $font_family . $font_size . $font_style . $text_color . $link_color . $link_hover_color . $text_transform;

	}//end classes()


}//end class
