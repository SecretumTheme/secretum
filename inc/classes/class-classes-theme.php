<?php
/**
 * Class Related To Theme Display Or Manipulation
 *
 * @package    Secretum
 * @subpackage Core\Classes\Classes_Theme
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-classes-theme.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Build Theme Class Strings
 *
 * @example Classes_Theme::instance()->classes( $return, $args = [] );
 * @example Classes_Theme::instance()->classes( 'return', [ 'bg' => true, 'textuals' => true, 'fonts' => true ] );
 *
 * @see inc/template-classes.php
 * @see classes/class-trait-echo-return.php
 * @see inc/secretum-mod.php
 *
 * @since 1.0.0
 */
class Classes_Theme {
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
	 * @param string $return  Required Valid Values: 'return' or 'echo'.
	 * @param array  $args    [ 'bg' => true, 'textuals' => true, 'fonts' => true ].
	 *
	 * @return string Class Names.
	 * @since 1.0.0
	 */
	final public function classes( $return, $args = [] ) {
		// Return Required.
		if ( true !== isset( $return ) ) {
			return;
		}

		// Parse Args To Vars.
		$args = wp_parse_args(
			$args,
			[
				'bg_colors' => '',
				'textuals'  => '',
				'text_link' => '',
			]
		);

		// Default Setting Name.
		$setting = 'secretum_theme';

		if ( true === $args['bg_colors'] ) {
			$setting = 'secretum_theme_background_colors';
		}

		if ( true === $args['textuals'] ) {
			$setting = 'secretum_theme_textuals';
		}

		if ( true === $args['text_link'] ) {
			$setting = 'secretum_theme_text_link';
		}

		$classes = '';

		// Build Theme Classes.
		$classes .= $this->build_background_colors( $args['bg_colors'] );

		// Build Textual Classes.
		$classes .= $this->build_text_link( $args['textuals'] );

		// Build Text/Link Classes.
		$classes .= $this->build_textuals( $args['text_link'] );

		// Echo or Return Classes.
		return $this->echo_return( $setting, $return, $classes );
	}


	/**
	 * Build Theme Background Color Classes String
	 *
	 * @param bool $display_status True Builds The Classes String.
	 *
	 * @return string Class Names.
	 * @since 1.0.0
	 */
	final private function build_background_colors( $display_status ) {
		// Ignore If Not Being Called.
		if ( true === empty( $display_status ) || true !== $display_status ) {
			return;
		}

		// Clear String.
		$classes = '';

		// Build Class String With Spaces Between Classes.
		$classes .= secretum_mod( 'theme_background_color', 'attr', true );

		return $classes;
	}


	/**
	 * Build Text/Link Classes String
	 *
	 * @param bool $display_status True Builds The Classes String.
	 *
	 * @return string Class Names.
	 * @since 1.0.0
	 */
	final private function build_text_link( $display_status ) {
		// Ignore If Not Being Called.
		if ( true === empty( $display_status ) || true !== $display_status ) {
			return;
		}

		// Clear String.
		$classes = '';

		// Build Class String With Spaces Between Classes.
		$classes .= secretum_mod( 'theme_text_color', 'attr', true );
		$classes .= secretum_mod( 'theme_link_color', 'attr', true );
		$classes .= secretum_mod( 'theme_link_hover_color', 'attr', true );

		return $classes;
	}


	/**
	 * Build Textual Classes String
	 *
	 * @param bool $display_status True Builds The Classes String.
	 *
	 * @return string Class Names.
	 * @since 1.0.0
	 */
	final private function build_textuals( $display_status ) {
		// Ignore If Not Being Called.
		if ( true === empty( $display_status ) || true !== $display_status ) {
			return;
		}

		// Clear String.
		$classes = '';

		// Build Class String With Spaces Between Classes.
		$classes .= secretum_mod( 'theme_textual_alignment', 'attr', true );
		$classes .= secretum_mod( 'theme_textual_font_family', 'attr', true );
		$classes .= secretum_mod( 'theme_textual_font_size', 'attr', true );
		$classes .= secretum_mod( 'theme_textual_font_style', 'attr', true );
		$classes .= secretum_mod( 'theme_textual_text_color', 'attr', true );
		$classes .= secretum_mod( 'theme_textual_link_color', 'attr', true );
		$classes .= secretum_mod( 'theme_textual_link_hover_color', 'attr', true );
		$classes .= secretum_mod( 'theme_textual_text_transform', 'attr', true );

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
