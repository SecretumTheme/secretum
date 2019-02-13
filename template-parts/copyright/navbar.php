<?php
/**
 * Copyright Navbar
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Copyright
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/copyright/navbar.php
 * @since      1.0.0
 */

namespace Secretum;

// If Nav Menu Has Items.
if ( true === has_nav_menu( 'secretum-navbar-copyright' ) && true !== secretum_mod( 'copyright_nav_status' ) ) {
	echo '<div class="col-md">';
	echo '<nav class="navbar navbar-expand' . secretum_wrapper( 'copyright_nav', 'return', [ 'textuals' => true ] ) . '">';

	wp_nav_menu( [
		'depth' 			=> 0,
		'theme_location' 	=> 'secretum-navbar-copyright',
		'container_class' 	=> 'navbar-nav w-100',
		'container_id' 		=> 'navCopyright',
		'menu_class' 		=> 'navbar-nav primary-copyright' . secretum_alignment( 'copyright_nav', 'return', [ 'margin' => true, 'text' => 'items' ] ),
		'menu_id' 			=> 'navbarNavCopyright',
		'divider'			=> secretum_nav_item( 'copyright_nav' ),
		'walker' 			=> new \Secretum\Navwalker(),
		'fallback_cb'       => false,
		'echo'				=> true,
	] );

	echo '</nav><!-- .navbar -->';
	echo '</div><!-- .col-md -->';
}
