<?php
/**
 * Manager Class
 *
 * @package    WordPress
 * @subpackage Theme
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-secretum.php
 * @since      1.8.0
 */

namespace Secretum;

/**
 * Run Theme
 *
 * @since 1.8.0
 */
final class Secretum {
	/**
	 * Init Class
	 *
	 * @since 1.8.0
	 */
	public static function init() {
		/*
		 * Determines whether the current request is for an administrative interface page.
		 * https://developer.wordpress.org/reference/functions/is_admin/
		 */
		if ( true === is_admin() ) {
			// Maybe Upgrade Theme.
			$upgrade = new \Secretum\Theme_Upgrade();
		}

		$breadcrumbs_display_location = secretum_mod( 'breadcrumbs_display_location', 'attr' );

		if ( 'after_header' === $breadcrumbs_display_location ) {
			add_action( 'secretum_after_header', 'Secretum\secretum_breadcrumb' );

		} elseif ( 'before_post_content' === $breadcrumbs_display_location ) {
			add_action( 'secretum_before_post_content', 'Secretum\secretum_breadcrumb' );
			add_action( 'secretum_before_page_content', 'Secretum\secretum_breadcrumb' );

		} elseif ( '' === $breadcrumbs_display_location ) {
			add_action( 'secretum_after_header', 'Secretum\secretum_breadcrumb' );

		}
	}//end init()
}//end class
