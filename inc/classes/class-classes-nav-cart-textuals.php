<?php
/**
 * Class Related To Theme Display Or Manipulation
 *
 * @package    Secretum
 * @subpackage Core\Classes\Classes_Nav_Cart_Textuals
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-classes-nav-cart-textuals.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Build Nav Cart Textuals Class Strings
 *
 * @example Classes_Nav_Cart_Textuals::instance()->classes( $section, $return );
 *
 * @see inc/template-classes.php
 * @see classes/class-trait-echo-return.php
 * @see inc/secretum-mod.php
 *
 * @since 1.0.0
 */
class Classes_Nav_Cart_Textuals {
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
	 * @param string $section Required Nav Cart Textuals Section Name.
	 * @param string $return  Required Valid Values: 'return' or 'echo'.
	 * @param array  $args    [ 'type' => 'icon' || 'type' => 'count' ].
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
				'type' => '',
			]
		);

		// Type Required.
		if ( true !== isset( $args['type'] ) || true === empty( $args['type'] ) ) {
			return;
		}

		// Set Type Var.
		$type = '_' . $args['type'];

		// Build Setting Name.
		$setting = 'secretum_' . $section . $type . '_nav_cart_textuals';

		// Build Nav Cart Textuals Classes.
		$classes  = '';
		$classes .= secretum_mod( $section . '_cart' . $type . '_color', 'attr', true );
		$classes .= secretum_mod( $section . '_cart' . $type . '_size', 'attr', true );

		// Echo or Return Classes.
		return $this->echo_return( $setting, $return, $classes );
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
