<?php
/**
 * The frontpage template file
 *
 * @package    Secretum
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


/**
 * Frontpage Body Display
 *
 * @since 1.6.1
 */
secretum_frontpage_display();


/**
 * Hook: secretum_frontpage_after_body
 *
 * @since 1.0.0
 */
do_action( 'secretum_frontpage_after_body' );


/**
 * Hook: secretum_frontpage_after
 *
 * @since 1.0.0
 */
do_action( 'secretum_frontpage_after' );

get_footer();
