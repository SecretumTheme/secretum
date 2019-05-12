<?php
/**
 * Class Related To Theme Display Or Manipulation
 *
 * @package    Secretum
 * @subpackage Core\Classes\Classes_Alignments
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-classes-alignments.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Build Textuals Class Strings
 *
 * @example Classes_Alignments::instance()->classes( $section, $return, $args = [] );
 * @example Classes_Alignments::instance()->classes( 'header_top', 'return', [ 'margin' => true, 'text' => true || 'text' => 'sub-section' ] );
 *
 * @see inc/template-classes.php
 * @see classes/class-trait-echo-return.php
 * @see inc/secretum-mod.php
 *
 * @since 1.0.0
 */
class Classes_Alignments {
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
	 * @param string $section Required Textuals Section Name.
	 * @param string $return  Required Valid Values: 'return' or 'echo'.
	 * @param array  $args    [ 'margin' => true, 'text' => true || 'text' => 'sub-section' ].
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
				'margin' => '',
				'text'   => '',
			]
		);

		// Either Margin Or Text Is Required.
		if ( true === empty( $args['margin'] ) && true === empty( $args['text'] ) ) {
			return;
		}

		// Build Margin Alignment Setting Var.
		if ( true !== empty( $args['margin'] ) ) {
			// Build Setting Name.
			$setting = $section . '_alignment';
		}

		// Build Text Alignment Setting Var.
		if ( true !== empty( $args['text'] ) ) {
			// Clear Var.
			$text = '';

			// Use Text As Sub-Section Name.
			if ( false === is_bool( $args['text'] ) ) {
				$text = '_' . $args['text'];
			}

			// Build Setting Name.
			$setting = $section . $text . '_text_alignment';
		}

		// Build Alignment Classes.
		$classes = secretum_mod( $setting, 'attr', true );

		// Echo or Return Classes.
		return $this->echo_return( 'secretum_' . $setting, $return, $classes );
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
