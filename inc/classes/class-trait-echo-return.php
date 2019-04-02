<?php
/**
 * Trait To Manage Method Returns
 *
 * @package    Secretum
 * @subpackage Core\Classes\CacheTrait
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-trait-echo-return.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Echo Or Return Results
 *
 * @example use Trait_Echo_Return;
 *
 * @example $this->echo_return( $setting, $return, $classes );
 * @example $this->echo_return( 'secretum_header_container', 'echo', 'bg-black' );
 *
 * @see inc/classes/class-classes-wrappers.php
 * @see inc/classes/class-classes-containers.php
 * @see inc/classes/class-classes-textuals.php
 * @see inc/classes/class-classes-alignments.php
 *
 * @since 1.0.0
 */
trait Trait_Echo_Return {
	/**
	 * Echo Or Return Filtered Results
	 *
	 * @param string $setting Setting, Filter, Cache Name.
	 * @param string $return  Either 'echo' Or 'return' Only.
	 * @param string $classes Bootstrap Classes.
	 *
	 * @return string
	 * @since 1.0.0
	 */
	final public function echo_return( $setting, $return, $classes = '' ) {
		$clean_setting_name = str_replace( 'secretum_', '', $setting );

		// Classes Could Be Empty, Ignore If Empty.
		if ( true === isset( $classes ) && true === empty( $classes ) ) {
			return;
		}

		// Echo Results.
		if ( 'echo' === $return ) {
			echo esc_html( apply_filters( 'secretum_' . $clean_setting_name, $classes, 10, 1 ) );
		}

		// Return Results.
		if ( 'return' === $return ) {
			return esc_html( apply_filters( 'secretum_' . $clean_setting_name, $classes, 10, 1 ) );
		}

	}//end echo_return()

}//end class
