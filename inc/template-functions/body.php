<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Body
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/body.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Wrapper Classes
 */
function secretum_body_wrapper() {
	$wrapper = \Secretum\Wrapper::classes( 'body' );
	$borders = \Secretum\Borders::classes( 'body_wrapper' );

	echo esc_html( $wrapper . $borders );

}//end secretum_body_wrapper()


/**
 * Container Classes
 */
function secretum_body_container() {
	$container = \Secretum\Container::classes( 'body' );
	$borders = \Secretum\Borders::classes( 'body_container' );

	echo esc_html( $container . $borders );

}//end secretum_body_container()
