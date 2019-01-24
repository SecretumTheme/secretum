<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Site-Identity
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/site-identity.php
 */

namespace Secretum;

/**
 * Title/Desc Alignment
 */
function secretum_site_identity_alignment() {
	echo esc_html( apply_filters( 'secretum_site_identity_alignment', secretum_mod( 'site_identity_alignment', 'attr', true ), 10, 1 ) );

}//end secretum_site_identity_alignment()


/**
 * Container Classes
 *
 * @return string Classes.
 */
function secretum_site_identity_title_container() {
	$container 	= \Secretum\Container::classes( 'site_identity_title' );
	$borders 	= \Secretum\Borders::classes( 'site_identity_title_container' );

	return $container . $borders;

}//end secretum_site_identity_title_container()


/**
 * Text/Front Classes
 *
 * @return string Classes.
 */
function secretum_site_identity_title_textuals() {
	$textuals = \Secretum\Textuals::classes( 'site_identity_title' );

	return $textuals;

}//end secretum_site_identity_title_textuals()


/**
 * Container Classes
 */
function secretum_site_identity_desc_container() {
	$container 	= \Secretum\Container::classes( 'site_identity_desc' );
	$borders 	= \Secretum\Borders::classes( 'site_identity_desc_container' );

	echo esc_html( $container . $borders );

}//end secretum_site_identity_desc_container()


/**
 * Text/Front Classes
 */
function secretum_site_identity_desc_textuals() {
	$textuals = \Secretum\Textuals::classes( 'site_identity_desc' );

	echo esc_html( $textuals );

}//end secretum_site_identity_desc_textuals()
