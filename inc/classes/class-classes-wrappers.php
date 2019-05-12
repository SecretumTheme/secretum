<?php
/**
 * Class Related To Theme Display Or Manipulation
 *
 * @package    Secretum
 * @subpackage Core\Classes\Classes_Wrappers
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-classes-wrappers.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Build Wrapper Class Strings
 *
 * @example Classes_Wrappers::instance()->classes( $section, $return, $args = [] );
 * @example Classes_Wrappers::instance()->classes( 'entry', 'return', [ 'borders' => false, 'textuals' => true ] );
 *
 * @see inc/template-classes.php
 * @see classes/class-trait-echo-return.php
 * @see inc/secretum-mod.php
 *
 * @since 1.0.0
 */
class Classes_Wrappers {
	/**
	 * Echo or Return Results.
	 *
	 * @since 1.0.0
	 */
	use Trait_Echo_Return;

	/**
	 * Instance Object
	 *
	 * @since 1.0.0
	 * @var object
	 */
	protected static $instance = null;


	/**
	 * Build Classes String For Display
	 *
	 * @param string $section Required Wrapper Section Name.
	 * @param string $return  Required Valid Values: 'return' or 'echo'.
	 * @param array  $args    [ 'borders' => true, 'textuals' => true ].
	 *
	 * @return string Class Names.
	 * @since 1.0.0
	 */
	final public function classes( $section, $return, $args = [] ) {
		// Section And Return Required.
		if ( true !== isset( $section ) || true !== isset( $return ) ) {
			return;
		}

		// Parse Args To Vars.
		$args = wp_parse_args(
			$args,
			[
				'borders'  => true,
				'textuals' => '',
			]
		);

		// Build Setting Name.
		$setting = 'secretum_' . $section . '_wrapper';

		// Build Wrapper Classes.
		$wrappers = $this->build_wrappers( $section );

		// Build Border Classes.
		$borders = $this->build_borders( $section, $args['borders'] );

		// Build Textual Classes.
		$textuals = $this->build_textuals( $section, $args['textuals'] );

		// Build New Classes String.
		$classes = $wrappers . $borders . $textuals;

		if ( 'frontpage' === $section && true === empty( $classes ) ) {
			$this->classes( 'body', $return, $args );
		}

		// Echo or Return Classes.
		return $this->echo_return( $setting, $return, $classes );
	}


	/**
	 * Build Wrapper Classes String
	 *
	 * @param string $section Required Wrapper Section Name.
	 *
	 * @return string Class Names.
	 * @since 1.0.0
	 */
	final private function build_wrappers( $section ) {
		// Clear String.
		$classes = '';

		// Build Class String With Spaces Between Classes.
		$classes .= secretum_mod( $section . '_wrapper_background_color', 'attr', true );
		$classes .= secretum_mod( $section . '_wrapper_margin_top', 'attr', true );
		$classes .= secretum_mod( $section . '_wrapper_margin_bottom', 'attr', true );
		$classes .= secretum_mod( $section . '_wrapper_padding_y', 'attr', true );
		$classes .= secretum_mod( $section . '_wrapper_padding_x', 'attr', true );

		return $classes;
	}


	/**
	 * Build Border Classes String
	 *
	 * @param string $section Required Wrapper Section Name.
	 * @param string $borders Valid Values: 'borders' or '' To Disable.
	 *
	 * @return string Class Names.
	 * @since 1.0.0
	 */
	final private function build_borders( $section, $borders ) {
		// Clear String.
		$classes = '';

		// Set Borders If Defined.
		if ( true === $borders ) {
			// Build Class String With Spaces Between Classes.
			$classes .= secretum_mod( $section . '_wrapper_border_type', 'attr', true );
			$classes .= secretum_mod( $section . '_wrapper_border_color', 'attr', true );
			$classes .= secretum_mod( $section . '_wrapper_border_radius', 'attr', true );
		}

		return $classes;
	}


	/**
	 * Build Textual Classes String
	 *
	 * @param string $section  Required Wrapper Section Name.
	 * @param string $textuals Valid Values: 'textuals' or '' To Disable.
	 *
	 * @return string Class Names.
	 * @since 1.0.0
	 */
	final private function build_textuals( $section, $textuals ) {
		// Clear String.
		$classes = '';

		// Set Textuals If Defined.
		if ( true === $textuals ) {
			// Build Class String With Spaces Between Classes.
			$classes .= secretum_mod( $section . '_textual_alignment', 'attr', true );
			$classes .= secretum_mod( $section . '_textual_font_family', 'attr', true );
			$classes .= secretum_mod( $section . '_textual_font_size', 'attr', true );
			$classes .= secretum_mod( $section . '_textual_font_style', 'attr', true );
			$classes .= secretum_mod( $section . '_textual_text_color', 'attr', true );
			$classes .= secretum_mod( $section . '_textual_link_color', 'attr', true );
			$classes .= secretum_mod( $section . '_textual_link_hover_color', 'attr', true );
			$classes .= secretum_mod( $section . '_textual_text_transform', 'attr', true );
		}

		return $classes;
	}


	/**
	 * Create Instance
	 *
	 * @since 1.0.0
	 *
	 * @return object $instance Instance Object.
	 */
	public static function instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;

	}//end instance()

}//end class
