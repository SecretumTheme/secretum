<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/frontpage.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Frontpage Body Display
 *
 * @since 1.7.0
 */
function secretum_frontpage_display() {
	if ( false !== secretum_mod( 'body_status' ) ) {
		$secretum_page_template = get_post_meta( get_the_ID(), '_wp_page_template' );

		if ( true === empty( $secretum_page_template ) || true === isset( $secretum_page_template[0] ) && 'default' === $secretum_page_template[0] ) {
			get_template_part( 'template-parts/frontpage/body' );
		}

		if ( true === isset( $secretum_page_template[0] ) && 'page-templates/empty-content-only.php' === $secretum_page_template[0] ) {
			get_template_part( 'template-parts/frontpage/body', 'empty' );
		}

		if ( true === isset( $secretum_page_template[0] ) && 'page-templates/post-page-title-off.php' === $secretum_page_template[0] ) {
			get_template_part( 'template-parts/frontpage/body', 'notitle' );
		}
	}

}//end secretum_frontpage_display()
