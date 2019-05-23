<?php
/**
 * Empty Front-page Body Template - Content Only
 *
 * @package    Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/frontpage/body-empty.php
 * @since      1.7.0
 */

namespace Secretum;

while ( have_posts() ) {
	the_post();
	get_template_part( 'template-parts/post/content', 'blank' );
}
