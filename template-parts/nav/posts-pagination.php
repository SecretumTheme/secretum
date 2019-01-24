<?php
/**
 * Template part for post navigation links
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Nav
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/nav/posts-pagination.php
 */

namespace Secretum;

// Display Pagination.
\Secretum\Pagination::instance( $wp_query );
