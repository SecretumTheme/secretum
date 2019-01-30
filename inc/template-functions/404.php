<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Author
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/404.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Error 404 Page Wrapper Classes - Uses Entry Wrapper Without Columns
 *
 * @since 1.0.0
 */
function secretum_error_wrapper() {
	$wrapper = \Secretum\Wrapper::classes( 'entry' );
	$borders = \Secretum\Borders::classes( 'entry_wrapper' );

	echo esc_html( apply_filters( 'secretum_error_wrapper', $wrapper . $borders, 10, 1 ) );

}//end secretum_error_wrapper()
