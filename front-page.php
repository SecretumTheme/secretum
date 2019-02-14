<?php
/**
 * The frontpage template file
 *
 * @package    Secretum
 * @subpackage Theme\Front-Page
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/front-page.php
 * @since      1.0.0
 */

namespace Secretum;

get_header();

/**
 * Hook: secretum_frontpage_before
 *
 * @since 1.0.0
 */
do_action( 'secretum_frontpage_before' );

// Frontpage Heading.
get_template_part( 'template-parts/frontpage/heading' );

// Frontpage Body.
get_template_part( 'template-parts/frontpage/body' );

// Secretum Custom Frontpage Plugin.
if ( secretum_mod( 'custom_frontpage' ) ) {
	/**
	 * Hook: secretum_frontpage
	 *
	 * @since 1.0.0
	 */
	do_action( 'secretum_frontpage' );
}

// Frontpage Map.
get_template_part( 'template-parts/frontpage/map' );

/**
 * Hook: secretum_frontpage_after
 *
 * @since 1.0.0
 */
do_action( 'secretum_frontpage_after' );

get_footer();
