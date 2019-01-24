<?php
/**
 * Template part for post navigation links
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Nav
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/nav/post-navigation.php
 */

namespace Secretum;

// Previous Text.
$previous_text = secretum_text( 'prev_text', false );

// Left Arrow Icon.
$left_icon = secretum_icon( [
	'fi' 	=> 'arrow-left',
	'fa' 	=> 'fa-angle-left',
	'echo' 	=> false,
] );

// Next Text.
$next_text = secretum_text( 'next_text', false );

// Right Arrow Icon.
$right_icon = secretum_icon( [
	'fi' 	=> 'arrow-right',
	'fa' 	=> 'fa-angle-right',
	'echo' 	=> false,
] );

// Display Post Navigation If Allowed.
if ( ! secretum_mod( 'entry_meta_post_navigation_links' ) ) {
	secretum_do_post_navigation( [
		'prev_text' => '<span class="screen-reader-text">' . $previous_text . '</span><span class="nav-title float-sm-left"><span aria-hidden="true" class="nav-subtitle">' . $left_icon . ' ' . $previous_text . '</span><br />%title</span>',
		'next_text' => '<span class="screen-reader-text">' . $next_text . '</span><span class="nav-title float-sm-right"><span aria-hidden="true" class="nav-subtitle">' . $next_text . ' ' . $right_icon . '</span><br />%title</span>',
	] );
}
