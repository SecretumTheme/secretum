<?php
/**
 * Template Name: Empty Template - Content Only
 * Template Post Type: post, page
 *
 * @package    Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/page-templates/empty-content-only.php
 * @since      1.0.0
 */

namespace Secretum;

get_header();

while ( have_posts() ) {
	the_post();
	get_template_part( 'template-parts/post/content', 'only' );
}

get_footer();
