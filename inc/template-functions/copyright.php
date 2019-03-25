<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Copyright
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/copyright.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Default Copyright Statement
 *
 * @since 1.0.0
 */
function secretum_copyright_statement() {
	$copy = __( 'Copyright', 'secretum' );
	$year = esc_html( date( 'Y', time() ) );
	$home = esc_url( get_home_url( '/' ) );
	$name = esc_html( get_bloginfo( 'name' ) );
	$text = __( 'All Rights Reserved.', 'secretum' );
	$desc = __( 'Code is Poetry | Proudly Powered by WordPress!', 'secretum' );

	// Build Statement.
	$statement = "{$copy} {$year} &copy; <a href=\"{$home}\">{$name}</a> - {$text}<br /><small>{$desc}</small>";

	echo wp_kses(
		apply_filters( 'secretum_copyright_statement', $statement, 10, 1 ),
		[
			'a'     => [
				'href' => true,
			],
			'p'     => true,
			'br'    => true,
			'small' => true,
		]
	);

}//end secretum_copyright_statement()
