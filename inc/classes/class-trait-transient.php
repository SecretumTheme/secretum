<?php
/**
 * WordPress Transient API Manager Trait
 *
 * @package    Secretum
 * @subpackage Core\Classes\Trait_Transient
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-trait-transient.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Set & Get WordPress Trait_Transient.
 *
 * @example use Trait_Transient;
 *
 * Get Transient.
 *
 * @example $this->get_transient( $setting );
 * @example $this->get_transient( 'secretum_footer_container' );
 *
 * Set Transient.
 *
 * @example $this->set_transient( $setting, $classes );
 * @example $this->set_transient( 'secretum_footer_container', 'bg-black py-3' );
 *
 * @see inc/classes/class-classes-wrappers.php
 * @see inc/classes/class-classes-containers.php
 * @see inc/classes/class-classes-textuals.php
 * @see inc/classes/class-classes-alignments.php
 *
 * @since 1.0.0
 */
trait Trait_transient {
	/**
	 * Get Transient Transient
	 *
	 * @param string $setting Transient Setting Name.
	 *
	 * @return string
	 * @since 1.0.0
	 */
	final public function get_transient( $setting ) {
		// Ignore If Within WP Admin.
		if ( is_admin() ) {
			return;
		}

		// No Classes.
		$classes = '';

		// WordPress Get Secretum Transient.
		$classes = get_transient( $setting );

		// Empty Transient Results, Clear Transient.
		if ( true === isset( $classes ) && true === empty( $classes ) ) {
			// WordPress Delete Secretum Transient.
			delete_transient( $setting );

			// Reset Classes.
			$classes = '';
		}

		// Customizer, Clear Transient.
		if ( true === is_customize_preview() && true !== empty( $classes ) ) {
			// WordPress Delete Secretum Transient.
			delete_transient( $setting );

			// Reset Classes.
			$classes = '';
		}

		return $classes;

	}//end get_transient()


	/**
	 * Set Transient Transient
	 *
	 * @param string $setting Transient Setting Name.
	 * @param string $classes Class Names For Transient Value.
	 *
	 * @since 1.0.0
	 */
	final public function set_transient( $setting, $classes = '' ) {
		// Ignore If Within Previewer Or WP Admin.
		if ( is_customize_preview() || is_admin() ) {
			return;
		}

		// Required.
		if ( true === isset( $setting ) && true === isset( $classes ) && true !== empty( $classes ) ) {
			// WordPress Set Secretum Transient.
			set_transient( $setting, $classes, YEAR_IN_SECONDS );
		}

	}//end set_transient()

}//end class
