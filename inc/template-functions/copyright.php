<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Secretum\TemplateFunctions
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/copyright.php
 */

namespace Secretum;


/**
 * Default Copyright Statement
 */
function secretum_copyright_statement() {
	$copy = __( 'Copyright', 'secretum' );
	$year = date( 'Y', time() );
	$home = get_home_url( '/' );
	$name = get_bloginfo( 'name' );
	$text = __( 'All Rights Reserved.', 'secretum' );
	$desc = __( 'Code is Poetry | Proudly Powered by WordPress!', 'secretum' );

	echo wp_kses(
		"{$copy} {$year} &copy;<a href=\"{$home}\">{$name}</a> - {$text}<br /><small>{$desc}</small>",
		[
			'a' => [
				'href' => true,
			],
			'p' 	=> true,
			'br' 	=> true,
			'small' => true,
		]
	);

}//end secretum_copyright_statement()


/**
 * Copyright Wrapper Classes
 */
function secretum_copyright_wrapper() {
	$wrapper = \Secretum\Wrapper::classes( 'copyright' );
	$borders 	= \Secretum\Borders::classes( 'copyright_wrapper' );

	echo esc_html( $wrapper . $borders );

}//end secretum_copyright_wrapper()


/**
 * Copyright Container Classes
 */
function secretum_copyright_container() {
	//$border = secretum_mod( 'copyright_container_border_type', 'attr', true ) . secretum_mod( 'copyright_container_border_color', 'attr', true );
	$container = \Secretum\Container::classes( 'copyright' );
	$borders 	= \Secretum\Borders::classes( 'copyright_container' );

	echo esc_html( $container . $borders );

}//end secretum_copyright_container()


/**
 * Alignment
 */
function secretum_copyright_text_alignment() {
	echo esc_html( apply_filters( 'secretum_copyright_text_alignment', secretum_mod( 'copyright_text_alignment', 'attr', true ), 10, 1 ) );

}//end secretum_copyright_text_alignment()


/**
 * Copyright Text/Front Classes
 */
function secretum_copyright_textuals() {
	$textuals 	= \Secretum\Textuals::classes( 'copyright' );

	echo esc_html( $textuals );

}//end secretum_copyright_textuals()
