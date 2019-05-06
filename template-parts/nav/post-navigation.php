<?php
/**
 * Template part for post navigation links
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/nav/post-navigation.php
 * @since      1.0.0
 */

namespace Secretum;

// Display Post Navigation If Allowed.
if ( false !== secretum_mod( 'entry_meta_post_navigation_links' ) ) {
	/**
	 * Display Post Navigation
	 *
	 * @see template-functions/post-navigation.php
	 */
	secretum_post_navigation();
}
