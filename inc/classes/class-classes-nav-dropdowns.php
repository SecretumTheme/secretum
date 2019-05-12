<?php
/**
 * Class Related To Theme Display Or Manipulation
 *
 * @package    Secretum
 * @subpackage Core\Classes\Classes_Nav_Dropdowns
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-classes-nav-dropdowns.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Build Nav Dropdowns Class Strings
 *
 * @example Classes_Nav_Dropdowns::instance()->classes( $section, $return );
 *
 * @see inc/template-classes.php
 * @see classes/class-trait-echo-return.php
 * @see inc/secretum-mod.php
 *
 * @since 1.0.0
 */
class Classes_Nav_Dropdowns {
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
	 * @param string $section Required Nav Dropdowns Section Name.
	 * @param string $return  Required Valid Values: 'return' or 'echo'.
	 *
	 * @return string Class Names.
	 * @since 1.0.0
	 */
	final public function classes( $section, $return ) {
		// Section And Return Required.
		if ( true !== isset( $section ) || true !== isset( $return ) ) {
			return;
		}

		// Build Setting Name.
		$setting = 'secretum_' . $section . '_dropdown';

		// Build Nav Dropdowns Classes.
		$classes  = '';
		$classes .= secretum_mod( $section . '_dropdown_background_color', 'attr', true );
		$classes .= secretum_mod( $section . '_dropdown_background_hover_color', 'attr', true );
		$classes .= secretum_mod( $section . '_dropdown_margin_y', 'attr', true );
		$classes .= secretum_mod( $section . '_dropdown_margin_x', 'attr', true );
		$classes .= secretum_mod( $section . '_dropdown_padding_y', 'attr', true );
		$classes .= secretum_mod( $section . '_dropdown_padding_x', 'attr', true );
		$classes .= secretum_mod( $section . '_dropdown_border_type', 'attr', true );
		$classes .= secretum_mod( $section . '_dropdown_border_color', 'attr', true );
		$classes .= secretum_mod( $section . '_dropdown_border_radius', 'attr', true );

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
