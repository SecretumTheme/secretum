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
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Title/Desc Alignment
 *
 * @since 1.0.0
 */
function secretum_site_identity_alignment() {
	echo esc_html( apply_filters( 'secretum_site_identity_alignment', secretum_mod( 'site_identity_alignment', 'attr', true ), 10, 1 ) );

}//end secretum_site_identity_alignment()


/**
 * Container Classes
 *
 * @since 1.0.0
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
 * @since 1.0.0
 *
 * @return string Classes.
 */
function secretum_site_identity_title_textuals() {
	$textuals = \Secretum\Textuals::classes( 'site_identity_title' );

	return $textuals;

}//end secretum_site_identity_title_textuals()


/**
 * Container Classes
 *
 * @since 1.0.0
 */
function secretum_site_identity_desc_container() {
	$container 	= \Secretum\Container::classes( 'site_identity_desc' );
	$borders 	= \Secretum\Borders::classes( 'site_identity_desc_container' );

	echo esc_html( $container . $borders );

}//end secretum_site_identity_desc_container()


/**
 * Text/Front Classes
 *
 * @since 1.0.0
 */
function secretum_site_identity_desc_textuals() {
	$textuals = \Secretum\Textuals::classes( 'site_identity_desc' );

	echo esc_html( $textuals );

}//end secretum_site_identity_desc_textuals()
