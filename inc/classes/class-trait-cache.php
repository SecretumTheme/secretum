<?php
/**
 * WordPress Transient API Manager Trait
 *
 * @package    Secretum
 * @subpackage Core\Classes\CacheTrait
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-trait-cache.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Set & Get Secretum Transient Cache.
 *
 * @example use CacheTrait;
 *
 * Get Cache.
 *
 * @example $this->get_cache( $setting );
 * @example $this->get_cache( 'secretum_footer_container' );
 *
 * Set Cache.
 *
 * @example $this->set_cache( $setting, $classes );
 * @example $this->set_cache( 'secretum_footer_container', 'bg-black py-3' );
 *
 * @see inc/classes/class-classes-wrappers.php
 * @see inc/classes/class-classes-containers.php
 * @see inc/classes/class-classes-textuals.php
 * @see inc/classes/class-classes-alignments.php
 *
 * @since 1.0.0
 */
trait Trait_Cache {
	/**
	 * Get Transient Cache
	 *
	 * @param string $setting Transient Setting Name.
	 *
	 * @return string
	 * @since 1.0.0
	 */
	final public function get_cache( $setting ) {
		// Ignore If Within WP Admin.
		if ( is_admin() ) {
			return;
		}

		// No Classes.
		$classes = '';

		// WordPress Get Secretum Transient.
		$classes = get_transient( $setting );

		// Empty Cache Results, Clear Cache.
		if ( true === isset( $classes ) && true === empty( $classes ) ) {
			// WordPress Delete Secretum Transient.
			delete_transient( $setting );

			// Reset Classes.
			$classes = '';
		}

		// Customizer, Clear Cache.
		if ( true === is_customize_preview() && true !== empty( $classes ) ) {
			// WordPress Delete Secretum Transient.
			delete_transient( $setting );

			// Reset Classes.
			$classes = '';
		}

		return $classes;

	}//end get_cache()


	/**
	 * Set Transient Cache
	 *
	 * @param string $setting Transient Setting Name.
	 * @param string $classes Class Names For Transient Value.
	 *
	 * @since 1.0.0
	 */
	final public function set_cache( $setting, $classes = '' ) {
		// Ignore If Within Previewer Or WP Admin.
		if ( is_customize_preview() || is_admin() ) {
			return;
		}

		// Required.
		if ( true === isset( $setting ) && true === isset( $classes ) && true !== empty( $classes ) ) {
			// WordPress Set Secretum Transient.
			set_transient( $setting, $classes, YEAR_IN_SECONDS );
		}

	}//end set_cache()

}//end class
