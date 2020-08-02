<?php
/**
 * Display Primary Nav Menu
 *
 * @package    Secretum
 * @subpackage Theme
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2020 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/primary-nav/navbar.php
 * @since      1.6.0
 */

namespace Secretum;

if ( false !== secretum_mod( 'primary_nav_status' ) ) {
	wp_nav_menu(
		array(
			'depth'           => 5,
			'theme_location'  => secretum_navbar_primary_nav_location(),
			'container_class' => secretum_navbar_toggler_display( 'class' ),
			'container_id'    => 'navbarNavDropdown',
			'menu_class'      => 'navbar-nav' . secretum_alignment( 'primary_nav', 'return', array( 'margin' => true ) ),
			'menu_id'         => 'main-menu',
			'divider'         => secretum_nav_item( 'primary_nav' ),
			'walker'          => new \Secretum\Navwalker(
				'primary_nav',
				secretum_nav_dropdown( 'primary_nav' ),
				secretum_textual( 'primary_nav_dropdown', 'return' )
			),
			'fallback_cb'     => '\Secretum\Navwalker::fallback',
			'echo'            => true,
		)
	);

	// Default no primary menu set, and menu status active.
	if ( false === has_nav_menu( 'secretum-navbar-primary' ) && false === has_nav_menu( 'secretum-navbar-primary-below' ) ) {
		wp_page_menu(
			array(
				'show_home'  => true,
				'include'    => 99999,
				'before'     => '<ul id="main-menu" class="navbar-nav">',
				'menu_class' => 'navbar-nav' . secretum_alignment( 'primary_nav', 'return', array( 'margin' => true ) ),
			)
		);
	}
}
