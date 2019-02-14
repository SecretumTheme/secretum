<?php
/**
 * The main template file
 *
 * @package    Secretum
 * @subpackage Theme\Index
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/index.php
 * @since      1.0.0
 */

namespace Secretum;

get_header();

get_template_part( 'template-parts/frontpage/body.php' );

get_footer();
