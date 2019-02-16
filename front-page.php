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


/**
 * Hook: secretum_frontpage_before_body
 *
 * @since 1.0.0
 */
do_action( 'secretum_frontpage_before_body' );


// Display If Allowed.
if ( true !== secretum_mod( 'body_status' ) ) {
	// Frontpage Body.
	get_template_part( 'template-parts/frontpage/body' );
} elseif ( secretum_mod( 'custom_frontpage' ) ) {
	/**
	 * Secretum Custom Frontpage Active.
	 * Hook: secretum_frontpage
	 *
	 * @since 1.0.0
	 */
	do_action( 'secretum_frontpage' );
}


/**
 * Hook: secretum_frontpage_after_body
 *
 * @since 1.0.0
 */
do_action( 'secretum_frontpage_after_body' );


// Frontpage Map.
get_template_part( 'template-parts/frontpage/map' );


/**
 * Hook: secretum_frontpage_after
 *
 * @since 1.0.0
 */
do_action( 'secretum_frontpage_after' );

get_footer();
